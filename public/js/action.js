let img_Main  = document.getElementById('main_img_Advertisement');
let img_Item = document.querySelectorAll('.item_img_Advertisement');
let dem=0;
let lastItem = img_Item[0];
setInterval(change,2000);  

function change(){
    dem++;
    if(dem == img_Item.length){
        dem=0
    };
    lastItem = img_Item[dem];
    img_Main.src = lastItem.src
}



 













