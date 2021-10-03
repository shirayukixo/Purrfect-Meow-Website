<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purrfect Meow</title>
    <link type="text/css" rel="stylesheet" href="./CSS/product.css">
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
                <img src="./Images/catFood.jpeg" alt="cat food" width="70%">
            </div>
            <div class="box2">

                <h1>Product Details</h1>
                <br>
                <form action="./PHP/database.php" method="post">
                    <label for="foodType">Product:</label> 
                    <select name="foodType" id="foodType">
                        <option value="chicken">Chicken</option>
                        <option value="fish">Fish</option>
                        <option value="chickenStrips">Chicken Strips</option>
                        <option value="miniAnchovies">Mini Anchovies</option>
                    </select>
                    <br><br>
                    <label for="foodWeight">Options:</label> 
                    <select name="foodWeight" id="foodWeight">
                        <option value="500g">500g</option>
                        <option value="1kg">1kg</option>
                        <option value="1.5kg">1.5kg</option>
                        <option value="2kg">2kg</option>
                    </select>
                    <br><br>
                    <label for="quantity">Quantity:</label>
                    <input type="number" name="quantity" name="quantity" min="1" max="99" value="1"> 
                    <br><br>
                    <button type="submit">Add to Cart</button>
                </form>
            </div>
        </div> 
        <br><br>  
        <div class="container">
            <div class="container1">
                <form action="database.php" method="post" id="reviewForm">
                    <label for="review"><h1>Review:</h1></label>
                    <br>
                    <textarea rows="10" cols="50" name="review" form="reviewForm"></textarea>
                    <br><br>
                    <button type="submit">Submit</button>

                </form>
            </div>  
            <div class="container2">
                <h1>Customers Rating</h1>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <hr>
                <div class="row">
                    <div class="side">
                        <div>5 star</div>
                    </div>
                    <div class="middle">
                        <div class="bar-container">
                        <div class="bar-5"></div>
                        </div>
                    </div>
                    <div class="side">
                        <div>4 star</div>
                    </div>
                    <div class="middle">
                        <div class="bar-container">
                        <div class="bar-4"></div>
                        </div>
                    </div>
                    <div class="side">
                        <div>3 star</div>
                    </div>
                    <div class="middle">
                        <div class="bar-container">
                        <div class="bar-3"></div>
                        </div>
                    </div>
                    <div class="side">
                        <div>2 star</div>
                    </div>
                    <div class="middle">
                        <div class="bar-container">
                        <div class="bar-2"></div>
                        </div>
                    </div>
                    <div class="side">
                        <div>1 star</div>
                    </div>
                    <div class="middle">
                        <div class="bar-container">
                        <div class="bar-1"></div>
                        </div>
                    </div>
                </div>                
            </div>                      
        </div>   
        <br><br>   
    </main>     
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