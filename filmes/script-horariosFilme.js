function slideHorario(){
    var slides = document.getElementsByClassName('swiper-slide');

    for(let i=0; i<slides.length;i++){
        slides[i].addEventListener('click', function(){
            //pega o dia e o horário da sessão
            dia = slides[i].childNodes[0].textContent;
            horario = slides[i].childNodes[1].textContent;
            //chama o quadro com as cadeiras
            ShowQuadro(dia, horario);
        });
    }
}
function ShowQuadro(dia, horario, filme){
    var filtro = document.getElementById('filtro');
    var quadroAssento = document.getElementById('quadro-assentos');
    var nomeFilme = document.getElementById('titulo-filme').dataset.filme;
    var fechar = document.getElementById('fechar');

    filtro.style.display = 'block';
    quadroAssento.style.display = 'block';

    fechar.onclick = function(){
        filtro.style.display = 'none';
        quadroAssento.style.display = 'none';
    }
    filtro.onclick = function(){
        filtro.style.display = 'none';
        quadroAssento.style.display = 'none';
    }

    quadroAssento.dataset.dia = dia;
    quadroAssento.dataset.horario = horario;

    //enviar a dia e o horario para assentos-session.php
    var ajax= new XMLHttpRequest();
    var formdata= new FormData();

    formdata.append("dia", quadroAssento.dataset.dia);
    formdata.append("horario", quadroAssento.dataset.horario);
    formdata.append("filme", nomeFilme);

    ajax.open('POST','assentos-session.php');
    ajax.send(formdata);

    ajax.onreadystatechange= function(){
        if(ajax.status===200){
            if(ajax.readyState===4){
                console.log('OK! Enviado data e hora');
            }
        }
        else{
            console.error('Error 404 Page Not Found!');
        }
    }    
}

window.addEventListener('load',slideHorario);