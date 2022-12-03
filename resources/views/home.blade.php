@include('template.header')
@include('template.nav')
<div class="banner">
</div>
<main class="container text-center mt-4 pt-4">
    <h2 class="fw-bold" style="font-family: Nunito; font-size: 35px;">Faça parte dos nossos projetos</h2>
    <p class="text-light">Se inscreva abaixo caso queira participar de projetos, contribuir conosco ou propor um novo projeto.</p>
    <div class="row py-4 mb-4">
        <div class="col mb-2">
            <div class="card-formulario">
                <div class="education">
                    <img src="../img/education.svg" alt="">
                    <h5>Estudante</h5>
                </div>
                <p>Se você é aluno unisales e tem interesse em participar em um dos nossos projetos, faça sua inscrição e logo entraremos em contato.</p>
                <a class="btn btn-outline-primary" href="./estudante">Me inscrever agora</a>
            </div>
        </div>
        <div class="col mb-2">
            <div class="card-formulario">
                <div class="education">
                    <img src="../img/hands.svg" alt="">
                    <h5>Colaborador</h5>
                </div>
                <p>Se você Pessoa Física ou Pessoa Jurídica quer participar de um dos nossos projetos, inscreva-se será um prazer tê-los conosco.</p>
                <a class="btn btn-outline-primary" href="./colaborador">Me inscrever agora</a>
            </div>
        </div>
        <div class="col mb-2">
            <div class="card-formulario">
                <div class="education">
                    <img src="../img/idea.svg" alt="">
                    <h5>Proponente</h5>
                </div>
                <p>Você tem uma ideia e quer transformá-la em realidade, conte com a nossa equipe Unitech.</p>
                <a class="btn btn-outline-primary" href="./proponente">Me inscrever agora</a>
            </div>
        </div>
    </div>

    <p class="fs-5 text-light pt-4">
        Como o Laboratório faz parte dos cursos de Tecnologia da Informação e Computação do Unisales - Centro Universitário
        Salesiano é importante listar algumas áreas onde podemos atuar e contribuir:
    </p>
    <div class="d-flex align-items-center justify-content-around fw-light text-primary text-start lh-lg py-2 mt-4 container-sm">
        <div>
            <ul>
                <li><h2 style="font-size: 17px;">Desenvolvimento de Sistemas</h2></li>
                <li><h2 style="font-size: 17px;">Desenvolvimento para Web e Web Mobile</h2></li>
                <li><h2 style="font-size: 17px;">Desenvolvimento Mobile</h2></li>
                <li><h2 style="font-size: 17px;">Análise de Dados / Data Science</h2></li>
            </ul>
        </div>
        <div>
            <ul>
                <li><h2 style="font-size: 17px;">Políticas de Segurança</h2></li>
                <li><h2 style="font-size: 17px;">Apoio em ideação e organização de projetos em TI</h2></li>
                <li><h2 style="font-size: 17px;">Melhoria de Processos</h2></li>
                <li><h2 style="font-size: 17px;">Cursos para a comunidade</h2></li>
            </ul>
        </div>
    </div>
    <small class="text-light fst-italic pb-4 mb-4 fw-lighter">
        Caso não consiga identificar nestas áreas, como podemos ajudar, entre em contato no e-mail:
            <a href="https://mailto:unitech@salesiano.br" target="_blank" class="text-primary text-decoration-underline fw-normal">unitech@salesiano.br</a>
    </small>
