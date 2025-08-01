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
$user = $_SESSION['userName'];
$mongo =new MongoDB\Client("mongodb://localhost:27017");
$db = $mongo->mydb;
$collection = $db->Actors;
$collection->updateOne(
    ["Username" => $user ],
    ['$set' => [
        "First_name" => $fname,
        "Last_name" => $lname,
        "Username" => $username,
        "Email" => $email,
        "Password" => $password,
        "Number" => $number,
        "Gender" => $gender,
        "Birthday" => $birthday
    ]]
);
header("Location:logout.php");