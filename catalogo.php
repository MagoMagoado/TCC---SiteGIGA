<?php session_start();if(isset($_GET['logout'])){unset($_SESSION['logged']);header('Location:index.php', true, 301);}?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    //destroi a variavel em qualquer pagina que não for a do filme
    unset($_SESSION['lugares']);
    ?>
    <title>Catálogo de Filmes | Cinema GIGA</title>
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

    <link rel="stylesheet" href="estilo-catalogo.css">
    <link rel="stylesheet" href="wrapper-catalogo.css">
    <script type="text/javascript" src="catalogo-script.js"></script>
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
                                    <a href='catalogo.php?logout=true'>Sair</a>
                                </div>
                            </div>";
                            /*se clicar em 'SAIR' - Está lá no topo da página,
                            location tem que estar primeiro que tudo...*/
                        }
                        ?>
                        <i id ='hamburger' class='fas fa-bars'></i>
                    </div>
                </nav>
            </div>
            <div id="section" class="hamburger-disable">
                <i id ="hamburgerSection" class="fas fa-bars"></i>
                <a href="index.php"><span></span><span></span><span></span><span></span> HOME</a>
               <a href="eventos.php"><span></span><span></span><span></span><span></span> EVENTOS</a>
                <a href="contato.php"><span></span><span></span><span></span><span></span> QUEM SOMOS</a>
            </div>
        </header>
        <div id="mainCatalogo">
            <div id="catalogo"></div>
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
</body>
</html>