<?php
session_start();
$server_name = "localhost";
$server_username = "ajit_parmar";
$server_password = "wahegururb0013";
$dbname = "quentin";

$conn = mysqli_connect($server_name, $server_username, $server_password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Find Your Style | Log In/Sign Up</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="styles.css" />
    </head>
    <body>
        <header class="main-header">
            <nav class="nav main-nav">
                <ul>
                    <li>
                        <?php
                            if(!empty($_SESSION['loggedin']) && $_SESSION['loggedin']== true){
                                $userid = $_SESSION['member_id'];
                                $sql = "SELECT * FROM members where id='$userid'";
                                $result = mysqli_query($conn,$sql) or die("bad query");
                                if(mysqli_num_rows($result) == 1){
                                    $member = mysqli_fetch_array($result);
                                    echo '<span class="white">Welcome '.$member['username'].'</span>';
                                    echo '<a href="logout.php">Logout</a>';
                                }
                            }else{
                                echo '<a href="lisu.php">Log In/Sign Up</a>';
                            }
                        ?>
                    </li>
                     <li><a href="index.php">HOME</a></li>
                    <li><a href="store.php">STORE</a></li>
                </ul>
            </nav>
            <h1 class="brand-name brand-name-large">Become a Member!</h1>
        </header>

        <section class="content-section container">
            <h2 class="section-header">Log IN or Sign Up</h2>
            <img class="sl-brand-image" src="images/nyc.png">
             <button type="button" class="item1 item-btn btn btn-primary"><a href="logIn.php">Log-In</a></button>
            <button type="button" class="item1 item-btn btn btn-primary"><a href="signUp.php">Sign-Up</a></button>
        </section>

        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="brand-name">Find Your Style</h3>
                <ul class="nav footer-nav">
                    <li>

                            <img src="images/poster.jpg">

                    </li>
                    <li>

                            <img src="images/supreme.jpg">

                    </li>
                    <li>

                            <img src="images/sup1.jpg">

                    </li>
                </ul>
            </div>
        </footer>
    </body>
</html>
