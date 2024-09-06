<?php
// echo '<script>';
// echo 'alert("Php working")';
// echo '</script>'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IdrisiSoft Solutions</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="responsive2.css">
</head>
<body id="SignBody">
    <div id="Wasection">

        <div id="Whatsup">
            <a href="https://wa.link/ybztwa" id="Anchor"><img src="img/Logos/waicon.png" alt=""></a>
        </div>
        <div>
            <p class="DisplayPara">Working</p>
        </div>
    </div>

    <section id="HeaderSection" class="Section">
        <section class="ServiceSection">
            <input type="checkbox" id="Check" hidden>
            <div id="MainContent" class="MainContent">
                <div class="MainContentBox MainContent1">
                    <a href="services.html">
                        <div id="Service1" class="">
                            <h5>Static Website</h5>
                            <p>treamlined static websites that captivate, inform, and elevate your online presence</p>
                        </div>
                    </a>
                        
                        
                    <a href="services.html">
                        <div id="Service2" class="">
                            <h5>Dynamic Website</h5>
                            <p>Engaging, interactive, and tailored for evolving online experiences.</p>
                        </div>
                    </a>
                    <a href="services.html">
                        <div id="Service3" class="">
                            <h5>Static Page</h5>
                            <p>Simple, efficient, and visually appealing online content presentation.</p>
                        </div>
                    </a>
                </div>
                <div class="MainContentBox MainContent2">
                    <a href="services.html">
                        <div id="Service4" class="">
                            <h5>Dynamic Page</h5>
                            <p> Interactive, personalized, and responsive for engaging online experiences</p>
                        </div>
                    </a>
                    <a href="services.html">
                        <div id="Service5" class="">
                            <h5>Landing Page</h5>
                            <p>Compelling, focused, and optimized for conversions and user engagement.</p>
                        </div>
                    </a>
                    <a href="services.html">
                        <div id="Service6" class="">
                            <h5>Ecommerce Site</h5>
                            <p>Seamless, secure, and tailored for successful online retail experiences.</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <ul id="Sidebar">
            <!-- <i class="fa-solid fa-bars" style="color: #ffffff;"></i> -->
            <div>
                <li><img id="Ham"src="img/Logos/ham.png" alt=""></li>
            </div>
            <div>
    
                <li><a href="contact.php">Contact Us</a></li>
                <li><img src="img/Logos/logo.png" alt=""></li>
            </div>
        </ul>
        <ul id="navbar" class="">
            <li><img id="Cross"src="img/Logos/cross.png" alt=""></li>       
            <li><a href="index.html">Home</a></li>        
            <li><a href="#" onclick="ShowService()" id="serviceButton"><label id="serviceLabel" for="Check">Services</label></a></li>
            <!-- <li><a href="#">Offers</a></li> -->
            <li><img src="img/logos/logo.png" id="Service"  alt=""></li>
            <!-- <li><a href="#">Templates</a></li> -->
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.php" class="active">Contact Us</a></li>
        </ul>
    </section>
    <?php
        // Creating Connection object
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $server="localhost";
            $username="root";
            $password="";
            $database="contactmessage";
            $conn=mysqli_connect($server,$username,$password,$database);

            $name=$_POST['name'];
            $email=$_POST['email'];
            $number=$_POST['contact'];
            $subject=$_POST['subject'];
            $message=$_POST['message'];
            if(empty($name) || empty($email) || empty($number) || empty($subject) || empty($message)){

            }
            else{
                $sql="INSERT INTO `contactinfo` (`SNO.`, `Name`, `Email`, `Number`, `Subject`, `Message`) VALUES (NULL, '$name', '$email', '$number', '$subject', '$message')";
                $result=mysqli_query($conn,$sql);
                // header("location: succes.html");
                header("location: success.html");
            }
        }
    ?>
    <section id="ContactUsPage">
            <h1>Contact Us</h1>
            <div class="ItemContainer">
                <div class="ContactItem ContactDetails">
                    <div class="ContactDetail1">
                        <div class="DetailBox DetailBox1">
                            <i class="fa-solid fa-location-dot"></i>
                            <h5>Address</h5>
                            <p>Sant Dnyaneshwar nagar, Bandra East, Mumbai 400051.</p>
                        </div>
                        <div class="DetailBox DetailBox2">
                            <i class="fa-solid fa-envelope"></i>
                            <h5>Phone Number</h5>    
                            <p>9004780981</p>
                            <p>9004780981</p>
                        </div>
                    </div>
                    <div class="ContactDetail2">
                        <div class="DetailBox DetailBox3">
                            <i class="fa-solid fa-phone"></i>
                            <h5>Contact</h5>
                            <p>idrisiafsan55@gmail.com</p>
                        </div>
                        <div class="DetailBox DetailBox4">
                            <i class="fa-solid fa-clock"></i>
                            <h5>Open Hours</h5>
                            <p>Monday-Friday</p>
                            <p>10:00 Am - 06:00 Pm</p>
                        </div>
                    </div>
                </div>
                <div class="ContactItem ContactForm">
                    <form action="contact.php" method="post" onSubmit="return onSubmit()" >
                        <div class="InpContainer1 InpContainer">
                            <input type="text" name="name" class="input" placeholder="Your Name...">
                            <input type="email" name="email" class="input" placeholder="Your Email...">
                        </div>
                        <div class="InpContainer2 InpContainer">
                            <input type="text" name="contact" class="input" placeholder="Your Contact...">
                            <input type="text" name="subject" class="input" placeholder="Subject">
                            <textarea name="message" id="" class="input" cols="30" rows="10" placeholder="Your Message..."></textarea>
                        </div>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
    </section>

    <section id="sliderSection">
        <h2>Templates</h2>
        <div>
            <i class="fa-solid fa-left-long" id="leftArrow"></i>
            <img id="template" src="img/Banners/s5.png" alt="">
            <i class="fa-solid fa-right-long" id="rightArrow"></i>
        </div>
    </section>
    
    <section id="FooterSection" class="Section">
        <div class="FSectionBox FSectionBox1" id="FSectionBox1">
            <h4>Contact Details</h4>
            <p><strong>Address:</strong> Sant Dnyaneshwar nagar, Bandra East, Mumbai 400051.</p>
            <p><Strong>Email:</Strong> webtemplation.com</p>
            <p><strong>Phone NO.:</strong>9004780982/9004780981</p>
            <p><strong>Timings:</strong>25/7</p>
            
    
        </div>
        <div class="FSectionBox FSectionBox2" id="FSectionBox2">
            <h4>About</h4>
            <a href="#">About Us</a>
                <a href="#">Membership</a>
                <a href="#">Terms & Condition</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Contact Us</a>
                <a href="#">Services</a>
        </div>
        <div class="FSectionBox FSectionBox3" id="FSectionBox3">
            <h4>Payment Gateways</h4>
            <img src="img/logos/visa.png" alt=""></img>
                <img src="img/logos/mc.png" alt=""></img>
        </div>
    </section>
    <script src="index.js"></script>
    <script src="https://kit.fontawesome.com/15b3fa202a.js" crossorigin="anonymous"></script>
    <!-- <script src="test.js"></script> -->
    <!-- </section> -->
</body>
</html>