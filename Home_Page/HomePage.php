<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Webpage Title</title>
    <link href="style.css" rel="stylesheet">
    <script src="home.js"></script>
</head>

<body>

    <div class="navigation">
       
        <div>
            <nav>
                 <h2 class="logo">Global Tech</h2>
                 <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="../Products Page/Products_Page.php">Products</a>
                        <ul>
                            <li><a href="../Products Page/Products/PC and Laptops page/PC.php">PC</a></li>
                            <li><a href="../Products Page/Products/Network Devices/Network.php">Network Devices</a></li>
                            <li><a href="../Products Page/Products/Cybersecurity tools/Cyber.php">Cybersecurity tools</a></li>
                            <li><a href="../Products Page/Products/Servers/Server.php">Servers</a></li>
                            <li><a href="../Products Page/Products/Accesories/Accesorie.php">Accessories</a></li>
                        </ul>
                    </li>
                    <li><a href="../Trainings/Trainings_Page.php">Trainings</a>
                        <ul>
                            <li><a href="#">IT Essentials</a></li>
                            <li><a href="#">Networking</a></li>
                            <li><a href="#">Penetration Testing</a></li>
                            <li><a href="#">Database Systems</a></li>
                        </ul>
                    </li>
                    <li><a href="../About Us/About_Us.php">About Us</a>
                        <ul>
                            <li><a href="../Contact Us/contact.php">Contact us</a></li>
                        </ul>
                    </li>

                    <li><a href="#">Profile</a>
                        <ul>
                            <li><a href="../Profile_Page/Log-in/Login.php">Log-In</a></li>
                            <li><a href="../Profile_Page/Register/register.php">Register</a></li>
                        </ul>
                    </li>
                 </ul>
    
                
    
                 <button type="button"><a href="Cart_page.html">&#x1F6D2;</a></button>
                 
                 <br><br><br>
    
                
            </nav>
        </div>
    
    </div>

    <div class="content-container">
        <hr id="hr-left">
        <div class="text">
            <p>Welcome to Global Tech</p>
        </div>
        <hr id="hr-right">

        <div class="image-container">
        </div>
    </div>



    <!-- Trainings part -->



    <div class="training">

        <br><br><br>
    
        <h1 class="h1">Our Trainings</h1>
    
        <br><br>
    
       
        <div class="t_cont">
        <img src="Pics/training.jpg" alt="Trainings">
        <div class="text-box">
        <p>Empower your success through our comprehensive training programs, designed to unlock your full potential.</p>
        <br><br>
        
        </div>

        <button class="btn">Read more</button>
    </div>
   

    
    <!-- Products Slider -->


    <div class="Products">

        <br><br><br>
    
        <h1 class="h1">Our Products</h1> <!-- it uses the CSS from the about us section(same CSS)-->
    
        <br><br>
    
                <div id="kontenti">
                    <header>
                        <img name="mySlide" id="slideshow" />
                    </header>
                
                </div>
    
                <button class="btnProd" type="button" onclick="location.href='../Products Page/Products_Page.html'">Browse more</button>
    
    
       
        </div>




    <!-- Footer -->
    <!-- Footer -->

<footer>
    <div class="f">
        <h2>About Global Tech</h2>
      
        <div class="social-media">
            <a href="facebook.php"><img src="Pics\facebook.png" alt="" width="32px" height="32px"></a>
            <a href="https://twitter.com/GlobalTech_2023?t=kfPxi8FxfFy-RrttK__xiQ&s=09"><img src="Pics\twitter.png" alt="" width="32px" height="32px"></a>
            <a href="https://www.instagram.com/global_techofficial/"><img src="Pics\instagram.png" alt="" width="32px" height="32px"></a>
            <a href="pinterest.php"><img src="Pics\pinterest.png" alt="" width="32px" height="32px"></a>
        </div>
    </div>

    <div class="footermain">
            <div class="footerleft">
                <p>Global Tech: Your one-stop destination for cutting-edge tech products and expert-led training programs. 
                Discover the latest gadgets and software while mastering essential skills in the ever-evolving world of technology.</p>
            </div>

            <div class="footerright">
                <p>Terms of use</p>
                <p>Privacy Policy</p>
            </div>
        </div>
        <div class="end">
            <p>Copyright 2023 Global Tech &#169; Company. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
