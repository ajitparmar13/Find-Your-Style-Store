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
        <title>Baggy Store</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="styles.css" />
        <script src="store.js" async></script>
    </head>
    <body>
        <header class="main-header">
            <nav class="main-nav nav">
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
            <h1 class="brand-name brand-name-large">Baggy Clothes</h1>
        </header>
        <section class="container content-section">
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">True Religion</span>
                    <img class="shop-item-image" src="images/TR1.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">True Religion</span>
                    <img class="shop-item-image" src="images/TR2.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">True Religion</span>
                    <img class="shop-item-image" src="images/TR3.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Timberland</span>
                    <img class="shop-item-image" src="images/Tim1.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$14.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                        </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Timberland</span>
                    <img class="shop-item-image" src="images/Tim2.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$14.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                        </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Timberland</span>
                    <img class="shop-item-image" src="images/Tim3.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$14.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Levis</span>
                    <img class="shop-item-image" src="images/Lev1.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Levis</span>
                    <img class="shop-item-image" src="images/Lev2.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Levis</span>
                    <img class="shop-item-image" src="images/Lev3.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Dickies</span>
                    <img class="shop-item-image" src="images/Dik1.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$14.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                        </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Dickies</span>
                    <img class="shop-item-image" src="images/Dik2.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$14.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                        </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Dickies</span>
                    <img class="shop-item-image" src="images/Dik3.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$14.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Carhartt</span>
                    <img class="shop-item-image" src="images/Car1.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Carhartt</span>
                    <img class="shop-item-image" src="images/Car2.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Carhartt</span>
                    <img class="shop-item-image" src="images/Car3.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Dunlop</span>
                    <img class="shop-item-image" src="images/Dun1.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$14.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                        </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Dunlop</span>
                    <img class="shop-item-image" src="images/Dun2.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$14.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                        </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Dunlop</span>
                    <img class="shop-item-image" src="images/Dun3.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$14.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Cargos</span>
                    <img class="shop-item-image" src="images/go1.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Cargos</span>
                    <img class="shop-item-image" src="images/go2.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Cargos</span>
                    <img class="shop-item-image" src="images/go3.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$12.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Ecko</span>
                    <img class="shop-item-image" src="images/ecko1.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$14.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                        </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Ecko</span>
                    <img class="shop-item-image" src="images/ecko2.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$14.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                        </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Ecko</span>
                    <img class="shop-item-image" src="images/ecko3.jpeg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$14.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                          </div>
                </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
        </section>
        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="band-name">All your Men's Style!</h3>
                <ul class="nav footer-nav">
                    <li>

                            <img src="images/JB.jpg">

                    </li>
                    <li>

                            <img src="images/road.jpg">

                    </li>
                    <li>

                            <img src="images/KK.jpg">

                    </li>
                </ul>
            </div>
        </footer>
    </body>
</html>
