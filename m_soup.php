!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Soup</title>
    <meta name="keywords" content="семья, друзья, ресторан, кафе, минск, официальный сайт">
    <meta name="description" content="Ресторан  – с особенной отмосферой в Минске и вкусной едой с летней террасой и живой музыкой.">

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
                    <h3>Суп — незаменимое блюдо обеденного стола. </h3>

                </div>


                <div class="menu_grid">

                    <?php
                    $host = 'localhost';
                    $bdname = 'food';
                    $username = 'root';
                    $passwd = '';

                    $mysqli = mysqli_connect($host, $username,  $passwd, $bdname);
                    $queru = "set names utf8";
                    $mysqli->query($queru);
                    $queru = "select*from coup";
                    $results = $mysqli->query($queru);
                    while ($row = $results->fetch_assoc()) {
                        echo '
                                
            <div class="menu-items">
                        
                    <div class="menu-item">
                                <div class="menu-image">
                                    <img src="' . $row["img"] . '" class="menu-img">
                                    <div class="price">
                                        <img src="img/Ellipse .png" class="price-image">
                                        <div class="cost">
                                        ' . $row["price"] . 'руб.
                                        </div>
                                    </div>
                                </div>
                            <div class="menu-text">
                                <h2> ' . $row["name"] . '</h2>
                            </div>
                            <div class="menu-subtext">
                                ' . $row["compound"] . '
                            </div>
                            <div class="menu-button">
                                <a href="#" class="menu-btn">Заказать</a>
                            </div>
                    </div>
            </div>
        
            ';
                    }

                    ?>
                </div>
            </div>
        </section>


        <?php require "blocks/footer.php"  ?>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>

<script src="js/script.js"></script>

</html>