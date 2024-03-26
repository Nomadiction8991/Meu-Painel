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
            <li><a href="cadastros/index.php" class="linkmenu" target="iframepainel"><img src="../../../../icones/add.svg" class="icone"><span>Cadastros</span></a></li>
            <li><a href="listagens/index.php" class="linkmenu" target="iframepainel"><img src="../../../../icones/list.svg" class="icone"><span>Listagens</span></a></li>
            <li><a href="configuacoes/index.php" class="linkmenu" target="iframepainel"><img src="../../../../icones/config.svg" class="icone"><span>Configurações</span></a></li>
            <li><a href="sair/acao.php" class="linkmenu" target="iframe"><img src="../../../../icones/logout.svg" class="icone"><span>Sair</span></a></li>
        </ul>
    </nav>
    <iframe src="" name="iframepainel"></iframe>
    <footer><img src="../../../icones/account.svg" Alt="Usuario" class="icone iconfooter"><?php /*echo $nome*/?></footer>
</body>
</html>