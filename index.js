const button = document.querySelector(".button");
const random = document.querySelector(".random");
var losowa = ['POSTACIE', 'KRÓLESTWA', 'KAMIENIE', 'BOSSY'];

button.addEventListener('click', function(){

    random.value= losowa [Math.floor(Math.random() * losowa.length)];






    if (random.value == "POSTACIE"){
        window.location.replace("postacie.html");   
    }

    if (random.value == "KRÓLESTWA" ){
        window.location.replace("królestwa.html");   
    }

    if (random.value == "KAMIENIE" ){
        window.location.replace("kamienie.html");   
    }

    if (random.value == "BOSSY" ){
        window.location.replace("bossy.html"); 
    }
})
