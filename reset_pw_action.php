<?php
$id = $_POST["user_id"];
$pw = md5($_POST["password"]);

require_once("my_classes/User.php");
$u = new User();
$u->id = $id;
$u->password = $pw;
$u->activate();


header("location:index.php?msg=done");

