<?php
//obtém os valores digitados
$email = $_POST["email"];
$senha = $_POST["senha"];

include("conecta_mysql.inc");

/*
protege os campos contra caracteres especiais, para evitar
ataques de SQL INJECTION
*/

$email = $conexao->real_escape_string($email);
$email = $conexao->real_escape_string($senha);

//acesso ao banco de dados
$resultado = $conexao->query("SELECT * FROM usuarios WHERE email='$email'");
$linhs = $resultado->num_rows;
if($linhas == 0){//testa se a conexão retorna algum registro
    echo "<html><body>";
    echo "<p align=\"center\">E-mail não encontrado!</p>";
    echo "<p align=\"center\">< a href=\"login.html\">Voltar</a></p>";
    echo "</body></html>";
}
else //usuario e senhas corretos, e atenticação cria os cookies
{
    setcookie("email_usuario", $email);
    setcookie("email_usuario", $senha);
    //direciona a página inicial dos usuarios cadastrados header
}
$conexao->close();