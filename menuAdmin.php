<?php

?>
<head>
    <link rel="stylesheet" href="Styles/menuAdmin.css">
</head>
<div class="row">
    <nav>
        <ul>
            <li <?php if (PAGE == 'creatNews') echo 'class="active"';?>><a href="creatNews.php">Создать Новость</a></li>
            <li <?php if (PAGE == 'addPrinter') echo 'class="active"';?>><a href="addPrinter.php">Добавить Производителя</a></li>
            <li <?php if (PAGE == 'addModel') echo 'class="active"';?>><a href="addModel.php">Добавить Модель</a></li>
            <li <?php if (PAGE == 'addResurse') echo 'class="active"';?>><a href="addResurse.php">Добавить Ресурсы</a></li>
            <li <?php if (PAGE == 'addParts') echo 'class="active"';?>><a href="addParts.php">Добавить Запчасть</a></li>
        </ul>
    </nav>
</div>
