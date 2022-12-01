<?php
require('connection.php');
// require('session.php');
if (isset($_POST)) {
    $tableName = $_POST['table'];
    $name = $_POST['city'];


    if (isset($_POST['price'])) {

        $price = $_POST['price'];
    }
    $type = '';
    switch ($tableName) {
        case "rice_table": {
                $type = "RICE";
                break;
            }
        case "curry_table": {
                $type = "CURRY";
                break;
            }
        case "salad_table": {
                $type = "Salad";
                break;
            }
        case "sweet": {
                $type = "Sweet";
                break;
            }
        default:
            break;
    }

    if ($tableName == "City") {
        $_query = "INSERT INTO `$tableName` (City) VALUES ('$name')";
    } else if ($tableName == "beverage_table") {
        //

        $_query = "INSERT INTO `$tableName` (`Id`, `Price`, `Drink`, `Type`) VALUES (NULL, '$price', '$name', 'Drink')";
    } else if ($tableName == "bridal_dress") {
        $_query = "INSERT INTO `$tableName` (`Id`, `Dress`, `Price`) VALUES (NULL, '$name', '$price')";
    } else if ($tableName == "rental_car") {
        $_query = "INSERT INTO `$tableName` (`Id`, `Car`, `Price`) VALUES (NULL, '$name', '$price')";
    } else if ($tableName == "stage_decoraction") {
        $_query = "INSERT INTO `$tableName` (`Id`, `Service`, `Price`) VALUES (NULL, '$name', '$price')";
    } else if ($tableName == "photographer") {
        $_query = "INSERT INTO `$tableName` (`Id`, `Name`, `Price`) VALUES (NULL, '$name', '$price')";
    } else {
        $_query = "INSERT INTO `$tableName` (`Id`, `Dish`, `Price`, `Type`) VALUES (NULL, '$name', '$price', '$type')";
    }


    $run = mysqli_query($conn, $_query);
    if ($run) {
?>
        <script>
            alert("New Record Added")
        </script>
        <meta HTTP-EQUIV="REFRESH" content="0; url=deshboard.php">
    <?php
        // header("Location:dashboard.php");
    } else {
    ?>
        <script>
            alert("Input Erorr")
        </script>
        <meta HTTP-EQUIV="REFRESH" content="0; url=deshboard.php">
<?php
        // header("Location:dashboard.php");
    }
}
?>