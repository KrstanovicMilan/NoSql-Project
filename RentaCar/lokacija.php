<html>
<head>
    <title>Pocetna</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
<div id="header">
   
<img src="images/logo.jpg" >
    
    <div id="navbar">
    <a href="index.php" id="home">HOME</a>
    <a href="galerija.php">GALLERY</a>
    <a href="carpark.php">CAR PARK</a>
    <a href="contact.php">CONTACT</a>
    <div id="navbar2">
    <?php
            session_start();
            //cista provera da li je logovan ili nije
                if(isset($_SESSION['userName']) && !empty($_SESSION['userName'])){
                    echo '<ul>
                           <li style="margin-left:290px"><a href="users.php">'. $_SESSION['userName'].'<a/></li>
                            <li style="margin-left:-150px"><a href="logout.php">Logout</a></li>
                        </ul>';
                }else{
                    echo '<ul>
                    <li style="margin-left:300px"><a href="login.html">Log in</a></li>
                    <li style="margin-left:-25px"><a href="register.html">Register</a></li>
                </ul>';
                }
            ?>
    </div>
</div>
</div>

    <div id="main">
        <div id="slider">
            <img name="slide" >
        </div>
    
    </div>

    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2831.349578793323!2d20.478228599999998!3d44.7940639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7070fe23a5af%3A0x4460f5be29e28907!2sMaksima%20Gorkog%2036%2C%20Beograd%2011000!5e0!3m2!1sen!2srs!4v1658838272062!5m2!1sen!2srs" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
    <div id="logo">
        <img src="images/logo1.jpg" alt="logo"  />
    </div>
    <div id="car">
        <p>The best super car in town</p>
    </div>
    
    <div id="footer">
        <div class="footer"><p>Maksima Gorkog 3 <br/>11000 Belgrade </p></div>
        <div class="footer"><p>www.AMGrentAcar.com</p></div>
        <div class="footer">
            <p>
                <a class="widget" href="https://www.facebook.com/" target="_blank"><img src="images/facebook.jpg" alt="FB" /> </a>
                <a class="widget" href="https://www.instagram.com/" target="_blank"><img  src="images/instagram.jpg" alt="IG" />  </a>
                <a class="widget" href="https://www.twitter.com/" target="_blank"><img  src="images/twiter.jpg" alt="TW" />  </a>
            </p>
        </div>
    </div>


<script  src="slider.js"></script>
</body>    

</html>