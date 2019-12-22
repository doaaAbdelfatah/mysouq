<?php

class Category
{
    public $id ; 
    public $name ;


    static function get_all()
    {
        require_once("./config.php");
        // connection
        $db = new PDO(DSN, USER_NAME , PASSWORD);
        $stm = $db->query("select id , name from categories");
        $rslt = $stm->fetchAll();
        //$rslt=$stm->fetchObject();
        //var_dump($rslt);
        //close
        $db = null;
        return $rslt ;
        
    }
    function save()
    {
        require_once("./config.php");
        // connection
        $db = new PDO(DSN, USER_NAME , PASSWORD);
        $db->exec("insert into categories(name) values('".$this->name."')");
        //close
        $db = null;

    }
    function edit()
    {
        require_once("./config.php");
        // connection
        $db = new PDO(DSN, USER_NAME , PASSWORD);
        $db->exec("update categories set name='".$this->name."' where id=" .$this->id );
        //close
        $db = null;
    }
    static function find_by_name($name)
    {
        require_once("./config.php");
        // connection
        $db = new PDO(DSN, USER_NAME , PASSWORD);
        $stm = $db->query("select id , name from categories where name like '%$name%'");
        $rslt = $stm->fetchAll();
       
        $db = null;
        return $rslt ;
    }
    function delete()
    {
        require_once("./config.php");
        // connection
        $db = new PDO(DSN, USER_NAME , PASSWORD);
        $db->exec("delete from  categories  where id=" .$this->id );
        //close
        $db = null;
    }

}