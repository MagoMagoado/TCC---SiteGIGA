function boleto(){
    var bnt = document.getElementById('bnt');
    var filtro = document.getElementById('filtro');
    var boleto = document.getElementById('boleto');
    var fechar = document.getElementById('fechar');

    bnt.onclick = function(){
        filtro.style.display = 'block';
        boleto.style.display = 'block';
    }
    fechar.onclick = function(){
        filtro.style.display = 'none';
        boleto.style.display = 'none';
    }
    filtro.onclick = function(){
        filtro.style.display = 'none';
        boleto.style.display = 'none';
    }
}
window.addEventListener('load',boleto);