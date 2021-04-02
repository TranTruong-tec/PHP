<?php
class theloaimodel extends DModel{
    public function __construct(){
        parent::__construct();

    }
    public function theloai($table_theloai){
        $sql = "SELECT * FROM $table_theloai";
        return $this->db->select($sql);
        // $sql = "SELECT * FROM theloai ORDER BY ID ASC";
        // $query = $this->db->query($sql);
        // $result = $query->fetchAll();
        // return $result;
    }
    public function theloaibyid($table_theloai, $id){
        $sql = "SELECT * FROM $table_theloai WHERE ID=:id";
        // $statement = $this->db->prepare($sql); 
        $data = array(':id'=>$id);
        return $this->db->select($sql, $data);
        

    }
}



?>