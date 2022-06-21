<?php session_start(); if(isset($_SESSION["user"])){header("Location: perfil-usuario.php");}?>
<!DOCTYPE html>
<html lang="en">
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
    <div class="fundo"></div>
    <form method="post" action="functions/registrar.php" id="quadrado">
        <div id="logo">
            <!-- Logo -->
            <a href="index.php">
                <img src="assets/img/jobshub.png" alt="Logo JobsHub">
            </a>
        </div>

        <div id="usuario">
            <div>
                <!-- Caixa de texto do usuário -->
                <label>Nome
                    <input type="text" name="nome">
                </label>
            </div>

            <div>
                <!-- Caixa de texto do usuário -->
                <label>E-mail
                    <input type="text" name="email">
                </label>
            </div>

            <div>
                <!-- Caixa de texto do usuário -->
                <label>CPF
                    <input type="text" name="cpf">
                </label>
            </div>

            <div>
                <!-- Caixa de Texto senha --> 
                <label>Senha
                    <input type="password" name="password">
                </label>
            </div>
            
            <div>
                <!-- Caixa de Texto senha --> 
                <label>Confirmar Senha
                    <input type="password" name="repeated-password">
                </label>
            </div>
        </div>
                
        <p class="ou">Ou</p>

        <div id="redes">
            <img src="assets/img/google.png" alt="Google">
            <img src="assets/img/facebook.png" alt="Facebook">
        </div>

        <button type="submit" id="botao">Registrar
            <!-- Botão acessar -->
        </button>
        <div id="conta">
            <p>Já tem uma conta?
                <a href="login.php" class="criar">Acesse aqui</a>
            </p>
        </div>
    
        <div id="imagefatec">
            <img class="imagefatec" src="assets/img/fatec.png" alt="Logo Fatec">
        </div>
    </form>
</body>
</html>