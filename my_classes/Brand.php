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


}