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
    
    <title>Inserir Dados de Imóvel</title>
</head>
<body>
    <div class= "container brown lighten-4  black-text col s12">
        <div class = "brown lighten-2 col s12">
            <h1>Cadastro de Imóveis</h1>
        </div>
        <div class="row">
            <form action="insImov.php" method="post" id="frmInsImvo" name="frmInsImvo" class="col s12">
                <div class="input-field col s8">
                    <label for="lblRua" class="black-text">Informe a rua: </label> 
                    <input placeholder="" id="txt_rua" type="text">
                </div>
                <div class="input-field col s8">
                    <label for="lblBairro" class="black-text">Informe o Bairro: </label> 
                    <input placeholder="" id="txt_bairro" type="text">
                </div>
                <div class="input-field col s8">
                    <label for="lblCidade" class="black-text">Informe a cidade: </label> 
                    <input placeholder="" id="txt_cidade" type="text">
                </div>
                <div class="input-field col s8">
                    <label for="lblStaus" class="black-text">Informe a Status: </label> 
                    <input placeholder="" id="txt_Status" type="text">
                </div>
                <div class = "input-field col s8">
                    <br>
                    <button class="btn waves-effect waves-light green" type="submit" name="action">Salvar
                        <i class="material-icons right">save</i>
                    </button>
                    <button class="btn waves-effect waves-light red" type="reset" name="action">Limpar
                        <i class="material-icons right">brush</i>
                    </button>

                    <button class="btn waves-effect waves-light  indigo darken-4" 
                    type="button" name="btnVoltar" onclick="JavaScript:location.href='lstImovel.php'">
                    Voltar <i class="material-icons right">arrow_back</i> 
                    </button>
     
                </div>

            </form>
        </div>
    </div> 
</body>
</html>