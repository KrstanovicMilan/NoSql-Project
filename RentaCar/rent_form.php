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

<div id="contact">
<form method="POST" action="rentPost.php">
        <div id="cont">
            <select name="model">
                <option value="" disabled selected>Choose a car model</option>
                <option value="BMW M3">BMW M3</option>
                <option value="AUDI A5">AUDI A5</option> 
                <option value="BMW M8">BMW M8</option> 
                <option value="Ferrari 488">FERRARI 488</option> 
                <option value="Lamborgini huracan">Lamborgini huracan</option> 
                <option value="Maserati Granturismo">Maserati Granturismo</option> 
                <option value="Mustang GT"> MUSTANG GT</option> 
                <option value="Porshe GTS">PORSHE GTS</option> 
                <option value="Porshe Carrera">PORSHE CARRERA</option> 
                <option value="Porshe panamera">PORSHE PANAMERA</option> 
            </select><br/>
            <label>Datum preuzimanja</label>
            <input type="date"   name="preuzimanja">
            <label>Datum vracanja</label>
            <input type="date"   name="vracanja">
            <label>Broj vozacke dozvole</label>
            <input type="text"   name="broj_vozacke">
            <label>Na ime</label>
            <input type="text"   name="na_ime">
            
            <button type="submit" id="kontakt">Posalji</button>
            <p name="dane"></p>
        </div>
    </form>  
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
</body>    

</html>