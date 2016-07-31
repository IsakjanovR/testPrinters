<?php
include_once "config.php";
$model = intval($_POST['model']);
$Query = "SELECT * FROM `price_resurse` WHERE `id_models` = '$model'";

if ($result = mysqli_query($db, $Query)) {
    $i = 0;
    $arrR = array();
    while($rowR = mysqli_fetch_array($result))
    {
        $arrR['printer'] = array('id' => $rowR['id'],
            '1' => $rowR['price_black_cart'],
            '2' => $rowR['res_black-cart'],
            '3' => $rowR['price_color-cart'],
            '4' => $rowR['res_color_cart'],
            '5' => $rowR['price_BEP_cart'],
            '6' => $rowR['res_BEP_cart'],
            '7' => $rowR['price_CEP_cart'],
            '8' => $rowR['res_CEP_cart'],
            '9' => $rowR['price_trans'],
            '10' => $rowR['res_trans'],
            '11' => $rowR['price_fuser'],
            '12' => $rowR['res_fuser']);
        $i++;
    }
    echo json_encode($arrR);
}
?>