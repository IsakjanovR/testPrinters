

    <meta charset="UTF-8">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script src="JS/slider.js"></script>
    <script src="JS/ajax.js"></script>
    <script src="JS/ajaxResurse.js"></script>
    <script src="JS/calc.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="Styles/Styles.css">
    <link rel="stylesheet" type="text/css" href="Styles/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="Styles/font-awesome.min.css.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
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
                        <?php
                        include_once "config.php";
                        include_once "Function.php";
                        $user = checkUser();
                        if (!empty($user)) {
                            echo "<div class='socials-item '>welcome {$user['login']}<a href='exit.php'>Выйти</a><a href='mypage.php'>Личный кабинет</a></div>";
                        }
                        else {
                            echo "<div class='socials-item '>
                            <form  method='post'>
                            <li class='login-key'>
                                <ul class='login-menu'>
                                    <li class='wrap-login'><input type='text' name='login'></li>
                                    <li class='wrap-login'><input type='password' name='password'></li>
                                    <li class='wrap-login'><input type='submit' value='Вход'></li>
                                    <li class='wrap-login'><a href='registracia.php'><input type='button' value='Регистрация'></a></li>
                            </ul>
                            </li>
                            </form>
                            </div>";

                        }
                        if (!empty($_POST)) {
                            $login = mysqli_real_escape_string($db, $_POST['login']);
                            $pass  = md5($_POST['password']);
                            $query = mysqli_query($db, "
			                SELECT `id` FROM `users`
			                WHERE `login` = '$login'
			                AND   `pass`  = '$pass';
		                    ");

                            if (mysqli_num_rows($query) > 0) {
                                $user    = mysqli_fetch_assoc($query);
                                $session = getHash();
                                $token   = getHash();
                                setcookie('s', $session);
                                setcookie('t', $token);
                                mysqli_query($db, "
				                INSERT INTO `connect` SET
					            `session` = '$session',
					            `token`   = '$token',
					            `id_user` = {$user['id']};
			                      ");
                                    header('location: index.php');
                                }
                                else {echo "<script>alert('неверный логин или пароль')</script>";}
                            }

                        ?>

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
                                <li class="wrap-nav-list"><a href="tempPrinSort.php?type=2">Принтера и МФУ A3</a>	</li>
                                <li class="wrap-nav-list"><a href="tempPrinSort.php?type=1">Принтера и МФУ A4</a>	</li>
                                <li class="wrap-nav-list"><a href="">Расходные материалы</a>	</li>
                            </ul>
                        </li>
                        <li  class="main-nav-list float-shadow"><a href="">Доставка</a></li>
                        <li  class="main-nav-list float-shadow bubble-bottom"><a href="">Поддержка</a>
                            <ul>
                                <li  class="wrap-nav-list"><a href="calcPrint.php">Расчет стоимости владения</a>	</li>
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
