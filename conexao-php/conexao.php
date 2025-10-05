<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão PHP</title>
</head>
<body>
    <?php 
    // futuro espaço para integração ao PHP
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "panacea_farmacia";

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
    }
    ?>

</body>
</html>