<?php
session_start();
if (!isset($_SESSION["nome"])) {
    header("Location: login.php");
    exit();
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
    <nav>
        <ul class="menu">
            <li><a href="cadastros/index.php" class="linkmenu" target="iframepainel"><span>Cadastros</span></a></li>
            <li><a href="configuacoes/index.php" class="linkmenu" target="iframepainel"><span>Configurações</span></a></li>
            <li><a href="sair/acao.php" class="linkmenu" target="iframepainel"><span>Sair</span></a></li>
        </ul>
    </nav>
    <iframe src="" name="iframepainel"></iframe>
    <footer><img src="../../../icones/account.svg" Alt="Usuario" class="icone"><?php /*echo $nome*/?></footer>
</body>
</html>