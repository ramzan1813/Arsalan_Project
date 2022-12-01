<?php
require("connection.php");
if (isset($_POST)) {
    $tableName = $_POST['table'];
    $Id = $_POST['id'];
    $Name = $_POST['city'];
    $price = '';

    if (isset($_POST['price'])) {

        $price = $_POST['price'];
    }
    $query = "";
    // echo $tableName , $Id , $price;

    if ($tableName == "City") {
        $_query = "UPDATE `$tableName` SET `City` = '$Name' WHERE `Id` = '$Id'";
    } else if ($tableName == "beverage_table") {

        $_query = "UPDATE `$tableName` SET `Price` = '$price',  Drink ='$Name' WHERE `Id` = '$Id'";
    } else if ($tableName == "bridal_dress") {

        $_query = "UPDATE `$tableName` SET `Price` = '$price', `Dress` = '$Name' WHERE `Id` = '$Id'";
    } else if ($tableName == "rental_car") {

        $_query = "UPDATE `$tableName` SET `Car` = '$Name', `Price` = '$price' WHERE `Id` = '$Id'";
    } else if ($tableName == "stage_decoraction") {

        $_query = "UPDATE `$tableName` SET `Service` = '$Name', `Price` = '$price' WHERE `Id` = '$Id'";
    } else if ($tableName == "photographer") {

        $_query = "UPDATE `$tableName` SET `Name` = '$Name', `Price` = '$price' WHERE `Id` = '$Id'";
    } else {
        echo $tableName , $Id , $price;
        $_query = "UPDATE `$tableName` SET `Price` = '$price', `Dish` = '$Name' WHERE `Id` = '$Id'";
    }
    $run = mysqli_query($conn, $_query);
    if ($run) {
        header("Location:deshboard.php");
    }
}
