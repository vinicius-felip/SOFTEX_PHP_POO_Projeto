<main class="mt-5">
    <div class="text-light font-weight-bold container d-flex center justify-content-center" style="text-shadow: 2px 1px black;">
        <form method="post">
            <div class="row g-3 mb-3">
                <div class="col-12">
                    <label class="form-label">Origem</label>
                    <input required name="origem" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                    <label class="form-label">Destino</label>
                    <input required name="destino" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-4 col-md-3">
                    <label class="form-label">Data</label>
                    <input required name="data"  type="date" class="form-control" id="inputAddress2">
                </div>
                <div class="col-md-2 col-3">
                    <label class="form-label">Horário</label>
                    <input required name="hora" type="time" class="form-control" id="inputCity">
                </div>
            </div>
            <div class="row g-3">   
                <div class="col-4 col-md-2">
                    <label class="form-label">Assentos</label>
                    <input required name="assentos" type="text" class="form-control" id="inputCity">
                </div>  
                <div class="col-md-2 col-3">
                    <label class="form-label">Preço</label>
                    <input required name="preco" type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-warning">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
</main>