<section class="formulario mb-2 rounded" id="proponente">
    <img src="../img/idea_lg.svg" alt="">
    <h2>Faça sua Proposta</h2>
    <p> Você tem uma ideia e quer transformá-la em realidade, conte com a nossa equipe Unitech.</p>
    <div class="d-flex align-items-center">
        <form class="row g-3 text-start" id="f_proponente">
            <div class="d-flex align-items-center">
                <legend class="form-label pt-0 fs-5">Cadastrar como</legend>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="form-type" type="radio" id="inlineRadio1" value="empresa" form-type>
                    <label class="form-check-label" for="inlineRadio1">Empresa</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" name="form-type" type="radio" id="inlineRadio2" value="pessoa_fisica" form-type>
                    <label class="form-check-label" for="inlineRadio2">Pessoa Física</label>
                </div>
            </div>
            <fieldset class="form-group pt-2 hidden" hiddenable pessoa_fisica disabled>
                <div class="row">
                    <div class="col-md-8">
                        <label for="nome_completo" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" id="nome_completo" name="nome_completo" placeholder="Fulano de Tal">
                    </div>
                    <div class="col-md-4">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" placeholder="00000000000">
                    </div>
                </div>
            </fieldset>
            <fieldset class="form-group pt-2" hiddenable empresa>
                <div class="row">
                    <div class="col-md-4">
                        <label for="razao_social" class="form-label">Razão Social</label>
                        <input type="text" class="form-control" id="razao_social" name="razao_social" placeholder="Fulano de Tal">
                    </div>
                    <div class="col-md-4">
                        <label for="cnpj" class="form-label">Cnpj</label>
                        <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="00.000.000/0000-00">
                    </div>
                    <div class="col-md-4">
                        <label for="tipo_empresa" class="form-label">Tipo de Empresa</label>
                        <select id="tipo_empresa" name="tipo_empresa" class="form-control form-select">
                            <option hidden value="">Escolha um Tipo de Empresa</option>
                            <option value="1">Empresinha</option>
                            <option value="2">Empresa</option>
                            <option value="3">Empresona</option>
                            <option value="4">Outro</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="tipo" class="form-label">Area de Atuação</label>
                        <select id="area" name="area" class="form-control form-select">
                            <option hidden value="">Escolha uma Area de Atuação</option>
                        </select>
                    </div>
                    <div class="col-6 col-md-8">
                        <label for="site" class="form-label">Site</label>
                        <input type="url" class="form-control" id="site" name="site" placeholder="https://site.com">
                    </div>
                    <div class="col-6 col-md-4">
                        <label for="facebook" class="form-label">Facebook</label>
                        <input type="url" class="form-control" id="facebook" name="facebook" placeholder="https://fb.com/fulano.cicrano">
                    </div>
                    <div class="col-6 col-md-4">
                        <label for="instagram" class="form-label">Instagram</label>
                        <input type="url" class="form-control" id="instagram" name="instagram" placeholder="https://instagram.com/fulano.cicrano">
                    </div>
                    <div class="col-6 col-md-4">
                        <label for="linkedin" class="form-label">LinkedIn</label>
                        <input type="url" class="form-control" id="linkedin" name="linkedin" placeholder="https://likedin.com/fulano.cicrano">
                    </div>
                </div>
            </fieldset>
            <fieldset class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(##) ####-####">
                    </div>
                    <div class="col-md-4">
                        <label for="nome_contato" class="form-label">Nome de Contato</label>
                        <input type="name" class="form-control" id="nome_contato" name="nome_contato" placeholder="Representante">
                    </div>
                    <div class="col-md-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="site.com.br">
                    </div>
                    <div class="col-md-12">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Bairro Rua tal 176">
                    </div>
                </div>
            </fieldset>
            <fieldset class="form-group pt-2">
                <div class="row">
                    <div class="col-md-6 d-flex">
                        <div class="row d-flex justify-content-center align-items-center align-self-center">
                            <legend class="col-form-label col p-0 ps-3">É uma Aplicação?</legend>
                            <div class="col-6 d-flex justify-content-center align-items-center">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="app" id="app1" value="1" checked>
                                    <label class="form-check-label" for="app1">
                                        Sim
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="app" id="app2" value="0">
                                    <label class="form-check-label" for="app2">
                                        Não
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row d-flex justify-content-center align-items-center align-self-center">
                            <label for="contato" class="col-sm-4 col-form-label">Forma de Contato</label>
                            <div class="col-sm-8">
                                <select id="contato" name="contato" class="form-control form-select">
                                    <option hidden value="">Escolha uma Forma de Contato...</option>
                                    <option value="1">Telefone</option>
                                    <option value="2">E-mail</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
            <div class="col-12 d-grid gap-2">
                <button type="submit" class="btn btn-outline-success">Confirmar inscrição</button>
            </div>
        </form>
    </div>
</section>
