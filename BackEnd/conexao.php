<?php
// Aqui define as credenciais de acesso ao banco de dados
$localhost = "localhost";
$user = "root";
$senha = "";
$banco = "panacea_farmacia";

// Fiz a conexão do banco de dados usando MySQLi
$conecta = new mysqli($localhost, $user, $senha, $banco);
?>
