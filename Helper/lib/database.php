<?php
 class database extends PDO{
     public function __construct(){
        $connect = 'mysql:dbname=pdo_shopgiay; host=localhost; charset=utf8';
		$user='root';
		$pass='';
        
        parent::__construct($connect,$user,$pass);

        //  $db = new PDO($connect, $user,$pass);
     }
     public function select($sql , $data = array(), $fetchstyle = PDO::FETCH_ASSOC){
        // $sql = "SELECT * FROM $table";
        $statement = $this->prepare($sql);
        foreach ($data as $key => $value) {
            $statement->bindParam($key,$value);
            # code...
        }
        $statement->execute();
        return $statement->fetchAll($fetchstyle);

     }
     
 }

?>