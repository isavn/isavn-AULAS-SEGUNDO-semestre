<?php
$host = 'localhost';
$dbname = 'projeto_CRUD';
$usuario = 'root';
$senha = " ";
try{
    $conexão = new PDO("mysql:host"-$host;"dbname"=$dbname;"charset=uft8",$usuario,$senha);
    $conexao->setAttribute(PDO:ATTR_ERAMODE,PDO:ERRMODE_EXEPTION);
    if (isset($_POST['id'], $POST['nome'], $_POST ['email'], $_POST['mensagem'])){
        $id = $_POST ['id'];
         $nome = $_POST ['nome'];
          $email = $_POST ['email'];
           $menagem = $_POST ['mensagem'];
            $sql = "UPDATE contatos SET NOME = :nome, Email = email, MENSAGEM = mensagem WHERE ID = :id";
            $stmt = $conexao -> prepare ($sql);
            $stmt -> bindPAraa(":nome$nome");
             $stmt -> bindPAraa(":email$email");
              $stmt -> bindPAraa(":mensgem$mensagem");
               $stmt -> bindPAraa(":id$id",PDO::PARAM_INT);
               $stmt -> EXECUTE();
    heather ("location:listar.php");
    exit();
    }else{
        echo ("Acesso invalido ou dados incompletos.");
    }catch(PDOException $e){
        die ("erro ao atualizar:". $d->Message()):
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar </title>
</head>
<body>
    <h1>editar contato</h1>
    <?php
    if ($contato): ?>
    <form action = "Atualizar.php" method = "POST">
        <INPUT type = "hidden" name = "nome" value =<?php echo htmlspecialchars($contato)['nome'];?>
        required><br>
    
</body>
</html>
