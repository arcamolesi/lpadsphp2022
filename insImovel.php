<?php
    include 'conexao.php';
    //programa php para inserir dados de imovel
    $rua = trim($_POST['txtRua']); 
    $bairro = trim($_POST['txtBairro']); 
    $cidade = trim($_POST['txtCidade']);
    $status = trim($_POST['txtStatus']); 

    if (!empty($rua) && !empty($bairro) && !empty($cidade) && !empty($status)){
        $sql = "INSERT INTO imovel(rua, bairro, cidade, status) VALUES (?, ?, ?, ?)";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $query->execute(array($rua, $bairro, $cidade, $status));
        Conexao::desconectar(); 
    }

    header("location:lstImovel.php"); 

?>
