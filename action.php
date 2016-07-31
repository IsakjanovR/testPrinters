<?php
include_once "config.php";
$vendor = intval($_POST['vendor']);
    $modelQuery = "SELECT `id`,`model_name` FROM `model_printer` WHERE `id_vendor` = '$vendor'";
if ($result = mysqli_query($db, $modelQuery)) {
    $i = 0;
    $arr = array();
    while($row = mysqli_fetch_array($result))
    {
        $arr['model'][$i] = array('id' => $row['id'], 'name' => $row['model_name']);
        $i++;
    }
    echo json_encode($arr);
}

?>