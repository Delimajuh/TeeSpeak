<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>TeeSpeak</title>
        <style>
        .camiseta {
            position: relative;
            width: 500px;
            height: 450px;
            margin: 50px auto;
            background-image: url('img/camiseta000.png');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .frase {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 20px;
            text-align: center;
        }
    </style>
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
                        <a class="nav-link text-white" href="index.php">Home</a>
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
        <div class="container mt-5">
        <h1>Personalize sua camiseta</h1>
        <div class="col-md-6">
        <form>
            <div class="form-group">
                <label for="frase">Digite a frase:</label>
                <input type="text" class="form-control" id="frase">
            <div class="form-group">
                <label for="cores">Escolha a cor:</label>
                <select class="form-control" id="cores">
                    <option value="azul">Azul</option>
                    <option value="vermelho">Vermelho</option>
                    <option value="verde">Verde</option>
                    <option value="amarelo">Amarelo</option>
                    <option value="preto">Preto</option>
                    <option value="branco">Branco</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tamanhos">Escolha o tamanho:</label>
                <select class="form-control" id="tamanhos">
                    <option value="pp">PP</option>
                    <option value="p">P</option>
                    <option value="m">M</option>
                    <option value="g">G</option>
                    <option value="gg">GG</option>
                    <option value="xg">XG</option>
                </select>
            </div>
            
             
        </form>
        <button type="button" onclick="exibirFrase()">Exibir na Camiseta</button>
                <form action="processar_compra.php" method="post">
                    <input type="hidden" name="id" id="1000">
                    <button type="submit" class="btn btn-success">Comprar</button>
                </form>
        </div>
        <div class="col-md-6">
            <section>
            <div class="camiseta">
            <div class="frase" id="fraseExibida">Frase Personalizada</div>
            </div>
            </section> 
        </div>
    </div>
    </div>
    
        <section>
        <footer class="bg-dark text-white text-center pt-4 pb-4">
            &copy Todos os direitos reservados - TeeSpeak -
            <a href="https://www.linkedin.com/in/juliana-antunes-de-lima-585079248/" target="_blank" class="text-white">   Juliana Lima</a>
            <span class="text-muted mx-2">|</span>
            <a href="https://github.com/Delimajuh" target="_blank" class="text-white">GitHub da Juh</a>
            </footer>
        </section>
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script>
            // Função para exibir a frase digitada na camiseta
            function exibirFrase() {
            var frase = document.getElementById('frase').value;
            document.getElementById('fraseExibida').innerText = frase;
            }
            </script>
        <script src="js/script.js"></script>
</body>
</html>

