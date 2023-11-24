<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    $productId = $_POST["id"];
    
    echo "Compra do produto $productId realizada com sucesso!";
} else {
   
    http_response_code(400);
    echo "Erro: Informações do produto ausentes na solicitação.";
}
?>
