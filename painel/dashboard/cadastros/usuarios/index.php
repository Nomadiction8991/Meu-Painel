<?php
session_start();
if (!isset($_SESSION["nome"])) {
    header("Location: ../../../index.php");
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
    <form action="acao-index.php" method="post" class="formulario">
        <span class="titulo">Cadastro de Usuários</span>
        <input type="text"  class="nome" name="nome" placeholder="Nome" autofocus required>
        <input type="text"  class="sobrenome" name="sobrenome" placeholder="Sobrenome" required>
        <input type="text"  class="apelido" name="apelido" placeholder="Apelido">
        <input type="text"  class="empresa" name="empresa" placeholder="Empresa">
        <input type="text"  class="cargo" name="cargo" placeholder="Cargo">
        <input type="text"  class="departamento" name="departamento" placeholder="Departamento">
        <input type="number"  class="cep" name="cep" placeholder="CEP" required>
        <input type="text"  class="pais" name="pais" placeholder="País" required>
        <input type="text"  class="endereco" name="endereco" placeholder="Endereço" required>
        <input type="text"  class="cidade" name="cidade" placeholder="Cidade" required>
        <input type="text"  class="estado" name="estado" placeholder="Estado" required>
        <input type="number"  class="celular" name="celular" placeholder="Celular" required>
        <input type="date"  class="nascimento" name="nascimento" placeholder="Nascimento" required>
        <input type="email"  class="email" name="email" placeholder="E-mail"  required>
        <input type="password" class="senha" name="senha" placeholder="Senha"  required>
        <input type="submit" class="acessar" value="Acessar">
        <input type="reset" class="resetar" value="Limpar">
    </form>
    <a href="../index.php" target="iframepainel"><button class="voltar">Voltar</button></a>
</body>
</html>