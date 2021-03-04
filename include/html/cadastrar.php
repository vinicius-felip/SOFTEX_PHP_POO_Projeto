<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 10px;
            padding-bottom: 40px;
            background-color: #242424;
        }

        .form-signin {
            width: 100%;
            max-width: 530px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }

        .form-signin .form-control:focus {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        p a {
            text-decoration: none;
            color: black;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body class="text-center">

    <main class="form-signin">
        <form method="post">
            <a href="index.php"><img class="mb-4" src="assets/img/logo-img.png" alt="" width="300" height="60"></a>
            <?php if ($mensagem) { ?>
                <div class="alert alert-danger" role="alert">
                    E-mail ou CPF já em uso.
                </div>
            <?php } ?>
            <fieldset style="background: #ffad00;" class="rounded px-3 pt-3 mt-3">
                <h1 class="h3 mb-3 fw-normal">Informe seus dados, por favor</h1>
                <input name="nome" type="text" id="inputEmail" class="form-control mb-3" placeholder="Nome Completo" required autofocus>
                <input name="cpf" type="text" id="inputEmail" class="form-control mb-3" placeholder="CPF" required>
                <input name="email" type="email" id="inputEmail" class=" form-control mb-3" placeholder="Email" required>
                <input name="senha" type="password" id="inputPassword" class="form-control mb-3" placeholder="Senha" required>
                <input name="confsenha" type="password" id="inputPassword" class="form-control mb-3" placeholder="Confirme a Senha" required>
                <button name="tipo" value="cliente" class="w-100 btn btn-lg btn-dark mb-3" type="submit">Cadastrar</button>
                <p class="text-end text-white">Já tem cadastro?<a href="entrar.php"> Acesse sua conta</a></p>
            </fieldset>
        </form>
    </main>



</body>

</html>