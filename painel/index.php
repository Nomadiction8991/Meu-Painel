<?php
session_start();
if (isset($_SESSION["nome"])) {
    header("Location: painel/index.php");
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
    <form action="acao-index.php" method="post" class="formulario">
        <span class="titulo">Painel Anvy</span>
        <input type="email"  class="email" name="email" placeholder="E-mail" autofocus required>
        <input type="password" class="senha" name="password" placeholder="Senha" required>
        <input type="submit" class="acessar" value="Acessar">
    </form>
</body>
</html>