<div class="col-8">
    <div class="position-relative">
        <?php if (isset($_SESSION['mensagem'])) {
            switch ($_SESSION['mensagem']) {
                case 'success': ?>
                    <div class='position-absolute top-0 start-50 translate-middle m-0 alert alert-success text-center ' role='alert' style='margin-top: -50px!important'>
                        <b>SUCESSO:</b> Senha alterada com sucesso!
                    </div>
                <?php break;
                case 'error': ?>
                <div class='position-absolute top-0 start-50 translate-middle m-0 alert alert-danger text-center ' role='alert' style='margin-top: -50px!important'>
                    <b>ERROR:</b> Senha errada.
                </div>
            <?php break;
                case 'confsenha': ?>
            <div class='position-absolute top-0 start-50 translate-middle m-0 alert alert-warning text-center ' role='alert' style='margin-top: -50px!important'>
                <b>AVISO:</b> Por favor, digite senhas iguais.
            </div>
<?php }
        } ?>
<div class="bg-white rounded px-5">
    <h1 class="text-center">Alterar senha</h1>
</div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex-inline rounded bg-white">
                <form method="post">
                    <div class="row p-2 g-1 rounded mt-1 pb-3">
                        <div class="col-5">
                            <label for="senhaAntiga" class="form-label text-muted">Senha antiga</label>
                            <input type="password" class="form-control" id="senhaAntiga" name="senhaAntiga">
                        </div>
                        <div class="w-100"></div>
                        <div class="col-5">
                            <label for="senha" class="form-label text-muted">Nova senha</label>
                            <input type="password" class="form-control" id="senha" name="senhaNova">
                        </div>
                        <div class="w-100"></div>
                        <div class="col-5">
                            <label for="senhaConf" class="form-label text-muted">Nova senha</label>
                            <input type="password" class="form-control" id="senhaConf" name="senhaConf">
                        </div>
                        <div clas1s="col-5">
                            <div class=" d-flex justify-content-end"><button type="submit" class="btn btn-warning">Salvar</button></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</main>