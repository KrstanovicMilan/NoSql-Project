<?php
require_once __DIR__ . '/vendor/autoload.php';
session_start();


if(isset($_POST["submit"])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $number = $_POST["telefon"];
    $gender = $_POST["gender"];
    $birthday = $_POST["datum"];
}
$_SESSION['userName'] = $username;

$document = array(
    "First_name" => $fname,
    "Last_name" => $lname,
    "Username" => $username,
    "Email" => $email,
    "Password" => $password,
    "Number" => $number,
    "Gender" => $gender,
    "Birthday" => $birthday
);
$mongo =new MongoDB\Client("mongodb://localhost:27017");
$db = $mongo->mydb;
$collection = $db->Actors;
$flag = true;
$list = $collection->find();
foreach($list as $item){
    if(($item["Username"] == $username)){

        header("Location: register.html");
        $flag = false;
    }
}

if($flag){
    $collection->insertOne($document);
    header("Location: index.php");
    //echo "Upis je prosao";
}





