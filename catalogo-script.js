function eventos(){

    const catalogo = [
    {
        'nome': 'Viúva Negra',
        'gênero': 'Ação, Espionagem, Aventura',
        'tempo': '1h 00min',
        'indicação': '+12',
        'foto': 'url(img/viuvanegra.jpg)',
        'link':'./filmes/viuva-negra.php'
    },
    {
        'nome': 'Mulan',
        'gênero': 'Aventura, Família, Fantasia',
        'tempo': '1h 55min',
        'indicação': '+12',
        'foto': 'url(img/mulan.jpg)',
        'link':'./filmes/mulan.php'
    },
    {
        'nome': 'The Batman',
        'gênero': 'Ação, Crime',
        'tempo': '1h 00min',
        'indicação': '+14',
        'foto': 'url(img/the-batman.jpg)',
        'link':'./filmes/the-batman.php'
    },
    {
        'nome': 'Soul',
        'gênero': 'Animação, Aventura, Família',
        'tempo': '1h 30min',
        'indicação': 'Livre',
        'foto': 'url(img/soul.png)',
        'link':'./filmes/soul.php'
    },
    {
        'nome': 'Um Lugar Silencioso 2',
        'gênero': 'Suspense, Fantasia, Terror',
        'tempo': '1h 45min',
        'indicação': '+18',
        'foto': 'url(img/um-lugar-silencioso.jpg)',
        'link':'./filmes/lugar-silencioso.php'
    }
    ];

    function templateCatalogo(filme){
        return `
        <div class="card">
            <div class="filtro">
                <i class="fas fa-info-circle icon-open"></i>
                <h1>${filme.nome}</h1>
            </div>
            <div class="frente" style='background-image: ${filme.foto};'></div>
            <div class="informacoes informacoes-disable">
                <a href="${filme.link}" class="foto" style='background-image: ${filme.foto};'></a>
                <div class="titulos">
                    <i class="fas fa-arrow-alt-circle-right icon-close"></i>
                    <div class="principal">
                        <h1 class="titulo-filme">Nome:</h1><h2 class="sub-filme">${filme.nome}</h2>
                        <h1 class="titulo-filme">Gênero:</h1><h2 class="sub-filme">${filme.gênero}</h2>
                        <h1 class="titulo-filme">Tempo:</h1><h2 class="sub-filme">${filme.tempo}</h2>
                        <h1 class="titulo-filme">Indicação:</h1><h2 class="sub-filme">${filme.indicação}</h2>
                    </div>
                </div>
            </div>
        </div>
        `
    }

    document.getElementById('catalogo').innerHTML=`
    <h1 id='filmes'>FILMES DISPONÍVEIS (${catalogo.length})</h1>
    ${catalogo.map(templateCatalogo).join('')}
    `;

    //Click em informações
    var iconOpen = document.getElementsByClassName('icon-open');

    for (i=0; i < catalogo.length; i++) {
        iconOpen[i].onclick = function(e){
            let frente = e.target.parentNode; 
            let card = frente.parentNode;
            let informacoes = card.children[2];//esse que eu quero
            let titulos = informacoes.children[1];
            let iconClose = titulos.children[0];//e esse também

            informacoes.classList.remove('informacoes-disable');
            informacoes.classList.add('informacoes-active');

            iconClose.onclick = function(){
                informacoes.classList.remove('informacoes-active');
                informacoes.classList.add('informacoes-disable');
            }
        }
    }
}

window.addEventListener("load", function(){
 eventos();
});