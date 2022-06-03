<?php 
    include 'menu.php'; 
    
    $id = $_GET['id']; 

    include 'conexao.php';
    $sql = "select * from imovel where id=?;";
    $pdo = Conexao::conectar(); 
    $query = $pdo->prepare($sql);
    $query->execute (array($id));
    $dados = $query->fetch(PDO::FETCH_ASSOC);

    Conexao::desconectar(); 
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
    
    <title>Editar Dados de Imóvel</title>
</head>
<body>
    <div class= "container brown lighten-4  black-text col s12">
        <div class = "brown lighten-2 col s12">
            <h1>Editar Imóvel</h1>
        </div>
        <div class="row">
            <form action="edtImovel.php" method="post" id="frmEdtImvo"  class="col s12">
                <div class="input-field col s8">
                    <label for="lblid" class="black-text" >ID: <?php echo $dados['id'];?></label>
                    <br/>
                    <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
                </div>
            
                <div class="input-field col s8">
                    <label for="lblRua" class="black-text">Informe a rua: </label> 
                    <input placeholder="" id="txt_rua" name="txtRua" value="<?php echo $dados['rua']?>" type="text">
                </div>
                <div class="input-field col s8">
                    <label for="lblBairro" class="black-text">Informe o Bairro: </label> 
                    <input placeholder="" id="txt_bairro" name="txtBairro" value="<?php echo $dados['bairro']?>" type="text">
                </div>
                <div class="input-field col s8">
                    <label for="lblCidade" class="black-text">Informe a cidade: </label> 
                    <input placeholder="" id="txt_cidade" name="txtCidade" value="<?php echo $dados['cidade']?>" type="text">
                </div> 
                <div class="input-field col s8">
                    <label for="lblStaus" class="black-text">Informe a Status: </label> 
                    <input placeholder="" id="txt_Status" name="txtStatus" value="<?php echo $dados['status']?>" type="text">
                </div>
                <div class = "input-field col s8">
                    <br>
                    <button class="btn waves-effect waves-light green" type="submit" >Salvar
                        <i class="material-icons right">save</i>
                    </button>
                    <button class="btn waves-effect waves-light red" type="reset" >Limpar
                        <i class="material-icons right">brush</i>
                    </button>

                    <button class="btn waves-effect waves-light  indigo darken-4" 
                    type="button" id="btnVoltar" onclick="JavaScript:location.href='lstImovel.php'">
                    Voltar <i class="material-icons right">arrow_back</i> 
                    </button>
                    
                </div>

            </form>
        </div>
    </div> 
</body>
</html>