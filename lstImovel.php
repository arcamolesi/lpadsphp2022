<?php
   include 'menu.php'; 
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

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Listar Imoveis</title>
</head>

<body>
    <div class="container deep-orange lighten-5">
        <div class="card-panel grey darken-1">
            <H1>Listar Imoveis</H1>
        </div>

        <div class="col s10">
            <table class="striped blue lighten-4">
                <tr>
                    <th>ID</th>
                    <th>RUA</th>
                    <th>BAIRRO</th>
                    <th>CIDADE</th>
                    <th>STATUS</th>
                    <th class="center">Funções</th>
                    <th>
                        <a class="btn-floating btn-small waves-effect waves-light green"
                            onclick="JavaScript:location.href='frmInsImovel.php'">
                            <i class="material-icons">add</i>
                        </a>
                    </th>
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
                    <td class="center">
                        <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='frmEdtImovel.php?id=' + 
                           <?php echo $imovel['id'];?>">
                            <i class="material-icons">edit</i>
                        </a>
                        <a class="btn-floating btn-small waves-effect waves-light red"
                            onclick="JavaScript:remover(<?php echo $imovel['id'];?>)">
                            <i class="material-icons">delete</i>
                        </a>
                        <a class="btn-floating btn-small waves-effect waves-light  light-blue darken-3" onclick="JavaScript:location.href='frmDetImovel.php?id=' + 
                           <?php echo $imovel['id'];?>">
                            <i class="material-icons">info</i>
                        </a>
                    </td>
                    <td></td>
                </tr>
                <?php } ?>
            </table>
        </div>
        <br>
        <br>
    </div>

</body>

</html>

<?php include 'footer.php'?> 

<script>
function remover(id) {
    if (confirm('Excluir o imóvel ' + id + '?')) {
        location.href = 'remImovel.php?id=' + id;
    }
}
</script>