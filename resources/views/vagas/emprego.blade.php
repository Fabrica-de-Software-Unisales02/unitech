@include('template.header')
@include('template.nav')
<main class="container text-center text-light mt-5">
    <!-- Avisos em Geral -->
    <div class="toast-container position-fixed bottom-0 right-0 p-3">
    </div>
    <br>
    <div class="container text-start">
        <div class="bg-dark p-4 mt-4 rounded">
            <h2 class="mt-4 text-light" style="font-family: Nunito;">Vagas de Emprego Disponíveis</h2>
            <p>Assim que as vagas ficarem disponíveis, atualizaremos este menu...</p>
        </div>
        <br>
        <div class="row m-0">
            <div class="col-md-4 p-0 pb-4">
                <div class="card bg-dark vaga">
                    <div class="vaga-img mx-2 my-4" style="background-image: url('/img/trainee.jpg');"></div>
                    <div class="card-body">
                        <h5 class="card-title text-light" style="font-family: Nunito;">Pessoa Trainee - Segurança da Informação</h5>
                        <p class="card-text">Vila Velha -ES</p>
                        <a href="https://lnkd.in/dSHg_srb" target="_blank" class="btn btn-primary">Tenho Interesse</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('template.footer')
