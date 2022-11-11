<section class="formulario mb-2 rounded" id="estudante">
    <img src="../img/education_lg.svg" alt="">
    <h2>Inscrição para estudantes Unisales </h2>
    <p>Se você é aluno unisales e tem interesse em participar em um dos nossos projetos, faça já sua inscrição, preencha os campos abaixo e logo entraremos em contato.</p>
    <div class="row d-flex flex-column-reverse flex-md-row align-items-center">
        <form class="row g-3 text-start" id="f_estudante">
            <div class="col-md-6">
                <label for="nome_completo" class="form-label">Nome Completo*</label>
                <input type="name" class="form-control" id="nome_completo" name="nome_completo" placeholder="">
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email*</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="@souunisales.com.br">
            </div>
            <div class="col-12">
                <label for="endereco" class="form-label">Endereco*</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder=" ">
            </div>
            <div class="col-md-6">
                <label for="registro_academico" class="form-label">RA (Registro Acadêmico)*</label>
                <input type="text" class="form-control" id="registro_academico" name="registro_academico" placeholder=" ">
            </div>
            <div class="col-md-6">
                <label for="curso" class="form-label">Curso*</label>
                <select id="curso" name="curso" class="form-select">
                    <option hidden value="">Selecione seu Curso...</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="periodo" class="form-label">Período*</label>
                <input type="number" class="form-control" id="periodo" name="periodo" min="1" max="5" value="1">
            </div>
            <div class="col-md-10">
                <label for="forma_integracao" class="form-label">Forma de Integração*</label>
                <select id="forma_integracao" name="forma_integracao" class="form-select">
                    <option hidden value="">Escolha uma Forma de Integração...</option>
                    <option value="1">
                        Estágio voluntário - Este exige presencialidade de 4 a 6 horas por dia.
                    </option>
                    <option value="2">
                        Horas de ACC - Horas de ACC podem ser conduzidas à distância.
                    </option>
                    <option value="3">
                        Voluntariado certificado - para o caso de alunos egressos
                    </option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="projeto" class="form-label">Projeto</label>
                <select id="projeto" name="projeto" class="form-select">
                    <option hidden value="" value="">Escolha um Projeto de Interesse...</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="area_interesse" class="form-label">Área de Interesse</label>
                <select id="area_interesse" name="area_interesse" class="form-select">
                    <option hidden value="">Escolha uma Área...</option>
                </select>
            </div>
            <div class="col-12 d-grid gap-2">
                <button type="submit" class="btn btn-outline-success">Confirmar inscrição</button>
            </div>
        </form>
    </div>
</section>
