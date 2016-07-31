<!DOCTYPE html>
<html lang="en">
<head>
    <title>Новости Триколор СПБ</title>
<?php
include_once "header.php";
include_once "config.php";
include_once "Function.php";
?>
<div class="headerOtherPage">

</div>

<div class="ContentNews">

    <div class="title-sector">
        <h1>Новости</h1>
        <div class="col-5-1"></div></div>
    <?php
    $newsQuery = mysqli_query($db,"SELECT * FROM `news` ORDER BY id DESC" );
    $newsArray = mysqli_fetch_assoc($newsQuery);
    if($newsArray['id']){
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
    }else{
        echo 'В базе еще нету ни одной новости';}

    ?>

</div>
<?php
require_once "footer.php";
?>
