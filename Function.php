
<?php
$newsQuery = mysqli_query($db,"SELECT * FROM `news` ORDER BY id DESC" );
$newsArray = mysqli_fetch_assoc($newsQuery);
$modelQuery = mysqli_query($db,"SELECT * FROM `model_printer` WHERE `id_format` = 1 LIMIT 5;");
$arrModel = mysqli_fetch_assoc($modelQuery);

function getHash() {
    $str  = "abcdefghijklmnopqrstuvwxyz0123456789";
    $hash = "";
    for ($i = 0; $i < 32; $i++) {
        $hash.= $str[rand(0, 35)];
    }
    return $hash;
}
//Проверка пользователья
function checkUser($flag = FALSE) {
    global $db;
    if (isset($_COOKIE['s']) AND isset($_COOKIE['t'])) {
        $session = $_COOKIE['s'];
        $token   = $_COOKIE['t'];
        $query   = mysqli_query($db, "
				SELECT `users`.* FROM `users`
				LEFT JOIN `connect` ON( `id` = `id_user` )
				WHERE `session` = '$session'
				AND   `token`   = '$token';
			");

        if (mysqli_num_rows($query) != 1) {
            $query = mysqli_query($db, "
					SELECT `id_user` FROM `connect`
					WHERE `session` = '$session';
				");

            setcookie('s', '');
            setcookie('t', '');

            if (mysqli_num_rows($query) != 0) {
                mysqli_query($db, "
						DELETE FROM `connect`
						WHERE `session` = '$session';
					");
            }
            if ($flag) header("Location: index.php");
            else return array();
        }
        else {
            return mysqli_fetch_assoc($query);
        }
    }
    else {
        setcookie('s', '');
        setcookie('t', '');
        if ($flag) header("Location: index.php");
        else return array();
    }
}
?>

<!--Вывод из базы данных -->

<?php
$vendorQuery = "SELECT * FROM `vendor_printer` ORDER BY `vend_name`";
if ($result = mysqli_query($db, $vendorQuery)) {

    $arrVendor = array();
    while($rowVendor = mysqli_fetch_array($result))
    {
        $arrVendor[] = $rowVendor;
    }
    mysqli_free_result($result);
}

$typeQuery = "SELECT * FROM `type_printer` ORDER BY `type_name`";
if ($result = mysqli_query($db, $typeQuery)) {

    $arrType = array();
    while($rowType = mysqli_fetch_array($result))
    {
        $arrType[] = $rowType;
    }
    mysqli_free_result($result);
}

$formatQuery = "SELECT * FROM `format_printer` ORDER BY `format_name`";
if ($result = mysqli_query($db, $formatQuery)) {

    $arrFormat = array();
    while($rowFormat = mysqli_fetch_array($result))
    {
        $arrFormat[] = $rowFormat;
    }
    mysqli_free_result($result);
}


$functionQuery = "SELECT * FROM `function_printer`";
if ($result = mysqli_query($db, $functionQuery)) {

    $arrFunc = array();
    while($rowFunc = mysqli_fetch_array($result))
    {
        $arrFunc[] = $rowFunc;
    }
    mysqli_free_result($result);
}


?>
