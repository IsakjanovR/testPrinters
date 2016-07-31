<head>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script src="JS/slider.js"></script>
    <script src="JS/ajax.js"></script>
</head>
<body>
<?php
define('PAGE','addResurse');
include_once "menuAdmin.php";
include_once "config.php";
include_once "Function.php";


if (!empty($_POST)) {
    $model = (int)$_POST['model'];
    $modelPrice = (int)$_POST['price'];
    $priceBlackCartridge = (int)$_POST['priceBlackCartridge'];
    $resBlackCartridge = (int)$_POST['resBlackCartridge'];
    $priceColorCartridge = (int)$_POST['priceColorCartridge'];
    $resColorCartridge = (int)$_POST['resColorCartridge'];
    $priceEPBlackCartridge = (int)$_POST['priceEPBlackCartridge'];
    $resEPBlackCartridge = (int)$_POST['resEPBlackCartridge'];
    $priceEPColorCartridge = (int)$_POST['priceEPColorCartridge'];
    $resEPColorCartridge = (int)$_POST['resEPColorCartridge'];
    $priceTransKit = (int)$_POST['priceTransKit'];
    $resTransKit = (int)$_POST['resTransKit'];
    $priceFuser = (int)$_POST['priceFuser'];
    $resFuser = (int)$_POST['resFuser'];
    $vendor = (int)$_POST['vendor'];
    

    
    if (isset($_POST['priceBlackCartridge'])&& ($_POST['resBlackCartridge'])){
        mysqli_query($db, "
    INSERT INTO `price_resurse` SET 
    `id_models` = $model,
    `price_model` = $modelPrice,
    `price_black_cart` = $priceBlackCartridge,
    `res_black-cart` = $resBlackCartridge,
    `price_color-cart` = $priceColorCartridge,
    `res_color_cart` = $resColorCartridge,
    `price_BEP_cart` = $priceEPBlackCartridge,
    `res_BEP_cart` = $resEPBlackCartridge,
    `price_CEP_cart` = $priceEPColorCartridge,
    `res_CEP_cart` = $resEPColorCartridge,
    `price_trans` = $priceTransKit,
    `res_trans` = $resTransKit,
    `price_fuser` = $priceFuser,
    `res_fuser` = $resFuser;
    ");
        echo "<script> alert('Ресурсы Принтера Добавленны')</script> ";
        if ((mysqli_errno($db) == 0)) {

        } else {
            echo mysqli_error($db);

        }
    }
}
?>

<form method="post">
<fieldset>
    <legend>Добавить Функции принтера</legend>
    <div>
        Производитель
        <select name="vendor" required id="vendorValue">
            <?php foreach($arrVendor as $rowVendor) : ?>
                <option value="<?php echo $rowVendor['id'];?>"><?php echo ($rowVendor['vend_name']); ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        Модель
        <select name="model" id="model" disabled="disabled">
            <option value="0">- выберите принтер -</option>
        </select>
    </div>
    <input type="number" name="price" placeholder="Цена аппарата"><br>
    <input type="number" name="priceBlackCartridge" placeholder="Цена чёрного тонера"><br>
    <input type="number" name="resBlackCartridge" placeholder="Ресурс чёрного тонера "><br>
    <input type="number" name="priceColorCartridge" placeholder="Цена цветного тонера"><br>
    <input type="number" name="resColorCartridge" placeholder="Ресурс цветного тонера"><br>
    <input type="number" name="priceEPBlackCartridge" placeholder="Цена чёрного EP-картриджа "><br>
    <input type="number" name="resEPBlackCartridge" placeholder="Ресурс чёрного EP-картриджа"><br>
    <input type="number" name="priceEPColorCartridge" placeholder="Цена цветного EP-картриджа "><br>
    <input type="number" name="resEPColorCartridge" placeholder="Ресурс цветного EP-картриджа"><br>
    <input type="number" name="priceTransKit" placeholder="Цена транспортного ремня "><br>
    <input type="number" name="resTransKit" placeholder="Ресурс транспортного ремня "><br>
    <input type="number" name="priceFuser" placeholder="Цена Печки"><br>
    <input type="number" name="resFuser" placeholder="Ресурс Печки"><br>
    <input type="submit" value="Записать">
</fieldset>
</form>
<?php

?>

</body>
