<?php 
    session_start();

    $dia = isset($_POST['dia']) ? $_POST['dia'] : '';
    $horario = isset($_POST['horario']) ? $_POST['horario'] : '';
    $filme = isset($_POST['filme']) ? $_POST['filme'] : '';
    
    $Request = file_get_contents('php://input');
    $lugares = json_decode($Request);

    if (!empty($lugares)) {
        $_SESSION['lugares'] = $lugares;
    }

    if (!empty($dia) || !empty($horario)) {
        $_SESSION['dia'] = $dia;
        $_SESSION['horario'] = $horario;
        $_SESSION['filme'] = $filme;
    }

    /*//Pega os valores dos assentos
    $assentos = isset($_POST['assentos']) ? $_POST['assentos'] : '';
    
    if (!empty($assentos)) {
        $_SESSION['assentos'] = $assentos;
    }*/