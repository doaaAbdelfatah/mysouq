<?php
session_start();
if (!empty($_POST["email"]) && !empty($_POST["password"]) )
{
    $email = filter_var(trim($_POST["email"]) ,FILTER_SANITIZE_EMAIL );
    if (filter_var(($email) ,FILTER_VALIDATE_EMAIL))
    {
        $password = $_POST["password"];
        // check account from DB
        $qry = "select id, email ,type, full_name, status , last_login_at from users where email='$email' and  password=md5('$password') ";
        require_once("config.php");
        $connection = mysqli_connect(HOST_NAME  , USER_NAME , PASSWORD , DB_NAME);
        $rslt = mysqli_query($connection , $qry);       
        if ($array = mysqli_fetch_assoc($rslt))
        {
            if ($array["status"]=='Active')
            { 
                $_SESSION["user"] = $array;
                $rslt = mysqli_query($connection , "update users set last_login_at=now() where id=" . $array["id"]); 
                //var_dump($array);
                header("location:home.php");
            }else if ($array["status"]=='Deactive' && empty($array["last_login_at"]) )
            {
                header("location:reset_pw.php?user_id=" .$array["id"]);

            }else if( $array["status"]=='Blocked')
            {
                header("location:index.php?msg=invalid_status&status=".$array["status"] ); 
            }else {
                header("location:index.php?msg=invalid_login");
            }
        }else {
            header("location:index.php?msg=invalid_login");
        }
        mysqli_close($connection);
    }else {
        header("location:index.php?msg=not_valid_email");
    }   
}else {
    header("location:index.php?msg=empty");
}
