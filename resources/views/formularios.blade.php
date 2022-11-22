@include('template.header')
@include('template.nav')
<main class="p-4 text-center text-light mt-5">
    <h2 class="p-4 text-light" style="font-family: Nunito;">Faça parte dos nossos projetos</h2>
    <div class="row">
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

</main>
@include('template.footer')
