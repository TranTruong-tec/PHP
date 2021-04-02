<?php
class homemodel extends DModel{
    public function __construct(){
        parent::__construct();

    }
    public function theloai(){
        $sql = "SELECT * FROM theloai ORDER BY ID ASC";
        $query = $this->db->query($sql);
        $result = $query->fetchAll();
        return $result;
    }
}



?>