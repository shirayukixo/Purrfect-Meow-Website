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
        <div class="box1">
            <div class="box">
                <form action="./PHP/database.php" method="post">
                <h1>Login</h1>
                <label for="l_username">Username </label>
                <input type="text" id="l_username" placeholder="Enter Username" name="username" required>
                <br><br>
                <label for="l_password">Password </label>
                <input type="password" id="l_password" placeholder="Enter Password" name="password" required>
                <br><br>
                <button type="submit">Log In</button>
                &nbsp
                <input type="checkbox" value="yesRememberMe" id="rememberMe"><label for="rememberMe">Remember Me?</label>                
                </form>
                <script src=./JavaScript/rememberMe.js></script>                
            </div>    
            <div class="verticalline">
                
            </div>        
            <div class="box">
                <form action="./PHP/database.php" method="post">
                <h1>Register</h1>
                <label for="r_username">Username&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                <input type="text" id="r_username" placeholder="Enter Username" name="username" required>
                <br><br>
                <label for="r_email">Email Address&nbsp</label>
                <input type="email" id="r_email" placeholder="Enter Email Address" name="email" required>
                <br><br>
                <label for="r_password">Password&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                <input type="password" id="r_password" placeholder="Enter Password" name="password" required>
                <br><br>
                <button type="submit">Register</button> 
                </form>
            </div>
        </div>  
        <div class="notice">
            We are having promotion now!😻
        </div>
    </main> 
    <footer>
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