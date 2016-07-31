<?php
define('PAGE','addPrinter');
include_once "menuAdmin.php";
include_once "config.php";
include_once "Function.php";
?>
<!--добавляем производителя-->

<form method="post">
    <fieldset>
        <legend>Добавить Производителя принтеров </legend>
        <div> Вендор техники <span>*</span><input type="text" name="vendor-name" placeholder="Название Принтера *" required></div>
        <br>
        <input class="button" type="submit" value="записать">
    </fieldset>
    <?php
    if(!empty($_POST)) {
        $vendorName = trim(htmlspecialchars($_POST['vendor-name']));
        $vendorQuery = mysqli_query($db,
            "SELECT `id` FROM `vendor_printer`
             WHERE `vend_name` = '$vendorName';
        ");
        if (mysqli_num_rows($vendorQuery) > 0) {
            echo "<p>такой прозводитель уже есть</p>";
        } else {
            mysqli_query($db, "
    INSERT INTO
    `vendor_printer`
    SET `vend_name` = '$vendorName';
    ");

            if (mysqli_errno($db) == 0) {
                echo 'Новый производитель добавлен';
            } else {
                echo mysqli_error($db);
            }
        }
    }
    ?>
