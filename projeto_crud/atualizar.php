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
        die ("erro ao atualizar:". $e->getMEssage()):
    }
}