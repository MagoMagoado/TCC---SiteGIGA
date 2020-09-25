//quando clicar no "x"
function ClickFecharFiltro(){
    var fechar = document.getElementById('fechar');
    var filtro = document.getElementById('filtro');

        ResetarCadeiras(fechar, filtro);
        ResetarBntTabela(fechar, filtro);
}

function ResetarCadeiras(fechar, filtro){
    var label = document.getElementsByClassName('a');

    for(let i=0; i<label.length;i++){        
        const cadeira1 = label[i].children[0];
        const cadeira2 = label[i].children[1];

        fechar.addEventListener('click', function(){
            label[i].insertBefore(cadeira1, cadeira2);
        });
        filtro.addEventListener('click', function(){
            label[i].insertBefore(cadeira1, cadeira2);
        });
    }
}

function ResetarBntTabela(fechar, filtro){
    var bnt=document.getElementById('myBtn');
    var tabela = document.getElementById('table');
    var tabela_enviar = document.getElementById('table-enviar');
    
    fechar.addEventListener('click', function(){
        //desabilita o botao
        bnt.disabled = true;
        bnt.style.color= '#808080';
        bnt.style.cursor = 'default';
        bnt.style.backgroundColor = '#c7c6c6';
        bnt.style.border = '1px solid #c7c6c6';
        bnt.style.textShadow = 'none';
        
        //esconde a tabela enviar
        tabela_enviar.style.visibility = 'hidden';
        tabela.style.visibility = 'visible';
    });
    filtro.addEventListener('click', function(){
        //desabilita o botao
        bnt.disabled = true;
        bnt.style.color= '#808080';
        bnt.style.cursor = 'default';
        bnt.style.backgroundColor = '#c7c6c6';
        bnt.style.border = '1px solid #c7c6c6';
        bnt.style.textShadow = 'none';
        
        //esconde a tabela enviar
        tabela_enviar.style.visibility = 'hidden';
        tabela.style.visibility = 'visible';
    });
}
/*--------------------------------------------*/
function DancaCadeiras(){
    var label = document.getElementsByClassName('a');
    
    for(let i=0; i<label.length;i++){
        label[i].addEventListener('click', function(){
            toggleImage(label[i]);//passa a label clicada
            enableBnt();//toda vez que eu clicar no botão, atualiza função 
        });
    }
}
/*--------------------------------------------*/
function toggleImage(lbl){
    var cadeiras=lbl.children;

    //troca posição das cadeiras no DOM
    lbl.insertBefore(cadeiras[1], cadeiras[0]);
    //atualiza o objeto cadeiras para refletir a troca
    var label = document.getElementsByClassName('a');
    for(let i=0; i<label.length;i++){
        var cadeiras=label.children;//retorna as imgs
    }
}
/*--------------------------------------------*/
function enableBnt(){
    var label = document.getElementsByClassName('a');
    var bnt=document.getElementById('myBtn');//pega o botão

    for(let i=0; i<label.length;i++){
        var cadeiras=label[i].children[0];//pega as primeiras cadeiras
        
        var cor_bnt = '#c7c6c6';
        var cor_input = '#808080';
        var borda_bnt = '1px solid #c7c6c6';
        var tipo_cursor = 'default';
        var shadow_cursor = 'none';
        var result = true;
        //se 1 deles for vermelho
        if(cadeiras.getAttribute('src')=='./img/cadeiraVermelha.png'){
            var result = false;
            var tipo_cursor = 'pointer';
            var shadow_cursor = '1px 1px 2px rgb(0, 0, 0,.2)';
            var cor_input = '#000000';
            var cor_bnt = '#ffffff';
            var borda_bnt = '1px solid rgb(7, 24, 175)';

            //muda a cor do fundo ao passar o mouse
            function trocaCor(){
                bnt.style.backgroundColor='rgb(8, 7, 100)';
                var shadow_cursor = '1px 1px 2px rgb(0, 0, 0,.8)';
                bnt.style.color='#ffffff';
            };
            function voltaCor(){
                bnt.style.backgroundColor='#ffffff';
                var shadow_cursor = '1px 1px 2px rgb(0, 0, 0)';
                bnt.style.color='#000000';
            };

            break;
        }
    }
    //!IMPORTANTE! muda de acordo com o valor de result
    bnt.disabled = result;
    /*------------------------------------------------*/
    //muda o cursor se tiver alguma cadeira vermelha
    bnt.style.color=cor_input;
    bnt.style.cursor = tipo_cursor;
    //muda o fundo do botão
    bnt.style.backgroundColor = cor_bnt;
    //muda a borda do botão
    bnt.style.border = borda_bnt;
    //shadow do botao
    bnt.style.textShadow = shadow_cursor;
    //funciona como um hover
    bnt.onmouseover = function(){trocaCor()};
    bnt.onmouseout = function(){voltaCor()};
}
/*--------------------------------------------*/
function numerosFileira1(){
    var numeros= document.getElementsByClassName('primeira');
    var cont=1;
    for(let i=0; i<numeros.length;i++){
        numeros[i].dataset.content = cont++;
    }
}
/*--------------------------------------------*/
window.addEventListener('load', function(){
    DancaCadeiras();
    ClickFecharFiltro();
    /*chama a função quando carrega a página,
     mas tem que atualizar também quando é clicada*/
    enableBnt();
    numerosFileira1();
});
