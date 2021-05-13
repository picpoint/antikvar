<?php
    session_start();
    setcookie($_SESSION['login'], $_SESSION['password'], time() + 86400, '/');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/../public/css/style.css">
    <title>Личный кабинет</title>
</head>
<body>

    <section class="pp">
        <div class="pp__wrp">
            <div class="pp__lblk">
                <div class="pp__lblkhdr">
                    <span>Личный кабинет</span>
                </div>
                <div class="pp__lblkmenu">
                    <div class="pp__lblkorders">
                        <a href="orders.php">Заказы</a>
                    </div>
                    <div class="pp__lblkcatalog">
                        <a href="catalog.php">Каталог</a>
                    </div>
                    <div class="pp__lblkfinance">
                        <a href="finance.php">Финансы</a>
                    </div>
                    <div class="pp__lblkdirectory">
                        <a href="directory.php">Справочник</a>
                    </div>
                    <div class="pp__lblktuning">
                        <a href="tuning.php">Настройка</a>
                    </div>
                </div>
            </div>
            <div class="pp__rblk">
                <div class="pp__rblkhdr">
                    <span>
                        <?php
                            echo $_SESSION['login'];
                        ?>
                    </span>
                    <span>Exit</span>
                </div>
                <div class="pp__rblkcontent">
                    <div class="pp__rblkaddproduct">
                        <span>Загрузить антиквариат</span>
                        <form method="post" class="pp__rblkuploadform" name="rblkupload" enctype="multipart/form-data">
                            <input type="file" name="prodphoto">
                            <input type="text" name="prodarticle" placeholder="Артикул товара(если Вам известен)">
                            <input type="text" name="prodname" placeholder="Название товара">
                            <input type="text" name="prodprice" placeholder="Цена(за которую Вы хотите продать)">
                            <textarea name="proddesc" id="proddesc" cols="30" rows="10" placeholder="Описание товара"></textarea>
                            <select name="prodcategory" id="prodcategory">
                                <option value="bons">Бонистика</option>
                                <option value="coins">Монеты</option>
                                <option value="books">Книги</option>
                                <option value="military">Милитария</option>
                                <option value="postmarks">Почтовые марки</option>
                                <option value="handmade">Ручная работа</option>
                                <option value="mail_envelopes">Почтовые открытки</option>
                                <option value="transport">Транспорт</option>
                                <option value="orders">Ордена/медали</option>
                                <option value="hobby">Хобби</option>
                                <option value="photo">Фотографии</option>
                                <option value="icons">Иконы</option>
                                <option value="ceramik">Фарфор и керамика</option>
                                <option value="dishes">Кухонная утварь</option>
                                <option value="painting">Живопись и графика</option>
                                <option value="other">Разное</option>
                                <option value="glass">Стекло и хрусталь</option>
                                <option value="interyer">Интерьер</option>
                                <option value="maps">Карты и плакаты</option>
                                <option value="jewelry">Ювелирные изделия</option>
                                <option value="furniture">Фурнитура</option>
                                <option value="tech">Техника</option>
                            </select>
                            <button type="submit">Загрузить</button>
                        </form>
                    </div>
                    <div class="pp__rblkmycatalog">
                        <div class="pp__rblkmycataloghdr">
                            <span>Мой антиквариат</span>
                        </div>
                        <div class="pp__rblkmycatalogcontent">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>