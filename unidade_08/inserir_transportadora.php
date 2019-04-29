  <?php
    $conecta = mysqli_connect("localhost","root","","andes");
    if ( mysqli_connect_errno()  ) {
        die("Conexao falhou: " . mysqli_connect_errno());
    }

    if(isset($_POST["nometransportadora"])) {
        $nome       = utf8_decode($_POST["nometransportadora"]);
        $endereco   = utf8_decode($_POST["endereco"]);
        $cidade     = utf8_decode($_POST["cidade"]);
        $estado     = $_POST["estados"];
        
        $inserir    = "INSERT INTO transportadoras ";
        $inserir    .= "(nometransportadora,endereco,cidade,estadoID) ";
        $inserir    .= "VALUES ";
        $inserir    .= "('$nome','$endereco','$cidade', $estado)";
        
        $operacaoInsercao = mysqli_query($conecta, $inserir);

        $retorno = array();
        if($operacaoInsercao){
            $retorno["resultado"] = true;
            $retorno["mensagem"] = "Transportadora inserido com sucesso";
        }
        else{
            $retorno["resultado"] = false;
            $retorno["mensagem"] = "Falha na inserção";
        }

        echo json_encode($retorno);
    }
    else{
        header("location:formulario.php");
    }
?>