<!DOCTYPE html>
<html lang="en">
<head>
    <title>Триколор СПБ</title>
<?php
require_once "header.php";


?>
<section class="sliderSection">
    <div id="slideshow">
        <div id="slidesContainer">
            <div class="slide">
                <h2 class="title-slider">Профессиональное обслуживание полноцветной техники в Санкт-Петербурге</h2>
                <div class="colum4 colum-1">
                    <p><b>Триколор-Лиговский</b>
                    Лиговский пр., д. 89/20
                    (Свечной пер., д. 20)<br>
                    +7 (812) 57-57-1-57,<br>
                    +7 (812) 702-70-51</p>
                    <a class="button" href="">Подробнее</a>
                </div>
                <div class="colum4 colum-2">
                    <p> <b>Триколор-Нарвская</b>
                        Старопетергофский пр., д. 41 <br>
                        +7 (812) 640-31-24, <br>
                        +7 (812) 252-14-67
                       </p>
                    <a class="button" href="">Подробнее</a>
                </div>
                <div class="colum4 colum-3">
                    <p><b>Партнёр на севере города: «Топ-Сервис»</b>
                        пр. Энгельса, д. 137 <br>
                        +7 (812) 291-43-07, <br>
                        +7 (904) 642-88-91</p>
                    <a class="button" href="">Подробнее</a>
                </div>
                <div class="colum4 colum-4">
                    <p><b>Тендерный отдел</b> <br>
                        (отдел крупных заказов)
                        ул. Кронштадтская, д. 11, оф. 208, <br>
                        +7 (812) 640-88-01</p>
                    <a class="button" href="">Подробнее</a>
                </div>
                <img src="images/viotec.ru_2016-04-12_21-32-48.jpg" alt="">

            </div>
            <div class="slide"><img src="images/maxresdefault%20(1).jpg"   alt=""></div>
            <div class="slide"><img src="images/viotec.ru_2016-04-12_21-32-48.jpg"  alt=""></div>
            <div class="slide"><img src="images/maxresdefault.jpg"   alt=""></div>
        </div>
    </div>
</section>
<div class="Content">
    <div class="title-sector">
    <h1>Принтера и МФУ формата А3</h1>
    <a href="tempPrinSort.php?type=2">смотреть все</a></div>



    <?php
    $modelQuery = mysqli_query($db,"SELECT * FROM `vendor_printer`,`model_printer` WHERE `id_format` = 2  AND `model_printer`.`id_vendor` = `vendor_printer`.`id` LIMIT 5 ;");
    $arrModel = mysqli_fetch_assoc($modelQuery);
    do{
        echo " <div class='col-5-1-content'>";
        echo "<figure class='effect-zoe'><img src='filePrinters/{$arrModel['image']}'>";
        echo "<figcaption>
                    <h2><h2><a metod='GET' href='/Project/tempPrinter.php?pageId=".$arrModel['id']."'>Посмотреть</a></h2></h2>
                    
                    <p class='description'><span>{$arrModel['vend_name']}</span>{$arrModel['model_name']}</p>
                </figcaption>";
        echo "</figure>
        </div>";
    }while($arrModel = mysqli_fetch_array($modelQuery));
    ?>
    </div>



<div class="Content">
    <div class="title-sector">
    <h1>Принтера и МФУ формата А4</h1>
    <a href="tempPrinSort.php?type=1">смотреть все</a>
    </div>

        <?php
        $modelQuery = mysqli_query($db,"SELECT * FROM `vendor_printer`,`model_printer` WHERE `id_format` = 1  AND `model_printer`.`id_vendor` = `vendor_printer`.`id` LIMIT 5 ;");
        $arrModel = mysqli_fetch_assoc($modelQuery);
        do{
            echo " <div class='col-5-1-content'>";
            echo "<figure class='effect-zoe'><img src='filePrinters/{$arrModel['image']}'>";
            echo "<figcaption>
                    <h2><a metod='GET' href='/Project/tempPrinter.php?pageId=".$arrModel['id']."'>Посмотреть</a></h2>
                    <p class='icon-links'>
                        <a href='#'><span class='fa-li fa '></span></a>
                    </p>
                    <p class='description'><span>{$arrModel['vend_name']}</span>{$arrModel['model_name']}</p>
                </figcaption>";
           echo "</figure>
        </div>";
        }while($arrModel = mysqli_fetch_array($modelQuery));
        ?>
    </div>


<div class="Content">
    <div class="title-sector">
        <h1>Новости</h1>
        <a href="news.php">смотреть все</a>
    <div class="col-5-1"></div></div>
    <?php
   $newsQuery = mysqli_query($db,"SELECT * FROM `news` ORDER BY id DESC" );
   $newsArray = mysqli_fetch_assoc($newsQuery);

        do{
            echo "<div class='colum-news'><div class='blog-post'>";
            echo "<span class='w-blog-post-preview'><img src='fileNews/".$newsArray['image']."'></span> ";
            echo "<figure><div class='blog-post-title'>".$newsArray['title']."</div> ";
            echo "<div class='w-blog-post-body'>".$newsArray['text']."</div>";
            echo "<figcaption><span class='blog-date'>".$newsArray['date']."</span>
							<h3 style='padding-top: 10px;'>Дата публикации новости</h3>
							<a metod='GET' class='button' href='/Project/template-calcPage.php?pageId=".$newsArray['id']."'>Посмотреть</a>
						</figcaption></figure></div></div>";
        }while($newsArray = mysqli_fetch_array ($newsQuery));
?>
    <input id="show_more" count_show="5" count_add="3" type="button" value="Показать еще" />

</div>
<?php
require_once "footer.php";
?>
