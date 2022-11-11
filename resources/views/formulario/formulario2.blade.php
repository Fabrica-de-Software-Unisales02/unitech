<section class="formulario mb-2 rounded" id="colaborador">
    <img src="../img/team_lg.svg" alt="">
    <h2>Inscrição para colaboradores Pessoa Física ou Pessoa Jurídica </h2>
    <p>Se você Pessoa Física ou Pessoa Jurídica quer participar de um dos nossos projetos, inscreva-se será um prazer tê-los conosco.</p>
    <div class="row d-flex align-items-center">
        <form class="row g-3 text-start" id="f_colaborador">
            <div class="col-md-4">
                <label for="nome_completo" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="nome_completo" name="nome_completo" placeholder=" ">
            </div>
            <div class="col-md-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder=" @email.com">
            </div>
            <div class="col-md-4">
                <label for="email_profissional" class="form-label">Email Profissional</label>
                <input type="email" class="form-control" id="email_profissional" name="email_profissional" placeholder=" ">
            </div>
            <div class="col-md-8">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder=" ">
            </div>
            <div class="col-md-4">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(##) ####-####">
            </div>
            <div class="col-md-6">
                <label for="responsavel" class="form-label">Responsável</label>
                <input type="name" class="form-control" id="responsavel" name="responsavel" placeholder=" ">
            </div>
            <div class="col-6 col-md-6">
                <label for="site" class="form-label">Site</label>
                <input type="url" class="form-control" id="site" name="site" placeholder=" ">
            </div>
            <div class="col-6 col-md-4">
                <label for="facebook" class="form-label">Facebook</label>
                <input type="url" class="form-control" id="facebook" name="facebook" placeholder=" ">
            </div>
            <div class="col-6 col-md-4">
                <label for="instagram" class="form-label">Instagram</label>
                <input type="url" class="form-control" id="instagram" name="instagram" placeholder=" ">
            </div>
            <div class="col-6 col-md-4">
                <label for="linkedin" class="form-label">LinkedIn</label>
                <input type="url" class="form-control" id="linkedin" name="linkedin" placeholder=" ">
            </div>
            <div class="col-12">
                <label for="projeto" class="form-label">Projeto (Opcional)</label>
                <select id="projeto" name="projeto" class="form-select">
                    <option hidden value="">Escolha um Projeto de Interesse...</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="forma_integracao" class="form-label">Forma de Integração</label>
                <select id="forma_integracao" name="forma_integracao" class="form-select">
                    <option hidden value="">Escolha uma Forma de Integração...</option>
                    <option value="4">
                        Voluntariado certificado - para o caso de alunos egressos
                    </option>
                    <option value="5">
                        Investidor
                    </option>
                    <option value="6">
                        Parceria Empresarial
                    </option>
                    <option value="7">
                        Tutoria
                    </option>
                    <option value="8">
                        Gestão de Projetos
                    </option>
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
