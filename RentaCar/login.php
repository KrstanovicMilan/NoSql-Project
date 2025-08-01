<?php
require_once __DIR__ . '/vendor/autoload.php';

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
}

$mongo =new MongoDB\Client("mongodb://localhost:27017");
$db = $mongo->mydb;
$users = $db->Actors;
$flag = true;
$list = $users->find();
foreach($list as $item){
    if(($item["Username"] == $username) && ($item["Password"] == $password)){
        session_start();
        $_SESSION['userName'] = $username;

        header("Location: index.php");

        $flag= false;
    }
}
if($flag){
    header("Location: index.html");
}

?>