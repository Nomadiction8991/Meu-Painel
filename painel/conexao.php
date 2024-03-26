<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "painel_anvy"; 

try {
    $conexao = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Falha na conexão com o banco de dados: " . $e->getMessage();
}
?>
