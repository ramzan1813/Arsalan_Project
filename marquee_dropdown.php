<?php
  $value = $_GET['value'];

  // Connect to the database
  require('connection.php');


  // Retrieve data from the database
  $query = "SELECT * FROM city WHERE City ='$value'";
  $result = mysqli_query($conn, $query);

  $data = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $data[] = [
      'text' => $row['Name'],
      'value' => $row['Tax']
    ];
  }

  // Return data as JSON
  header('Content-Type: application/json');
  echo json_encode($data);

?>