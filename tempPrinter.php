<?php
include_once "config.php";
include_once "Function.php";
?>
    <!DOCTYPE html>
    <html lang="en">
<head>
    <title>Принтер</title>
    <?php
    include_once "header.php";

    echo "<div class='headerOtherPage'></div>";

    $idPage = $_GET['pageId'];

    $tempPrint = mysqli_query($db,"
SELECT * FROM `model_printer`,
              `price_resurse`,
              `type_printer`,
              `vendor_printer`,
              `format_printer` WHERE `model_printer`.`id` =  $idPage
                      AND `model_printer`.`id_vendor` = `vendor_printer`.`id` 
                      AND `model_printer`.`id_type` = `type_printer`.`id` 
                      AND `model_printer`.`id_format` = `format_printer`.`id`
                      AND `price_resurse`.`id_models` = `model_printer`.`id`;
");
    $printArray = mysqli_fetch_assoc($tempPrint);

    ?>

    <div class="main-printers">
        <div class="finish-printers">
            <span class="w-blog-post-preview-printers"><img src="filePrinters/<?php echo $printArray['image'];?>"></span>
        </div>
        <div class="colum-printer-temp">
            <div class="head-title">
            <div class="blog-post-title-printers"><h1><span><?php echo $printArray['vend_name']?></span> <?php echo $printArray['model_name']?></h1></div>
            <div class=""><h2><?php echo $printArray['price_model']?> руюлей</h2></div>
            </div>

            <div class="w-iconbox">
                <div class="w-iconbox-icon" style="background-color: #cccccc;box-shadow: 0 0 0 2px #cccccc inset;color: #cccccc;">
                    <i class="fa fa-print"></i></div><h4 class="w-iconbox-title"><?php echo $printArray['type_name']?></h4>
                <div class="w-iconbox-text">Тип</div>
            </div>

            <div class="w-iconbox">
                <div class="w-iconbox-icon" style="background-color: #cccccc;box-shadow: 0 0 0 2px #cccccc inset;color: #cccccc;">
                    <i class="fa fa-file"></i></div><h4 class="w-iconbox-title"><?php echo $printArray['format_name']?></h4>
                <div class="w-iconbox-text">Формат</div>
            </div>

            <div class="w-iconbox">
                <div class="w-iconbox-icon" style="background-color: #cccccc;box-shadow: 0 0 0 2px #cccccc inset;color: #cccccc;">
                    <i class="fa fa-flask"></i></div><h4 class="w-iconbox-title"><?php echo $printArray['price_black_cart']?> / <?php echo $printArray['price_color-cart']?></h4>
                <div class="w-iconbox-text">Ресурс тонера (черного/цветного)</div>
            </div>

            <div class="w-iconbox">
                <div class="w-iconbox-icon" style="background-color: #cccccc;box-shadow: 0 0 0 2px #cccccc inset;color: #cccccc;">
                    <i class="fa fa-dollar"></i></div><h4 class="w-iconbox-title"><?php echo $printArray['res_black-cart']?> / <?php echo $printArray['res_color_cart']?></h4>
                <div class="w-iconbox-text">Цена тонера (черного/цветного)</div>
            </div>


            <div class="w-blog-post-body-printers">
                <h2>Описание</h2><?php echo $printArray['discriprion']?></div>
        </div>
    </div>
<?php
include_once "footer.php";
?>