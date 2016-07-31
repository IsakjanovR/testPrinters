<?php
include_once "function.php";

$session = $_COOKIE['s'];
mysqli_query($db, "
DELETE FROM `connect` WHERE `session` = '$session'
");
setcookie('s','');
setcookie('t','');
header("location: index.php");
?>