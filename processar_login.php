<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    if ($usuario === "admin" && $senha === "senha") {
        header("Location: painel_administracao.php");
        exit();
    } else {
        echo "Credenciais incorretas. Tente novamente.";
    }
}
?>
