<?php
    /*cria o request
    $Request = file_get_contents("php://input");
    $lugares = json_decode($Request);

    //mostra os lugares
    echo json_encode($lugares);*/
    $lugares = isset($_POST['lugares']) ? $_POST['lugares'] : '';
    $resete = isset($_POST['resete']) ? $_POST['resete'] : '';
    
    //mostra os lugares
    echo json_encode($lugares);
?>