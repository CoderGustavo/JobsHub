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
    </head>
<body>
    <div class="fundo"></div>
    <form method="POST" action="functions/logar.php" id="quadrado">
        <div id="logo">
            <!-- Logo -->
            <a href="index.php">
                <img src="assets/img/jobshub.png">
            </a>
        </div>
        <div id="usuario">
            <?php  if(!empty($_SESSION["error"])): ?>
                <p class="error-message"><?php echo $_SESSION["error"]?></p>
            <?php $_SESSION["error"] = null; endif ?>
            <div>
                <!-- Caixa de texto do usuário -->
                <label>E-mail, CPF ou RA Fatec
                    <input type="text" name="user">
                </label>
            </div>
            <div>
                <!-- Caixa de Texto senha --> 
                <label>Senha
                    <input type="password" name="password">
                </label>
            </div>
        </div> 
        <p class="ou">Ou</p>
        <div id="redes">
            <img src="assets/img/google.png" alt="">
            <img src="assets/img/facebook.png" alt="">        
        </div>
        <button type="submit" id="botao">Acessar
            <!-- Botão acessar -->
        </button>
        <div id="conta">
            <p>Ainda não possui uma conta?<br>
                <a href="register.php" class="criar">Crie agora mesmo</a>
            </p>
        </div>        
        <img class="imagefatec" src="assets/img/fatec.png" alt="">
    </form>
</body>
</html>