function requisicao(){
    //os names das cadeiras
    var cadeiras = document.getElementsByName("lugares[]");
    //o botão
    var bnt=document.getElementById('myBtn');

    //cria a instância
    var ajax = new XMLHttpRequest();

    //verifica se a solicitação foi enviada, coloco apenas Status pq se não
    //ele testa mais de 1 vez os States, fazendo aparecer o alert
    ajax.onreadystatechange= function(){
        if(ajax.status===200){
            if(ajax.readyState===4){
                console.log('OK! Enviado solicitação');
            }
        }
        else{
            console.error('Error 404 Page Not Found!');
        }
    }    

    bnt.addEventListener('click',function(event){
        //previne que o botão recarregue a página
        event.preventDefault();

        /*verifica quais cadeiras foram checadas, se foram checadas, armazena na
        variável formdata*/
        var formdata= new FormData();
        for (i=0; i< cadeiras.length; i++){
            if (cadeiras[i].checked == true){
            // adiciona ao array o valor do input, ex: A1
            formdata.append("lugares[]", cadeiras[i].value);
            }
        }

        //especifica o método da requisição e para onde enviar
        ajax.open('POST','assentos-ajax.php');

        //envia a requisição
        ajax.send(formdata);
        /*formdata.delete("lugares[]");*/

        //onload quer dizer "quando carregar faça..."
        //em onload ira transformar o obj em JSON
        ajax.onload = function(){
            //transforma em JSON
            let respostaAjax = null;
            try {
                respostaAjax = JSON.parse(ajax.responseText);
            } catch (e) {
                console.error('Não conseguiu converter em JSON');
            };
            
            if (respostaAjax) {
                MostrarEscolhas(respostaAjax);
                Enviar(respostaAjax);
            }
        };
    });
};

//Se estiver tudo ok, mostra as cadeiras
function MostrarEscolhas(obj){
    var tabela = document.getElementById('table');
    var tabela_enviar = document.getElementById('table-enviar');
    var close = document.getElementById('close');
    var mensagens = document.getElementById('mensagens');

    tabela.style.visibility = 'hidden';
    tabela_enviar.style.visibility = 'visible';

    //apaga as mensagens antigas
    while (mensagens.firstChild){
        mensagens.removeChild(mensagens.firstChild);
    }
    
    //mostra as mensagens
    var p1 = document.createElement('p');
    var p2 = document.createElement('p');
    var p3 = document.createElement('p');
    p1.textContent ='Assentos escolhidos:';
    p2.textContent =`${obj.join(' - ')}`;
    p3.textContent ='Deseja enviar?';
    mensagens.append(p1, p2, p3);

    close.onclick = function(){
        tabela_enviar.style.visibility = 'hidden';
        tabela.style.visibility = 'visible';
    }
};
    
function Enviar(obj){
    //o botão enviar
    var bnt_enviar=document.getElementById('myBtn-enviar');

    bnt_enviar.onclick = function(e){
        var envio= new XMLHttpRequest();

        //converte em string o obj array
        let lugares = JSON.stringify(obj);             
        envio.open('POST','assentos-session.php');
        //dizemos que vamos enviar um arquivo json, a variável "lugares"
        envio.setRequestHeader("Content-Type", "application/json");
        //envia a requisição
        envio.send(lugares);

        envio.onreadystatechange= function(){
            if(envio.status===200){
                if(envio.readyState===4){
                    console.log('OK! Enviado solicitação');
                }
            }
            else{
                console.error('Error 404 Page Not Found!');
            }
        }                                
        /*e.preventDefault();
        console.log(obj);*/          
    };
};

function reseteAjax(){
    var fechar = document.getElementById('fechar');
    var filtro = document.getElementById('filtro');
    var cadeiras = document.getElementsByName("lugares[]");

    fechar.addEventListener('click',function(){
        for (i=0; i<cadeiras.length; i++){
            if(cadeiras[i].checked == true){
                cadeiras[i].checked = 0;
            }
        }
    });
    
    filtro.addEventListener('click',function(){
        for (i=0; i<cadeiras.length; i++){
            if(cadeiras[i].checked == true){
                cadeiras[i].checked = 0;
            }
        }
    });
};

window.addEventListener('load', function(){
    requisicao();
    reseteAjax();
});