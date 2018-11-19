<?php
  $servername = getenv('MYSQL_IP');
  $username = getenv('MYSQL_APACHE_USER');
  $password = getenv('MYSQL_APACHE_PASSWORD');
  
  $conn = mysqli_connect($servername, $username, $password);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
  echo "Connected to database successfully !!!";
?>
