<?php

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Login</title>
    
    <?php require_once './require/head_links.php';?>

</head>

<body>

    <?php require_once './require/header.php';?>

    <main class="container my-5">
        <h2 class="mb-3">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-circle-fill" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-11.5.5a.5.5 0 0 1 0-1h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5z" />
            </svg>
            Login
        </h2>

        <form>
            <div class="form-group">
                <label for="loginEmail">E-mail</label>
                <input type="email" class="form-control" id="loginEmail" autofocus required>
            </div>
            <div class="form-group">
                <label for="loginSenha">Senha</label>
                <input type="password" class="form-control" id="loginSenha" required>
            </div>
            <p><a href="#">Esqueceu a senha?</a></p>
            <p><a href="./cadastro.php">Não tem cadastro?</a></p>
            <button type="button" class="btn btn-primary">ENTRAR</button>
        </form>

    </main>

    <?php require_once './require/footer.php';?>

</body>

</html>