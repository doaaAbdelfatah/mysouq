<?php

    class User {
        public $id ; 
        public $Full_Name ; 
        public $email ; 
        public $password ; 
        public $mobile ; 
        public $status ; 
        public $last_login_at;
        public $create_at ; 
        public $created_by ; 


        function save()
        {
            require_once("./config.php");
            // connection
            $db = new PDO(DSN, USER_NAME , PASSWORD);
            $stm = $db->prepare("insert into users(Full_Name ,password, email , type , created_by) values(:fn , :pw , :email , :type , :by)");
            $stm->bindParam(":fn" , $this->Full_Name);
            $stm->bindParam(":pw" , $this->password);
            $stm->bindParam(":email" , $this->email);
            $stm->bindParam(":type" , $this->type);
            $stm->bindParam(":by" , $this->created_by);

            $stm->execute();

            //close
            $db = null;

        }
        
        function activate()
        {
            require_once("./config.php");
            // connection
            $db = new PDO(DSN, USER_NAME , PASSWORD);
            $stm = $db->prepare("update users set password = :pw , status='Active' where id=:id");           
            $stm->bindParam(":pw" , $this->password);           
            $stm->bindParam(":id" , $this->id);

            $stm->execute();

            //close
            $db = null;

        }


        


    }