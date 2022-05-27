<?php
    include 'conexao.php';
    //programa php para editar dados de imovel
    $id = trim($_POST['id']); 
    $rua = trim($_POST['txtRua']); 
    $bairro = trim($_POST['txtBairro']); 
    $cidade = trim($_POST['txtCidade']);
    $status = trim($_POST['txtStatus']); 

    if (!empty($id) && !empty($rua) && !empty($bairro) && !empty($cidade) && !empty($status)){
        $sql = "UPDATE imovel SET rua=?,bairro=?,cidade=?,status=? WHERE id=?";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $query->execute(array($rua, $bairro, $cidade, $status, $id));
        Conexao::desconectar(); 
    }

    header("location:lstImovel.php"); 

?>
