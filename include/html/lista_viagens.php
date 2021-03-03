<main class="mt-5">
    <div class="container">
        <div class="row rounded mb-3" style="background: #ffad00;">
            <div class="col-2 text-center me-4">
                <legend>Empresa</legend>
            </div>
            <div class="col-1 text-center ms-4 me-4">
                <legend>Hora/Data</legend>
            </div>
            <div class="col-3 text-end ms-5 me-5 ">
                <legend>Origem/Destino</legend>
            </div>
            <div class="col-1 text-end ms-5 me-auto">
                <legend>Lugares</legend>
            </div>
            <div class="col-2 text-start me-4 ">
                <legend>Preço</legend>
            </div>
        </div>
        <ul class="list-group  mb-3">
            <?php foreach ($viagens as $viagens) { ?>
                <li class="list-group p-3 mb-1 bg-dark rounded shadow-sm">
                    <div class="row g-3 text-light">
                        <div class="col-2 align-self-center ms-2">
                            <legend><?= $viagens->empresa ?></legend>
                        </div>
                        <div class="col-2 text-center">
                            <legend><?= date("H:m", strtotime($viagens->saida)) ?></legend>
                            <small><?= date("d/m/Y", strtotime($viagens->saida)) ?></small>
                        </div>
                        <div class="col-4 text-center ms-4">
                            <legend><?= $viagens->origem ?></legend>
                            <legend><?= $viagens->destino ?></legend>
                        </div>
                        <div class="col-1 align-self-center text-center ms-auto">
                            <legend><?= $viagens->assento ?></legend>
                        </div>
                        <div class="col-2  text-center align-self-center ms-auto me-auto">
                            <legend>R$ <?= $viagens->preco ?></legend>
                        </div>
                        <div class="col-auto align-self-center">
                            <button style="color: #ffad00;" class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#detalhes<?= $viagens->id ?>" aria-expanded="false" aria-controls="detalhes<?= $viagens->id ?>"><i class="fas fa-chevron-down"></i></button>
                        </div>
                    </div>
                    <div class="collapse multi-collapse" id="detalhes<?= $viagens->id ?>">
                        <div class="card card-body">
                            Some placeholder content for the first collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</main>