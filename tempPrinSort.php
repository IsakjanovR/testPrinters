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

$idType = $_GET['type'];

$sortPrint = mysqli_query($db,"
SELECT * FROM `vendor_printer`,`format_printer`, `type_printer`, `model_printer`
WHERE `model_printer`.`id_format` = $idType 
AND `model_printer`.`id_type` = `type_printer`.`id` 
AND `model_printer`.`id_format` = `format_printer`.`id`
AND `model_printer`.`id_vendor` = `vendor_printer`.`id`;
");
$sortArray = mysqli_fetch_assoc($sortPrint);
?>

    <div class="ContentNews">
        <div class="left-sort-menu">
           <ul > Каталог

            <li>МФУ A3</li>
            <li>МФУ A4</li>
            <li> Принтеры A4 </li>
            <li>Расходные материалы</li>
            <li>Приложения для печати</li>
            <li>Архив моделей</li>
            <li>Бренд</li>
            <li>Тип печати</li>
           </ul>
        </div>
        <div class="menu-sort">
<?php
echo "<h2>Принтера и МФУ формата {$sortArray['format_name']}</h2>";
do{
    echo " <div class='col-3-1-content'>";
    echo "<figure class='effect-zoeSort'><img src='filePrinters/{$sortArray['image']}'>";
    echo "<figcaption>
                    <h2><a metod='GET' href='/Project/tempPrinter.php?pageId=".$sortArray['id']."'>Посмотреть</a></h2>
                    <p class='icon-links'>
                        <a href='#'><span class='fa-li fa '></span></a>
                    </p>
                    <p class='description'><span>{$sortArray['vend_name']}</span>{$sortArray['model_name']}</p>
                </figcaption>";
    echo "</figure>
        </div>";
}while($sortArray = mysqli_fetch_array($sortPrint));

?>
       </div>
    </div>


    <?php
    include_once "footer.php";
    ?>
