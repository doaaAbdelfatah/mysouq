<?php
session_start();
$current_user = $_SESSION["user"];
if ($current_user["type"] == "Super Admin" || $current_user["type"] == "Admin"  ){
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
        //http://localhost/my_souq/reset_pw.php?user_id=user_id
        require_once("site/sendemail.php");
        $message = "<h1>Welcome to My Souq</h1>";
        $message .= "<hr>";
        $message .= "to Activate Your account click <a href='".DOMAIN."/my_souq/reset_pw.php?user_id=".$user->id."'>here </a>";
        $message.="<br>";
        $message.="My Souq Team , <br>Best Regards";
        sendemail( $user->Full_Name,$user->email , $current_user["Full_Name"] ,$current_user["email"] ,"Activate Your Account" ,$message );
        header("location:users.php");    
    
    }
}else {
    header("location:users.php");
}
