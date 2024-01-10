<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "orders";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else
{
  echo "success";
}

$email=$_POST['email'];
$products=$_POST['product'];
$nop=$_POST['nop'];
$address=$_POST['address'];
 $sql = "INSERT INTO orders (mail,products,nop,address)
 VALUES ('$email', '$products', '$nop', '$address')";
 
echo "INSERT INTO orders (mail,products,nop,address)
VALUES ('$email', '$products', '$nop', '$address')";
// $conn->query($sql);
 if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
  } else {
    echo $conn->error;
  }