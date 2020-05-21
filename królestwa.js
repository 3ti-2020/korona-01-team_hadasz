const a = document.querySelector(".a");
const b = document.querySelector(".b");
const c = document.querySelector(".c");
const d = document.querySelector(".d");



d.addEventListener("click", function(){

   
        if(d.className == "item d"){
            d.className = "d2"
        }

        else{
            d.className = "item d"
        }

       
    
})

b.addEventListener("click", function(){

   
    if(b.className == "item b"){
        b.className = "b2"
    }

    else{
        b.className = "item b"
    }



})

c.addEventListener("click", function(){

   
    

    if(c.className == "item c"){
        c.className = "c2"
    }

    else{
        c.className = "item c"
    }


})


