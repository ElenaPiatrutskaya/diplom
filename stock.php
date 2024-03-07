<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>stock</title>
    <meta name="keywords" content="семья, друзья, ресторан, кафе, минск, официальный сайт">
    <meta name="description" content="Ресторан – с особенной отмосферой в Минске и вкусной едой с летней террасой и живой музыкой.">

</head>

<body>
    <div class="page">
        <?php require "blocks/header.php" ?>
        <section class="container stock">

            <div class="container">
                <h2 class="text-h2 project-h2"> Акции </h2>
                <div class="about_flex">
                    <div class="about_flex-item">
                        <img class="project-img" src="img/stock_hb.jpg" alt="Блюдо">
                        <div class="rectangle"></div>
                        <h3 class="text-h3 project-h3">Именинникам</h3>
                    </div>
                    <div class="about_flex-item">
                        <img class="project-img" src="img/stock_2.jpg" alt="Блюдо">
                        <div class="rectangle"></div>
                        <h3 class="text-h3 project-h3">Второе горячее блюдо в подарок</h3>
                    </div>
                    <div class="about_flex-item">
                        <img class="project-img" src="img/stock_koffee.jpg" alt="Блюдо">
                        <div class="rectangle"></div>
                        <h3 class="text-h3 project-h3">Кофе на вынос в подарок</h3>
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