<div class="container-fluid mt-5">
    <div class="row">
        <div class="ms-4 bg-light rounded col-auto pb-1 mb-1 pe-5">
            <legend class="">Passagens de ônibus de <b>Recife, PE</b> para <b>Salvador, BA</b></legend>
        </div>
    </div>
</div>
<main class="container-fluid">
    <div class="row pb-3">
        <div class="col-2">
            <div class="container">
                <div class="row border bg-warning border-warning rounded">
                    <div class="col-12 mt-3">
                        <label class="fw-bold mb-2">Classificar por:</label>
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option value="1" selected>Preço</option>
                            <option value="2">Assentos disponivéis</option>
                            <option value="3">Data</option>
                        </select>
                    </div>
                    <div class="col-12 my-3">
                        <label class="fw-bold mb-1">Saída</label>
                        <div class="form-check mb-3">
                            <input name="dia" value="00:00 05:59" class="form-check-input" type="checkbox" id="flexCheckDefault">
                            <label class="form-check-label position-relative" for="flexCheckDefault" style="width: 70px;">
                                Madrugada<small class="position-absolute top-100 start-50 translate-middle fw-light" style="font-size: 9px; width: 65px; margin-top: 5px">(00h00 - 05h59)</small>
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="flexCheckDefault1">
                            <label class="form-check-label position-relative" for="flexCheckDefault1" style="width: 70px;">
                                Manhã<small class="position-absolute top-100 start-50 translate-middle fw-light" style="font-size: 9px; width: 65px; margin-top: 5px">(06h00 - 11h59)</small>
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="flexCheckDefault2">
                            <label class="form-check-label position-relative" for="flexCheckDefault2" style="width: 63px;">
                                Tarde<small class="position-absolute top-100 start-50 translate-middle fw-light text-center" style="font-size: 9px; width: 65px; margin-top: 5px">(12h00 - 17h59)</small>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="flexCheckDefault3">
                            <label class="form-check-label position-relative" for="flexCheckDefault3" style="width: 63px;">
                                Noite<small class="position-absolute top-100 start-50 translate-middle fw-light text-center" style="font-size: 9px; width: 65px; margin-top: 5px">(18h00 - 23h59)</small>
                            </label>
                        </div>
                    </div>
                    <div class="col-12 mb-3 ">
                        <label class="fw-bold mb-1">Empresa</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="flexCheckDefault6">
                            <label class="form-check-label" for="flexCheckDefault6">
                                Empresa 1
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="flexCheckDefault7">
                            <label class="form-check-label" for="flexCheckDefault7">
                                Empresa 2
                            </label>
                        </div>
                    </div>
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
                        foreach ($viagens as $viagens) { ?>
                            <div class="col-12 rounded bg-white mt-2 p-3">
                                <div class="row align-items-center">
                                    <div class="col-auto  me-5">
                                        <div>
                                            <img src="https://static.clickbus.com/live/travel-company-logos/kaissara.svg" alt="Kaissara" height="40">
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
                                        <button class="btn p-0" type="button" data-bs-toggle="collapse" data-bs-target="#detalhes<?= $viagens->id ?>" aria-expanded="false" aria-controls="detalhes<?= $viagens->id ?>"><i class="fas fa-chevron-down"></i></button>
                                    </div>
                                    <div class="collapse multi-collapse" id="detalhes<?= $viagens->id ?>">
                                        <div class="card card-body">
                                            <a class="btn btn-danger" href="compra.php?id=<?= $viagens->id ?>"></a>
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