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
                <h1>Cadastro de Vagas</h1>
            </div>
            <div class="retangulo-cad">
                <div class="tudo">
                    <div>
                        <label>Descrição Resumida
                            <input type="text">
                        </label>
                    </div><br>
                    <div>
                        <label>Descrição Completa
                            <input type="text">
                        </label>
                    </div><br>
                    <div>
                        <label>Salário Mínimo
                            <input type="text">
                        </label>
                    </div><br>
                    <div>
                        <label>Salário Máximo
                            <input type="text">
                        </label>
                    </div><br>
                    <div>
                        <label>Tipo de Vagas</label>
                        <select name="tipo de vagas" id="tipo de vagas">
                            <option value="Estágio">Estágio</option>
                            <option value="Definitivo">Definitivo</option>
                        </select>
                    </div><br>
                    <div>
                        <label>Habilidades Obrigatórias</label>
                        <select>
                            <option value="h1">Habilidade 1</option>
                            <option value="h2">Habilidade 2</option>
                            <option value="h3">Habilidade 3</option>
                            <option value="h4">Habilidade 4</option>
                            <option value="h5">Habilidade 5</option>
                        </select>
                    </div><br>
                    <div>
                        <label>Habilidades Diferenciais</label>
                        <select>
                            <option value="h1">Habilidade 1</option>
                            <option value="h2">Habilidade 2</option>
                            <option value="h3">Habilidade 3</option>
                            <option value="h4">Habilidade 4</option>
                            <option value="h5">Habilidade 5</option>
                        </select>
                    </div><br>
                    <div>
                        <label>Carga Horária
                        <input type="time" id="appt" name="appt"
                        min="09:00" max="18:00" required>
                        </label>
                    </div><br>
                    <div>
                        <label>Qual a atividade será exercida?
                        <input type="text">
                        </label>
                    </div><br>
                    <div>
                        <label>Quantidade máxima de candidatos
                        <input type="text">
                        </label>
                    </div><br>
                    <div>
                        <label>Data inicial da cadidatura
                        <input type="date" name="data" id="data">
                        </label>
                    </div><br>
                    <div>
                        <label>Data final da candidatura
                        <input type="date" name="data" id="data">
                        </label>
                    </div><br>
                    <button type="submit" id="botao">Lançar vaga</button>
                </div>
            </div>
        </div>
</body>
</html>