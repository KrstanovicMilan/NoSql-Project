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

<div id="gall">
<a href="images/BMW_M3.jpg"><img style="width:300px!important" src="images/BMW_M3.jpg"/></a>
    <a href="images/audi_A5.jpg"><img src="images/audi_A5.jpg"/></a>
    <a href="images/BMW_M8.jpg"><img src="images/BMW_M8.jpg"/></a>
    <a href="images/ferrari_488.jpg"><img src="images/ferrari_488.jpg"/></a>
    <a href="images/lamborgini_huracan.jpg"><img src="images/lamborgini_huracan.jpg"/></a>
    <a href="images/maserati_granturismo.jpg"><img src="images/maserati_granturismo.jpg"/></a>
    <a href="images/mustang_gt.jpg"><img src="images/mustang_gt.jpg"/></a>
    <a href="images/porshe_gts.jpg"><img src="images/porshe_gts.jpg"/></a>
    <a href="images/porshe_carrera.jpg"><img src="images/porshe_carrera.jpg"/></a>
    <a href="images/porshe_panamera.jpg"><img src="images/porshe_panamera.jpg"/></a>
    

</div>


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