
<?php
define('PAGE','creatNews');
include_once "menuAdmin.php";
include_once "config.php";
include_once "Function.php";
if (!empty($_POST)){

    $title = $_POST['title'];
    $date = $_POST['dataNews'];
    $text = $_POST['Text'];
    $old = $_FILES['image']['tmp_name'];
    $new = $_FILES['image']['name'];
    move_uploaded_file($old,"fileNews/$new" );
    $news['image']= $new;

    if ($_POST['title']!="" && $_POST['dataNews']!="" && $_POST['Text']!="" && $_FILES['image']['name']!="" ) {

        $query = mysqli_query($db,
            "SELECT `id` FROM `news`
             WHERE `title` = '$title';
        ");
        if (mysqli_num_rows($query) > 0) {
            echo "<p>новость с таким названием уже существует</p>";
        }
        else {
            mysqli_query($db, "
            INSERT INTO `news` SET 
            `title` = '$title',
            `text` = '$text',
            `date` = '$date',
            `image` = '$new';
            ");
            echo "<script> alert('Новость Опублекованна')</script> ";
            if ((mysqli_errno($db) == 0)) {

            } else {
                echo mysqli_error($db);

            }
        }

    }

    Header("Location: creatNews.php"); die;
}

?>

<form method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Добавить новость</legend>
<a> создать файл</a>
    <input  type="text" name="title" value="<?php echo $newsArray['title'];?>" placeholder="Заголовок" > <br/>
    <input  type="date" name="dataNews" placeholder="дата"> <br/>
<textarea id="textarea" name="Text" cols="100" rows="10" wrap="hard" placeholder="Введите коментарий" required></textarea><br>
<input  type="file" name="image" size="3000000"><br>
<input class="button" type="submit" value="Отправить">
    <input class="button red" type="reset" value="Отчистить">
        </fieldset>
</form>

