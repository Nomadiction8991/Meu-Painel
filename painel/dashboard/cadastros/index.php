<?php
session_start();
if (!isset($_SESSION["nome"])) {
    header("Location: ../../index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo-index.css">
</head>
<body> 
  <a href="usuarios/index.php"><button class="usuarios"><img src="../../../icones/user.svg" class="icone">Usuários</button></a>
</body>
</html>