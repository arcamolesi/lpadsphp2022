<?php
include 'conexao.php';
    $sql = "select * from imovel where id=?;";
    $pdo = Conexao::conectar(); 
    $query = $pdo->prepare($sql);
    $query->execute (array($id));
    $dados = $query->fetch(PDO::FETCH_ASSOC);

    Conexao::desconectar();