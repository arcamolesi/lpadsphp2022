<?php 
   
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
   
   <title>Remover Dados de Imóvel</title>
</head>
<body>
   <div class= "container brown lighten-4  black-text col s12">
       <div class = "brown lighten-2 col s12">
           <h1>Remover Imóvel</h1>
       </div>
       <div class="row">
           <form action="remImovel.php" method="POST" id="frmRmvImv"  class="col s12">
               <div class="input-field col s8">
                   <label for="lblid" class="black-text" >ID: <?php echo $dados['id'];?></label>
                   <br/>
                   <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
               </div>
               <div class="row">
                   <div class="input-field col s12">
                      <label for="lblRua"><h5><b>Rua: </b><?php echo $dados['rua'];?></h5></label>
                  </div>
               </div>
               <div class="row">
                   <div class="input-field col s12">
                      <label for="lblBairro"><h5><b>Bairro: </b><?php echo $dados['bairro'];?></h5></label>
                  </div>
               </div>
               <div class="row">
                   <div class="input-field col s12">
                      <label for="lblCidade"><h5><b>Cidade: </b><?php echo $dados['cidade'];?></h5></label>
                  </div>
               </div>
               <div class="row">
                   <div class="input-field col s12">
                      <label for="lblStatus"><h5><b>Status: </b><?php echo $dados['status'];?></h5></label>
                  </div>
               </div>
               <br/>
               <br/>
               <div class="row">
                   <div class="input-field col s12">

                   
                    <button class="btn waves-effect waves-light red" type="submit"
                           name="action">Remover
                        <i class="material-icons right">delete</i>
                    </button>
 

                   <a class="waves-effect waves-light btn blue" 
                      onclick="JavaScript:location.href='lstImovel.php'">
                      <i class="material-icons right">arrow_back</i>Voltar</a>


                   </div>
              </div>
            </form>
        </div>  
    </div>
</body>

</html>