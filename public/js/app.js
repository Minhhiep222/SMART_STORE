
$('input[name="key"]').keyup(function () {
    var keyword = $(this).val();
    const listSearch = document.querySelector('.list-search');
    listSearch.innerHTML = '';

    $.ajax({
        url: 'http://127.0.0.1:8000/ajax-search?search=' + keyword,
        type: 'GET',
        success: function (res) {
            for (var result of res) {
                const nameRegex = new RegExp('(' + keyword + ')', 'gi')
                const productName = result.product_name.replace(nameRegex, `<span class="highlight">$1</span>`);
                if(res.length < 9) {
                    // listSearch.innerHTML += `<li class="header__search-history-item history-item-link get_name" >
                    //     ${productName}
                    // </li>`;
                    listSearch.innerHTML += `<li class="list-group-item header__search-history-item history-item-link get_name" >${result.product_name}</li>`
                }
            }
            const markjs = new Mark(listSearch);
            markjs.mark(keyword);

            const get_name = document.querySelectorAll('.get_name');
            console.log(get_name)
            get_name.forEach(element => {
                element.addEventListener('click', () => {
                    const search = document.querySelector('input[name="key"]');
                    search.value = element.textContent.trim();
                    listSearch.innerHTML = '';
                })
            })
        }
    });
});