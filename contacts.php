<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>constant</title>
    <meta name="keywords" content="семья, друзья, ресторан, кафе, минск, официальный сайт">
    <meta name="description" content="Ресторан – с особенной отмосферой в Минске и вкусной едой с летней террасой и живой музыкой.">

</head>

<body>
    <div class="page">
        <?php require "blocks/header.php" ?>

        <section class="contacts">
            <div class="container">
                <div id="map-test" class="map">
                    <div style="position:relative;overflow:hidden;">
                        <a href="https://yandex.by/maps/157/minsk/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Минск</a>
                        <a href="https://yandex.by/maps/geo/53177019/?ll=27.613370%2C53.886941&utm_medium=mapframe&utm_source=maps&z=12.37" style="color:#eee;font-size:12px;position:absolute;top:14px;">Минск — Яндекс Карты</a>
                        <iframe src="https://yandex.by/map-widget/v1/?ll=27.613370%2C53.886941&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1MzE3NzAxORIc0JHQtdC70LDRgNGD0YHRjCwg0JzRltC90YHQuiIKDaJ-3EEV8ZtXQg%2C%2C&z=12.37" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
                    </div>
                </div>
            </div>


            <div class="container_contacts">

                <div class="contacts_grid_contacts">

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
                        <h3 class="text-h3 contacts_h3 "> Пн-Сб<br>00:00-20:00</h3>
                    </div>


                </div>
        </section>
        <?php require "blocks/footer.php"  ?>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>

<script src="js/script.js"></script>

</html>