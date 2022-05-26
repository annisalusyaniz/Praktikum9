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

  //membuat table kontak
  $sql_kontak = "CREATE TABLE kontak (
      id INT (4) PRIMARY KEY NOT NULL  AUTO_INCREMENT,
      nama VARCHAR(30) NOT NULL,
      jkel VARCHAR(10),
      email VARCHAR(40),
      alamat VARCHAR(50),
      kota VARCHAR(20),
      pesan TEXT
      )";
      
  if (mysqli_query($conn, $sql_kontak)) {
      echo "Table kontak Create Successfully";
  } else {
      echo "Table kontak Creating Failed: " . mysqli_error($conn);
  }
  mysqli_close($conn);
?>