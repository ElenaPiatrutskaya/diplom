<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Restaurant Home Page </title>
    <meta name="keywords" content="семья, друзья, ресторан, кафе, минск, официальный сайт">
    <meta name="description" content="Ресторан – с особенной отмосферой в Минске и вкусной едой с летней террасой и живой музыкой.">

</head>

<body>
    <div class="page">
        <div class="header_img">
            <?php require "blocks/header.php"  ?>

            <h1 class="h1"> Готовим для вас! </h1>
            <h4 class="h4">Блюда за 15 минут</h4>
        </div>


        <section class="about">
            <div class="info">
                <div class="container">
                    <div class="abaut_grid">
                        <div class="abaur_grid-item">
                            <h4 class="about_h4">15</h4>
                            <h5 class="about_h5"> лет</h5>
                            <p class="about_p">на рынке</p>
                        </div>
                        <div class="abaur_grid-item">
                            <h4 class="about_h4">15</h4>
                            <h5 class="about_h5"> лет</h5>
                            <p class="about_p">на рынке</p>
                        </div>
                        <div class="abaur_grid-item">
                            <h4 class="about_h4">15</h4>
                            <h5 class="about_h5"> лет</h5>
                            <p class="about_p">на рынке</p>
                        </div>
                        <div class="abaur_grid-item">
                            <h4 class="about_h4">15</h4>
                            <h5 class="about_h5"> лет</h5>
                            <p class="about_p">на рынке</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <h2 class="text-h2 project-h2"> Блюдо дня </h2>
                <div class="about_flex">
                    <div class="about_flex-item">
                        <img class="project-img" src="img/Screenshot_1.jpg" alt="Блюдо">
                        <div class="rectangle"></div>
                        <h3 class="text-h3 project-h3">Картофельная бабка</h3>
                        <p class="text-p project-p">Картофель с рулькой, подается со шкварками,сметаной и хрустящим луком
                        </p>
                    </div>
                    <div class="about_flex-item">
                        <img class="project-img" src="img/Screenshot_2.jpg" alt="Блюдо">
                        <div class="rectangle"></div>
                        <h3 class="text-h3 project-h3">Жаренный картофель</h3>
                        <p class="text-p project-p">Картофель с шампиньонами,вешанками,боровиками и тимьяном</p>
                    </div>
                    <div class="about_flex-item">
                        <img class="project-img" src="img/Screenshot_3.jpg" alt="Блюдо">
                        <div class="rectangle"></div>
                        <h3 class="text-h3 project-h3">Цеппелины</h3>
                        <p class="text-p project-p">Жареные цеппелины с мясом,подаются с обжаренным беконом </p>
                    </div>
                </div>

            </div>

        </section>
        <section class="request">
            <div class="container">
                <div class=" request-flex">
                    <div class="request-flex-left">
                        <h4 class="request_h4">Заказывайте любимые блюда с доставкой</h4>
                    </div>
                    <div class="request-flex-right">
                        <button class="request_btn">
                            <img src="img/phone_icon.png" alt=" icon" class="request_icon">
                            Доставка
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <section class="reviews">
            <div class="container">
                <h2 class="text-h2 reviews_h2">Отзывы наших посетителей</h2>
                <div class="reviews_grid">
                    <div class="reviews_grid-item">
                        <div class="reviews_card">
                            <div class="reviews_quotes">&#x2665</div>
                            <p class="text-p-reviews">Хорошее заведение! Спокойная обстановка, спокойная музыка, вкусные
                                блюда и большие порции . Настоящий беларуская кухня!!</p>
                        </div>
                        <h4 class="text-h4">Иванов Иван</h4>
                    </div>
                    <div class="reviews_grid-item">
                        <div class="reviews_card">
                            <div class="reviews_quotes">&#x2665</div>
                            <p class="text-p-reviews">прекрасное и уютное место</p>
                        </div>
                        <h4 class="text-h4">Андрей</h4>
                    </div>
                    <div class="reviews_grid-item">
                        <div class="reviews_card">
                            <div class="reviews_quotes">&#x2665</div>
                            <p class="text-p-reviews">Сегодня провели замечательный вечер,спасибо огромное нашему официанту
                                Алисе,замечательная девочка!!!</p>
                        </div>
                        <h4 class="text-h4">Антонина</h4>
                    </div>
                </div>
            </div>
        </section>
        <section class="request">
            <div class="container">
                <div class=" request-flex">
                    <div class="request-flex-left">
                        <h4 class="request_h4">Отпразднуйте в одном из самых лучших рестаранов</h4>
                    </div>
                    <div class="request-flex-right">
                        <button class="request_btn">
                            <a href="reservation.php" class="header_link">Заказ столика</a>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="contacts">
            <div class="container">
                <h2 class="text-h2 contacts_h2">Контакты</h2>
                <div class="contacts_grid">
                    <div class="contacts_item">
                        <img class="contacts_icon" src="img/address.png" alt="location">
                        <h3 class="text-h3 contacts_h3 contacts_h3-gray">Адрес:</h3>
                        <h3 class="text-h3 contacts_h3 "> г. Минск, <br>ул. Сторожевская, 8</h3>
                    </div>
                    <div class="contacts_item">
                        <img class="contacts_icon" src="img/phone_icon.png" alt="Phone">
                        <h3 class="text-h3 contacts_h3 contacts_h3-gray">Телефон:</h3>
                        <h3 class="text-h3 contacts_h3 ">
                            <a href="tel:+37517-373-08-09">+37517-373-08-09 </a>
                            <br>
                            <a href="tel:+37517-373-08-09">+37517-373-08-09 </a>
                        </h3>

                    </div>
                    <div class="contacts_item">
                        <img class="contacts_icon" src="img/clock.png" alt="Schedule">
                        <h3 class="text-h3 contacts_h3 contacts_h3-gray">Время работы:</h3>
                        <h3 class="text-h3 contacts_h3 "> Пн-Сб<br>10:00-00:00</h3>
                    </div>
                    <div class="contacts_item">
                        <img class="contacts_icon" src="img/mail.svg" alt="Email">
                        <h3 class="text-h3 contacts_h3 contacts_h3-gray">E-mail</h3>
                        <h3 class="text-h3 contacts_h3 contacts_h3-accent">
                            <a href="mailto:Info@mail.ru">Info@gmail.com</a>
                        </h3>
                    </div>
                </div>
            </div>
        </section>

        <?php require "blocks/footer.php"  ?>
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>

<script src="js/script.js"></script>

</html>