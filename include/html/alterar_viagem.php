<?php if (isset($_GET['status']) == 'success'){ ?>
      <div class="alert alert-success" role="alert">
        <b>Sucesso!</b> A viagem foi adicionada com sucesso no banco de dados
      </div>
    <?php unset($_GET['status']); } ?>
    
    <div class="font-weight-bold container d-flex center justify-content-center">
        <form method="post">
            <div class="row g-3 mb-3">
                <div class="col-12">
                    <label class="form-label">Origem</label>
                    <input  name="origem" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                    <label class="form-label">Destino</label>
                    <input  name="destino" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-4 col-md-3">
                    <label class="form-label">Data</label>
                    <input  name="data"  type="date" class="form-control" id="inputAddress2">
                </div>
                <div class="col-md-2 col-3">
                    <label class="form-label">Horário</label>
                    <input  name="hora" type="time" class="form-control" id="inputCity">
                </div>
            </div>
            <div class="row g-3">   
                <div class="col-4 col-md-2">
                    <label class="form-label">Assentos</label>
                    <input  name="assentos" type="text" class="form-control" id="inputCity">
                </div>  
                <div class="col-md-2 col-3">
                    <label class="form-label">Preço</label>
                    <input  name="preco" type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-warning">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
