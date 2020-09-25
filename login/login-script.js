function eventos(){
    var formulario = document.getElementById('formulario');
    var form = {
        username:document.getElementById('username'),
        password:document.getElementById('password'),
        submit:document.getElementById('bnt-submit'),
        messages:document.getElementById('form-messages')
    }

    form.submit.addEventListener('click',function(event){
        //previne que o botão recarregue a página
        event.preventDefault();

        //cria a instância
        var ajax= new XMLHttpRequest();
        //pega os dados que seram enviados, e coloca em formato formData
        var formdata= new FormData();

        /*verifica se a solicitação foi enviada, coloco apenas Status pq se não
        ele testa mais de 1 vez os Status, fazendo aparecer o alert*/
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

        //pega os dados para enviar
        formdata.append("nome", form.username.value);
        formdata.append("senha", form.password.value);
      
        //especifica o método da requisição e para onde enviar
        ajax.open('POST','ajax-login.php');

        //envia a requisição
        ajax.send(formdata);

        //onload quer dizer "quando carregar faça..."
        //em onload ira transformar o obj em JSON
        ajax.onload = function(){

            //transforma em JSON
            let respostaAjax = null;
            try {
                respostaAjax = JSON.parse(ajax.responseText);
                /*respostaAjax tem 2 itens:
                respostaAjax.ok e respostaAjax.messages*/
            } catch (e) {
                console.error('Não conseguiu converter em JSON');
            };
            if (respostaAjax) {
                VerificarDados(respostaAjax);
            }
        };

        //Se estiver tudo ok, manda pra outra página, se não, aparece as mensagens
        function VerificarDados(obj){
            if (obj.ok == true) {
                /*formulario.action = "../eventos.php";
                formulario.submit();*/
                //volta a página que estava
                window.history.back();
            }

            else {
                //enquanto tiver algum child no form.messages, ele será removido
                while (form.messages.firstChild){
                    form.messages.removeChild(form.messages.firstChild);
                }

                /*O obj.messages são minhas mensagens,
                e o 'e' é cada item do meu array, no caso, o messages*/
                obj.messages.forEach(function (e) {
                    var li = document.createElement('li');
                    li.textContent = e;
                    form.messages.appendChild(li);
                });

                form.messages.style.display = 'flex';

            }
        };
    });
};

window.addEventListener('load',eventos);