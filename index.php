<?php 
session_start();

if (!empty($_SESSION["language"])){
    if ($_SESSION["language"] == "ar") require("ar.php");
    else require("en.php");
}
else require("en.php");
?>
<!DOCTYPE html>
<html lang="<?php echo $lang["lang"]?>" dir="<?php echo $lang["dir"]?>">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title><?php echo $lang["Login"]?></title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    
    <?php echo $lang["css"]?>
    

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/my_logo.png" alt="CoolAdmin">
                              
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="login_action.php" method="post">
                                <div class="form-group">
                                    <label><?php echo $lang["Email Address"]?></label>
                                    <input class="au-input au-input--full" type="email" value="admin@mysouq.com" name="email" placeholder="<?php echo $lang["Email"]?>">
                                </div>
                                <div class="form-group">
                                    <label><?php echo $lang["Password"]?></label>
                                    <input class="au-input au-input--full" type="password" value="123456" name="password" placeholder="<?php echo $lang["Password"]?>">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"><?php echo $lang["Remember Me"]?>
                                    </label>
                                    <label>
                                        <a href="#"><?php echo $lang["Forgotten Password"]?>?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit"><?php echo $lang["sign in"]?></button>
                            </form>
                            <div class="register-link">
                                <p>
                                <?php echo $lang["Don't you have account"]?>?
                                    <a href="#"><?php echo $lang["Sign Up Here"]?></a>
                                </p>

                                <p>
                                    <a href="change_lang_action.php?lang=ar" >اللغة العربية</a> | <a href="change_lang_action.php?lang=en">English</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->