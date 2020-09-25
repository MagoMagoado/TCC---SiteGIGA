<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php session_start();
    
    //destroi a variavel em qualquer pagina que não for a do filme
    unset($_SESSION['lugares']);
    ?>
    <title>Contato | Cinema GIGA</title>
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

    <link rel="stylesheet" href="estilo-contato.css">
    <link rel="stylesheet" href="wrapper-contato.css">
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
                                    <a href='contato.php?logout=true'>Sair</a>
                                </div>
                            </div>";
                            //se clicar em 'SAIR'...
                            if (isset($_GET['logout'])) {
                                unset($_SESSION['logged']);
                                header('Location:contato.php', true, 301);
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
                <a href="eventos.php"><span></span><span></span><span></span><span></span> EVENTOS</a>
            </div>
        </header>
        <div id="main">
            <div id="card">
                <div id="cinema"></div>
                <div id="informacoes">
                    <div id="titulo">
                        <img src="fontes/ticket.svg"/>
                        <h1>Cinema GIGA</h1>
                    </div>
                    <ul id="local">
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
                            <div>
                                <p>+55 16 0000-0000</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div id="coluna2">
                <div id="mapa">
                    <h1 id='titulo'>MAPA</h1>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3714.352632032366!2d-48.50245178543651!3d-21.415380191736524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b93960d00b6f9d%3A0x467b0483a084fca3!2sR.%20Francisco%20Valzachi%2C%2051%20-%20Vila%20Rosa%2C%20Taquaritinga%20-%20SP%2C%2015900-000!5e0!3m2!1spt-BR!2sbr!4v1591585086165!5m2!1spt-BR!2sbr" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                
                <div id="contato">
                    <form>
                        <h1 id='titulo'>FALE CONOSCO</h1>
                        <ul id="campos">
                            <li><input type="text" name="name" id="username" placeholder="Nome" required></li>
                            <li><input type="email" name="email" id="email" placeholder="E-mail" required></li>
                            <li><textarea name="mensagem" rows="10" wrap="virtual" placeholder="Deixe aqui uma mensagem..." required></textarea></li>
                        </ul>
    
                        <div id="bnt"><input type="submit" id="bnt-submit" value="ENVIAR"></div>
                    </form>
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
</body>
</html>