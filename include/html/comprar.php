
<main class="container p-5 mt-5">
    <div class="row">
        <?php if (isset($mensagem)) { ?>
            <div class="alert alert-danger" role="alert">
                <b>Error:</b> Parece que não tem mais passagens disponivéis
            </div>
        <?php } ?>
        <div class="col-8 rounded">
            <div class="container bg-light py-4 rounded">
                <h1 class=" text-center mb-2" style="color: #ffad00;">Finalizar Pedido</h1>
                <hr>
                <form action="comprar.php?finalizar='success'" method="post">
                    <div class="row p-2 g-3 rounded mt-1 bg-light" style="background-color: #ffad00;">
                        <div class="col-12">
                            <h2>Contato</h2>
                            <p class="text-muted">Vamos nos comunicar através dos contatos abaixo</p>
                            <div class="form-floating mb-3">
                                <input name="nome" type="text" class="form-control" id="floatingInput" placeholder="Nome Completo">
                                <label for="floatingInput">Nome Completo</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <input name="email" type="email" class="form-control" id="floatingPassword" placeholder="Email">
                                <label for="floatingPassword">Email</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input name="telefone" type="tel" class="form-control" id="floatingInput" placeholder="telefone" required>
                                <label for="floatingInput">Telefone</label>
                            </div>
                        </div>
                    </div>
                    <div class="row rounded mt-1 g-3 p-3 bg-light" style="background-color: #ffad00;">
                        <h2 class="p-0">Pagamento</h2>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pagamento" id="exampleRadios1" value="1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Boleto Bancário
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pagamento" id="exampleRadios2" value="2" disabled>
                            <label class="form-check-label" for="exampleRadios2">
                                Cartão
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pagamento" id="exampleRadios3" value="3" disabled>
                            <label class="form-check-label" for="exampleRadios3">
                                Paypal
                            </label>
                        </div>
                    </div>
            </div>
            <div class="btn-group mt-2 d-flex justify-content-end">
                <a href="index.php" type="button" class="btn-lg btn-danger me-1" style="text-decoration: none;">Cancelar</a>
                <button type="submit" class="btn-lg btn-warning">Comprar</button>
            </div>
            </form>
        </div>
        <div class="col-4">
            <div class="container">
                <h2 class="text-white" style="margin-bottom: 19px;">Resumo do pedido</h2>
                <div class="row rounded-top bg-white">
                    <div class="col-12">
                        <div class="container">
                            <div class="accordion" id="resumo">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="resumo-viagem">
                                        <p class="mb-2 pt-3" style="color: #ffad00; font-size: 15px"><?= $viagem['0']->origem ?> <small><i class="fas fa-long-arrow-alt-right"></i></small> <?= $viagem['0']->destino ?></p>
                                        <div class="accordion collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size: 15px;">
                                            <div class="row">
                                                <div class="col-11">
                                                    <p>Saida: <?= date("d/m/Y", strtotime($viagem['0']->data)) ?> às <?= date("H:m", strtotime($viagem['0']->hora)) ?> </p>
                                                </div>
                                                <div class="col-1 p-0">
                                                    <span><i class="fas fa-caret-down"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse border-0" aria-labelledby="resumo-viagem" data-bs-parent="#resumo">
                                        <div class="accordion-body px-0 pt-0" style="font-size: 15px;">
                                            <p class="mb-0">Origem: <b><?= $viagem['0']->origem ?></b></p>
                                            <p class="mb-0">Destino: <b><?= $viagem['0']->destino ?></b></p>
                                            <p class="mb-0">Empresa: <b><?= $viagem['0']->nome ?></b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div></div>
                <div class="row rounded-botto py-1 px-1" style="background-color: #ffad00;">
                    <div class="col-6">
                        <legend class="text-start">Valor: </legend>
                    </div>
                    <div class="col-6">
                        <legend class="text-center">R$ <b><?= $viagem['0']->preco ?></b></legend>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>