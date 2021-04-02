<?php
 class database extends PDO{
     public function __construct(){
        $connect = 'mysql:dbname=pdo_shopgiay; host=localhost; charset=utf8';
		$user='root';
		$pass='';
        
        parent::__construct($connect,$user,$pass);

        //  $db = new PDO($connect, $user,$pass);
     }
 }

?>