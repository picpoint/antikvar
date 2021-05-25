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
    <title>Антиквар - сайт по продаже и покупке антиквариата</title>
    <link rel="stylesheet" href="/../public/css/font-awesome.min.css">
    <link rel="stylesheet" href="/../public/css/style.css">
</head>
<body>

    <section class="indx">
        <div class="indx__wrp">

            <div class="indx__hdr">
                <div class="indx__hdrcontent">
                    <div class="indx__hdrcontacts">
                        <div class="indx__hdrcontactstel">
                            <i class="fa fa-phone-square" aria-hidden="true"></i>
                            <span>+7(968)-535-99-29</span>
                        </div>
                        <div class="indx__hdrcontacstmail">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <span>info@antikvar.ru</span>
                        </div>
                    </div>
                    <div class="indx__hdrlogo">
                        <img src="/../public/pict/logo_bw2.png" alt="logo">
                    </div>
                    <div class="indx__hdrauth">
                        <div class="indx__hdrauthreg">
                            <i class="fa fa-address-card" aria-hidden="true"></i>
                            <a href="registration"><span>Регистрация</span></a>
                        </div>
                        <div class="indx__hdrauthlogin">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                            <a href="authorization"><span>Авторизация</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="indx__menu">
                <div class="indx__menucontent">
                    <div class="indx__menucontentlinks">
                        <a href="#">Оплата покупок</a>
                        <a href="#">Доставка по РФ</a>
                        <a href="#">Гарантия</a>
                        <a href="#">Полезные статьи</a>
                        <a href="#">Контакты</a>
                    </div>
                    <div class="indx__menucontentfind">
                        <input type="search" placeholder="поиск по сайту">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                </div>
            </div>

            <div class="indx__bdy">
                <div class="indx__bdywrp">
                    <div class="indx__bdycategory">
                        <div class="indx__bdycategoryhdr">
                            <span>Категории</span>
                        </div>
                        <div class="indx__bdycategorysections">
                            <form method="post">
                                <div class="indx__bdyall">
                                    <button type="submit" name="btnall">
                                        <img src="/../public/pict/all.png" alt="all">
                                        <span>Весь каталог</span>
                                    </button>
                                </div>
                                <div class="indx__bdybons">
                                    <button type="submit" name="btnbons">
                                        <img src="/../public/pict/bons.png" alt="bons">
                                        <span>Бонистика</span>
                                    </button>
                                </div>
                                <div class="indx__bdycoins">
                                    <button type="submit" name="btncoins">
                                        <img src="/../public/pict/coins.png" alt="coins">
                                        <span>Монеты</span>
                                    </button>
                                </div>
                                <div class="indx__bdybooks">
                                    <button type="submit" name="btnbooks">
                                        <img src="/../public/pict/books.png" alt="books">
                                        <span>Книги</span>
                                    </button>
                                </div>
                                <div class="indx__bdymilitary">
                                    <button type="submit" name="btnmilitary">
                                        <img src="/../public/pict/military.png" alt="military">
                                        <span>Милитария</span>
                                    </button>
                                </div>
                                <div class="indx__bdypostmarks">
                                    <button type="submit" name="btnpostmarks">
                                        <img src="/../public/pict/postmarks.png" alt="postmarks">
                                        <span>Почтовые марки</span>
                                    </button>
                                </div>
                                <div class="indx__bdyhandmade">
                                    <button type="submit" name="btnhandmade">
                                        <img src="/../public/pict/handmade.png" alt="handmade">
                                        <span>Ручная работа</span>
                                    </button>
                                </div>
                                <div class="indx__bdymailenvelopes">
                                    <button type="submit" name="btnenvelopes">
                                        <img src="/../public/pict/mail_envelopes.png" alt="mail_envelopes">
                                        <span>Почтовые открытки</span>
                                    </button>
                                </div>
                                <div class="indx__bdytransport">
                                    <button type="submit" name="btntransport">
                                        <img src="/../public/pict/transport.png" alt="transport">
                                        <span>Транспорт</span>
                                    </button>
                                </div>
                                <div class="indx__bdyorders">
                                    <button type="submit" name="btnorders">
                                        <img src="/../public/pict/orders.png" alt="orders">
                                        <span>Ордена/медали</span>
                                    </button>
                                </div>
                                <div class="indx__bdyhobby">
                                    <button type="submit" name="btnhobby">
                                        <img src="/../public/pict/hobby.png" alt="hobby">
                                        <span>Хобби</span>
                                    </button>
                                </div>
                                <div class="indx__bdyphoto">
                                    <button type="submit" name="btnphoto">
                                        <img src="/../public/pict/photo.png" alt="photo">
                                        <span>Фотографии</span></a>
                                    </button>
                                </div>
                                <div class="indx__bdyicons">
                                    <button type="submit" name="btnicons">
                                        <img src="/../public/pict/icon.png" alt="icons">
                                        <span>Иконы</span>
                                    </button>
                                </div>
                                <div class="indx__bdyceramik">
                                    <button type="submit" name="btnceramik">
                                        <img src="/../public/pict/ceramik.png" alt="ceramik">
                                        <span>Фарфор и керамика</span>
                                    </button>
                                </div>
                                <div class="indx__bdydishes">
                                    <button type="submit" name="btndishes">
                                        <img src="/../public/pict/dishes.png" alt="dishes">
                                        <span>Кухонная утварь</span>
                                    </button>
                                </div>
                                <div class="indx__bdypainting">
                                    <button type="submit" name="btnpainting">
                                        <img src="/../public/pict/painting.png" alt="painting">
                                        <span>Живопись и графика</span>
                                    </button>
                                </div>
                                <div class="indx__bdyother">
                                    <button type="submit" name="btnother">
                                        <img src="/../public/pict/other.png" alt="other">
                                        <span>Разное</span>
                                    </button>
                                </div>
                                <div class="indx__bdyglass">
                                    <button type="submit" name="btnglass">
                                        <img src="/../public/pict/glass.png" alt="glass">
                                        <span>Стекло и хрусталь</span>
                                    </button>
                                </div>
                                <div class="indx__bdyinteryer">
                                    <button type="submit" name="btninteryer">
                                        <img src="/../public/pict/interyer.png" alt="interyer">
                                        <span>Интерьер</span>
                                    </button>
                                </div>
                                <div class="indx__bdymaps">
                                    <button type="submit" name="btnmaps">
                                        <img src="/../public/pict/maps.png" alt="maps">
                                        <span>Карты и плакаты</span>
                                    </button>
                                </div>
                                <div class="indx__bdyjewelry">
                                    <button type="submit" name="btnjewelry">
                                        <img src="/../public/pict/jewelry.png" alt="jewelry">
                                        <span>Ювелирные изделия</span>
                                    </button>
                                </div>
                                <div class="indx__bdyfurniture">
                                    <button type="submit" name="btnfurniture">
                                        <img src="/../public/pict/furniture.png" alt="furniture">
                                        <span>Фурнитура</span>
                                    </button>
                                </div>
                                <div class="indx__bdytech">
                                    <button type="submit" name="btntech">
                                        <img src="/../public/pict/tech.png" alt="tech">
                                        <span>Техника</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="indx__bdycatalog">
                        <?php
                            $show = new \App\Controllers\ProductC();
//                            $show->showCatalog();
                            $show->showLotsByCategory();
                        ?>
                    </div>
                </div>
            </div>

            <div class="indx__footer">
                <span>Все права не защищены ... </span>
                <span> Всех прав не защитить ... </span>
            </div>

        </div>
    </section>



</body>
</html>