<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purrfect Meow</title>
    <link type="text/css" rel="stylesheet" href="./CSS/main.css">
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
                    <li>Cart</li>
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
        <div class="accountbox">
            <div class="accountbox1">
                <h1>Dashboard</h1>
                <hr>
                <div id="Div1" style="display:none">
                   check orders here pls 
                </div>
                <div id="Div2" style="display:none">
                   check points here pls 
                </div>
                <div id="Div3" style="display:none">
                   check address here pls
                </div>
                <div id="Div4" style="display:none">
                   check payment methods here pls 
                </div>
                <div id="Div5" style="display:none">
                   check account details here pls
                </div>
            </div>
            <div class="verticallineacc">
                
            </div>
            <div class="accountbox2">
                <ol class="in-box">
                    <li onclick="divVisibility('Div1');">Orders</li>
                    <li onclick="divVisibility('Div2');">Points</li>
                    <li onclick="divVisibility('Div3');">Addresses</li>
                    <li onclick="divVisibility('Div4');">Payment Methods</li>
                    <li onclick="divVisibility('Div5');">Account Details</li>
                    <li>Logout</li>
                </ul>
            </div>            
        </div>
    </main> 
    <script src=./JavaScript/showHide.js></script>
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