<?php 
include 'conexao.php'; 
//insLocacao.php
$imovelID = trim($_POST['slcImovel']); 
$locadorID = trim($_POST['slcLocador']); 
$data  = trim($_POST['txtData']); 
$valor = trim($_POST['txtValor']);

/* echo "locador: " . $locadorID . "</BR>";
echo "imovel: " . $imovelID . "</BR>";
echo "data: " . $data . "</BR>";
echo "valor: " . $valor . "</BR>"; */

if (!empty($locadorID) && !empty($imovelID) && !empty($data) && !empty($valor)){
 
    //estabelecer conexão com banco de dados
    $pdo = Conexao::conectar(); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

    //recuperar imóvel
    $sql = "select * from imovel where id=?;";
    $query = $pdo->prepare($sql);
    $query->execute (array(intval($imovelID)));
    $imovel = $query->fetch(PDO::FETCH_ASSOC);

    //testar se o imóvel está liberado
    if ($imovel['status']=='L') {
        //atualizar o imóvel para ocupados
       
        $sqlu = "UPDATE imovel SET status='O' WHERE id=?;";
        $query = $pdo->prepare($sqlu);
        $query->execute(array($imovelID));
    

        //gravar a locacao 
        $sql = "INSERT INTO locacao(imovel, locador, data, valor) VALUES (?, ?, ?, ?);";
        $query = $pdo->prepare($sql);
        $query->execute(array($imovelID, $locadorID, $data, $valor));
     
    }
    Conexao::desconectar(); 

    
}

//header("location:lstLocador.php"); 


?> 