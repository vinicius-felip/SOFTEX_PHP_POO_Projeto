        <div class="col-8">
            <h1 class="mb-2 text-center bg-white rounded">Meus Pedidos</h1>
            <div class="container">
                <div class="row ">
                    <div class="col-12 d-flex-inline rounded bg-dark text-light">
                        <div class="row align-items-center py-2 fs-6">
                            <div class="col-1">
                                ID
                            </div>
                            <div class="col-4">
                                Viagem
                            </div>
                            <div class="col-3 text-center">
                                Data da compra
                            </div>
                            <div class="col-2 text-center">
                                Status
                            </div>
                        </div>
                    </div>
                    <?php if ($mensagem) { ?>
                        <div class="col-12 rounded bg-white mt-2 p-3">
                            <div class="d-flex-inline text-center">
                                <legend class="text-muted m-0">Você ainda não tem pedidos.</legend>
                            </div>
                        </div>
                        <?php } else {
                        foreach ($pedidos as $pedido) {  ?>
                            <div class="col-12 rounded bg-white mt-2 p-3">
                                <div class="row align-items-center">
                                    <div class="col-1">
                                        <b>#<?= $pedido->id ?></b>
                                    </div>
                                    <div class="col-4">
                                        <p class="m-0 p-0"><b>Origem: </b><?= $pedido->origem ?></p>
                                        <p class="m-0 p-0"><b>
                                                Destino: </b><?= $pedido->destino ?></p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <p class="mb-0 p-0"><?= date("d/m/Y à\s H:i", strtotime($pedido->data_compra)) ?></p>
                                    </div>
                                    <div class="col-2 text-center">
                                        <?php switch ($pedido->status) {
                                            case 1:
                                                echo '<p class="m-0 text-warning">Aguardando Pagamento</p>';
                                                break;
                                            case 2:
                                                echo '<p class="m-0 text-success">Confirmado</p>';
                                                break;
                                            case 3:
                                                echo '<p class="m-0 text-danger">Cancelado</p>';
                                                break;
                                        }  ?>
                                    </div>
                                    <div class="col-2 text-center">
                                        <button type="button" class="btn-sm btn-warning text-dark" data-bs-toggle="modal" data-bs-target="#PedidoID<?= $pedido->id ?>">Detalhes</button>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="PedidoID<?= $pedido->id ?>" tabindex="-1" aria-labelledby="PedidoID<?= $pedido->id ?>Label" aria-hidden="true">
                                <div class="modal-dialog ">
                                    <div class="modal-content  bg-dark text-light border-0">
                                        <div class="modal-header">
                                            <h5 class=" modal-title" id="PedidoID<?= $pedido->id ?>Label">PEDIDO #<?= $pedido->id ?></h5>
                                            <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="conteiner-fluid">
                                                <div class="row mb-5">
                                                    <legend class="text-center mb-3">
                                                        Viagem
                                                    </legend>
                                                    <div class="row ">

                                                        <div class="col-auto align-self-center p-0  ps-2">
                                                            <b>
                                                                <p class=" text-center mb-0 p-0"><?= date("H:m", strtotime($pedido->hora)) ?></p>
                                                            </b>
                                                            <small class=" mb-0 p-0" style="font-size: 11px;"><?= date("d-m-Y", strtotime($pedido->data)) ?></small>
                                                        </div>
                                                        <div class="col-1 p-0 ">
                                                            <div class="position-relative me-0 bg-warning" style="height:95%; width: 2px; margin-left: 45% ">
                                                                <p class="position-absolute top-0 start-50 translate-middle-x bg-warning rounded-pill " style="height: 1rem; width: 1rem"></p>
                                                                <p class="position-absolute top-100 start-50 translate-middle bg-white" style="border: #ffc107 solid 2px; border-radius:20px; height: 1rem; width: 1rem"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="row">
                                                                <div class="col-12 ps-0">
                                                                    <p class="m-auto"><?= $pedido->origem ?></p>
                                                                </div>
                                                                <div class="col-12 ps-0 mt-4">
                                                                    <p class="m-auto"><?= $pedido->destino ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto align-self-center ms-auto p-0 me-2">
                                                            <img src="assets/img/logo-empresas/<?= $pedido->foto ?>" alt="<?= $pedido->id_empersa ?>" width="100" height="50">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-5">
                                                    <legend class="text-center mb-2">
                                                        Contato
                                                    </legend>
                                                    <div class="row g-2 ps-3">
                                                        <div class="col-12">
                                                            <i class="fas fa-user text-warning"></i>
                                                            <span class="ms-2"><?= $pedido->nome ?></span>
                                                        </div>
                                                        <div class="col-12">
                                                            <i class="fas fa-envelope text-warning"></i>
                                                            <span class="ms-2"><?= $pedido->email ?></span>
                                                        </div>
                                                        <div class="col-12">
                                                            <i class="fas fa-phone-alt text-warning"></i>
                                                            <span class="ms-2"><?= $pedido->telefone ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row g-2 mb-5">
                                                    <legend class="text-center mb-2">
                                                        Pagamento
                                                    </legend>
                                                    <div class="col-12">
                                                        <?php switch ($pedido->status) {
                                                            case 1:
                                                                echo '<i class="fas fa-barcode text-warning"></i>
                                                                <span style="margin-left:12px">Boleto Bancário</span>';
                                                                break;
                                                            case 2:
                                                                echo '<i class="far fa-credit-card text-warning">
                                                                </i><span class="ms-2">Cartão</span>';
                                                                break;
                                                            case 3:
                                                                echo '<i class="fab fa-paypal text-warning"></i>
                                                                <span class="ms-2">Paypal</span>';
                                                                break;
                                                        }  ?>
                                                    </div>
                                                    <div class="col-12">
                                                        <i class="fas fa-money-bill text-warning"></i>
                                                        <span class="ms-2"> R$ <?= $pedido->preco ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Fechar</button>
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