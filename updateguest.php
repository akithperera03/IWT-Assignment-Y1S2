<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurora Bliss</title>
    <link rel="stylesheet" href="styles/updateguest.css">
    
</head>
<body>

    <header>
        <div class="container">
            <div class="logo"> 
                <a href="index.php"><img src="images/logo_1.jpg" id="logoimage"></a>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="aboutUs.php">ABOUT US</a></li>
                    <li><a href="ourFeatures.php">OUR FEATURES</a></li>
                    <li><a href="venue.php">VENUE</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="contactUs.php">CONTACT US</a></li>
                </ul>
            </nav>
            <div class="user">
                <span>Hello!</span>
                <a href="login.php">Login</a>
            </div>
        </div>
    </header>
<body>
    <div class="guest">
        <div class="image-container">
            <img src="images/wedding (1).png">
        </div>
        <div class="form-container">
            <h2>Update Guest List</h2>
            <form>
                <label for="order-id-guest">Order ID:</label>
                <input type="text" id="order-id-guest" name="order-id-guest" required placeholder="Enter order ID">

                <label for="guest-name">Guest Name:</label>
                <input type="text" id="guest-name" name="guest-name" required placeholder="Enter guest name">

                <label for="nic-number">NIC Number:</label>
                <input type="text" id="nic-number" name="nic-number" required placeholder="Enter nic number">
                

                <button type="submit">Update</button>
            </form>
        </div>
    </div>
<br><br>
    <footer>
        <div class="container">
            <div class="logo"> 
                <a href="index.php"><img src="images/logo_1.jpg" id="logoimage"></a>
            </div> 
            <div class="social">
                <a href="https://www.instagram.com"><img src="images/instagram.jpeg" alt="Instagram"></a>
                <a href="https://www.facebook.com"><img src="images/facebook.png" alt="Facebook"></a>
                <a href="https://www.x.com"><img src="images/x.png" alt="X"></a>
                <a href="https://www.linkedin.com"><img src="images/linkedin.png" alt="LinkedIn"></a>
            </div>
    
            <div class="subscribe">
        <h3>Subscribe to Our Newsletter</h3>
        <form id="subscribeForm" method="POST" action="">
            <input type="email" id="email" name="email" placeholder="Enter Your Email" required>
            <button type="submit">Submit</button>
        </form>

    </div>
        <div class="legal">
            <div class="bottomlinks">
                <p> 
                    <a href="termsAndConditions.php"> Terms and Conditions </a> | 
                    <a href="privacyPolicy.php"> Privacy and Cookies Policy </a> | 
                    <a href="FAQ.php"> FAQ </a> |
                    <a href="careers.php"> Work with us </a>
                </p>
            </div>
        </div>
    </footer>
    
    </body>
    </html>