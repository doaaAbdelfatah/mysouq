<?php
session_start();
$current_user = $_SESSION["user"];

if (!empty($_POST["Full_Name"]) && !empty($_POST["email"])){

    $Full_Name = $_POST["Full_Name"];
    $email = $_POST["email"];
    $pw = md5("123456");

    
    // create new User
    require_once("my_classes/User.php");
    $user = new User();
    $user->Full_Name = $Full_Name;
    $user->email = $email;
    $user->password = $pw;
    $user->type = $_POST["type"];
    $user->created_by = $current_user["id"];


    $user->save();

    // sending Email to the User to reset his Password
    

    header("location:users.php");


}