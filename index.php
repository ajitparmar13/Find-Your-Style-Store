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
        <title>Find Your Style!</title>
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
            <h1 class="brand-name brand-name-large">Find Your Style!</h1>
            <div class="container">
                <button type="button" class="btn btn-header"><a href="store.php">Get our Latest Items</a></button>
            </div>
            <button type="button" class="btn btn-header btn-play">&#9658;</button>
        </header>
        <section class="content-section container">
            <h2 class="section-header">Styles</h2>
            <div>
                <div class="ps-row">
                    <span class="item1 item2">Designer</span>
                    <span class="item1 item3">Versace</span>
                    <span class="item1 item4">Gucci</span>
                    <button type="button" class="item1 item-btn btn btn-primary"><a href="designer.php">BUY NOW</a></button>
                </div>
                <div class="ps-row">
                     <span class="item1 item2">Simple</span>
                    <span class="item1 item3">Old Navy</span>
                    <span class="item1 item4">Banana Republic</span>
                    <button type="button" class="item1 item-btn btn btn-primary"
                    ><a href="simple.php">BUY NOW</a></button>
                </div>
                <div class="ps-row">
                      <span class="item1 item2">Professional</span>
                    <span class="item1 item3">Suit Supply</span>
                    <span class="item1 item4">Express</span>
                    <button type="button" class="item1 item-btn btn btn-primary"
                    ><a href="professional.php">BUY NOW</a></button>
                </div>
                <div class="ps-row">
                      <span class="item1 item2">Baggy</span>
                    <span class="item1 item3">True Religion</span>
                    <span class="item1 item4">Timberland</span>
                    <button type="button" class="item1 item-btn btn btn-primary"><a href="baggy.php">BUY NOW</a></button>
                </div>
                <div class="ps-row">
                     <span class="item1 item2">Athletic</span>
                    <span class="item1 item3">Nike</span>
                    <span class="item1 item4">Adidas</span>
                    <button type="button" class="item1 item-btn btn btn-primary"><a href="athletic.php">BUY NOW</a></button>
                </div>
                <div class="ps-row">
                      <span class="item1 item2">Street Style</span>
                    <span class="item1 item3">Fashion Nova</span>
                    <span class="item1 item4">MNML</span>
                    <button type="button" class="item1 item-btn btn btn-primary"><a href="streetstyle.php">BUY NOW</a></button>
                </div>
            </div>
        </section>
        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="band-name">Find Your Style!</h3>
                <ul class="nav footer-nav">
                    <li>
                            <img src="images/banner.jpg">
                    </li>
                    <li>

                            <img src="images/cash.jpg">
                    
                    </li>
                    <li>
                            <img src="images/nyc.png">
                    
                    </li>
                </ul>
            </div>
        </footer>
    </body>
</html>
