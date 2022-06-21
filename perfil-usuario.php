<?php session_start(); if(!$_SESSION["user"]){header("Location: login.php");}?>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/trocadiv.js"></script>
    <script src="assets/js/modal-edit-perfil.js"></script>
    <script src="assets/js/addCampo.js"></script>
</head>
<body>
    <?php include_once("assets/templates/grayout.php")?>
    <?php include_once("assets/templates/menu.php")?>
    <div class="pf">
        <div class="banner">
            <div class="container">
                <div class="img-perfil">
                    <img src="assets/img/perfil.jpg" alt="Foto-perfil">
                </div>
                <div class="name">
                    <h1><?php echo $_SESSION["user"]->name?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="indices">
            <div class="info-opcao">
                <div class="opcao tamanho nav">
                    <a href="div1"><p>Informações pessoais</p></a>
                </div>
                <div class="opcao margin nav">
                    <a href="div2"><p>Curriculo</p></a>
                </div>
                <div class="opcao margin nav">
                    <a href="div3"><p>Sobre mim</p></a>
                </div>
                <div class="opcao margin">
                    <a href="minhasvagas.php"><p>Minhas Vagas</p></a>
                </div>
                <div class="opcao margin">
                    <a href="functions/logout.php"><p>Deslogar</p></a>
                </div>
            </div>
        </div>
        <div id="div1">
            <div class="info-pessoais">
                <div class="info-left">
                    <div class="info">
                        <div class="negrito-info">
                            <p>Nome:</p>
                        </div>
                        <p>Igor Altafini Teodoro</p>
                    </div>
                    <div class="info">
                        <div class="negrito-info">
                            <p>Idade:</p>
                        </div>
                        <p>18 anos</p>
                    </div>
                    <div class="info">
                        <div class="negrito-info">
                            <p>Data Nascimento:</p>
                        </div>
                        <p>24/09/2003</p>
                    </div>
                    <div class="info">
                        <div class="negrito-info">
                            <p>Estado civil:</p>
                        </div>
                        <p>Solteiro</p>
                    </div>
                    <div class="info">
                        <div class="negrito-info">
                            <p>Email de Contado:</p>
                        </div>
                        <p>Igorteodoro2409@gmail.com</p>
                    </div>
                    <div class="info">
                        <div class="negrito-info">
                            <p>Numero de Contado:</p>
                        </div>
                        <p>(19) 9 99781-3160</p>
                    </div>
                </div>
                <div class="info-right">
                    <div class="info">
                        <div class="negrito-info">
                            <p>País:</p>
                        </div>
                        <p>Brasil</p>
                    </div>
                    <div class="info">
                        <div class="negrito-info">
                            <p>Estado:</p>
                        </div>
                        <p>São paulo</p>
                    </div>
                    <div class="info">
                        <div class="negrito-info">
                            <p>Cidade:</p>
                        </div>
                        <p>Itapira</p>
                    </div>
                    <div class="info">
                        <div class="negrito-info">
                            <p>CEP:</p>
                        </div>
                        <p>13971-242</p>
                    </div>
                    <div class="info">
                        <div class="negrito-info">
                            <p>Bairro:</p>
                        </div>
                        <p>Conjunto Habitacional Humberto Carlos Passarela</p>
                    </div>
                    <div class="info margin-bottom">
                        <div class="negrito-info">
                            <p>Rua:</p>
                        </div>
                        <p>Rua Doutor Paulo de Almeida Serra</p>
                    </div>
                </div>
                <div class="edit">
                    <div class="img-link">
                        <button id="myBtn">
                            <img src="assets/img/edit.png" alt="icon">
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="div2">
            <div class="info-pessoais">
                <div class="info-bottom-curriculo margin-top">
                    <div class="negrito"><p>Objetivo:</p></div>
                    <div class="sub-topico">
                        <ul>
                            <li>
                                <p>Em busca de um emprego na área de T.I, me coloco à disposição da empresa, para desenvolver minhas habilidades na área e assim contribuindo para o meu sucesso. </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="info-bottom-curriculo">
                    <div class="negrito"><p>Formação acadêmica:</p></div>
                    <div class="sub-topico">
                        <ul>
                            <li>
                                <div class="info-acade">
                                    <h4>Instituição:</h4>
                                    <p>ETEC João Maria Stevanatto</p>
                                    <h4>Curso:</h4>
                                    <p>Ensino Médio Integrado ao Técnico em Desenvolvimento de Sistemas</p>
                                    <h4>Cidade:</h4>
                                    <p>Itapira/SP</p>
                                </div>
                                <div class="date-acade-geral">
                                    <div class="date-acade">
                                        <h4>Data de inicio:</h4>
                                        <p>10/02/2019</p>
                                    </div>
                                    <div class="date-acade">
                                        <h4>Data de termino:</h4>
                                        <p>10/02/2019</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info-acade">
                                    <h4>Instituição:</h4>
                                    <p>Fatec Dr. Ogari de Castro Pacheco</p>
                                    <h4>Curso:</h4>
                                    <p>Ensino Médio Integrado ao Técnico em Desenvolvimento de Sistemas</p>
                                    <h4>Cidade:</h4>
                                    <p>Itapira/SP</p>
                                </div>
                                <div class="date-acade-geral">
                                    <div class="date-acade">
                                        <h4>Data de inicio:</h4>
                                        <p>10/02/2022</p>
                                    </div>
                                    <div class="date-acade">
                                        <h4>Data de termino:</h4>
                                        <p>Cursando</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="info-bottom-curriculo">
                    <div class="negrito"><p>Habilidade:</p></div>
                    <div class="sub-topico">
                        <ul>
                            <li><p>Proativo</p></li>
                            <li><p>Flexível</p></li>
                        </ul>
                    </div>
                </div>
                <div class="info-bottom-curriculo margin-bottom">
                    <div class="negrito"><p>Experiencia:</p></div>
                    <div class="sub-topico">
                        <ul>
                            <li>
                                <div class="info-acade">
                                    <h4>Empresa:</h4>
                                    <p>ETEC João Maria Stevanatto</p>
                                    <h4>Cargo:</h4>
                                    <p>Estagiario TI</p>
                                    <h4>Cidade:</h4>
                                    <p>Itapira/SP</p>
                                </div>
                                <div class="date-acade-geral">
                                    <div class="date-acade">
                                        <h4>Data de inicio:</h4>
                                        <p>10/06/2021</p>
                                    </div>
                                    <div class="date-acade">
                                        <h4>Data de termino:</h4>
                                        <p>12/12/2021</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="edit">
                    <div class="img-link">
                        <button id="btn-curriculo">
                            <img src="assets/img/edit.png" alt="icon">
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="div3">
            <div class="sobre-mim">
                <div class="titulo-sobre-min">
                    <h2>Um pouco de mim</h2>
                </div>
                <div class="text-sobre-min">
                    <p>Sim, curvo-me ante a beleza de ser
                        às vezes zombo de mim mesmo ao término de uma
                        inteligente e aguçada constatação.
                        Ermitão do insólito, poeta da dúvida
                        Entretanto duvido a dúvida por ser dúvida
                        fruto de uma premissa lógica
                        Mas nego, afirmo e não duvido de nada
                        Prisioneiro sem grade desse silêncio eterno.</p>
                </div>
                <div class="edit">
                    <div class="img-link">
                        <button id="btn-texto">
                            <img src="assets/img/edit.png" alt="icon">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close">&times;</span>
                    <h2>Editar Perfil</h2>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="titulo-caixa">
                        <h1>Informações pessoais</h1>
                    </div>
                    <div class="caixa-texto">
                        <h3>Nome:</h3>
                        <input type="text" placeholder="Digite o seu nome completo">
                    </div>
                    <div class="caixa-texto">
                        <h3>Idade:</h3>
                        <input type="text" placeholder="Digite o sua Idade">
                    </div>
                    <div class="caixa-texto">
                        <h3>Data Nascimento:</h3>
                        <input type="text" placeholder="Digite o sua Data de Nascimento">
                    </div>
                    <div class="caixa-texto">
                        <h3>Estado civil:</h3>
                        <input type="text" placeholder="Digite o seu Estado civil">
                    </div>
                    <div class="caixa-texto">
                        <h3>E-mail de Contado:</h3>
                        <input type="text" placeholder="Digite o seu e-mail">
                    </div>
                    <div class="caixa-texto">
                        <h3>Numero de Contado:</h3>
                        <input type="text" placeholder="Digite o seu Numero de contato">
                    </div>
                    <div class="caixa-texto">
                        <h3>País:</h3>
                        <input type="text" placeholder="Digite o seu país onde está morando">
                    </div>
                    <div class="caixa-texto">
                        <h3>Estado:</h3>
                        <input type="text" placeholder="Digite o seu Estado onde está morando">
                    </div>
                    <div class="caixa-texto">
                        <h3>Cidade:</h3>
                        <input type="text" placeholder="Digite o sua cidade onde está morando">
                    </div>
                    <div class="caixa-texto">
                        <h3>CEP:</h3>
                        <input type="text" placeholder="Digite o CEP da sua rua">
                    </div>
                    <div class="caixa-texto">
                        <h3>Bairro:</h3>
                        <input type="text" placeholder="Digite o Bairro onde está morando">
                    </div>
                    <div class="caixa-texto">
                        <h3>Rua:</h3>
                        <input type="text" placeholder="Digite a rua onde está morando">
                    </div>
                    <input type="submit" value="Salvar alterações">
                </form>
            </div>
            <div class="modal-footer">
            <h3>JobsHub</h3>
            </div>
        </div>
    </div>
    <div id="modal-curriculo" class="modal-curriculo">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close-curriculo">&times;</span>
                <h2>Editar Perfil</h2>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="titulo-caixa">
                        <h1>Informações Curriculo</h1>
                    </div>
                    <div class="caixa-texto">
                        <h3>Objetivo:</h3>
                        <input type="text" placeholder="Digite um pequeno parágrafo sobre o seu objetivo">
                    </div>
                    <div id="caixatexto" class="caixa-texto">
                        <div class="form-grupo-formacao">
                            <h3>Formação:</h3>
                            <div class="margin-right margin-top font-h4 width-left">
                                <h4>Instituição</h4>
                                <input type="text" id="inst1" name="inst1" placeholder="Digite o nome da Instituição">
                                <h4>Curso</h4>
                                <input type="text" id="curso1" name="curso1" placeholder="Digite o nome do curso realizado">
                                <h4>Cidade</h4>
                                <input type="text" id="cidade1" name="cidade1" placeholder="Digite o nome da cidade em que estudou este curso">
                                <div class="date-input">
                                    <div class="date">
                                        <p>Data de inicio</p>
                                        <input type="date" id="date1" name="date1">
                                    </div>
                                    <div class="date">
                                        <p>Data de termino</p>
                                        <input type="date" id="datetermino1" name="datetermino1">
                                    </div>
                                </div>
                                <button type="button" onclick="controleFormacao()">Adicionar mais formações</button>
                            </div>
                        </div>
                    </div>
                    <div id="habilidade" class="caixa-texto">
                        <div class="form-grupo-formacao">
                            <h3>Habilidade:</h3>
                            <input type="text" id="habilidade1" name="habilidade1" placeholder="Digite suas habilidades">
                            <button type="button" onclick="controleHabilidade()">Adicionar mais habilidades</button>
                        </div>
                    </div>
                    <div id="experiencia" class="caixa-texto">
                        <div class="form-grupo-formacao">
                            <h3>Experiencia</h3>
                            <div class="margin-right margin-top font-h4 width-left">
                                <h4>Empresa</h4>
                                <input type="text" id="empresa1" name="empresa1" placeholder="Digite o nome da Empresa">
                                <h4>Cargo</h4>
                                <input type="text" id="cargo1" name="cargo1" placeholder="Digite o nome do cargo que exerceu">
                                <h4>Cidade:</h4>
                                <input type="text" id="cidade1" name="cidade1" placeholder="Digite o nome da cidade que exerceu nesta empresa">
                                <div class="date-input">
                                    <div class="date">
                                        <h4>Data de inicio</h4>
                                        <input type="date" id="datainicio1" name="datainicio1">
                                    </div>
                                    <div class="date">
                                        <h4>Data de termino</h4>
                                        <input type="date" id="datatermino1" name="datatermino1">
                                    </div>
                                </div>
                                <button type="button" onclick="controleExperiencia()">Adicionar mais Experiencias</button>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Salvar alterações">
                </form>
            </div>
            <div class="modal-footer">
            <h3>JobsHub</h3>
            </div>
        </div>
    </div>
    <div id="modal-texto" class="modal-texto">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close-texto">&times;</span>
                <h2>Editar Perfil</h2>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="titulo-caixa">
                        <h1>Sobre mim</h1>
                    </div>
                    <div class="caixa-texto">
                        <h3>texto sobre mim:</h3>
                        <textarea name="texto" id="texto"></textarea>
                    </div>
                    <input type="submit" value="Salvar alterações">
                </form>
            </div>
            <div class="modal-footer">
            <h3>JobsHub</h3>
            </div>
        </div>
    </div>
</body>
<script src="assets/js/addCampo.js"></script>
<script src="assets/js/modal-edit-perfil.js"></script>
</html>