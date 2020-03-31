<?php


$username= $_POST["username"];
$password= $_POST["password"];
$style = $_POST["style"];
if (empty($username) || empty($password) || empty($style)){
  echo "All Fields Are Required";
  die();
}


$server_name = "localhost";
$server_username = "ajit_parmar";
$server_password = "wahegururb0013";
$dbname = "quentin";


$conn = new mysqli($server_name, $server_username, $server_password, $dbname);
if (mysqli_connect_error()) {
    die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
}else{
  $sql = "INSERT INTO members (username, password, style) VALUES ('$username', '$password', '$style')";
}

if ($conn->query($sql) === TRUE) {
    echo"New record created successfully";
} else {
    header("location: logIn.php");
}


$conn -> close();
 ?>
