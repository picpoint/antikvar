<?php
    session_start();

    $auth = new App\Models\User();
    $auth->authUser();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация.</title>
    <link rel="stylesheet" href="/../public/css/style.css">
</head>
<body>

    <section class="auth">
        <div class="auth__wrp">
            <form method="post" name="authform" class="auth__authform">
                <span>Авторизация</span>
                <input type="text" name="authlogin" placeholder="Логин">
                <input type="password" name="authpass" placeholder="Пароль">
                <button type="submit" name="authbtn">Войти</button>
            </form>
        </div>
    </section>

</body>
</html>