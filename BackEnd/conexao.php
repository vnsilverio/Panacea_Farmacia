<?php
// Aqui define as credenciais de acesso ao banco de dados
$localhost = "localhost";
$user = "root";
$senha = "";
$banco = "panacea_farmacia";


// Fiz a conexão do banco de dados usando MySQLi
$conecta = new mysqli($localhost, $user, $senha, $banco);
if ($conecta->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conecta->connect_error);
  //adicionei a msg de erro caso dê erro de conexão com o banco mais pra frente
?>

