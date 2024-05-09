const number_verify = document.querySelector('input[name="get__number_verify"]');

function generateRanDomNumber() {
    var code = "";
    for($i = 0; $i < 4; $i++){
        var randomNumber = Math.floor(Math.random() * 10);
        code += randomNumber
    }
    return code
}

var code = generateRanDomNumber();
number_verify.value = code;