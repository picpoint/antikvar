<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Страница не найдена ...</title>
</head>
<body>

    <section class="pnf">
        <div class="pnf__wrp">
            <h1>404</h1>
            <h3>Page not found ...</h3>

            <?php
                print_r($_GET['cat']);
                echo "<br>";
            ?>

        </div>
    </section>

</body>
</html>