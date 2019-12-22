<?php

if (!empty($_REQUEST["btn"]) )
{
    if ($_REQUEST["btn"]== "Save"){
        if(!empty($_REQUEST["cat_name"]))
        {
            $name = $_REQUEST["cat_name"];
            require_once("my_classes/Category.php");
            $c = new Category();
            $c->name = $name ;
            $c->save();
    
            header("location:cats.php");
    
        }
    }else if($_REQUEST["btn"]== "Edit")
    {
        if(!empty($_REQUEST["cat_id"]) && !empty($_REQUEST["cat_name"]))
        {
            $id = $_REQUEST["cat_id"];
            $name = $_REQUEST["cat_name"];
            require_once("my_classes/Category.php");
            $c = new Category();
            $c->id = $id;
            $c->name = $name ;
            $c->edit();

            header("location:cats.php");    
        }
    }
 
}
if (!empty($_GET["cat_id"]))
{
    $id = $_GET["cat_id"];
    require_once("my_classes/Category.php");
    $c = new Category();
    $c->id = $id ;
    $c->delete();

    header("location:cats.php");

}
