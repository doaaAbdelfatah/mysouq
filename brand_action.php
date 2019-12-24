<?php

var_dump($_POST);
var_dump($_FILES);

if (!empty($_POST["name"])){

    $name = $_POST["name"];
    $site =  (empty($_POST["site"]) ? null :$_POST["site"]) ;
   // $site = $_POST["site"] ;
  //  var_dump($site);
    $log_name = 'images/brands/default.png';
    if (!empty($_FILES["logo"]["name"])){
        
        $log_name =  "images/brands/".date("dmYHIs")."."
        .pathinfo($_FILES["logo"]["name"] , PATHINFO_EXTENSION);
    
        move_uploaded_file( $_FILES["logo"]["tmp_name"] ,$log_name );
    }

    require_once("my_classes/Brand.php");
    $brand = new Brand();
    $brand->name = $name ;
    $brand->site = $site;
    $brand->logo = $log_name;
    $brand->save();
    header("location:brands.php");


}
else if (!empty($_GET["bid"]))
{
    $id = $_GET["bid"];
    require_once("my_classes/Brand.php");

    $brandObj = Brand::find_by_id($id);
    var_dump($brandObj);
    if(  $brandObj->logo !='images/brands/default.png')
    {
        // delete file from hard disk
        unlink($brandObj->logo);
    }
    $brand = new Brand();
    $brand->id = $id;
    $brand->delete();
    header("location:brands.php");
   

}else {
    header("location:brands.php");
   
}





//var_dump($_FILES["logo"]["name"][0]);
//var_dump($_FILES["logo"]["tmp_name"][0]);
