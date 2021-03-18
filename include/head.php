<?php

use \App\session\Login;

Login::iniciarSession();
?>


<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Bus Tour</title>
    <style>
        html {
            overflow-y: scroll;
        }

        :root {
            overflow-y: auto;
            overflow-x: hidden;
        }

        :root body {
            position: absolute;
        }

        body {
            width: 100vw;
        }

        p.max-3l {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        ::-webkit-scrollbar {
            display: none;
        }

        .form-check-input:checked {
            background-color: #000;
            border-color: #000;
        }

         .nav-link {
            color: black;
        }

         .nav-link:hover {
            color: white;
        }
        
    </style>
</head>

<body style="background-image: url('https://i.pinimg.com/originals/20/cc/54/20cc54a2306c09ef5a8af7f9d2b81439.jpg'); background-repeat: no-repeat; background-size: cover; background-position: botton; background-attachment: fixed;">
    <header>
        <div class="navbar navbar-expand-md  p-5 pt-3 pb-0 bg-transparent" style="background: #ffad00;">
            <nav class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="assets\img\logo-image.png" alt="" width="250px" class="d-inline-block align-top">
                </a>
                <button class="navbar-toggler btn-outline-warning" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-caret-square-down"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-end  text-end" id="navbarTogglerDemo02">
                    <?php if (isset($_SESSION['usuario'])) { ?>
                        <div class="btn-group">
                            <button type="button" class="btn dropdown-toggle btn-outline-warning" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                <i class="fas fa-user-circle me-2"></i> Olá, <?= strtok($_SESSION['usuario']['cliente']['nome'], " ") ?>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                <li><a class="dropdown-item" href="cliente.php?pagina=MinhaConta">Minha conta</a></li>
                                <li>
                                    <hr class="dropdown-divider m-auto" style="width: 140px;">
                                </li>
                                <li><a class="dropdown-item" href="cliente.php?pagina=MeusPedidos">Meus pedidos</a></li>
                                <li>
                                    <hr class="dropdown-divider m-auto" style="width: 140px;">
                                </li>
                                <li><a class="dropdown-item" href="sair.php">Sair</a></li>
                                <li>
                                    <hr class="dropdown-divider m-auto" style="width: 140px;">
                                </li>
                            </ul>
                        </div>
                    <?php } else { ?>
                        <a href="entrar.php"><button role="button" style=" border: 2px solid #ffad00" class="btn text-light">Entrar</button></a>
                    <?php } ?>
                </div>
            </nav>
        </div>
    </header>