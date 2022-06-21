<div id="navbar">
    <div class="container">
        <div class="flex">
            <div class="logos">
                <a href="index.php" class="jobs">
                    <img src="assets/img/jobshub.png" alt="Logo JobsHub">
                </a>
                <div class="fatec">
                    <img src="assets/img/fatec.png" alt="Logo Fatec">
                </div>
            </div>
            <nav class="menu">
                <a href="index.php" class="txtnav">VAGAS</a>
                <a href="#" class="txtnav">SOBRE NÓS</a>
                <a href="perfil-empresa.php" class="txtnav">SOU EMPRESA</a>
                <?php error_reporting(0); if(!$_SESSION["user"]): ?>
                <a href="login.php" class="acessar">ACESSAR</a>
                <?php else: ?>
                    <a href="perfil-usuario.php" class="acessar">Meu perfil</a>
                <?php endif ?>
                <a href="#menu" class="openMenu"><i class="fas fa-align-right"></i></a>
            </nav>
        </div>
    </div>
</div>