<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>about</title>
    <meta name="keywords" content="семья, друзья, ресторан, кафе, минск, официальный сайт">
    <meta name="description" content="Ресторан  – с особенной отмосферой в Минске и вкусной едой с летней террасой и живой музыкой.">

</head>

<body>
    <div class="page">
        <?php require "blocks/header.php" ?>
        <div class="container about">
            <h1>Food - это место где Вас ждут! </h1>
        </div>
        <div class="container">
            <div class="slider">
                <img class='slider-img' src="img/slaider_1.jpg" alt="">
                <img class='slider-img' src="img/slaider_2.jpg" alt="">
                <img class='slider-img' src="img/slaider_3.jpg" alt="">
                <img class='slider-img' src="img/slaider_4.jpg" alt="">
                <img class='slider-img' src="img/slaider_5.jpg" alt="">


                <div class="icon_slider_left">
                    <img class="prev controlls" src="img/icon_left.png" alt="">
                </div>

                <div class="icon_slider_right">
                    <img class="next controlls" src="img/icon_right.png" alt="">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="about_flex">
                <div class="about_flex-item ">
                    <h2 class=" project-h3">Комфортные залы</h2>
                    <p>Залы ресторана подходят для любого события любого формата: конференц-зал для деловых встреч, панорамная стойка для тех, кто хочет быть ближе к артистам на сцене.</p>
                </div>
                <div class="about_flex-item">
                    <h2 class=" project-h3">Живые концерты</h2>
                    <p>Качественный звук, профессиональное световое шоу и атмосфера грандиозного праздника от лучших кавер-бэндов города ждет вас каждый день. </p>
                </div>
                <div class="about_flex-item">
                    <h2 class=" project-h3">Богатая кухня</h2>
                    <p>Основное меню состоит из традиционных блюд.Обеденное меню комплекс из первого, второго и напитка. Детское меню – разработано специально для маленьких гостей ресторана.</p>
                </div>
            </div>
        </div>
        <?php require "blocks/footer.php"  ?>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>

<script src="js/script.js"></script>

</html>