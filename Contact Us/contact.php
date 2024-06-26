<!DOCTYPE html>
<html>

<head>
    <title>Contact Page</title>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="contact.css">

</head>

<body>


    <div class="navigation">
       
        <div>
            <nav>
                 <h2 class="logo">Global Tech</h2>
                 <ul>
                    <li><a href="../Home_Page/HomePage.php">Home</a></li>
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
                            <li><a href="#">Contact us</a></li>
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

    
    <!-- Content -->
    <div class="content-wrapper">
        <div class="contain">
            <div class="row">
                <div class="col">
                    <div class="form">
                        <div class="information">
                            <h1>Contact Us</h1>
                            <hr>
                            <h4>Xhevdet Doda St, Pristina, KS 10000</h4>
                            <h4>globaltech@info.com\ Tel:(866) 216-1075</h4>
                        </div>
                        <form class="fclass" method="post" action="#">
                            <div class="row">
                                <div class="col">
                                    <label for="name">Name :</label>
                                    <input type="text" id="name" name="name" placeholder="Your Name" required
                                        class="formcontrol" required>
                                </div>
                                <div class="col">
                                    <label for="email">Surname :</label>
                                    <input type="text" id="surname" name="surname" placeholder="Your Surname" required
                                        class="formcontrol" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="tel">Phone :</label>
                                    <input type="tel" id="phone" name="phone"
                                        placeholder="Your Phone Number (123-456-789)" id="tel" class="formcontrol"
                                        pattern="[0-9]{3}[0-9]{3}[0-9]{3}" required>
                                </div>
                                <div class="col">
                                    <label for="">Email :</label>
                                    <input type="text" name="email" placeholder="Your Email"
                                        id="" class="formcontrol" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col_full">
                                    <label>Your Message: </label>
                                    <textarea class="formcontrol" name="message" id="message" cols="30" rows="6"
                                        placeholder="Write your message" required></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col_full">
                                    <input type="submit" value="Contact Us" class="button">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col">
                    <div class="adress">
                        <h1>Visit Us:</h1>
                        <hr>
                        <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15049.955799565396!2d21.145778!3d42.653294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDLCsDM5JzEyLjMiTiAyMcKwMDgnMjEuOCJF!5e0!3m2!1sen!2s!4v1639318543611!5m2!1sen!2s"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="row">
            <div class="col3">
                <div class="InfoOpening vertical">
                    <h3>Our working hours</h3>
                    <p>Monday - Friday: 9 am - 5:30 pm</p>
                    <p>Saturday: 8:30 am - 12 pm</p>
                </div>
            </div>
            <div class="col3 ">
                <div class="mailingList">
                    <h3>Join our mailing list:</h3>
                    <form method="post" action="#" class="fclass" id="footerform">
                        <label for="email2">Email :</label>
                        <input type="email" id="email2" name="email2" placeholder="Your Email" required
                            class="formcontrol" required>
                        <div class="col_full" id="fsub">
                            <input type="submit" value="Join" class="button">
                        </div>
                    </form>
                </div>
            </div>
    </footer>
</body>

</html>