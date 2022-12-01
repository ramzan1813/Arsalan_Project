<?php
   require('connection.php');
   session_start();
   
   // $user_check = $_SESSION['login_user'];
   // $qury="select CNIC from login_info where CNIC= '$user_check'";
   // $ses_sql = @mysqli_query($conn, $qury);
   
   // $row = @mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   // $login_session = $row['CNIC'];
   
   if(!isset($_SESSION['login_user'])){
      header("Location:admin.php");
      die();
   
   }
?>
