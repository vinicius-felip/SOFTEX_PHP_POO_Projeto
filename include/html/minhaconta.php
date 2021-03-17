<div class="col-8">
    <h1 class="mb-2 text-center bg-white rounded">Minha Conta</h1>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex-inline rounded bg-white">
                <form action="comprar.php?finalizar='success'" method="post">
                    <div class="row p-2 g-3 rounded mt-1 bg-light pb-5">
                        <div class="col-6">
                            <label for="nome" class="form-label text-muted">Nome</label>
                            <input value="teste" name="nome" type="text" class="form-control" id="nome">
                        </div>
                        <div class="col-6">
                            <label for="email" class="form-label">Email</label>
                            <input value="teste@teste" type="text" class="form-control" id="email" disabled>
                        </div>
                        <div class="col-6">
                            <label for="telefone" class="form-label text-muted">Telefone</label>
                            <input value="teste" name="telefone" type="tel" class="form-control" id="telefone">
                        </div>
                        <div class="col-6">
                            <label for="CPF" class="form-label">CPF</label>
                            <input value="123213221" type="text" class="form-control" id="CPF" disabled>
                        </div>      
                        <div class="col-3 align-content-center">
                            <p class="text-muted">Senha</p>
                            <span id="senha" style="margin-right: 25px;">********</span>  <a href="?pagina=AlterarSenha" style="text-decoration: none;color: #ffad00">Alterar senha</a>
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