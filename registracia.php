<!DOCTYPE html>
<html lang="en">
<head>
    <title>Регистрация</title>
    <meta charset="UTF-8">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script src="JS/slider.js"></script>
    <script src="JS/ajax.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="Styles/Styles.css">
    <link rel="stylesheet" type="text/css" href="Styles/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="Styles/font-awesome.min.css.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>
</head>
<body>
<header>
    <div class="header">
        <div class="sub-header">
            <div class="sub-header-at-top">
                <div class="contact">
                    <div class="contact-for_phone">
                        <span class="w-contacts-item-value">+7 (812) 575-71-57</span>
                    </div>
                    <div class="contact-for_email">
                        <span class="w-contacts-item-value"> <a href="treecolor.ru">info@treecolor.ru</a></span>
                    </div>
                </div>
                <div class="social">
                    <div class="socials-list">
                        <div class="socials-item facebook">
                            <a class="socials-item-link" target="_blank" href="https://www.facebook.com/"></a>
                        </div>
                        <div class="socials-item twitter">
                            <a class="socials-item-link" target="_blank" href="https://twitter.com/"></a>
                        </div>
                        <div class="socials-item google">
                            <a class="socials-item-link" target="_blank" href="https://plus.google.com/"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="sub-header-at-midle">
            <div class="logo">
                <a href="index.php"><img src="images/title_logo.png" alt=""></a>
            </div>
            <div class="navigate">
                <ul id="navigate-menu">
                    <li class="main-nav-list float-shadow bubble-bottom"><a href="catalog.php">Каталог</a>
                        <ul>
                            <li class="wrap-nav-list"><a href="">МФУ A3</a>	</li>
                            <li class="wrap-nav-list"><a href="">МФУ A4</a>	</li>
                            <li class="wrap-nav-list"><a href="">Принтеры A4</a>	</li>
                            <li class="wrap-nav-list"><a href="">Расходные материалы</a>	</li>
                            <li class="wrap-nav-list"><a href="">Приложения для печати</a>	</li>
                        </ul>
                    </li>
                    <li  class="main-nav-list float-shadow"><a href="">Доставка</a></li>
                    <li  class="main-nav-list float-shadow bubble-bottom"><a href="">Поддержка</a>
                        <ul>
                            <li  class="wrap-nav-list"><a href="">Расчет стоимости владения</a>	</li>
                            <li  class="wrap-nav-list"><a href="">Гарантии</a></li>
                        </ul>
                    </li>
                    <li  class="main-nav-list float-shadow "><a href="news.php">Новости</a>
                    </li>
                    <li  class="main-nav-list float-shadow bubble-bottom"><a href="">Компания</a>
                        <ul>
                            <li class="wrap-nav-list"><a href="">Контакты</a>	</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="search"></div>
        </div>
    </div>
</header>
<div class="headerOtherPage">

</div>

<div class="ContentNews">
    <fieldset>
        <legeng>Регистрация</legeng>
<form method="post">
    <div>Логин<input type="text" name="loginReg"></div>
    <div>Пароль<input type="password" name="passReg"></div>
    <div>Имя<input type="text" name="nameReg"></div>
    <div>Фамилия<input type="text" name="lastNameReg"></div>
    <div>E-mail<input type="text" name="emailReg"></div>
    <div><input type="submit" value="Зарегистрироваться"></div>
    
</form>
    </fieldset>
    </div>
<?php
include_once "config.php";
include_once "Function.php";

if(isset($_POST['loginReg'])){

    mysqli_set_charset($db,"UTF8");
//    Экранированный логин
    $name = mysqli_real_escape_string($db,$_POST['nameReg']);
    $last = mysqli_real_escape_string($db,$_POST['lastNameReg']);
    $email = mysqli_real_escape_string($db,$_POST['emailReg']);
    $login = mysqli_real_escape_string($db, $_POST['loginReg']);
    $pass = md5($_POST['passReg']);
    $query = mysqli_query($db, "
    SELECT `id` FROM `users` WHERE `login` = '$login';
    ");
    if(mysqli_num_rows($query) ==0){
        mysqli_query($db, "INSERT INTO `users` SET `login` = '$login',
                          `pass` = '$pass', 
                          `first_name`= '$name', 
                          `last_name` = '$last',
                          `email` = '$email';
");
        if(mysqli_errno($db)== 0){
            $id      = mysqli_insert_id($db);
            $session2 = getHash();
            $token2   = getHash();
            mysqli_query($db, "
				                INSERT INTO `connect` SET
					            `session` = '$session2',
					            `token`   = '$token2',
					            `id_user` = $id;
			                      ");
            
            echo "пользователь зарегистрирован";
            echo "<a href='index.php'>Перейти на главную страницу</a>";
        }
        else{
            echo 'Error';
        }

    }else
    {
        echo 'this login is bussy';
    }

}

?>
<?php
include_once "footer.php";
?>