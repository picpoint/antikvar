<?php
    $user = new App\Controllers\User();
//    $user->regUser();
    $user->someUsr();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>регистрация. Антиквар</title>
    <link rel="stylesheet" href="/../public/css/style.css">
</head>
<body>

    <section class="reg">
        <div class="reg__wrp">
            <div class="reg__regform">
                <form method="post" class="reg__form">
                    <span>Регистрация</span>
                    <input type="text" name="regfirstname" placeholder="Имя">
                    <input type="text" name="reglastname" placeholder="Фамилия">
                    <input type="text" name="reglogin" placeholder="Логин">
                    <input type="password" name="regpassword" placeholder="Пароль">
                    <button type="submit" name="regbtn">Зарегистрироваться</button>
                </form>
            </div>
        </div>
    </section>


</body>
</html>