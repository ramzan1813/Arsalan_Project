<?php
if (isset($_POST)) {
    require('connection.php');
session_start();


    $cnic = $_POST['CNIC'];
    $password = $_POST['Password'];

    $query = "select *from login_info where CNIC ='$cnic'";
    $run = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($run);

    if ($row['Password'] == $password) {
        $_SESSION['login_user'] =$cnic;

        header("Location: deshboard.php");
    } else {
        header("Location: admin.php");
        
    }
}
?>
