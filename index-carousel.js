function openDay(e,day) {
    let diaslinks=document.getElementsByClassName("tablinks");
    let diascontent=document.getElementsByClassName("tabcontent");

    //desaparece com todos os contents e remove todos os actives
    for (i = 0; i < diascontent.length; i++) {
        diascontent[i].style.display = "none";
        diaslinks[i].classList.remove("active");
    }

    //deixa apenas o clicado como block
    day.style.display= "block";

    //adiciona a classe active para qual foi clicado
    e.currentTarget.className+= " active";
}

function eventos(){
    var diaslinks=document.getElementsByClassName("tablinks");
    var diascontent=document.getElementsByClassName("tabcontent");


    //desaparece com todos os contents menos o 1º
    for (i = 1; i < diascontent.length; i++) {
        diascontent[i].style.display = "none";
    }

    if (diaslinks[0].classList.contains("disabled")) {
        DisabledLink(diaslinks[0]);
    }
    else{
        diaslinks[0].addEventListener("click",function(){        
            openDay(event,diascontent[0]);
        });
    }    
    /*-------------------------*/
    if (diaslinks[1].classList.contains("disabled")) {
        DisabledLink(diaslinks[1]);
    }
    else{
        diaslinks[1].addEventListener("click",function(){        
            openDay(event,diascontent[1]);
        });
    }
    /*-------------------------*/
    if (diaslinks[2].classList.contains("disabled")) {
        DisabledLink(diaslinks[2]);
    }
    else{
        diaslinks[2].addEventListener("click",function(){        
            openDay(event,diascontent[2]);
        });
    }
    /*-------------------------*/
    if (diaslinks[3].classList.contains("disabled")) {
        DisabledLink(diaslinks[3]);
    }
    else{
        diaslinks[3].addEventListener("click",function(){        
            openDay(event,diascontent[3]);
        });
    }
    /*-------------------------*/
    if (diaslinks[4].classList.contains("disabled")) {
        DisabledLink(diaslinks[4]);
    }
    else{
        diaslinks[4].addEventListener("click",function(){        
            openDay(event,diascontent[4]);
        });
    }
    /*-------------------------*/
    if (diaslinks[5].classList.contains("disabled")) {
        DisabledLink(diaslinks[5]);
    }
    else{
        diaslinks[5].addEventListener("click",function(){        
            openDay(event,diascontent[5]);
        });
    }
    /*-------------------------*/
    if (diaslinks[6].classList.contains("disabled")) {
        DisabledLink(diaslinks[6]);
    }
    else{
        diaslinks[6].addEventListener("click",function(){        
            openDay(event,diascontent[6]);
        });
    }
}
function DisabledLink(link){
        link.style.color= '#808080';
        link.style.cursor = 'default';
        link.style.backgroundColor = '#c7c6c6';
        link.style.border = "none";
}

window.addEventListener("load", function(){
    eventos();
});