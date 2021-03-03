<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Taxi Drive</title>
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

        /* Largura da barra de rolagem */
        ::-webkit-scrollbar {
            display: none;
        }

        Caso qu
    </style>
</head>

<body style="background-image: url('https://i.pinimg.com/originals/20/cc/54/20cc54a2306c09ef5a8af7f9d2b81439.jpg'); background-repeat: no-repeat; background-size: cover; background-position: botton; background-attachment: fixed;">
    <nav class="navbar navbar-expand-md navbar-dark p-5 pt-3 pb-0 bg-transparent" style="background: #ffad00;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="assets\img\logo-img.png" alt="" width="250px" class="d-inline-block align-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="viagens.php">Lista de viagens</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>