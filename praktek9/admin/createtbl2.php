<?php 
  $servername = "localhost";
  $username   = "root";
  $password   = "";
  $dbname     = "db_kontak";

  // create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  //membuat table user_login
  $sql_login = "CREATE TABLE user_login (
      username VARCHAR(50) NOT NULL,
      pw VARCHAR(50) NOT NULL
      )";
      
  if (mysqli_query($conn, $sql_login)) {
      echo "Table user_login Create Successfully";
  } else {
      echo "Table user_login Creating Failed: " . mysqli_error($conn);
  }
  mysqli_close($conn);
?>