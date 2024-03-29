<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purrfect Meow</title>
    <link type="text/css" rel="stylesheet" href="./CSS/account.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
            <div class="logo">
                <img src="./Images/logo.png" alt="Purrfect Meow Logo" width="20%" height="20%">
            </div>
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="product.php">Products</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="account.php">My Account</a></li>
                    <li>FAQ</li>
                    <li>About Us</li>
                    <li>Contact Us</li>
                </ul>
            </nav>        
        </header> 
    <main>
        <div class="notice">
            We are having promotion now!😻
        </div>  
        <div class="box">
            <div class="box1">
                <h1>Dashboard</h1>
                <hr>
                <div id="orders" style="display:none">
                   check orders here pls 
                </div>
                <div id="points" style="display:none">
                   check points here pls 
                </div>
                <div id="addresses" style="display:none">
                   check address here pls
                </div>
                <div id="paymentMethods" style="display:none">
                   check payment methods here pls 
                </div>
                <div id="accountDetails" style="display:none">
                   check account details here pls
                </div>
            </div>
            <div class="verticalLine">
                
            </div>
            <div class="box2">
                <ol class="inBox2">
                    <li onclick="myAccountIDVisibility('orders');">Orders</li>
                    <li onclick="myAccountIDVisibility('points');">Points</li>
                    <li onclick="myAccountIDVisibility('addresses');">Addresses</li>
                    <li onclick="myAccountIDVisibility('paymentMethods');">Payment Methods</li>
                    <li onclick="myAccountIDVisibility('accountDetails');">Account Details</li>
                    <li>Logout</li>
                </ul>
            </div>            
        </div>
    </main> 
    <script src=./JavaScript/account.js></script>
    <footer>
        <div class="notice">
            We are having promotion now!😻
        </div> 
        <div class="footer-container">
            <div class="footer">
            <img src="./Images/logo.png" alt="Purrfect Meow Logo" width="80%" height="100%">
            </div>
            <div class="footer">
                <h3>KNOW US MORE!</h3>
                About Us <br>
                Our Products <br>              
                
            </div>
            <div class="footer">
                <h3>QUESTIONS?</h3>
                Frequently Asked Questions <br>
                Contact Us <br>
            </div>
            <div class="footer">
                <h3>STALK US HERE!</h3>
                <a href="https://www.facebook.com/elidewove" class="fa fa-facebook" target="_blank"></a>
                <a href="https://twitter.com/suetyeeee" class="fa fa-twitter" target="_blank"></a>
                <a href="https://www.instagram.com/suetyeeee" class="fa fa-instagram" target="_blank"></a>                
            </div>
        </div>
    </footer>  
</body>
</html>