<?php
require_once 'conexao.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["email"];
    $senha = md5($_POST["password"]);

    $sql = "SELECT * FROM usuarios WHERE email = :usuario AND senha = :senha";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        $_SESSION["email"] = $row["email"];
        $_SESSION["nome"] = $row["nome"]; 
        header("Location: dashboard/index.php");
        exit();
    } else {
        header("Location: index.php");
        exit();
    }
}
?>
