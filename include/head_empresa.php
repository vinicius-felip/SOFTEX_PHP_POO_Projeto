<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Empresa - <?= $_SESSION['usuario']['empresa']['nome'] ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">>
    <link rel="stylesheet" href="assets/css/style_empresa.css">
    

    <meta name="theme-color" content="#7952b3">

</head>

<body>

    <header class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow bg-dark">
        <div class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><img src="assets/img/logo-empresas/<?= $_SESSION['usuario']['empresa']['foto'] ?>" alt="<?= $_SESSION['usuario']['empresa']['nome'] ?>" width="170"></div>

        <img src="assets/img/logo-image.png" alt="" width="190px">
        <ul class="navbar-nav px-3">
            <li class="nav-item">
                <a class="nav-link btn text-white btn-danger px-3" href="sair.php">Sair</a>
            </li>
        </ul>
    </header>

    <div class="container-fluid mt-4">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                <div class="position-sticky mt-5">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="empresa.php">
                                <span data-feather="home"></span>
                                Listar viagens
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?acao=adicionar">
                                <span data-feather="file"></span>
                                Adicionar nova viagem
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-5">