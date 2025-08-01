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
<?php
            require_once __DIR__ . '/vendor/autoload.php';
            $model = $_POST['model'];    
            $datum_uzimanja = $_POST['preuzimanja'];
            //echo $datum_uzimanja;
            //$temp = new DateTime($datum_uzimanja);
            //$datum_od = $temp->format('Y-m-d');


            $datum_vracanja = $_POST['vracanja'];
            $broj_vozacke = $_POST['broj_vozacke'];
            $na_ime = $_POST['na_ime'];

            //echo $datum_od;
            //echo gettype($datum_od);
            

            $mongo =new MongoDB\Client("mongodb://localhost:27017");
            $db = $mongo->mydb;
            $cars = $db->Cars;
            
            $list = $cars->find();
            foreach($list as $item){
                if($item["Model"] == $model){
                    $price = $item["Cena"];
                    
                }
            }
            
            $date1 = date_create($datum_uzimanja);
            $date2 = date_create($datum_vracanja);
            $interval = date_diff($date1, $date2);
            $days = $interval->format("%a");
            $total = $days * $price;

            $document = array(
                "Model" => $model,
                "Date from" => $datum_uzimanja,
                "Date to" => $datum_vracanja,
                "number licence" => $broj_vozacke,
                "On name" => $na_ime,
                "Price" => $total
            );
            $collection = $db->Reservation;
            if(isset($_SESSION['userName']) && !empty($_SESSION['userName'])){
                
                $collection->insertOne($document);

                echo "<div id='alllogin'>";
                echo "<div class='logpap'>";
                echo "<h1 style='color:white; text-align: center; padding-top:25px'>Successfully rent</h1>";
                echo "<p><a href='index.php'>Go to home page</a></p>";

                echo "<p class='infoP'>
                    Model: ".$model."<br/>
                    Date from: ".$datum_uzimanja."<br/>
                    Date to: ".$datum_vracanja."<br/>
                    Number licence: ".$broj_vozacke."<br/>
                    On name: ".$na_ime."<br/>
                    Price: ".$total."&euro;<br/>
                    
                </p>";
                //echo "<p><a href='informacije.php'>See all information about rent</a></p>";
                echo "</div>";
                echo "</div>";
            }

         
    ?>
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


