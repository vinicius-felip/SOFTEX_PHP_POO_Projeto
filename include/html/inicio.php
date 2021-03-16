<main class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-11 col-lg-5 mt-5">
                <form action="viagens.php" method="get">
                    <fieldset style="background: #ffad00;" class="row g-2 rounded p-3 mt-3">
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-white border-0 " id="basic-addon1"><i class="fas fa-location-arrow"   style="width: 16px; height: 16px;"></i></span>
                                <input required name="origem" type="text" class="form-control border-0" placeholder="Digite aqui sua origem" aria-describedby="basic-addon1" value="Recife, PE">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <span class="input-group-text bg-white border-0" id="basic-addon1"><i class=" fas fa-map-marker-alt"   style="width: 16px; height: 16px;"></i></i></span>
                                <input required name="destino" type="text" class="form-control border-0" placeholder="Digite aqui seu destino" aria-describedby="basic-addon1" value="Salvador, BA">
                            </div>
                        </div>
                        <div class="col-auto mb-3">
                            <input name="data" type="date" class="form-control" value="">
                        </div>
                        <div class="col-12">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-dark">Buscar passagens</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</main>