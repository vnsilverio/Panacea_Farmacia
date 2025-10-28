<?php
// Aqui define as credenciais de acesso ao banco de dados
$localhost = "localhost";
$user = "root";
$senha = "";
$banco = "panacea_farmacia";


// Fiz a conexão do banco de dados usando MySQLi
$conecta = new mysqli($localhost, $user, $senha, $banco);

//adicionei a msg de erro caso dê erro de conexão com o banco mais pra frente

if ($conecta->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conecta->connect_error);
}
  
// criando esqueleto da tabela para a segunda tela (remedios, quantidade de saida, ect).

 $sql = "CREATE DATABASE remediosPF"; //fiz o nome da tabela generica, precisa mudar depois.
if (mysqli_query ($conecta, $sql)) {
    echo "Database criado com sucesso!!!";
} else {
    echo "Erro na criação da database: " mysqli_error($conecta);
}

mysqli_close ($conecta);
    
?>

