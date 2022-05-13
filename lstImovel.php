<?php
   include 'conexao.php';
   $sql = "select * from imovel order by rua;";
   $pdo = conexao::conectar(); 
   $lstImovel = $pdo->query($sql); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>Listar Imoveis</H1>
    
    <table>
        <tr>
            <th>ID</th>
            <th>RUA</th>
            <th>BAIRRO</th>
            <th>CIDADE</th>
            <th>STATUS</th>
        </tr>
        <?php 
           foreach($lstImovel as $imovel) {
        ?>
        <tr>
            <td><?php echo $imovel['id']?> </td>
            <td><?php echo $imovel['rua']?> </td>
            <td><?php echo $imovel['bairro']?> </td>
            <td><?php echo $imovel['cidade']?> </td>
            <td><?php echo $imovel['status']?> </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>


