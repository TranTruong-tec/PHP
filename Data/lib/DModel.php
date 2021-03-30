<?php 

class DModel{
	
	protected $db = array();

	public function __construct(){
		$connect = 'mysql::dbname = shopbangiay;host = localhost ;charset=utf8';
         $user = 'root';
         $pass = 'yourpassword';
         $db = new PDO($connect, $user,$pass);
	}
	
}


?>