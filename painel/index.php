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
            <li><span>Cadastros</span>
                <ul class="submenu">
                    <li><a href="cadastros/usuarios/index.php" target="iframepainel">Usuários</a></li>
                    <li><a href="cadastros/repositorios/index.php" target="iframepainel">Repositorios</a></li>
                </ul>
            </li>
            <li><span>Configurações</span>
                <ul class="submenu">
                    <li><a href="#">Permissões de Usuários</a></li>
                </ul>
            </li>
            <li><span>Sair</span></li>
        </ul>
    </nav>
    <iframe src="" frameborder="0" name="iframepainel"></iframe>
    <footer><img src="../../../icones/account.svg" Alt="Usuario" class="icone"><?php /*echo $nome*/?></footer>
</body>
</html>