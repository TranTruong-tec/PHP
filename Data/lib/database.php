<?php
 class database{
     public function __construct(){
         $connect = 'mysql::dbname = shopbangiay;host = localhost';
         $user = 'root';
         $pass = 'yourpassword';
         $db = new PDO($connect, $user,$pass);
     }
 }

?>