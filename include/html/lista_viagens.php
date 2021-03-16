<div class="container-fluid mt-5">
    <div class="row">
        <div class="ms-4 bg-light rounded col-auto py-1 mb-1 pe-5">
            <legend class="">Passagens de ônibus de <b><?= $origem['titulo'] ?></b> para <b><?= $destino['titulo'] ?></b></legend>
        </div>
    </div>
</div>
<main class="container-fluid">
    <div class="row pb-3">
        <div class="col-2">
            <div class="container">
                <div class="row border border-dark rounded"  style="background: #ffad00;">
                    <form method="post">
                        <div class="col-12 mt-3">
                            <label class="fw-bold mb-2">Classificar por:</label>
                            <select name="classificar" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option value="preco" <?= $order == 'preco' ? 'selected' : '' ?>>Preço</option>
                                <option value="assento" <?= $order == 'assento' ? 'selected' : '' ?>>Assentos disponivéis</option>
                                <option value="data" <?= $order == 'data' ? 'selected' : '' ?>>Data</option>
                            </select>
                        </div>
                        <div class="col-12 my-3">
                            <label class="fw-bold mb-1">Saída</label>
                            <div class="form-check mb-3" <?= !$filtro['Madrugada'][0]->hora ? 'Hidden' : '' ?>>
                                <input name="hora1" value="1" class="form-check-input" type="checkbox" id="flexCheckDefault" <?= isset($_POST['hora1']) ? 'Checked' : '' ?>>
                                <label class="form-check-label position-relative" for="flexCheckDefault" style="width: 70px;">
                                    Madrugada<small class="position-absolute top-100 start-50 translate-middle fw-light" style="font-size: 9px; width: 65px; margin-top: 5px">(00h00 - 05h59)</small>
                                </label>
                            </div>
                            <div class="form-check mb-3" <?= !$filtro['Manhã'][0]->hora ? 'Hidden' : '' ?>>
                                <input name="hora2" value="1" class="form-check-input" type="checkbox" id="flexCheckDefault1" <?= isset($_POST['hora2']) ? 'Checked' : '' ?>>
                                <label class="form-check-label position-relative" for="flexCheckDefault1" style="width: 70px;">
                                    Manhã<small class="position-absolute top-100 start-50 translate-middle fw-light" style="font-size: 9px; width: 65px; margin-top: 5px">(06h00 - 11h59)</small>
                                </label>
                            </div>
                            <div class="form-check mb-3" <?= !$filtro['Tarde'][0]->hora ? 'Hidden' : '' ?>>
                                <input name="hora3" value="1" class="form-check-input" type="checkbox" id="flexCheckDefault2" <?= isset($_POST['hora3']) ? 'Checked' : '' ?>>
                                <label class="form-check-label position-relative" for="flexCheckDefault2" style="width: 63px;">
                                    Tarde<small class="position-absolute top-100 start-50 translate-middle fw-light text-center" style="font-size: 9px; width: 65px; margin-top: 5px">(12h00 - 17h59)</small>
                                </label>
                            </div>
                            <div class="form-check" <?= !$filtro['Noite'][0]->hora ? 'Hidden' : '' ?>>
                                <input name="hora4" value="1" class="form-check-input" type="checkbox" id="flexCheckDefault3" <?= isset($_POST['hora4']) ? 'Checked' : '' ?>>
                                <label class="form-check-label position-relative" for="flexCheckDefault3" style="width: 63px;">
                                    Noite<small class="position-absolute top-100 start-50 translate-middle fw-light text-center" style="font-size: 9px; width: 65px; margin-top: 5px">(18h00 - 23h59)</small>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 my-3">
                            <label class="fw-bold mb-1">Empresa</label>
                            <?php foreach ($filtro['Empresa'] as $empresa) { ?>
                                <div class="form-check">
                                    <input name="empresa[]" value="<?= $empresa->id_empresa ?>" class="form-check-input" type="checkbox" id="<?= $empresa->nome ?>" <?php if (isset($_POST['empresa'])) {
                                                                                                                                                                        if (in_array($empresa->id_empresa, $_POST['empresa'])) {
                                                                                                                                                                            echo 'Checked';
                                                                                                                                                                        }
                                                                                                                                                                    } ?>>
                                    <label class="form-check-label" for="<?= $empresa->nome ?>">
                                        <?= $empresa->nome ?>
                                    </label>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-12 mb-3 text-center">
                            <button class="btn btn-sm btn-dark" type="submit">Filtrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-10">
            <div class="container">
                <div class="row ">
                    <div class="col-12 d-flex-inline rounded bg-dark text-light">
                        <ul class="nav">
                            <div class="ms-4 me-5 text-center">
                                <strong class="nav-link">Empresa</strong>
                            </div>
                            <div class="me-5" style="margin-left: 32px;">
                                <strong class="nav-link">Saida</strong>
                            </div>
                            <div class="me-5" style="margin-left: 56px;">
                                <strong class="nav-link">Origem/Destino</strong>
                            </div>
                            <div class="me-1" style="margin-left: 130px;">
                                <strong class="nav-link">Assentos</strong>
                            </div>
                            <div class="me-5" style="margin-left: 85px;">
                                <strong class="nav-link">Preço</strong>
                            </div>
                        </ul>
                    </div>
                    <?php if ($mensagem) { ?>
                        <div class="col-12 rounded bg-white mt-2 p-3">
                            <div class="d-flex-inline text-center">
                                <legend class="m-0">Ops, não achamos resultados</legend>
                                <small class="text-secondary">Não encontramos nenhum resultado para essa busca</small>
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