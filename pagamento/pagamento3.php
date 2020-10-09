<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    //se a pessoa não escolheu nenhuma cadeira, ou não está logado
    /*if (!isset($_SESSION['lugares']) || !isset($_SESSION['logged'])){
        header('Location:../error404.html', true, 301);
    }*/

    $tipoPag = $_POST['tipoPag'];
    //pega os 4 ultimos numeros
    $cardNum = substr($_POST['cardNumero'], -4);
    $cardNumero = "********".$cardNum;
    $cardNome = $_POST['cardNome'];

    $contagem = $_SESSION['contagem'];
    $subtotal = $_SESSION['subtotal'];
    $total = $_SESSION['total'];
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

    <link rel="stylesheet" href="estilo-pagamento3.css"/>
    <link rel="stylesheet" href="wrapper-pagamento3.css"/>
    <script type="text/javascript" src="mostrar-boleto.js"></script>
</head>
<body>
    <div id="content">
        <!------------------FILTRO------------------->
        <div id="filtro"></div>
        <div id="boleto">
            <i id="fechar" class="fas fa-times"></i>
            <img src="../img/boleto.png"></img>
        </div>
        <!------------------------------------------->
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
                        <div id="confirmacao">
                            <div>
                                <h1>Olá <?php echo $_SESSION['nome'];?>,</h1>
                                <p>Sua compra foi confirmada e registrada. Informe para a recepcionista o pagamento prévio do ingresso. <br>Agradecemos pela preferência, tenha uma ótima sessão!</p>
                                <p>A confirmação do pedido foi enviada para: <span><?php echo $_SESSION['email'];?></span></p>
                            </div>
                            <div>
                                <h1>Número do pedido:</h1>
                                <p>#310-031586576567</p>
                                <div id="bnt">
                                    <a href="#">VER BOLETO DE COMPRA<i class="fas fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <hr class="linha">
                        <div id="detalhes">
                            <h1>Detalhes</h1>
                            <div id="info">
                                <div id="pedido">
                                    <div>
                                        <i class="fas fa-film"></i>
                                        <ul>
                                            <li>Filme:</li>
                                            <li><?php echo $_SESSION['filme'];?></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <i class="fas fa-clock"></i>
                                        <ul>
                                            <li>Horário:</li>
                                            <li><?php echo $_SESSION['horario'];?></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <i class="fas fa-ticket-alt"></i>
                                        <ul>
                                            <li>Ingressos:</li>
                                            <li><?php echo $_SESSION['contagem'];?></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <span id="img"><img src="../img/cadeiraCinza.png" alt="assento"></span>
                                        <ul>
                                            <li>Assentos:</li>
                                            <li>
                                            <?php
                                            //para cada cadeira fazer:
                                            foreach($_SESSION['lugares'] as $value)
                                            {
                                                echo "<span class='assento'>$value</span>";
                                            }
                                            ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="cartao">
                                    <li><div>Método de pagamento:</div><div><img src="<?php echo "../img/$tipoPag.png";?>" alt="MasterCard" title="MasterCard"></div></li>
                                    <li><div>Número do Cartão:</div><div><?php echo $cardNumero;?></div></li><!--**********5453-->
                                    <li><div>Nome no Cartão:</div><div><?php echo $cardNome;?></div></li><!--Isabella C S de Araujo-->
                                </div>
                                <div id="preco">
                                    <li><div>Valor:</div><div>R$<?php echo number_format($subtotal,2,",",".");?></div></li>
                                    <li><div>Taxas:</div><div>R$2,00</div></li>
                                    <li><div>Total:</div><div>R$<?php echo number_format($total,2,",",".");?></div></li>
                                </div>
                            </div>
                        </div>
                        <div id="bntVoltar">
                            <a href="../index.php">SAIR<i class="fas fa-sign-out-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>