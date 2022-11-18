@include('template.header')
@include('template.nav')
<main class="container text-center text-light mt-5 d-flex align-items-center justify-content-center">
    <!-- Avisos em Geral -->
    <div class="toast-container position-fixed bottom-0 right-0 p-3">
    </div>
    <section class="institucional mb-2 mt-4 row fw-bold" id="sobre">
        <div class="min-h-screen d-flex justify-content-center align-items-center">
            <h2 class="text-light">
                <strong class="text-primary">Bem vindo</strong> ao Website do laboratório específico dos cursos de Análise e Desenvolvimento de Sistemas, Sistemas de Informação e Engenharia de Software do Unisales.
            </h2>
        </div>
        <section class="row mb-4 flex-row-reverse mx-0 min-h-screen">
            <i class="col-12 col-md-6 bi bi-emoji-sunglasses-fill text-primary d-flex flex-column justify-content-center"" style=" font-size: 100px;"></i>
            <div class="col d-flex flex-column justify-content-center">
                <p>
                    Aqui você encontrará informações sobre nossos serviços e projetos em andamento. Há também um área específica para contatos, caso queira participar de projetos,
                    sugerir um novo projeto ou até contribuir conosco de outra forma.
                </p>
                <button class="btn btn-lg btn-outline-primary shadow-lg">Entre em contato! <i class="col bi bi-emoji-wink"></i></button>
            </div>
        </section>
        <section class="row my-4 mx-0 min-h-screen justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <p>
                    Como o Laboratório faz parte dos cursos de Tecnologia da Informação e Computação do Unisales - Centro Universitário Salesiano é importante listar algumas áreas onde podemos atuar e contribuir:
                </p>
            </div>
            <div class="col">
                <ul class="list-group shadow-lg">
                    <li class="list-group-item list-group-item-dark">Desenvolvimento de Sistemas</li>
                    <li class="list-group-item list-group-item-primary">Desenvolvimento para Web e Web Mobile</li>
                    <li class="list-group-item list-group-item-dark">Desenvolvimento Mobile</li>
                    <li class="list-group-item list-group-item-primary">Análise de Dados / Data Science</li>
                    <li class="list-group-item list-group-item-dark">Políticas de Segurança</li>
                    <li class="list-group-item list-group-item-primary">Melhoria de Processos</li>
                    <li class="list-group-item list-group-item-dark">Cursos para a comunidade</li>
                    <li class="list-group-item list-group-item-primary">Apoio em ideação e organização de projetos em TI</li>
                </ul>
                <small class="fst-italic fw-lighter">
                    Caso não consiga identificar nestas áreas, como podemos ajudar, entre em contato no e-mail:
                        <a href="mailto:unitech@salesiano.br" class="text-decoration-underline fw-normal">unitech@salesiano.br</a>
                </small>
            </div>
        </section>


        <section class="row mx-0">
                <div class="card text-bg-dark col mx-2 px-0">
                    <img src="https://via.placeholder.com/250x100" class="card-img" alt="...">
                    <div class="card-img p-2">
                        <h5 class="card-title">Projeto</h5>
                        <p class="card-text">Este é um projeto</p>
                    </div>
                </div>
                <div class="card text-bg-dark col mx-2 px-0 d-none d-md-block">
                    <img src="https://via.placeholder.com/250x100" class="card-img" alt="...">
                    <div class="card-img p-2">
                        <h5 class="card-title">Projeto</h5>
                        <p class="card-text">Este é outro projeto</p>
                    </div>
                </div>
        </section>

        <h4>Nossos cursos:</h4>

        <ul>
            <li>Análise e Desenvolvimento de Sistemas (Tecnólogo)</li>
            <li>Banco de Dados (Tecnólogo)</li>
            <li>Desenvolvimento de Jogos (Tecnólogo)</li>
            <li>Engenharia de Software (Bacharelado)</li>
            <li>Sistemas de Informação (Bacharelado)</li>
            <li>Sistemas para Internet (Tecnólogo)</li>
        </ul>

        <p>Caso queira conhecer os cursos, entre em contato: mschuster@salesiano.br</p>

        <h4>Nossos Projetos (Texto inicial)</h4>

        <ul>
            <li>
                Website - O nosso Website foi produzido "em casa", aqui você encontrará informações de como ele foi conduzido.
                Caso queira apoio para fazer o seu, ou informações sobre este trabalho, só entrar em contato!
            </li>
            <li>
                BioIndica - Projeto que está sendo conduzido de forma intercurso - Cursos de Tecnologia da Informação e das Ciências Biológicas
                para um cliente especial o IEMA. O Sistema consiste em um apoio tecnológico para monitoramento e acompanhamento de espécimes no
                parque Paulo César Vinha - importante monitoramento do meio ambiente conduzido de forma aplicada neste interessante estudo aplicado.
                Mais informações sobre o projeto, só entrar em contato!
            </li>
            <li>
                Software Bicicletário - Software livre para controle de acesso a bicicletários. Contribuição do Unitech para ambientes que precisam deste controle.
            </li>
            <li>
                Fliperama - Trabalho interdisciplinar sendo conduzido para testes utilizando arduíno, raspberry e programação.
                Vai ajudar na aplicação de técnicas e conceitos aprendidos em sala de aula... e para diversão!
            </li>
            <li>
                Quiz acadêmico - uma contribuição do Unitech para o curso de Psicologia, para aumentar o engajamento em eventos que participam e para uso em sala de aula.
            </li>
        </ul>
    </section>
</main>
@include('template.footer')
