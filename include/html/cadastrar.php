<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/logstyle.css">
</head>

<body class="text-center text-dark bg-dark">
    <main class="form-signin">
        <div class="logo">
            <a href="index.php"><img class="mb-4" src="assets/img/logo-img.png" alt="" width="300" height="60"></a>
        </div>
        <?php if (is_string($mensagem)) {
            switch ($mensagem) {
                case 'cliente':
                    echo "<div class='alert alert-danger' role='alert'>
                E-mail ou CPF já está em uso.
                </div>";
                break;
                case 'empresa':
                    echo "<div class='alert alert-danger' role='alert'>
                E-mail ou CNPJ já está em uso.
                </div>";
                break;
            }
        } ?>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item " role="presentation">
                <button class="nav-link active" id="cliente-tab" data-bs-toggle="tab" data-bs-target="#cliente" type="button" role="tab" aria-controls="cliente" aria-selected="true">Cliente</button>
            </li>
            <li class="nav-item " role="presentation">
                <button class="nav-link" id="empresa-tab" data-bs-toggle="tab" data-bs-target="#empresa" type="button" role="tab" aria-controls="empresa" aria-selected="false">Empresa</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="cliente" role="tabpanel" aria-labelledby="cliente-tab">
                <form method="post">
                    <fieldset class="text-dark p-3">
                        <h1 class="h4 mb-3 fw-normal">Informe seus dados, por favor</h1>
                        <input name="nome" type="text" class="form-control mb-3" placeholder="Nome Completo" required autofocus>
                        <input name="cpf" type="text" class="form-control mb-3" placeholder="CPF" required>
                        <input name="email" type="email" class=" form-control mb-3" placeholder="Email" required>
                        <div class="input-group mb-3">
                            <input name="senha" type="password" class="form-control me-2" placeholder="Senha">
                            <input name="confsenha" type="password" class="form-control" placeholder="Confirme a senha">
                        </div>
                        <button name="tipo" value="cliente" class="w-100 btn btn-lg btn-dark mb-3" type="submit">Cadastrar</button>
                        <p class="text-end">Já tem cadastro?<a href="entrar.php"> Acesse sua conta</a></p>
                    </fieldset>
                </form>
            </div>
            <div class="tab-pane fade" id="empresa" role="tabpanel" aria-labelledby="empresa-tab">
                <form method="post">
                    <fieldset class="text-dark p-3">
                        <h1 class="h4 mb-3 fw-normal">Informe seus dados, por favor</h1>
                        <input name="nome" type="text" class="form-control mb-3" placeholder="Nome Fantasia" required autofocus>
                        <input name="cnpj" type="text" class="form-control mb-3" placeholder="CNPJ" required>
                        <input name="email" type="email" class=" form-control mb-3" placeholder="Email" required>
                        <div class="input-group mb-3">
                            <input name="senha" type="password" class="form-control me-2" placeholder="Senha">
                            <input name="confsenha" type="password" class="form-control" placeholder="Confirme a senha">
                        </div>
                        <button name="tipo" value="empresa" class="w-100 btn btn-lg btn-dark mb-3" type="submit">Cadastrar</button>
                        <p class="text-end">Já tem cadastro?<a href="entrar.php"> Acesse sua conta</a></p>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>