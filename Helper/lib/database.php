<?php
 class database extends PDO{
     public function __construct(){
         $connect = 'mysql::dbname = shopbangiay;host = localhost';
         $user = 'root';
         $pass = 'yourpassword';
        parent::__construct($connect,$user,$pass);

        //  $db = new PDO($connect, $user,$pass);
     }
 }

?>