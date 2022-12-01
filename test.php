<?php
include "connection.php";

// $sitingcapacity = $_GET['capacity'];
$curry = $_POST['curry'];
$city = $_GET['city'];
$RICE = $_GET['RICE'];
$SALAD = $_GET['SALAD'];
$BEVERAGE = $_GET['BEVERAGE'];
$qury = "select *from curry_table where Id='$curry';";
$curry = mysqli_fetch_row(mysqli_query($conn, $qury));
echo $curry['Dish'];
