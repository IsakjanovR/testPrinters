<?php
include_once "config.php";
include_once "Function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Новость : <?php echo $newsArray['title']?></title>
<?php
include_once "header.php";

echo "<div class='headerOtherPage'></div>";

$id = $_GET['pageId'];

$tempquery = mysqli_query($db,"
SELECT * FROM `news` WHERE `id` = $id
");
$newsArray = mysqli_fetch_assoc($tempquery);
?>

<div class="main-news">
    <div class="finish-news"><h3 class="title">Свежие статьи</h3>
        <ul>
        <?php
        $finishnews = mysqli_query($db,"
        SELECT `id`,`title` FROM `news` ORDER BY id DESC LIMIT 8");
        $queryArray = mysqli_fetch_assoc($finishnews);
        do{
        echo "
       
            <li>
                <a metod='GET' href='/Project/template-calcPage.php?pageId=".$queryArray['id']."'>".$queryArray['title']."</a>
            </li>
        
        ";
        }while($queryArray = mysqli_fetch_array ($finishnews));
        ?>
        </ul>
    </div>
        <div class="colum-news-temp">
                <span class="w-blog-post-preview-temp"><img src="fileNews/<?php echo $newsArray['image'];?>"></span>
                <div class="blog-post-title-temp"><?php echo $newsArray['title']?></div>
                   <div class="w-blog-post-body-temp"><?php echo $newsArray['text']?></div>
    </div>
</div>
    <?php
include_once "footer.php";
?>