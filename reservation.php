<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>reservation</title>
    <meta name="keywords" content="семья, друзья, ресторан, кафе, минск, официальный сайт">
    <meta name="description" content="Ресторан – с особенной отмосферой в Минске и вкусной едой с летней террасой и живой музыкой.">

</head>

<body>
    <div class="page">
        <?php require "blocks/header.php" ?>


        <center>
            <form action="">

                <legend>Бронирование стола/зала</legend>
                <table class="table">
                    <tr>
                        <td><label for="name">Введите имя:</label></td>
                        <td><input id="name" type="text" placeholder="Имя"></td>
                    </tr>
                    <tr>
                        <td><label for="mail">Введите email:</label></td>
                        <td><input id="mail" type="email" placeholder="Почта"></td>
                    </tr>
                    <tr>
                        <td><label for="phone">Введите телефон:</label></td>
                        <td><input id="phone" type="text" placeholder="Телефон"></td>
                    </tr>
                    <tr>
                        <td><label for="date">Дата:</label></td>
                        <td><input id="date" type="date"></td>
                    </tr>
                    <tr>
                        <td><label for="number">Кол-во гостей:</label></td>
                        <td><input id="number" type="number"></td>
                    </tr>
                    <tr>
                        <td><label for="message">Доп. информация</label></td>
                        <td><textarea id="message" name="" id="" cols="50" rows="7" placeholder="Сообщение"></textarea></td>
                    </tr>
                </table>
                <button type="submit">Отправить</button>


            </form>
        </center>

        <?php require "blocks/footer.php"  ?>
    </div>
</body>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>

<script src="js/script.js"></script>

</html>