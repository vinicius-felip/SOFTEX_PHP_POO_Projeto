<h2>Viagens</h2>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Origem</th>
                <th>Destino</th>
                <th>Data e Hora</th>
                <th>Assentos</th>
                <th>Preço</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($viagens as $viagens) { ?>
                <tr>
                    <td><?= $viagens->id ?></td>
                    <td><?= $viagens->origem ?></td>
                    <td><?= $viagens->destino ?></td>
                    <td><?= date("d-m-Y", strtotime($viagens->data)).date(" à\s H:m", strtotime($viagens->hora)) ?></td>
                    <td><?= $viagens->assento ?></td>
                    <td><?= $viagens->preco ?></td>
                    <td class="text-center">
                        <a type="button" class="text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $viagens->id ?>"><i class="fas fa-trash"></i></a>
                    </td>
                    <!-- Excluir viagem -->
                    <div class="modal fade" id="exampleModal<?= $viagens->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Excluir</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                Deseja realmente excluir a viagem de id <?= $viagens->id ?>?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <a type="button" class="btn btn-danger" href="?acao=deletar&id=<?= $viagens->id ?>" >Excluir</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>