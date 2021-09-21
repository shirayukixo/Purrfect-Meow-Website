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
                <li>Home</li>
                <li>Products</li>
                <li>Cart</li>
                <li>My Account</li>
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
        <div>
            <img src="./Images/main.jpeg" alt="Cat Image" width="100%">
        </div>
        <div class="flex-container">
            <div class="container1">
                <h1>Start your cat's journey here!</h1>
                <br>
                <ol class="list">
                    <li>Made with only fresh meat that are produced by local farm</li>
                    <li>Excellent combo for those with food sensitivies and allergies</li>
                    <li>Air-dried only, no high heat involved</li>
                </ol>
                <br>
                <h2 class="explore">Explore now!</h2>
                
            </div>
            <div class="container2">
                <img src="./Images/catFood.jpeg" alt="Cat Food">
            </div>
        </div>
        <div class="slideshow-container">
            <div class="mySlides">
                <q>Have been looking for a healthy cat food, glad I found Purrfect Meow!</q>
                <p class="author">- Nancy Murphy</p>
            </div>

            <div class="mySlides">
                <q>My kitten loves it very much! Always looking for more.</q>
                <p class="author">- Julien Haas</p>
            </div>

            <div class="mySlides">
                <q>Lovely packaging and good quality!</q>
                <p class="author">- Jason Sykes</p>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <div class="dot-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <script src=./JavaScript/slideshow.js></script>

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