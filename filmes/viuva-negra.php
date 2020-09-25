<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php session_start();?>
    <title>Viúva Negra | Cinema GIGA</title>
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
    <link rel="stylesheet" href="../grid.css">
    <link rel="stylesheet" href="../fontes.css">
    <link rel="stylesheet" href="../estilo-esqueleto.css">
    <link rel="stylesheet" href="../wrapper-esqueleto.css">
    <script type="text/javascript" src="../script-hamburguer.js"></script>
    <!-------------------------------------->
    
    <!-------- Link Swiper's CSS ----------->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
    <!-------------------------------------->

    <link rel="stylesheet" href="estilo-filmes.css">
    <link rel="stylesheet" href="wrapper-filmes.css">

    <!---------------Cadeiras--------------->
    <link rel="stylesheet" href="estilo-assentos.css"/>
    <script type="text/javascript"  src="script-horariosFilme.js"></script>
    <script type="text/javascript" src="script-assentos.js"></script>
    <script type="text/javascript" src="requisicao-assentos.js"></script>
    <!-------------------------------------->
</head>
<body>
    <div id="content">
        <!------------------FILTRO------------------->
        <div id="filtro"></div>
        <!------------------------------------------->
        <header id="headerSessões">
            <div id='propaganda'>
                <nav>
                    <a id="logo" href="../index.php"><img src="../fontes/ticket.svg"/></a>
                    <div id="logar">
                        <!--Se estiver logado mostrar...-->
                        <?php
                        if (!isset($_SESSION['logged'])){
                           echo"
                            <a class='linkLogin' href='../login/login.html' id='login'>Login</a>
                            <a class='linkLogin' href='' id='cadastro'>Cadastro</a>";
                        }
                        else {
                            echo"
                            <div id='user'>
                                <i class='fas fa-user'></i>
                                <p>".$_SESSION['logged']."</p>
                                <div id='logout' style='z-index: 1000; border: 2px solid rgb(116, 108, 2,.5);'>
                                    <i class='fas fa-sort-up'></i>                        
                                    <i class='fas fa-sign-out-alt'></i>
                                    <a href='filme1.php?logout=true'>Sair</a>
                                </div>
                            </div>";
                            //se clicar em 'SAIR'...
                            if (isset($_GET['logout'])) {
                                unset($_SESSION['logged']);
                                header('Location:filme1.php', true, 301);
                            }
                        }
                        ?>
                        <i id ='hamburger' class='fas fa-bars'></i>
                    </div>
                </nav>
            </div>
            <div id="section" class="hamburger-disable">
                <i id ="hamburgerSection" class="fas fa-bars"></i>
                <a href="../index.php"><span></span><span></span><span></span><span></span> HOME</a>
                <a href="../eventos.php"><span></span><span></span><span></span><span></span> EVENTOS</a>
                <a href="../catalogo.php"><span></span><span></span><span></span><span></span> CATÁLOGO DE FILMES</a>
                <a href="../contato.php"><span></span><span></span><span></span><span></span> QUEM SOMOS</a>
            </div>
            <div id="banner" style="background-image: url(../img/viuvanegra.jpg);"></div>
        </header>
        <div id="mainFilmes">
            <!---------------------Quadro Cadeiras--------------------->
            <div id="quadro-assentos" data-dia="" data-horario="">
                <!--O autocomplete="off" faz com que os dados não
                fiquem salvos causo eu volte 1 pagina-->
                <form id="formulario" autocomplete="off">
                    <i id="fechar" class="fas fa-times"></i>
                    <h1 id="titulo">ESCOLHA OS ASSENTOS QUE DESEJA SENTAR:</h1>

                    <div id="table-enviar">
                        <i id='close' class="fas fa-undo"></i>
                        <div id='mensagens'>
                        </div>
                        <?php
                        if (isset($_SESSION['logged'])) {
                            echo "<div id='bntEnviar'><a href='../pagamento/pagamento1.php' id='myBtn-enviar'>Enviar</a></div>";
                        }
                        else{

                            echo "<div id='bntEnviar'><a href='../login/login.html' id='myBtn-enviar'>Enviar</a></div>";
                        }
                        ?>
                    </div>
                    
                    <div id="table">
                        <div class="linha">
                        <p class="tit-linha">A</p>
                            <?php $n=0;for($c=1;$c<=10;$c++){
                            $n++; echo"<div class='cedula primeira'><input type='checkbox' id='A$n' value='A$n' name='lugares[]'>
                            <label for='A$n' class='a'>
                                <img class='images' src='./img/cadeira.png'/>
                                <img class='images' src='./img/cadeiraVermelha.png'/>
                            </label></div>";}?>
                        </div>

                        <div class="linha">
                        <p class="tit-linha">B</p>
                            <?php $n=0;for($c=1;$c<=10;$c++){
                            $n++; echo"<div class='cedula'><input type='checkbox' id='B$n' value='B$n' name='lugares[]'>
                            <label for='B$n' class='a'>
                                <img class='images' src='./img/cadeira.png'/>
                                <img class='images' src='./img/cadeiraVermelha.png'/>
                            </label></div>";}?>
                        </div>

                        <div class="linha">
                        <p class="tit-linha">C</p>
                            <?php $n=0;for($c=1;$c<=10;$c++){
                            $n++; echo"<div class='cedula'><input type='checkbox' id='C$n' value='C$n' name='lugares[]'>
                            <label for='C$n' class='a'>
                                <img class='images' src='./img/cadeira.png'/>
                                <img class='images' src='./img/cadeiraVermelha.png'/>
                            </label></div>";}?>
                        </div>

                        <div class="linha">
                        <p class="tit-linha">D</p>
                            <?php $n=0;for($c=1;$c<=10;$c++){
                            $n++; echo"<div class='cedula'><input type='checkbox' id='D$n' value='D$n' name='lugares[]'>
                            <label for='D$n' class='a'>
                                <img class='images' src='./img/cadeira.png'/>
                                <img class='images' src='./img/cadeiraVermelha.png'/>
                            </label></div>";}?>
                        </div>

                        <div class="linha">
                        <p class="tit-linha">E</p>
                            <?php $n=0;for($c=1;$c<=10;$c++){
                            $n++; echo"<div class='cedula'><input type='checkbox' id='E$n' value='E$n' name='lugares[]'>
                            <label for='E$n' class='a'>
                                <img class='images' src='./img/cadeira.png'/>
                                <img class='images' src='./img/cadeiraVermelha.png'/>
                            </label></div>";}?>
                        </div>
                    </div>

                    <!--NÃO COLOCAR EM BOTÃO PARA NÃO DAR TRETA DEPOIS NA HORA DE ENVIAR, QUE O TAMANHO DO INPUT É MENOR QUE O DO BOTÃO-->
                    <div id="bnt"><input id="myBtn" type="submit" value="Verificar"></div>

                </form>
            </div>
            <!--------------------------------------------------------->

            <h1 id="titulo-filme" data-filme="Viúva Negra">VIÚVA NEGRA</h1>
            <div id="extras">
                <div id="trailer">
                    <!--No link colocar /embed/o código do vídeo-->
                    <iframe src="https://www.youtube.com/embed/BotTBc1x7M4?fs=1" allowfullscreen></iframe>
                </div>
                <ul id="informacoes">
                    <li><span>Gênero:</span> Ação, Espionagem, Aventura</li>
                    <li><span>Duração:</span> 1h 00min</li>
                    <li><span>indicação:</span> +12</li>
                    <li><span>Direção:</span>  Cate Shortland</li>
                    <li><span>Elenco:</span>  Scarlett Johansson, Florence Pugh, David Harbour</li>
                    <li><span>Nacionalidade:</span> EUA</li></li>
                </ul>
            </div>
            <div id="principal">                
                <div id="resumo">
                    <p>Em Viúva Negra, após seu nascimento, Natasha Romanoff (Scarlett Johansson) é dada à KGB, que a prepara para se tornar sua agente definitiva. Quando a URSS rompe, o governo tenta matá-la enquanto a ação se move para a atual Nova York, onde ela trabalha como freelancer. Após aventuras com os Vingadores, ela retorna para seu país de origem e se une à antigos aliados para acabar com o programa governamental que a transformou em uma assassina. </p>
                </div>
                <div id="sessoes">
                    <div id="center">
                        <div id="titEventos">
                            <h1>SESSÕES</h1><h2>atualizado em 20/11/2020</h2>
                        </div>
                    <!-- Swiper -->
                        <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><p>Segunda-feira</p><p>19:00</p></div>
                            <div class="swiper-slide"><p>Quarta-feira</p><p>19:10</p></div>
                            <div class="swiper-slide"><p>Sexta-feira</p><p>22:10</p></div>
                            <div class="swiper-slide"><p>Sábado</p><p>22:30</p></div>
                            <div class="swiper-slide"><p>Domingo</p><p>16:00</p></div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next swiper-button-white"></div>
                        <div class="swiper-button-prev swiper-button-white"></div>
                        </div>
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
                    <img src="../fontes/ticket.svg"/>
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
        var swiper = new Swiper('.swiper-container', {
        slidesPerView: 2,
        spaceBetween: 15,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        });
    </script>
</body>
</html>