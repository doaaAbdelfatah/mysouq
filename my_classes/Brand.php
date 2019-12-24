<?php


class Brand{
    var $id ; 
    var $name ; 
    var $site ; 
    var $logo ;


    // to insert new Brand
    function save()
    {
        require_once("./config.php");
        // connection
        $db = new PDO(DSN, USER_NAME , PASSWORD);
        $stm = $db->prepare("insert into brands(name ,site, logo) values(:n , :s , :l)");
        $stm->bindParam(":n" , $this->name);
        $stm->bindParam(":s" , $this->site);
        $stm->bindParam(":l" , $this->logo);
        $stm->execute();

        //close
        $db = null;

    }

    static function get_all()
    {
        require_once("./config.php");
        // connection
        $db = new PDO(DSN, USER_NAME , PASSWORD);
        $stm = $db->query("select id , name , site, logo from brands");
        $rslt = $stm->fetchAll();        
        $db = null;
        return $rslt ;
        
    }
     static function find_by_id($id)
    {
        require_once("./config.php");
        // connection
        $db = new PDO(DSN, USER_NAME , PASSWORD);
        $stm = $db->query("select id , name , site, logo from brands where id=$id");
        $brand = $stm->fetchObject();        
        $db = null;
        return $brand ;
        
    }
    function delete()
    {
        require_once("./config.php");
        // connection
        $db = new PDO(DSN, USER_NAME , PASSWORD);
        $db->exec("delete from  brands  where id=" .$this->id );
        //close
        $db = null;
    }

}