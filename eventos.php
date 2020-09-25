<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php session_start();
    
    //destroi a variavel em qualquer pagina que não for a do filme
    unset($_SESSION['lugares']);
    ?>
    <title>Eventos | Cinema GIGA</title>
    <meta charset="UTF-8">
    <meta name="author" content="Mago">
    <meta name="description" content="Sobre cinema">
    <meta name="keywords" content="TCC, Taquaritinga, informática, cinema, filme">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="#">
    <!------------Icon Hamburger Bar-------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <!-------------------------------------->

    <!---------------Esqueleto-------------->
    <link rel="stylesheet" href="grid.css">
    <link rel="stylesheet" href="fontes.css">
    <link rel="stylesheet" href="estilo-esqueleto.css">
    <link rel="stylesheet" href="wrapper-esqueleto.css">
    <script type="text/javascript" src="script-hamburguer.js"></script>
    <!-------------------------------------->

    <!-------- Link Swiper's CSS ----------->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
    <!-------------------------------------->

    <link rel="stylesheet" href="estilo-eventos.css">
    <link rel="stylesheet" href="wrapper-eventos.css">
    <script type="text/javascript" src="eventos-carousel.js"></script>
</head>
<body>
    <div id="content">
        <header>
            <div id='propaganda'>
                <nav>
                    <a id="logo" href="index.php"><img src="fontes/ticket.svg"/></a>
                    <div id="logar">
                        <!--Se estiver logado mostrar...-->
                        <?php
                        if (!isset($_SESSION['logged'])){
                           echo"
                            <a class='linkLogin' href='./login/login.html' id='login'>Login</a>
                            <a class='linkLogin' href='' id='cadastro'>Cadastro</a>";
                        }
                        else {
                            echo"
                            <div id='user'>
                                <i class='fas fa-user'></i>
                                <p>".$_SESSION['logged']."</p>
                                <div id='logout'>
                                    <i class='fas fa-sort-up'></i>                        
                                    <i class='fas fa-sign-out-alt'></i>
                                    <a href='eventos.php?logout=true'>Sair</a>
                                </div>
                            </div>";
                            //se clicar em 'SAIR'...
                            if (isset($_GET['logout'])) {
                                unset($_SESSION['logged']);
                                header('Location:eventos.php', true, 301);
                            }
                        }
                        ?>
                        <i id ='hamburger' class='fas fa-bars'></i>
                    </div>
                </nav>
            </div>
            <div id="section" class="hamburger-disable">
                <i id ="hamburgerSection" class="fas fa-bars"></i>
                <a href="index.php"><span></span><span></span><span></span><span></span> HOME</a>
               <a href="catalogo.php"><span></span><span></span><span></span><span></span> CATÁLOGO DE FILMES</a>
                <a href="contato.php"><span></span><span></span><span></span><span></span> QUEM SOMOS</a>
            </div>
        </header>
        <div id="main">

            <h1 id="titulo">EVENTOS</h1>

            <div id="carrosel">
            <section class="swiper-container loading" id="slider">
                <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(img/stephen-king.jpg)">
                    <img src="img/vingadores.jpg" class="entity-img" />
                    <div class="content">
                        <div class="textos">
                            <p data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">Especial: Stephen King</p>
                            <span data-swiper-parallax="-20%">10,11 12 de novembro</span>
                        </div>    
                    </div>
                </div>
                <div class="swiper-slide" style="background-image:url(img/privacidade-hackeada.jpg)">
                    <img src="img/vingadores.jpg" class="entity-img" />
                    <div class="content">
                        <div class="textos">
                            <p data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">Privacidade Hackeada</p>
                            <span data-swiper-parallax="-20%">23 de novembro</span>
                        </div>    
                    </div>
                </div>
                <div class="swiper-slide" style="background-image:url(img/crianca-cinema.jpg)">
                    <img src="img/vingadores.jpg" class="entity-img" />
                    <div class="content">
                        <div class="textos">
                            <p data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">Sessões Infantis</p>
                            <span data-swiper-parallax="-20%">3 de dezembro</span>
                        </div>    
                    </div>
                </div>
                </div>
                
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev swiper-button-white"></div>
                <div class="swiper-button-next swiper-button-white"></div>

            </section>

            <!--Legenda de baixo da foto-->
            <div class="swiper-container" id="legenda">
                <div class="swiper-wrapper">
                    <!--------------------------->
                    <div class="swiper-slide">
                        <div class="titulos"><h1>ESPECIAL: STEPHEN KING</h1>
                        <h2>atualizado em 02/11/2020</h2></div>
                        <ul class="data">
                            <li><h1>Data:</h1><p>10, 11 e 12 de novembro</p></li>
                            <li><h1>Horários:</h1><p>20:00 | 22:00 </p></li>
                            <li><h1>Valor:</h1><p>R$5,00</p></li>
                        </ul>
                        <p>
                            Nos dias 10, 11 e 12, haverá pelo menos 1 sessão de filmes inspirados ou baseados nas obras de Stephen King, escritor norte-americano de terror, ficção sobrenatural, suspense, ficção científica e fantasia.<br>
                            Para relembrar alguns de seus grandes clássicos do terror e suspense, o Cinema GIGA irá vender ingressos no valor de <strong>R$5,00</strong> dos filmes 
                            <strong>Carrie - A Estranha</strong>, <strong>A Janela Secreta</strong> e <strong>Cemitério Maldito</strong>.
                        </p>
                        <div class="fotos">
                            <div>
                                <h1>CARRIE - A ESTRANHA (10/11)</h1>
                                <img src="img/carrie.jpg"/>
                                <ul>
                                    <li><strong>Gênero:</strong> Suspense, Fantasia</li>
                                    <li><strong>Tempo:</strong> 1h 36min</li>
                                    <li><strong>Ano Lançamento:</strong> 2004</li>
                                    <li><strong>Sinopse:</strong></li>
                                    <li>Mort Rainey (Johnny Depp) é um escritor em crise, que acaba de se separar de sua esposa (Maria Bello) após tê-la flagrado com outro homem. Mort decide se isolar em uma cabana à beira do lago Tashmore, em busca de tranquilidade. Porém lá aparece John Shooter (John Turturro), que começa a atormentá-lo ao acusá-lo seguidamente de plágio.</li>
                                <ul>
                            </div>
                            <div>
                                <h1>A JANELA SECRETA (11/11)</h1>
                                <img src="img/janela-secreta.jpg"/>
                                <ul>
                                    <li><strong>Gênero:</strong> Terror</li>
                                    <li><strong>Tempo:</strong> 1h 40min</li>
                                    <li><strong>Ano Lançamento:</strong> 2013</li>
                                    <li><strong>Sinopse:</strong></li>
                                    <li>Carietta White (Chloë Grace Moretz) sempre foi oprimida pela sua mãe, Margaret (Julianne Moore), uma fanática religiosa. Além dos maus tratos em casa, Carrie também sofre com o abuso dos colegas de escola, que nunca compreenderam sua aparência nem seu comportamento. Ridicularizada por todos, aos poucos ela descobre que possui estranhos poderes telecinéticos, que se manifestam com força total durante sua festa de formatura.</li>
                                <ul>
                            </div>
                            <div>
                                <h1>CEMITÉRIO MALDITO (12/11)</h1>
                                <img src="img/cemiterio-maldito.jpg"/>
                                <ul>
                                    <li><strong>Gênero:</strong> Terror</li>
                                    <li><strong>Tempo:</strong> 1h 41min</li>
                                    <li><strong>Ano Lançamento:</strong> 2019</li>
                                    <li><strong>Sinopse:</strong></li>
                                    <li>A família Creed se muda para uma nova casa no interior, localizada nos arredores de um antigo cemitério amaldiçoado usado para enterrar animais de estimação - mas que já foi usado para sepultamento de indígenas. Algumas coisas estranhas começam a acontecer, transformando a vida cotidiana dos moradores em um pesadelo.</li>
                                <ul>
                            </div>
                        </div>
                    </div>
                    <!--------------------------->
                    <div class="swiper-slide">
                        <div class="titulos"><h1>PRIVACIDADE HACKEADA</h1>
                        <h2>atualizado em 02/11/2020</h2></div>
                        <ul class="data">
                            <li><h1>Data:</h1><p>23 de novembro</p></li>
                            <li><h1>Horários:</h1><p>10:00 | 03:00 </p></li>
                            <li><h1>Valor:</h1><p>Grátis</p></li>
                        </ul>
                        <p>
                        Privacidade Hackeada é um documentário de 2019 sobre os escândalos protagonizados pelo Facebook em março do ano passado, em que a Cambridge Analytica coletou os dados de 87 milhões de usuários sem que fosse permitido. Aborda o escândalo sob o ponto de vista de várias personagens, como Brittany Kaiser, ex-diretora de desenvolvimento de negócios da Cambridge Analytica, responsável por delatar tudo o que estava sendo feito pela empresa.
                        </p>
                    </div>
                    <!--------------------------->
                    <div class="swiper-slide">
                        <div class="titulos"><h1>SESSÕES INFANTIS</h1>
                        <h2>atualizado em 20/11/2020</h2></div>
                        <ul class="data">
                            <li><h1>Data:</h1><p>3 de dezembro</p></li>
                            <li><h1>Horários:</h1><p>10:00 | 03:00 </p></li>
                            <li><h1>Valor:</h1><p>R$5,00</p></li>
                        </ul>
                        <p>
                        O dia 23 de novembro será das crianças no Cinema GIGA. Todas as sessões serão dedicadas a passar grandes sucessos do cinema infanto juvenil com os ingressos no valor de <strong>R$5,00</strong>. A diversão estará garantida com os filmes:<br>
                        <strong>Toy Store 4 (14:00)</strong>, <strong>Meu Malvado Favorito 3(14:55)</strong>, <strong>Frozen 2 (14:55)</strong> e <strong>Dois Irmãos: Uma Jornada Fantástica (15:30)</strong>.
                        </p>
                        <div class="fotos">
                            <div>
                                <h1>TOY STORE 4 (14:00)</h1>
                                <img src="img/toyStore.jpg"/>
                                <ul>
                                    <li><strong>Gênero:</strong> Animação, Aventura, Família, Comédia</li>
                                    <li><strong>Tempo:</strong> 1h 40min</li>
                                    <li><strong>Ano Lançamento:</strong> 2019</li>
                                    <li><strong>Sinopse:</strong></li>
                                    <li>Agora morando na casa da pequena Bonnie, Woody apresenta aos amigos o novo brinquedo construído por ela: Forky, baseado em um garfo de verdade. O novo posto de brinquedo não o agrada nem um pouco, o que faz com que Forky fuja de casa. Decidido a trazer de volta o atual brinquedo favorito de Bonnie, Woody parte em seu encalço e, no caminho, reencontra Bo Peep, que agora vive em um parque de diversões.</li>
                                <ul>
                            </div>
                            <div>
                                <h1>MEU MALVADO FAVORITO 3 (14:55)</h1>
                                <img src="img/meuMalvadoFavorito.jpg"/>
                                <ul>
                                    <li><strong>Gênero:</strong> Aventura, Comédia</li>
                                    <li><strong>Tempo:</strong> 1h 30min</li>
                                    <li><strong>Ano Lançamento:</strong> 2017</li>
                                    <li><strong>Sinopse:</strong></li>
                                    <li>Nos anos 1980, Balthazar Bratt fazia muito sucesso através de sua série de TV, onde interpretava um vilão chamado EvilBratt. Entretanto, o tempo passou, ele cresceu, a voz mudou e a fama se foi. Com a série cancelada, Balthazar tornou-se uma pessoa vingativa que, nas décadas seguintes, planejou seu retorno triunfal como vingança. Gru e Lucy são chamados para enfrentá-lo logo em sua reaparição, mas acabam sendo demitidos por não terem conseguido capturá-lo. Gru então descobre que possui um irmão gêmeo, Dru, e parte com a família para encontrá-lo no país em que vive.</li>
                                <ul>
                            </div>
                            <div>
                                <h1>FROZEN 2 (14:55)</h1>
                                <img src="img/frozen2.jpg"/>
                                <ul>
                                    <li><strong>Gênero:</strong> Animação, Musical</li>
                                    <li><strong>Tempo:</strong> 1h 44min</li>
                                    <li><strong>Ano Lançamento:</strong> 2020</li>
                                    <li><strong>Sinopse:</strong></li>
                                    <li>Na trama de Frozen 2, de volta à infância de Elsa e Anna, as duas irmãs descobrem uma história do pai, quando ainda era príncipe de Arendelle. Ele conta às meninas a história de uma visita à floresta dos elementos, onde um acontecimento inesperado teria provocado a separação dos habitantes da cidade com os quatro elementos fundamentais: ar, fogo, terra e água. Esta revelação ajudará Elsa a compreender a origem de seus poderes.</li>
                                <ul>
                            </div>
                            <div>
                                <h1>DOIS IRMÃOS: UMA JORNADA FANTÁSTICA (15:30)</h1>
                                <img src="img/onward.jpg"/>
                                <ul>
                                    <li><strong>Gênero:</strong> Animação, Fantasia</li>
                                    <li><strong>Tempo:</strong> 1h 42min</li>
                                    <li><strong>Ano Lançamento:</strong> 2020</li>
                                    <li><strong>Sinopse:</strong></li>
                                    <li>Em um local onde as coisas fantásticas parecem ficar cada vez mais distantes de tudo, dois irmãos elfos adolescentes embarcam em uma extraordinária jornada para tentar redescobrir a magia do mundo ao seu redor.</li>
                                <ul>
                            </div>
                        </div>
                    </div>
                    <!--------------------------->
                </div>
            </div>

        </div>
        <footer>
            <ul id="col-1">
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <p>Rua Francisco Valzacchi, 51</p>
                        <p>Vila Rosa</p>
                        <p>Taquaritinga | SP</p>
                    </div>
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <p>+55 16 0000-0000</p>
                </li>
                <li>
                    <i class="fas fa-envelope"></i>
                    <p>cinemaGIGA@hotmail.com</p>
                </li>
            </ul>
            <div id="col-2">
                <div id="empresa">
                    <img src="fontes/ticket.svg"/>
                    <h2>Cinema GIGA</h2>
                </div>

                <div id="followUs">
                    <h2>Siga-nos:</h2>
                    <div>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Swiper JS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js'></script>
    <script type="text/javascript" src="eventos-carousel.js"></script>
</body>
</html>