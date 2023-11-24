<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title> Painel do Admin - TeeSpeak</title>
    </head>
<body>
<?php
        include("conexao.php");
        ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand text-white" id="loja">TeeSpeak</a>
                <button class="navbar-toggler"></button>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#destaque">Produtos</a>
                    </li>
                </ul>
            </div>
        </nav>
    <!-- Adicione uma barra de navegação para acesso fácil a diferentes seções do painel de administração -->
    
    <div class="container">
        <h1>Painel de Administração - TeeSpeak</h1>
        <!-- Conteúdo do painel de administração -->
        <p>Bem-vindo, administrador! Aqui você pode gerenciar as atividades do site.</p>
        <!-- Adicione opções de gerenciamento, como adicionar produtos, gerenciar pedidos, etc. -->
     
        <!-- Exemplo de botão para sair/logout -->
        <a href="index.php" class="btn btn-danger">Sair</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>
</html>