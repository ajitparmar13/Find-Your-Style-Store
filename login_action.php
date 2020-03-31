<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

// check if the user inputed all the credentials
if (empty($username) || empty($password)){
    echo "1 or more fields was not entered";
    die();
}
$server_name = "localhost";
$server_username = "ajit_parmar";
$server_password = "wahegururb0013";
$dbname = "quentin";

$conn = mysqli_connect($server_name, $server_username, $server_password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM members where username='$username' && password='$password'";

$result = mysqli_query($conn,$sql) or die("bad query");
if(mysqli_num_rows($result) != 1){
    echo "Invalid username or password";
    die();
}
$member = mysqli_fetch_array($result);
$_SESSION['loggedin'] = true;
$_SESSION['member_id'] = $member['id'];
$member_style = $member['style'];
if ($member_style == "Designer"){
    header("location: designer.php");
    exit();
}else if ($member_style == "Simple"){
    header("location: simple.php");
    exit();
}else if ($member_style == "Professional"){
    header("location: professional.php");
    exit();
}else if ($member_style == "Baggy"){
    header("location: baggy.php");
    exit();
}else if ($member_style == "Athletic"){
    header("location: athletic.php");
    exit();
}else if ($member_style == "Street Style"){
    header("location: streetstyle.php");
    exit();
}else{
    header("location: logIn.php");
    exit();
}

?>
