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
        <br>
        <section>
        <div class="container">
        <div class="texto-topo">
            <h1>Bem-vindo ao Site de Camisetas Personalizadas TeeSpeak</h1>
            <p>Personalize sua camiseta com frases únicas!</p>
            <h2>Inspire-se</h2>
            <br>
        </div>
            <div class="row">
                <div class="col-md-3">
                        <td>#496</td>
                        <img src="img/camisa11.jpg" class="img-fluid limiteimagem">
                        <p>Desculpe o atraso!</p>
                        <td>R$ 52,00</td>
                        <form action="processar_compra.php" method="post">
                            <input type="hidden" name="id" value="496">
                            <button type="submit" class="btn btn-success">Comprar</button>
                        </form>
                </div>
                <div class="col-md-3">
                    <td>#497</td>
                    <img src="img/camisa12.webp" class="img-fluid limiteimagem">
                    <p>Eu faço suspense</p>
                    <td>R$ 50,00</td>
                    <form action="processar_compra.php" method="post">
                        <input type="hidden" name="id" value="497">
                        <button type="submit" class="btn btn-success">Comprar</button>
                    </form>
                </div>
                <div class="col-md-3">
                    <td>#498</td>
                    <img src="img/camisa14.jpg" class="img-fluid limiteimagem">
                    <p>Bom gosto</p>
                    <td>R$ 52,00</td>
                    <form action="processar_compra.php" method="post">
                        <input type="hidden" name="id" value="498">
                        <button type="submit" class="btn btn-success">Comprar</button>
                    </form>
                </div>
                <div class="col-md-3">
                    <td>#499</td>
                    <img src="img/camisa15.jpg" class="img-fluid limiteimagem">
                    <p>Papai</p>
                    <td>R$ 50,00</td>
                    <form action="processar_compra.php" method="post">
                        <input type="hidden" name="id" value="499">
                        <button type="submit" class="btn btn-success">Comprar</button>
                    </form>
                </div>
                <div class="row">
                <div class="col-md-3">
                        <td>#500</td>
                        <img src="img/camiseta1.jpg" class="img-fluid limiteimagem">
                        <p>Eu não sou obrigada!</p>
                        <td>R$ 45,00</td>
                        <form action="processar_compra.php" method="post">
                            <input type="hidden" name="id" value="501">
                            <button type="submit" class="btn btn-success">Comprar</button>
                        </form>
                </div>
                <div class="col-md-3">
                    <td>#501</td>
                    <img src="img/camiseta2.webp" class="img-fluid limiteimagem">
                    <p>Impossível</p>
                    <td>R$ 50,00</td>
                    <form action="processar_compra.php" method="post">
                        <input type="hidden" name="id" value="501">
                        <button type="submit" class="btn btn-success">Comprar</button>
                    </form>
                </div>
                <div class="col-md-3">
                    <td>#502</td>
                    <img src="img/camiseta10.jpg" class="img-fluid limiteimagem">
                    <p>Não estou escutando</p>
                    <td>R$ 52,00</td>
                    <form action="processar_compra.php" method="post">
                        <input type="hidden" name="id" value="502">
                        <button type="submit" class="btn btn-success">Comprar</button>
                    </form>
                </div>
                <div class="col-md-3">
                    <td>#503</td>
                    <img src="img/camiseta4.jpg" class="img-fluid limiteimagem">
                    <p>Não Pira!</p>
                    <td>R$ 50,00</td>
                    <form action="processar_compra.php" method="post">
                        <input type="hidden" name="id" value="503">
                        <button type="submit" class="btn btn-success">Comprar</button>
                    </form>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <td>#504</td>
                    <img src="img/camiseta6.webp" class="img-fluid limiteimagem">
                    <p>Vestida de Felicidade!</p>
                    <td>R$ 50,00</td>
                    <form action="processar_compra.php" method="post">
                        <input type="hidden" name="id" value="504">
                        <button type="submit" class="btn btn-success">Comprar</button>
                    </form>
                </div>
                <div class="col-md-3">
                    <td>#505</td>
                    <img src="img/camiseta7.webp" class="img-fluid limiteimagem">
                    <p>Vovó</p>
                    <td>R$ 50,00</td>
                    <form action="processar_compra.php" method="post">
                        <input type="hidden" name="id" value="505">
                        <button type="submit" class="btn btn-success">Comprar</button>
                    </form>
                </div>
                <div class="col-md-3">
                    <td>#506</td>
                    <img src="img/camiseta8.webp" class="img-fluid limiteimagem">
                    <p>Se você cair...</p>
                    <td>R$ 50,00</td>
                    <form action="processar_compra.php" method="post">
                        <input type="hidden" name="id" value="506">
                        <button type="submit" class="btn btn-success">Comprar</button>
                    </form>
                </div>
                <div class="col-md-3">
                    <td>#507</td>
                    <img src="img/camiseta9.png" class="img-fluid limiteimagem">
                    <p>Saúde, paz e amor</p>
                    <td>R$ 50,00</td>
                    <form action="processar_compra.php" method="post">
                        <input type="hidden" name="id" value="507">
                        <button type="submit" class="btn btn-success">Comprar</button>
                    </form>
                </div>
            </div>
        </div>
        </section>
        <div class="container mt-4">
                <div class="text-center py-4 bg-light">
                    <h2>Gostaria de personalizar sua camiseta?</h2>
                    <br>
                    <p p class="text-justify text-info">Ter uma camiseta personalizada com frases únicas oferece mais do que apenas um item de vestuário.
                         É uma oportunidade de expressão criativa, onde você pode transmitir sua personalidade, 
                         humor ou até mesmo mostrar apoio a causas que você valoriza. 
                         Além disso, uma camiseta personalizada pode ser um presente especial e memorável para amigos e familiares,
                          pois mostra cuidado e atenção aos detalhes.</p>
                    <br>
                    <br>
                    <a href="personalize.php" class="btn btn-primary btn-lg">Personalizar Agora!</a>
                </div>
        </div>
        <br>
        <br>
        <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3 class="text-primary">Atacado</h3>
                    <p>Trabalhamos também com atacado.</p>
                </div>
                <div class="col-md-3">
                    <h3 class="text-success">Canecas</h3>
                    <p>Personalize sua caneca com a gente!</p>
                </div>
                <div class="col-md-3">
                    <h3 class="text-warning">Uniformes</h3>
                    <p>Deixe a sua empresa com a sua cara!</p>
                </div>
                <div class="col-md-3">
                    <h3 class="text-danger">Lembrancinhas</h3>
                    <p>Prepare uma surpresinha para seus colaboradores.</p>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <section class="mb-5" id="contato">
            <div class="container">
                <h2 class="text-center">Entre em contato conosco</h2>
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <form action="processar_contato.php" method="POST">
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" class="form-control" name="nome">
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label>Telefone</label>
                                <input type="phone" class="form-control" name="telefone">
                            </div>
                            <div class="form-group">
                                <label>Mensagem</label>
                                <textarea class="form-control" name="mensagem"></textarea>
                            </div>
                            <button type="submit" class="btn btn-dark">Enviar mensagem</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <footer class="bg-dark text-white text-center pt-4 pb-4">
            Todos os direitos reservados - TeeSpeak -
            <a href="https://www.linkedin.com/in/juliana-antunes-de-lima-585079248/" target="_blank" class="text-white">   Juliana Lima</a>
            <span class="text-muted mx-2">|</span>
            <a href="https://github.com/Delimajuh" target="_blank" class="text-white">GitHub da Juh</a>
            </footer>
        </section>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    </body>
</html>