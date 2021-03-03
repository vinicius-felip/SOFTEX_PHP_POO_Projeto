<main class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-5 mt-5">
                <form action="viagens.php" method="post">
                    <fieldset style="background: #ffad00;" class="row g-2 rounded p-3 mt-3">
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-light" id="basic-addon1"><i class="fas fa-location-arrow"></i></span>
                                <input name="origem" type="text" class="form-control" placeholder="Digite aqui sua origem" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-light" id="basic-addon1"><i class=" fas fa-map-marker-alt"></i></i></span>
                                <input name="destino" type="text" class="form-control" placeholder="Digite aqui seu destino" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="col-auto mb-3">
                            <input name="data" type="date" class="form-control">
                        </div>
                        <div class="col-12">
                            <div class="d-grid gap-2">
                                <button class="btn btn-dark">Buscar passagens</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</main>