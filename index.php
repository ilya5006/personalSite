<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Персональный сайт</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/skills.css">
    <link rel="stylesheet" href="./css/portfolio.css">
    <link rel="stylesheet" href="./css/contacts.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="./js/script.js" defer></script>
</head>
<body>
    <header>
        <button id="main_nav" class="page_nav current_page">ГЛАВНАЯ</button>
        <button id="skills_nav" class="page_nav">НАВЫКИ</button>
        <button id="portfolio_nav" class="page_nav">ПОРТФОЛИО</button>
        <button id="contacts_nav" class="page_nav">КОНТАКТЫ</button>
    </header>
    <div id="wrapper">
    <?php 
        require_once './main.html';
        require_once './skills.html';
        require_once './portfolio.html';
        require_once './contacts.html';
    ?>
    </div>
</body>
</html>