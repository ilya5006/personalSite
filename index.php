<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Персональный сайт</title>
    <link rel="stylesheet" href="./css/index.css">
    <script src="./js/script.js" defer></script>
</head>
<body>
    <header>
        <button id="main">ГЛАВНАЯ</button>
        <button id="skills">НАВЫКИ</button>
        <button id="portfolio">ПОРТФОЛИО</button>
        <button id="contacts">КОНТАКТЫ</button>
    </header>
    <div id="wrapper">

    <?php 
        require_once './main.php';
        require_once './skills.php';
        require_once './portfolio.php';
        require_once './contacts.php';
    ?>

    </div>
</body>
</html>