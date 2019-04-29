<?php
    //Configurações Gerais
    header('Access-Control-Allow-Origin:*');
    //Abre conexão com o BC
    $con = mysqli_connect("localhost","root","","andes");
    $selecao = "SELECT nomeproduto, precounitario, imagempequena FROM PRODUTOS";
    $produtos = mysqli_query($con, $selecao);

    $retorno = array();
    while($dado = mysqli_fetch_object($produtos)){
        $retorno[] = $dado;
    }

    echo json_encode($retorno);
    
    //Fecha conexão
    mysqli_close($con);
?>