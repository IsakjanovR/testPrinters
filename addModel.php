<?php
define('PAGE','addModel');
include_once "menuAdmin.php";
include_once "config.php";
include_once "Function.php";

if (!empty($_POST)){
    $vendor = (int)$_POST['vendor'];
    $type = (int)$_POST['type'];
    $format = (int)$_POST['format'];
    $model = $_POST['model'];
    $disc = $_POST['discription'];
    $oldP = $_FILES['image']['tmp_name'];
    $newP = $_FILES['image']['name'];
    move_uploaded_file($oldP,"filePrinters/$newP" );


    if ($_POST['model']!="" && $_FILES['image']['name']!="" ) {

        $queryModel = mysqli_query($db,
            "SELECT `id` FROM `model_printer`
             WHERE `model_name` = '$model' AND 
                   `id_vendor` = '$vendor';
        ");
        if (mysqli_num_rows($queryModel) > 0) {
            echo "<p>такая модель принтера уже существует</p>";
        }
        else {
            mysqli_query($db, "
            INSERT INTO `model_printer` SET 
            `id_vendor` = '$vendor',
            `id_type` = '$type',
            `id_format` = '$format',
            `model_name` = '$model',
            `discriprion` = '$disc',
            `image` = '$newP';
            ");
            echo "<script> alert('Принтер добавлен')</script> ";
            if ((mysqli_errno($db) == 0)) {

            } else {
                echo mysqli_error($db);

            }
        }

    }

}
?>

<form method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Добавить Модель принтера</legend>
        <div>
            Производитель
            <select name="vendor" required>
                <?php foreach($arrVendor as $rowVendor) : ?>
                    <option value="<?php echo $rowVendor['id'];?>"><?php echo ($rowVendor['vend_name']); ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div>
            Тип устройства
            <select name="type" required>
                <?php foreach($arrType as $rowType) : ?>
                    <option value="<?php echo $rowType['id'];?>"><?php echo ($rowType['type_name']); ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div>
            Формат Устройства
            <select name="format" required>
                <?php foreach($arrFormat as $rowFormat) : ?>
                    <option value="<?php echo $rowFormat['id'];?>"><?php echo ($rowFormat['format_name']); ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div><input type="text" name="model"></div>
        <div>
            <input  type="file" name="image" size="3000000"><br>
        </div>

        <div> <input class="button" type="submit" value="Отправить"></div>
        <div><textarea name="discription" cols="100" rows="10" wrap="hard" placeholder="Введите коментарий" required></textarea></div>

        <img src="images/" alt="">
    </fieldset>
</form>

<?php


?>
