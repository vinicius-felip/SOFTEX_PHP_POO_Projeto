        <div class="col-8">
            <h1 class="mb-2 text-center bg-white rounded">Meus Pedidos</h1>
            <div class="container">
                <div class="row ">
                    <div class="col-12 d-flex-inline rounded bg-dark text-light">
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item bg-dark border-0">Número do pedido</li>
                            <li class="list-group-item bg-dark border-0">Viagem</li>
                            <li class="list-group-item bg-dark border-0">Data de compra</li>
                            <li class="list-group-item bg-dark border-0">Status</li>
                        </ul>
                    </div>
                    <?php if ($mensagem) { ?>
                        <div class="col-12 rounded bg-white mt-2 p-3">
                            <div class="d-flex-inline text-center">
                                <legend class="text-muted m-0">Você ainda não tem pedidos.</legend>
                            </div>
                        </div>
                        <?php } else {
                        foreach ($viagens as $viagens) {  ?>
                            <div class="col-12 rounded bg-white mt-2 p-3">
                                <div class="row align-items-center">
                                    <div class="col-auto  me-5">
                                        <div>
                                            <img src="assets/img/logo-empresas/<?= $viagens->nome ?>" alt="<?= $viagens->nome ?>" width="130" height="40">
                                        </div>
                                    </div>
                                    <div class="col-1 p-0 me-0 text-center">
                                        <p class="nav-link mb-0 p-0"><?= date("H:m", strtotime($viagens->hora)) ?></p>
                                        <small class="nav-link mb-0 p-0" style="font-size: 11px;"><?= date("d-m-Y", strtotime($viagens->data)) ?></small>
                                    </div>
                                    <div class="col-4 p-0 me-0 text-center">
                                        <p class="nav-link mb-0 p-0"><?= $viagens->origem ?></p>
                                        <p class="nav-link mb-0 p-0"><?= $viagens->destino ?></p>
                                    </div>
                                    <div class="col-3 p-0 me-0 text-center">
                                        <p class="nav-link mb-0 p-0"><b class="bg-success rounded text-light p-1"><?= $viagens->assento ?></b> Lugares disponivéis</p>
                                    </div>
                                    <div class="col-1 p-0  me-0 text-center">
                                        <p class="nav-link mb-0 p-0"><b>R$ <?= $viagens->preco ?></b></p>
                                    </div>
                                    <div class="col-auto p-0 me-2 ms-auto">
                                        <a type="button" class=" btn-sm  btn-warning text-dark" data-bs-toggle="modal" data-bs-target="#ViagemID<?= $viagens->id ?>"><i class="fas fa-shopping-cart"></i></a>
                                    </div>
                                    <div class="modal fade" id="ViagemID<?= $viagens->id ?>" tabindex="-1" aria-labelledby="ViagemIDLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="ViagemIDLabel">Reserva</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Origem: <b><?= $origem['titulo'] ?></b><br>
                                                    Destino: <b><?= $destino['titulo'] ?></b><br>
                                                    Data/Hora: <?= date("d/m/Y", strtotime($viagens->data)) ?> às <?= date("H:m", strtotime($viagens->hora)) ?><br>
                                                    Passagens: <b>1</b><br>
                                                    Valor: <b>R$ <?= $viagens->preco ?></b>
                                                </div>
                                                <form action="comprar.php" method="post">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                                                        <button type="submit" name="id" value="<?= $viagens->id ?>" class="btn btn-warning">Continuar reserva</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php }
                    } ?>
                </div>
            </div>
        </div>
        </div>
        </main>