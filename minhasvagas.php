<?php session_start(); if(!$_SESSION["user"]){header("Location: login.php");}?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de vagas</title>
    <link rel="stylesheet" type="text/css" href="assets/css/regraslista.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css">
    <script src="assets/js/main.js"></script>
</head>
<body>
    <?php include_once("assets/templates/grayout.php")?>
    <?php include_once("assets/templates/menu.php")?>
    <main>
        <div class="container">
            <div class="titulo">
                <h1>Minhas Vagas</h1>
            </div>
            <div class="vagas">
                <div class="retangulo">
                    <div class="title">
                        <div>
                            <h2 class="title1">Título da Vaga</h2>
                            <h3 class="title2">Nome da Empresa</h3>
                        </div>
                        <div class="status">
                            <span>Cancelada</span>
                        </div>
                    </div>
                    <div class="botao">
                        <div>
                            <h5 class="habtitle">Habilidades Obrigatórias</h5>
                            <div class="habilidades">
                                <span>CSS</span>
                                <span>HTML5</span>
                                <span>JavaScript</span>
                            </div>
                        </div>
                        <div class="botao1">
                            <a href="#" class="acessar">Ver Detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="retangulo">
                    <div class="title">
                        <div>
                            <h2 class="title1">Título da Vaga</h2>
                            <h3 class="title2">Nome da Empresa</h3>
                        </div>
                        <div class="status">
                            <span>Cancelada</span>
                        </div>
                    </div>
                    <div class="botao">
                        <div>
                            <h5 class="habtitle">Habilidades Obrigatórias</h5>
                            <div class="habilidades">
                                <span>CSS</span>
                                <span>HTML5</span>
                                <span>JavaScript</span>
                            </div>
                        </div>
                        <div class="botao1">
                            <a href="#" class="acessar">Ver Detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="retangulo">
                    <div class="title">
                        <div>
                            <h2 class="title1">Título da Vaga</h2>
                            <h3 class="title2">Nome da Empresa</h3>
                        </div>
                        <div class="status">
                            <span>Cancelada</span>
                        </div>
                    </div>
                    <div class="botao">
                        <div>
                            <h5 class="habtitle">Habilidades Obrigatórias</h5>
                            <div class="habilidades">
                                <span>CSS</span>
                                <span>HTML5</span>
                                <span>JavaScript</span>
                            </div>
                        </div>
                        <div class="botao1">
                            <a href="#" class="acessar">Ver Detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="retangulo">
                    <div class="title">
                        <div>
                            <h2 class="title1">Título da Vaga</h2>
                            <h3 class="title2">Nome da Empresa</h3>
                        </div>
                        <div class="status">
                            <span>Cancelada</span>
                        </div>
                    </div>
                    <div class="botao">
                        <div>
                            <h5 class="habtitle">Habilidades Obrigatórias</h5>
                            <div class="habilidades">
                                <span>CSS</span>
                                <span>HTML5</span>
                                <span>JavaScript</span>
                            </div>
                        </div>
                        <div class="botao1">
                            <a href="#" class="acessar">Ver Detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="retangulo">
                    <div class="title">
                        <div>
                            <h2 class="title1">Título da Vaga</h2>
                            <h3 class="title2">Nome da Empresa</h3>
                        </div>
                        <div class="status">
                            <span>Cancelada</span>
                        </div>
                    </div>
                    <div class="botao">
                        <div>
                            <h5 class="habtitle">Habilidades Obrigatórias</h5>
                            <div class="habilidades">
                                <span>CSS</span>
                                <span>HTML5</span>
                                <span>JavaScript</span>
                            </div>
                        </div>
                        <div class="botao1">
                            <a href="#" class="acessar">Ver Detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="retangulo">
                    <div class="title">
                        <div>
                            <h2 class="title1">Título da Vaga</h2>
                            <h3 class="title2">Nome da Empresa</h3>
                        </div>
                        <div class="status">
                            <span>Cancelada</span>
                        </div>
                    </div>
                    <div class="botao">
                        <div>
                            <h5 class="habtitle">Habilidades Obrigatórias</h5>
                            <div class="habilidades">
                                <span>CSS</span>
                                <span>HTML5</span>
                                <span>JavaScript</span>
                            </div>
                        </div>
                        <div class="botao1">
                            <a href="#" class="acessar">Ver Detalhes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>