<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php session_start();
    
    //destroi a variavel em qualquer pagina que não for a do filme
    unset($_SESSION['lugares']);
    ?>
    <title>Home | Cinema GIGA</title>
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
    
    <link rel="stylesheet" href="estilo-Index.css">
    <link rel="stylesheet" href="wrapper-index.css">
    <script type="text/javascript" src="index-carousel.js"></script>
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
                                    <a href='index.php?logout=true'>Sair</a>
                                </div>
                            </div>";
                            //se clicar em 'SAIR'...
                            if (isset($_GET['logout'])) {
                                unset($_SESSION['logged']);
                                header('Location:index.php', true, 301);
                            }
                        }
                        ?>
                        <i id ='hamburger' class='fas fa-bars'></i>
                    </div>
                </nav>
            </div>
            <div id="section" class="hamburger-disable">
                <i id ="hamburgerSection" class="fas fa-bars"></i>
                <a href="eventos.php"><span></span><span></span><span></span><span></span> EVENTOS</a>
               <a href="catalogo.php"><span></span><span></span><span></span><span></span> CATÁLOGO DE FILMES</a>
                <a href="contato.php"><span></span><span></span><span></span><span></span> QUEM SOMOS</a>
            </div>
        </header>
        <div id="main">
            <div id="mini-propaganda">
                <ul>
                    <li></li>
                    <li></li>
                    <li>
                        <img src="img/logo-propaganda.png" alt="propaganda"/>
                        <p>INGRESSOS APENAS <br><span>10 REAIS!</span></p>
                    </li>
                </ul>
            </div>

            <div id="carousel-1">
            <h1 id="tit-carousel1">EM CARTAZ</h1>
            <div id="filho-carousel1">
                <div class="tab">
                <div class="tablinks active">SEGUNDA</div>
                <div class="tablinks disabled">TERÇA</div>
                <div class="tablinks">QUARTA</div>
                <div class="tablinks disabled">QUINTA</div>
                <div class="tablinks">SEXTA</div>
                <div class="tablinks">SÁBADO</div>
                <div class="tablinks">DOMINGO</div>
                </div>
                <div id="segunda" class="tabcontent">
                <!-- Swiper -->
                <div class="swiper-container carouselTab">
                    <div class="swiper-wrapper">
                    <a href="./filmes/viuva-negra.php" class="swiper-slide" style="background-image: url(img/viuvanegra.jpg);"><span>19:00</span></a>
                    <a href="./filmes/lugar-silencioso.php" class="swiper-slide" style="background-image: url(img/um-lugar-silencioso.jpg);"><span>21:10</span></a>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next swiper-button-white"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                </div>
                </div>
                
                <div id="terca" class="tabcontent">
                    <!-- Swiper -->
                    <div class="swiper-container carouselTab">
                        <div class="swiper-wrapper">
                        
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next swiper-button-white"></div>
                        <div class="swiper-button-prev swiper-button-white"></div>
                    </div>
                </div>
                
                <div id="quarta" class="tabcontent">
                    <!-- Swiper -->
                    <div class="swiper-container carouselTab">
                        <div class="swiper-wrapper">
                        <a href="./filmes/mulan.php" class="swiper-slide" style="background-image: url(img/mulan.jpg);background-position: right;"><span>16:00</span></a>
                        <a href="./filmes/viuva-negra.php" class="swiper-slide" style="background-image: url(img/viuvanegra.jpg);"><span>19:10</span></a>
                        <a href="./filmes/mulan.php" class="swiper-slide" style="background-image: url(img/mulan.jpg);background-position: right;"><span>21:20</span></a>
                        <a href="./filmes/the-batman.php" class="swiper-slide" style="background-image: url(img/the-batman.jpg);"><span>22:30</span></a>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next swiper-button-white"></div>
                        <div class="swiper-button-prev swiper-button-white"></div>
                    </div>
                </div>

                <div id="quinta" class="tabcontent">
                    <!-- Swiper -->
                    <div class="swiper-container carouselTab">
                        <div class="swiper-wrapper">
                        
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next swiper-button-white"></div>
                        <div class="swiper-button-prev swiper-button-white"></div>
                    </div>
                </div>

                <div id="sexta" class="tabcontent">
                    <!-- Swiper -->
                    <div class="swiper-container carouselTab">
                        <div class="swiper-wrapper">
                        <a href="./filmes/soul.php" class="swiper-slide" style="background-image: url(img/soul.png);background-position: right;"><span>18:00</span></a>
                        <a href="./filmes/the-batman.php" class="swiper-slide" style="background-image: url(img/the-batman.jpg);"><span>21:00</span></a>
                        <a href="./filmes/soul.php" class="swiper-slide" style="background-image: url(img/soul.png);background-position: right;"><span>21:50</span></a>
                        <a href="./filmes/viuva-negra.php" class="swiper-slide" style="background-image: url(img/viuvanegra.jpg);"><span>22:10</span></a>
                        <a href="./filmes/lugar-silencioso.php" class="swiper-slide" style="background-image: url(img/um-lugar-silencioso.jpg);"><span>23:30</span></a>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next swiper-button-white"></div>
                        <div class="swiper-button-prev swiper-button-white"></div>
                    </div>
                </div>

                <div id="sabado" class="tabcontent">
                    <!-- Swiper -->
                    <div class="swiper-container carouselTab">
                        <div class="swiper-wrapper">
                        <a href="./filmes/mulan.php" class="swiper-slide" style="background-image: url(img/mulan.jpg);background-position: right;"><span>16:00</span></a>
                        <a href="./filmes/soul.php" class="swiper-slide" style="background-image: url(img/soul.png);background-position: right;"><span>17:20</span></a>
                        <a href="./filmes/the-batman.php" class="swiper-slide" style="background-image: url(img/the-batman.jpg);"><span>19:00</span></a>
                        <a href="./filmes/soul.php" class="swiper-slide" style="background-image: url(img/soul.png);background-position: right;"><span>20:10</span></a>
                        <a href="./filmes/mulan.php" class="swiper-slide" style="background-image: url(img/mulan.jpg);background-position: right;"><span>21:20</span></a>
                        <a href="./filmes/viuva-negra.php" class="swiper-slide" style="background-image: url(img/viuvanegra.jpg);"><span>22:30</span></a>
                        <a href="./filmes/lugar-silencioso.php" class="swiper-slide" style="background-image: url(img/um-lugar-silencioso.jpg);"><span>23:30</span></a>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next swiper-button-white"></div>
                        <div class="swiper-button-prev swiper-button-white"></div>
                    </div>
                </div>

                <div id="domingo" class="tabcontent">
                    <!-- Swiper -->
                    <div class="swiper-container carouselTab">
                        <div class="swiper-wrapper">
                        <a href="./filmes/viuva-negra.php" class="swiper-slide" style="background-image: url(img/viuvanegra.jpg);"><span>16:00</span></a>
                        <a href="./filmes/soul.php" class="swiper-slide" style="background-image: url(img/soul.png);background-position: right;"><span>18:00</span></a>
                        <a href="./filmes/the-batman.php" class="swiper-slide" style="background-image: url(img/the-batman.jpg);"><span>21:00</span></a>
                        <a href="./filmes/mulan.php" class="swiper-slide" style="background-image: url(img/mulan.jpg);background-position: right;"><span>22:20</span></a>
                        <a href="./filmes/lugar-silencioso.php" class="swiper-slide" style="background-image: url(img/um-lugar-silencioso.jpg);"><span>23:30</span></a>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next swiper-button-white"></div>
                        <div class="swiper-button-prev swiper-button-white"></div>
                    </div>
                    </div>
            </div>
            </div>

            <div id="eventos">
                <div id="centro">
                    <div id="titEventos">
                    <h1>EVENTOS</h1><h2>atualizado em 20/11/2020</h2>
                    </div>
                    <!-- Swiper -->
                    <div class="swiper-container" id="carousel-2">
                    <div class="swiper-wrapper">
                        <a href="eventos.php" class="swiper-slide" style='background-image: url(img/privacidade-hackeada.jpg);'><span class="two">Grátis</span><span class="one">Privacidade Hackeada</span></a>
                        <a href="eventos.php" class="swiper-slide" style='background-image: url(img/stephen-king.jpg);'><span class="one">Especial: Stephen King</span></a>
                        <a href="eventos.php" class="swiper-slide" style='background-image: url(img/crianca-cinema.jpg);'><span class="one">Sessões Infantis</span></a>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next swiper-button-white"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                    </div>
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

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.carouselTab', {
        slidesPerView: 'auto',//deixa a imagem certinha no quadrado, pq?, não sei
        spaceBetween: 0,
        loop: true,
        navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        },
    });
    </script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('#carousel-2', {
        slidesPerView: 2,
        spaceBetween: 10,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        });
    </script>  
</body>
</html>