<?php
    
    class Connect_db{
        private $servername = "localhost";
        private $username ="root";
        private $password="";
        private $db_name="projekti-web";
    }
    
    function startConnection():void{
        try{ 
            $conn = new PDO("mysql;host= $this->servername; db_name=$this->db_name", $this->username, $this->password);

            $conn->setAttribute(PDO:: ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch(PDOException $e){
          echo "Lidhja me databaze deshtoi" . $e->getMessage();
          return null;
        }
    }

?>