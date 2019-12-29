<?php
session_start();
$language = $_GET["lang"];
if ($language == "ar")
{
    $_SESSION["language"] = "ar";
}else {
    $_SESSION["language"] = "en";
}
header("location:index.php");