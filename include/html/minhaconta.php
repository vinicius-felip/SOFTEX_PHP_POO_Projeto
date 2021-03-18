<div class="col-8">
    <div class="position-relative">
        <?php if (isset($_SESSION['mensagem'])) {
            switch ($_SESSION['mensagem']) {
                case 'success': ?>
                    <div class='position-absolute top-0 start-50 translate-middle m-0 alert alert-success text-center ' role='alert' style='margin-top: -50px!important'>
                        <b>SUCESSO:</b> Dados alterados com sucesso!
                    </div>
                <?php break;
                case 'error': ?>
                <div class='position-absolute top-0 start-50 translate-middle m-0 alert alert-danger text-center ' role='alert' style='margin-top: -50px!important'>
                    <b>ERROR:</b> E-mail já existente.
                </div>
    <?php break;
            }
        } ?>
    <div class="bg-white rounded px-5">
        <h1 class="text-center">Minha Conta</h1>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex-inline rounded bg-white">
                <form method="post">
                    <div class="row p-2 g-3 rounded mt-1 pb-3">
                        <div class="col-6">
                            <label for="nome" class="form-label text-muted">Nome</label>
                            <input value="<?= $cliente->nome ?>" type="text" class="form-control" id="nome" disabled>
                        </div>
                        <div class="col-6">
                            <label for="email" class="form-label">Email</label>
                            <input value="<?= $cliente->email ?>" name="email" type="email" class="form-control" id="email" required>
                        </div>
                        <div class="col-6">
                            <label for="telefone" class="form-label text-muted">Telefone</label>
                            <input value="<?= $cliente->telefone ?>" name="telefone" type="tel" class="form-control" id="telefone">
                        </div>
                        <div class="col-6">
                            <label for="CPF" class="form-label">CPF</label>
                            <input value="<?= $cliente->cpf ?>" type="text" class="form-control" id="CPF" disabled>
                        </div>
                        <div class="col-3 align-content-center">
                            <p class="text-muted">Senha</p>
                            <span id="senha" style="margin-right: 25px;">********</span> <a href="?pagina=AlterarSenha" style="text-decoration: none;color: #ffad00">Alterar senha</a>
                        </div>
                        <div clas1s="col-12">
                            <div class=" d-flex justify-content-end"><button type="submit" class="btn btn-warning">Salvar</button></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</main>