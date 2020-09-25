<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php session_start();

    //se a pessoa não escolheu nenhuma cadeira, ou não está logado
    if (!isset($_SESSION['lugares']) || !isset($_SESSION['logged'])){
        header('Location:../error404.html', true, 301);
    }

    //pega o nome do usuário
    $nome = $_POST['nome'];
    //pega o email do usuário
    $email = $_POST['email'];

    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;

    //Debugging os valores
    echo "<span style='display: none;'>".$_SESSION['nome'].$_SESSION['email']."</span>"; 
    /*function Debugging($n,$em){
        echo "<script>";
        echo "console.log(".json_encode($n).");";
        echo "console.log(".json_encode($em).");";
        echo "</script>";
    }
    Debugging($nome,$email);*/

    //Operações para o VALOR DO PEDIDO
    //sizeof() pega o int da quantidade do array
    $contagem = sizeof($_SESSION['lugares']);
    $subtotal = 10*$contagem;
    $total = $subtotal+2;
    $_SESSION['contagem'] = $contagem;
    $_SESSION['subtotal'] = $subtotal;
    $_SESSION['total'] = $total;
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

    <link rel="stylesheet" href="estilo-pagamento2.css"/>
    <link rel="stylesheet" href="wrapper-pagamento2.css"/>
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
                <form method="POST" action="pagamento3.php">
                    <div id="coluna1">
                        <div id="centro1">
                            <ul id="caixas">
                                <li><input type="radio" name="tipoPag" value="mastercard" id="mastercard" checked>
                                <label for="mastercard"><i class="fab fa-cc-mastercard"></i></label></li>

                                <li><input type="radio" name="tipoPag" value="visa" id="visa">
                                <label for="visa"><i class="fab fa-cc-visa"></i></label></li>
                                
                                <li><input type="radio" name="tipoPag" value="paypal" id="paypal">
                                <label for="paypal"><i class="fab fa-cc-paypal"></i></label></li>
                            </ul>
                            <ul id="campos">
                                <li><input type="text" name="cardNumero" id="cardNumber" data-mask="0000.0000.0000" minlength="14" maxlength="14" required><i class='far fa-credit-card'></i><span>Número do Cartão *</span></li>
                                <li><input type="text" name="cardNome" id="cardHolder" maxlength="35" required><i class='far fa-credit-card'></i><span>Nome no Cartão *</span></li>
                                <div>
                                <li><input type="text" name="dataVenc" id="dataVenc" data-mask="00/00" placeholder="00/00" minlength="5" maxlength="5" required><i class="fas fa-calendar-week"></i><span>Data de Vencimento *</span></li>
                                <li><input type="text" name="codCVV" id="codCVV" placeholder="000" maxlength="3"><i class="fas fa-info-circle"></i><span>Código CVV</span></li>
                                </div>
                            </ul>
                            <div id="bnt">
                                <a href="javascript:history.go(-1)"><i class="fas fa-long-arrow-alt-left"></i>VOLTAR</a>
                                <input type="submit" id="bnt-submit" value="FINALIZAR A COMPRA">
                            </div>
                        </div>
                    </div>
                    <div id="coluna2">
                        <div id="centro2">
                            <h1>Pedido</h1>
                            <hr class="linha">
                            <div id="pedido1">
                                <div><li><img src="../img/cadeiraCinza.png" alt="assento">ASSENTOS</li>
                                    <li>
                                        <?php
                                        //para cada cadeira fazer:
                                        foreach($_SESSION['lugares'] as $value)
                                        {
                                            echo "<span class='assento'>$value</span>";
                                        }
                                        ?>
                                    </li>
                                </div>
                                <div><li><i class="fas fa-ticket-alt"></i>Subtotal (<?php echo $contagem;?> ingressos)</li><li><span class="money">R$<?php echo number_format($subtotal,2,",",".");?></span></li></div>
                                <div><li>Custos adicionais</li><li><span class="money">R$2,00</span></li></div>
                            </div>
                            <div id="pedido2">
                                <div><li>Total a ser Comprado</li><li>R$<?php echo number_format($total,2,",",".");?></li></div>
                            </div>
                            <hr class="linha">
                            <div id="seguro">
                                <li><img id="ssl" src="../img/certificado-ssl.png" alt="Certificado SSL">
                                Compra Segura</li>
                                <li>Suporte para 128-bit Secure Socket Layers (SSL), processo seguro de suas informações em transações onlines.<br> Para mais informações acesse: <a target="_blank" href="https://www.ssl.com/">https://www.ssl.com/</a></li>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--------Script maskFormulario--------->
    <script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="../maskFormulario/javascripts/locastyle.js"></script>
    <!-------------------------------------->
</body>
</html>