<?php session_start(); if(!$_SESSION["user"]){header("Location: login.php");}?>
<!DOCTYPE html>
<html lang="PT-BR">
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
    <script src="assets/js/main.js"></script>
    <script src="assets/js/trocadiv.js"></script>
</head>
<body>
    <?php include_once("assets/templates/grayout.php")?>
    <?php include_once("assets/templates/menu.php")?>
    <div class="pf">
        <div class="banner">
            <div class="container">
                <div class="img-perfil">
                    <img src="assets/img/nubank.png" alt="Foto-perfil">
                </div>
                <div class="name">
                    <div class="texto">
                        <h1>NuBank</h1>
                    </div>
                    <div class="texto2">
                        <h2>(empresa de tecnologia)</h2> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="indices">
            <div class="info-opcao">
                <div class="opcao nav">
                    <a href="div1"><p>Sobre</p></a>
                </div>
                <div class="opcao nav">
                    <a href="div2"><p>Objetivos</p></a>
                </div>
                <div class="opcao nav">
                    <a href="div3"><p>Nossos serviços</p></a>
                </div>
                <div class="opcao nav">
                    <a href="div4"><p>Vagas Disponíveis</p></a>
                </div>
                <div class="opcao">
                    <a href="cadVagas.php"><p>Cadastrar vaga</p></a>
                </div>
            </div>
        </div>
        <div id="div1">
            <div class="info-pessoais">
                <div class="info">
                    <p>Somos uma empresa de tecnologia com espírito jovem e inovador que desenvolve soluções simples, seguras e digitais para sua vida financeira.
                        O jeito NU de fazer as coisas nasceu do inconformismo e se transformou numa força para construir produtos justos e de forma transparente para você.
                        Seu dinheiro vai estar na nossa conta, mas o controle dele será todo seu. E se você precisar de ajuda, estaremos aqui, 24h por dia, prontos para ajudar com os nossos especialistas.
                        Somos uma empresa construída por e para pessoas. E, por isso, estamos confiantes que o Nubank é para você.</p>
                </div>
                <div class="negrito margin">
                    <div class="info-sub">
                        <p>No Nubank, acreditamos que testar os produtos com clientes e fazer ajustes conforme recebemos feedbacks é um bom modelo.</p>
                    </div>
                </div> 
            </div>
        </div>
        <div id="div2">
            <div class="info-pessoais">
                <div class="info-sub2">
                    <p> Combater a baixa bancarização no país, trazendo opções mais acessíveis e desburocratizadas.
                    Empoderar pessoas frente ao mercado financeiro e ter um atendimento diferenciado também estão entre os pontos que foram decididos no início e hoje estão no coração de como a empresa funciona. </p>
                </div>
            </div>
        </div>
        <div id="div3">
            <div class="info-pessoais">
                <div class="service">
                    <p>Começamos com o roxinho, o cartão de crédito sem anuidade do Nubank, e hoje já oferecemos outros produtos que te deixam no controle de sua vida financeira. Conheça cada um deles.<br>
                    <div class="negrito margin">
                        <p>• Conta digital: Já lançamos também a NuConta, conta digital do Nubank sem tarifas de manutenção, o Nubank Rewards, nosso programa de benefícios, e outros produtos incríveis.</p>
                    </div>
                    <div class="sub-topico">
                        <p> 1. Cartão de crédito: Tudo isso começou com nosso roxinho, um cartão de crédito sem anuidades e totalmente controlado através do app Nubank.<br>
                            2. Cartão de débito: Para fazer compras com o saldo da NuConta. Se você quiser ter um cartão com a função débito ligado a sua NuConta, basta solicitar o seu através do nosso aplicativo – não cobraremos nada por isso.<br>
                            3. Transferências: Ilimitadas e gratuitas para outros bancos (TED) e outras NuContas. Não cobramos nada e nem estipulamos número máximo de transações.</p>
                    </div>
                    <div class="negrito margin">
                        <p>• Empréstimo: Quem já tiver a opção Empréstimo liberada verá a opção nos atalhos e dentro da NuConta, dentro do app Nubank;</p>
                        </div>
                    <div class="topico2">
                        <p> 1. Basta selecionar a quantia desejada dentro desse valor e escolher em quantas parcelas você deseja pagar o empréstimo;<br>
                            2. Durante a simulação, você escolhe o primeiro dia de pagamento. Ele pode ser até 90 dias depois do dia da contratação e, então, o cliente tem até 24 meses para terminar de pagar o empréstimo. Não existe prazo mínimo para começar;<br>
                            3. A taxa de juros e o valor mensal de cada parcela aparecem na hora. Se você concordar com os valores, é só confirmar;<br>
                            4. Pronto. O valor pedido é transferido direto para a NuConta.</p>
                    </div>
                    <div class="negrito margin">
                    <p> • A NuConta é gratuita e está disponível para todos os brasileiros – para abrir a sua não é necessário passar por uma análise de perfil e crédito. Os únicos requisitos são: ter no mínimo 18 anos, ser residente do Brasil e ter um smartphone compatível com os nossos aplicativos para Android (versão 4 ou superior) ou iOS (versão 9 ou superior).</p>
                    </div>
                    <div class="negrito margin">
                        <p>• Conta PJ Nubank: Em julho de 2019, começamos os testes da nossa Conta PJ, uma conta digital focada em pessoas jurídicas e pequenas empresas. A versão inicial da nossa conta PJ terá algumas funções similares às oferecidas que a NuConta oferece – como transferências gratuitas para outros bancos e entre contas do Nubank, pagamento de boletos e tributos, depósito via boleto e a função “cobrar dinheiro“.</p>
                    </div>
                </p>
                </div>
            </div>
        </div>
        <div id="div4">
        <div class="info-pessoais">
            <div class="service">
                <div class="negrito margin">
                    <p>• Especialista de Dados</p>
                </div>
                    <div class="topico2">
                    <p> • Liderar projetos de dados desde o mapeamento de requisitos, até a modelagem do banco e disponibilização dos dados;<br>
                        • Contribuir para o design, documentação, manutenção, monitoramento e otimização de nossos códigos e ferramentas de dados.<br>
                        • Identificar oportunidades de melhorias na nossa plataforma de ETL/ELT.<br>
                        • Traduzir as necessidades de negócios em soluções alinhadas com as ferramentas e estratégias da plataforma de dados;<br>
                        • Negociar com stakeholders uma estratégia de dados que gere grande impacto, sempre alinhada com a governança do Nubank;<br>
                        • Atuar em mentoria de membros da equipe e na alfabetização de dados no Nubank.</p>
                    </div>
                <div class="sub-topico">
                <div class="negrito margin">
                    <p>• Habilidades e experiência desejadas</p>
                </div>
                <div class="topico3">
                        • Ser apaixonado por dados;<br>
                        • Ser capaz de escrever queries em SQL para resolver problemas de alta complexidade de forma otimizada;<br>
                        • Experiência em implementação e manutenção de pipelines de dados;<br>
                        • Noções sobre boas práticas de engenharia de software (Ex. Documentação, testes automatizados, código limpo, etc);<br>
                        • Experiência em programação com linguagens de propósito genérico (Ex. Python, R, Scala, etc.)<br>
                        • Conhecimentos sobre diferentes técnicas de arquitetura e modelagem de Banco de Dados para fins analíticos (Ex. Data Mart, Data Lake, Data Warehouse, etc.)<br>
                        • Capacidade de abstrair conceitos de negócios em métricas quantitativas (Ex. KPIs, OKRs, etc)<br>
                        • Boas habilidades de comunicação para lidar com as partes interessadas de áreas técnicas e áreas de negócios;<br>
                        • Conhecimento em ferramentas de visualização de dados, como Looker, Power BI,Tableau, etc.<br>
                        • Inglês Avançado (Nível B2+ de acordo com CEFR)<br>
                </div>
                    <div class="negrito margin">
                    <p>• Benefícios</p>
                    </div>
                    <div class="topico3">
                        • Seguros de saúde, odontológico e de vida;<br>
                        • Vale refeição;<br>
                        • Assistência de transporte;<br>
                        • 30 dias de férias pagas;<br>
                        • Chance de ganhar capital no Nubank;<br>
                        • Parceria de estacionamento - estacionamento com desconto em nosso escritório;<br>
                        • Estacionamento gratuito para bicicletas com chuveiros disponíveis;<br>
                        • NuCare - Nosso programa de assistência à saúde mental e bem-estar;<br>
                        • NuLanguage - Nosso programa de aprendizagem de línguas;<br>
                        • Parceria Gympass;<br>
                        • Licenças estendidas de maternidade e paternidade;<br>
                        • Auxílio-creche;<br>
                        • Entrevistas e integração atualmente são feitas virtualmente devido ao COVID-19. Todos os novos funcionários e a nossa atual equipe continuarão trabalhando em casa até que seja seguro retornar aos nossos escritórios. Se/quando o retorno for necessário, contamos com uma equipe dedicada à mobilidade global e firmamos parcerias com as melhores empresas do mercado para garantir o bom andamento dos processos. Também oferecemos um pacote de realocação muito competitivo para contratações internacionais<br> 
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>