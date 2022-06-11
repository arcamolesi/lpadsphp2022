<?php 
 // include 'menu.php'; 
  include 'conexao.php';
  $pdo = Conexao::conectar(); 
  $sql = "select * from imovel;";
  $lstImovel = $pdo->query($sql); 


  $sql = "Select * from locador order by nome"; 
  $lstLocador = $pdo->query($sql); 

  Conexao::desconectar(); 
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">

    </script>
    <title>Inserir Locação</title>
</head>

<body>
    <div class="container deep-orange lighten-5 s12">

        <div class="col s12">
            <h1>Cadastro de Locação</h1>

            <div class="row">
                <form action="insLocacao.php" method="POST" id="frmInsLoc" class="col s12">
                    <div class="col s11">
                        <label for="lblImovel" class="black-text bold">Escolha o Imovel:</label>
                        <div class="input-field col s12">
                            <select name="slcImovel" id="slcImovel">
                                <option value="" disabled selected>Escolha uma opção</option>
                                <?php 
                                    foreach ($lstImovel as $imovel){?>
                                <option value="<?php echo $imovel['id'];?>"><?php echo $imovel['rua'];?></option>
                                <?php } 
                                ?>

                            </select>

                        </div>
                    </div>

                    <div class="input-field col s8">
                        <label for="lblLocador" class="black-text bold">Escolha o Locador:</label>
                        <div class="input-field col s12">
                            <select name="slcLocador" id="slcLocador">
                                <option value="" disabled selected>Selecione um Locador</option>
                                <?php
                                    foreach($lstLocador as $locador){?>
                                        <option value="<?php echo $locador['id'];?>"><?php echo $locador['nome'];?></option>
                                   <?php }
                                ?>                               
                            </select>
                        </div>
                    </div>

                    <div class="input-field col s8">
                        <label for="lblData" class="black-text bold">Informa a Data de Locação:</label>
                        <div class="input-field col s12">
                            <input id="txtData" name="txtData" type="date">
                        </div>
                    </div>

                    <div class="input-field col s8">
                        <label for="lblValor" class="black-text bold">Informe o valor do aluguel:</label>
                        <div class="input-field col s12">
                            <input id="txtValor" name="txtValor" type="text">
                        </div>
                    </div>

                    <div class="input-field col s8">
                        <button class="btn waves-effect waves-light green" type="submit" name="action">Enviar
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>

<script>
$(document).ready(function() {
    $('select').material_select();
});
</script>