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

$client = new MongoDB\Client("mongodb://localhost:27017");


// select a database
$db = $client->mydb;

$collection = $db->Actors;

$cursor = $collection->find();
// iterate cursor to display title of documents

foreach ($cursor as $document) {
    if($document["Username"] == $_SESSION['userName'] ){

                echo "<h1 style='color:red; text-align: center; padding-top:25px ; font-family:Papyrus;'>Personal data</h1>";
                echo "<p style='padding-top:25px'><strong style='color: orange; font-family:Papyrus; font-size: 30px; '>First name : </strong>   <span style='font-size: 30px;'>".$document["First_name"]."</span></p>";
                echo "<p style='padding-top:5px'><strong style='color: orange; font-family:Papyrus; font-size: 30px;' >Last name : </strong>   <span style='font-size: 30px;'> ".$document["Last_name"]."</span></p>";
                echo "<p style='padding-top:5px'><strong style='color: orange; font-family:Papyrus; font-size: 30px;' >Username : </strong>  <span style='font-size: 30px;'> ".$document["Username"]."</span></p>";
                echo "<p style='padding-top:5px'><strong style='color: orange; font-family:Papyrus; font-size: 30px;' >Email : </strong>  <span style='font-size: 30px;'> ".$document["Email"]."</span></p>";
                echo "<p style='padding-top:5px'><strong style='color: orange; font-family:Papyrus; font-size: 30px;' >Password :</strong>   <span style='font-size: 30px;'> ".$document["Password"]."</span></p>";
                echo "<p style='padding-top:5px'><strong style='color: orange; font-family:Papyrus; font-size: 30px;' >Number :</strong>   <span style='font-size: 30px;'>".$document["Number"]."</span></p>";
                echo "<p style='padding-top:5px'><strong style='color: orange; font-family:Papyrus; font-size: 30px;' >Gender :</strong>   <span style='font-size: 30px;'>".$document["Gender"]."</span></p>";
                echo "<p style='padding-top:5px'><strong style='color: orange; font-family:Papyrus; font-size: 30px;' >Birthday : </strong>   <span style='font-size: 30px;'> ".$document["Birthday"]."</span></p>";
                echo "<p id='updateData' style='padding-bottom : 30px; '><a   style='color: orange ;border-style: ridge; text-decoration:none ; background-color:grey ' href='update.php'>Update data</a></p>";

    }
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

