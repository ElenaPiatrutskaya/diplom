<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>menu </title>
    <meta name="keywords" content="семья друзья ресторан кафе минск официальный сайт">
    <meta name="description" content="Ресторан – с особенной отмосферой в Минске и вкусной едой с летней террасой и живой музыкой.">

</head>

<body>
    <div class="page">
        <?php require "blocks/header.php" ?>

        <section class="menu">
            <div class="container">

                <div class="menu-title">
                    <a href="menu.php">
                        <h2>Меню</h2>
                    </a>
                    <h3>Авторское меню от шеф-повара </h3>

                </div>


                <div class="menu-selection">
                    <a href="m_comp.php">Меню на компанию</a>
                    <a href=" m_soup.php">Супы</a>
                    <a href="m_hot.php">Горячие блюда</a>

                </div>

            </div>
        </section>


        <?php require "blocks/footer.php"  ?>

    </div>
</body>
<script src=" https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>

<script src="js/script.js"></script>

</html>