</main>
<div class="py-4">
    <div class="text-center mt-4 p-4" style="background-color: #10151F;" id="nossos_cursos">
        <h2>Nossos Cursos</h2>
        <div class="d-flex align-items-center justify-content-around fw-light lh-lg py-2 mt-4 container-sm">
            <div>
                <ul style="list-style:none">
                    <li><h2 class="text-light" style="font-size: 17px;">Análise e Desenvolvimento de Sistemas (Tecnólogo)</h2></li>
                    <li><h2 class="text-light" style="font-size: 17px;">Banco de Dados (Tecnólogo)</h2></li>
                    <li><h2 class="text-light" style="font-size: 17px;">Desenvolvimento de Jogos (Tecnólogo)</h2></li>
                </ul>
            </div>
            <div>
                <ul style="list-style:none">
                    <li><h2 class="text-light" style="font-size: 17px;">Engenharia de Software (Bacharelado)</h2></li>
                    <li><h2 class="text-light" style="font-size: 17px;">Sistemas de Informação (Bacharelado)</h2></li>
                    <li><h2 class="text-light" style="font-size: 17px;">Sistemas para Internet (Tecnólogo)</h2></li>
                </ul>
            </div>
        </div>
        <small class="text-light fst-italic pb-4 mb-4 fw-lighter">
            Caso queira conhecer os cursos, entre em contato:
                <a href="https://mailto:mschuster@salesiano.br" target="_blank" class="text-primary text-decoration-underline fw-normal">mschuster@salesiano.br</a>
        </small>
    </div>
</div>
<div class="container text-center py-4 my-4 text-light">
    <h2>Nossos Projetos</h2>
    <div class="row justify-content-md-center">
        <div class="col-md-auto mb-4">
            <div class="card bg-dark" style="min-width: 350px; max-width: 400px; height: 516px">
                <img class="w-100 rounded" src="https://api.placid.app/u/qsraj?title[text]=Website">
                <div class="card-body">
                    <h5 class="card-title">Website</h5>
                    <p class="card-text">O nosso Website foi produzido "em casa", aqui você encontrará informações de como ele foi conduzido. Caso queira apoio para fazer o seu, ou informações sobre este trabalho, só entrar em contato!</p>
                </div>
            </div>
        </div>
        <div class="col-md-auto mb-4">
            <div class="card bg-dark" style="min-width: 350px; max-width: 400px; height: 516px">
                <img class="w-100 rounded" src="https://api.placid.app/u/qsraj?title[text]=BioIndica">
                <div class="card-body">
                    <h5 class="card-title">BioIndica</h5>
                    <p class="card-text">Projeto que está sendo conduzido de forma intercurso - Cursos de Tecnologia da Informação e das Ciências Biológicas para um cliente especial o IEMA. O Sistema consiste em um apoio tecnológico para monitoramento e acompanhamento de espécimes no parque Paulo César Vinha - importante monitoramento do meio ambiente conduzido de forma aplicada neste interessante estudo aplicado. Mais informações sobre o projeto, só entrar em contato!</p>
                </div>
            </div>
        </div>
        <div class="col-md-auto mb-4">
            <div class="card bg-dark" style="min-width: 350px; max-width: 400px; height: 516px">
                <img class="w-100 rounded" src="https://api.placid.app/u/qsraj?title[text]=Bicicletario">
                <div class="card-body">
                    <h5 class="card-title">Software Bicicletário</h5>
                    <p class="card-text">Software livre para controle de acesso a bicicletários. Contribuição do Unitech para ambientes que precisam deste controle.</p>
                </div>
            </div>
        </div>
        <div class="col-md-auto mb-4">
            <div class="card bg-dark" style="min-width: 350px; max-width: 400px; height: 516px">
                <img class="w-100 rounded" src="https://api.placid.app/u/qsraj?title[text]=Fliperama">
                <div class="card-body">
                    <h5 class="card-title">Fliperama</h5>
                    <p class="card-text">Trabalho interdisciplinar sendo conduzido para testes utilizando arduíno, raspberry e programação. Vai ajudar na aplicação de técnicas e conceitos aprendidos em sala de aula... e para diversão!</p>
                </div>
            </div>
        </div>
        <div class="col-md-auto mb-4">
            <div class="card bg-dark" style="min-width: 350px; max-width: 400px; height: 516px">
                <img class="w-100 rounded" src="https://api.placid.app/u/qsraj?title[text]=Quiz">
                <div class="card-body">
                    <h5 class="card-title">Quiz acadêmico</h5>
                    <p class="card-text">uma contribuição do Unitech para o curso de Psicologia, para aumentar o engajamento em eventos que participam e para uso em sala de aula.</p>
                </div>
            </div>
        </div>
    </div>
    <a class="btn btn-outline-primary fw-bold w-100" href="/projetos" style="max-width: 820px;">Ver todos os projetos</a>
</div>

@include('template.footer')
