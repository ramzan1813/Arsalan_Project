<?php
$conn = mysqli_connect('localhost', 'root', '', 'sitedatabase');
// echo "hi";
if (!$conn) {
  die("Connection failed: ");
}
