<!doctype html>
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

    <div id="naslov">
        <h1 class="naslov">&bullet; V E H I C L E S &bullet;</h1>
    </div>
    <div id="sortiranje">
        <ul>
            <li id="sort" >SORT BY:</li>
            <button><li class="mostp">MOST POPULAR</li>
            <button><li class="alphabetical">ALPHABETICAL</li></button>
            <button><li class="highprice">HIGHEST PRICE</li></button>
            <button><li class="lowprice">LOWEST PRICE</li></button>

        </ul>
    </div>
    <div id="box">
        
        <!--     f       -->  
        <div class="modeli">
            <img src="images/BMW_M3.jpg">
            <div class="simpletxt">
                <h3 class="name">BMW M3</h3>
                <p>
                    Vrsta goriva: Dizel<br><br>
                    Vrsta menjaca: Manuel<br><br>
                    Broj mesta za sedenje: 2 <br><br>
                    klima:Da<br><br>
                    Kubikaza: 2000cm3<br><br>
                </p>
                 <h4 class="price"> 50/day&euro;</h4>
                 <button><a href="rent_form.php">RENT</a></button><br>
                 
            </div>
        </div>
        <!--     f       --> 
        <div class="modeli">
            <img src="images/audi_A5.jpg">
            <div class="simpletxt">
                <h3 class="name">AUDI A5</h3>
                <p>
                    Vrsta goriva: Benzin<br><br>
                    Vrsta menjaca: Manuel<br><br>
                    Broj mesta za sedenje: 4<br><br>
                    klima:Da<br><br>
                    Kubikaza: 1300cm3<br><br>
                </p>
                 <h4 class="price"> 30/day&euro;</h4>
                 <button><a href="rent_form.php">RENT</a></button><br>
                 
            </div>
            </div>
            <!--     f       --> 
            <div class="modeli">
                <img src="images/BMW_M8.jpg">
                <div class="simpletxt">
                    <h3 class="name">BMW M8</h3>
                    <p>
                        Vrsta goriva: Dizel<br><br>
                        Vrsta menjaca: Automatic<br><br>
                        Broj mesta za sedenje: 2<br><br>
                        Klima:Da<br><br>
                        Kubikaza: 2500cm3<br><br>
                    </p>
                     <h4 class="price"> 80/day&euro;</h4>
                     <button><a href="rent_form.php">RENT</a></button><br>
                     
                </div>
            </div>
                <!--     f       --> 
                <div class="modeli">
                    <img src="images/ferrari_488.jpg">
                    <div class="simpletxt">
                        <h3 class="name">FERRARI 488</h3>
                        <p>
                            Vrsta goriva: Benzin<br><br>
                            Vrsta menjaca: Automatic<br><br>
                            Broj mesta za sedenje: 2<br><br>
                            klima:Da<br><br>
                            Kubikaza: 4000cm3<br><br>
                        </p>
                         <h4 class="price"> 100/day&euro;</h4>
                         <button><a href="rent_form.php">RENT</a></button><br>
                         
                    </div>
                </div>
            <!--     f       --> 
            <div class="modeli">
                <img src="images/lamborgini_huracan.jpg">
                    <h3 class="name">Lamborgini huracan</h3>
                    <p>
                        Vrsta goriva: Dizel<br><br>
                        Vrsta menjaca: Automatic<br><br>
                        Broj mesta za sedenje: 2<br><br>
                        klima:Da<br><br>
                        Kubikaza: 3500cm3<br><br>
                    </p>
                     <h4 class="price"> 200/day&euro;</h4>
                     <button><a href="rent_form.php">RENT</a></button><br>
            </div>
            <br>
        <!--     f       --> 
        <div class="modeli">
            <img src="images/maserati_granturismo.jpg">
                <h3 class="name">Maserati Granturismo</h3>
                <p>
                    Vrsta goriva: Benzin<br><br>
                    Vrsta menjaca: Manuel<br><br>
                    Broj mesta za sedenje: 2<br><br>
                    klima:Da<br><br>
                    Kubikaza: 2400cm3<br><br>
                </p>
                 <h4 class="price"> 90/day&euro;</h4>
                 <button><a href="rent_form.php">RENT</a></button><br>
            
        </div>
        <!--     f       --> 
        <div class="modeli">
            <img src="images/mustang_gt.jpg">
                <h3 class="name">MUSTANG GT</h3>
                <p>
                    Vrsta goriva: Benzin<br><br>
                    Vrsta menjaca: Manuel<br><br>
                    Broj mesta za sedenje: 2<br><br>
                    klima:Da<br><br>
                    Kubikaza: 4000cm3<br><br>
                </p>
                 <h4 class="price"> 150/day&euro;</h4>
                 <button><a href="rent_form.php">RENT</a></button><br>
            
        </div>
        <!--     f       --> 
        <div class="modeli">
            <img src="images/porshe_gts.jpg">
                <h3 class="name">PORSHE GTS</h3>
                <p>
                    Vrsta goriva: Benzin<br><br>
                    Vrsta menjaca: Automatic<br><br>
                    Broj mesta za sedenje: 2<br><br>
                    klima:Da<br><br>
                    Kubikaza: 3000cm3<br><br>
                </p>
                 <h4 class="price"> 180/day&euro;</h4>
                 <button><a href="rent_form.php">RENT</a></button><br>
            
        </div>
        <!--     f       --> 
        <div class="modeli">
            <img src="images/porshe_carrera.jpg">
                <h3 class="name">PORSHE CARRERA</h3>
                <p>
                    Vrsta goriva: Dizel<br><br>
                    Vrsta menjaca: Automatic<br><br>
                    Broj mesta za sedenje: 2<br><br>
                    klima:Da<br><br>
                    Kubikaza: 2500cm3<br><br>
                </p>
                 <h4 class="price"> 150/day&euro;</h4>
                 <button><a href="rent_form.php">RENT</a></button><br>
            
        </div>
        <!--     f       --> 
        <div class="modeli">
            <img src="images/porshe_panamera.jpg">
                <h3 class="name">PORSHE PANAMERA</h3>
                <p>
                    Vrsta goriva: Dizel<br><br>
                    Vrsta menjaca: Automatic<br><br>
                    Broj mesta za sedenje: 4<br><br>
                    klima:Da<br><br>
                    Kubikaza: 2000cm3<br><br>
                </p>
                 <h4 class="price"> 140/day&euro;</h4>
                 <button><a href="rent_form.php">RENT</a></button><br>
            
        </div>
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
<script  src="sort.js"></script>

</body>    

</html>