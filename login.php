<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>TeeSpeak</title>
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
                        <a class="nav-link text-white" href="login.php">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#produtos">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#destaque">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#contato">Contato</a>
                    </li>
                </ul>
            </div>
        </nav>
        <h1>Login</h1>
        <form action="processar_login.php" method="post">
            <label for="usuario">Usuário:</label>
            <input type="text" name="usuario" required>

            <label for="senha">Senha:</label>
            <input type="password" name="senha" required>

            <button type="submit">Entrar</button>
        </form>
        
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    </body>
</html>