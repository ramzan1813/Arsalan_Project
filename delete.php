<?php
require("connection.php");

if (isset($_POST)) {

    $id = $_POST['id'];
    $table_name = $_POST['table'];

    // echo $table_name;

    $query = "DELETE FROM `$table_name` where Id='$id'";
    $run = mysqli_query($conn, $query);
    if ($run) {
        ?>
<script>
alert("Record Deleted")
</script>
<meta HTTP-EQUIV="REFRESH" content="0; url=deshboard.php">
<?php
        // header("Location:deshboard.php");
    }
}else{
    // header("Location:deshboard.php");
}
?>
