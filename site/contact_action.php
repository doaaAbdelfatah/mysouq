<?php
// read from post
$message = $_POST["message"];
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];

$message = "<h1>$message</h1>";
require_once("sendemail.php");

sendemail("My Souq team","contact@mysouq.com" , $name ,$email ,$subject ,$message );

