function Hamburger(){ 
    var botao = document.getElementById('hamburger');
    var botaoSection = document.getElementById('hamburgerSection');
    var secao = document.getElementById('section');

    secao.style.zIndex= "999";

    botao.onclick = function(){
        secao.classList.remove('hamburger-disable');
        secao.classList.add('hamburger-active');
        console.log(secao.classList);
    }
    botaoSection.onclick = function(){
        secao.classList.remove('hamburger-active');
        secao.classList.add('hamburger-disable');
    }
};

window.addEventListener('load',function(){
    Hamburger();
});