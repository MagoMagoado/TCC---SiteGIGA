<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php session_start();

        //se a pessoa não escolheu nenhuma cadeira, ou não está logado
        if (!isset($_SESSION['lugares']) || !isset($_SESSION['logged'])){
            header('Location:../error404.html', true, 301);
        }
    ?>

    <title>Pagamento | Cinema GIGA</title>
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
    <link rel="stylesheet" href="../fontes.css">
    <!-------------------------------------->

    <link rel="stylesheet" href="estilo-pagamento1.css"/>
    <link rel="stylesheet" href="wrapper-pagamento1.css"/>
</head>
<body>
    <div id="content">
        <header>
        <a id="logo" href="../index.php"><img src="../fontes/ticket.svg"/></a>
            <h1>Cinema GIGA</h1>
        </header>
        <div id="main">
            <div id="quadro">
                <div id="etapas">
                    <ul>
                        <li><span></span></li>
                        <li></li>
                        <li><span></span></li>
                        <li></li>
                        <li><span></span></li>
                    </ul>
                </div>
                <div id="conteudo">
                    <div id="centro">
                        <form method="POST" action="pagamento2.php">
                            <ul id="campos">
                                <li>
                                    <label for="nome">Nome:</label>
                                    <input type="text" name="nome" id="nome" maxlength="50" required>
                                </li>
                                <li>
                                    <label for="email">E-mail:</label>
                                    <input type="email" name="email" id="email" placeholder="@example.com" maxlength="50" required>
                                </li>
                                <li>
                                    <label for="cidades">Cidade:</label>
                                    <select type="" name="cidades" id="cidades">
                                        <option value="Taquaritinga">Taquaritinga</option>
                                        <option value="Jurupema">Jurupema</option>
                                        <option value="Guariroba">Guariroba</option>
                                        <option value="Vila Negri">Vila Negri</option>                                
                                        <option value="Jaboticabal">Jaboticabal</option>
                                        <option value="Cândido Robrigues">Cândido Robrigues</option>
                                        <option value="Guariba">Guariba</option>
                                        <option value="Monte Alto">Monte Alto</option>
                                        <option value="Dobrada">Dobrada</option>
                                        <option value="Matão">Matão</option>
                                        <option value="outro">Outro...</option>
                                    </select>
                                </li>
                            </ul>
                            <div id="bnt">
                                <a href="javascript:history.go(-1)"><i class="fas fa-long-arrow-alt-left"></i>VOLTAR</a>
                                <input type="submit" id="bnt-submit" value="AVANÇAR">
                            </div>
                        </form>
                        <hr class="linha">
                        <div id="footer">
                            <div id="coluna1">
                                <h1>ACEITAMOS</h1>
                                <div id="cartoes">
                                    <img src="../img/mastercard.png" alt="MasterCard" title="MasterCard">
                                    <img src="../img/visa.png" alt="Visa" title="Visa">
                                    <img src="../img/paypal.png" alt="PayPal" title="PayPal">
                                </div>
                                <p>Compre online com segurança.</p>
                            </div>
                            <div id="coluna2">
                                <h1>Compre no estabelecimento</h1>
                                <p>Rua Francisco Valzacchi, 51</p>
                                <p>Vila Rosa/Taquaritinga</p>
                                <hr class="linha">
                                <h1>Peça por telefone</h1>
                                <p>(16)99999-9999</p>
                                <p>Segunda - Sábado</p>
                                <p>12:00 - 22:00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--------Script maskFormulario--------->
    <script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="../maskFormulario/javascripts/locastyle.js"></script>
    <!-------------------------------------->
</body>
</html>