<?php
class home extends DModel{
    public function __construct(){
        parent::__construct();

    }
    public function theloai(){
        $sql = "SELECT * FROM theloai ORDER BY ID DESC";
        $query = $this->db->query($sql);
        $res = $query->fetchAll();
        return $res;
    }
}


?>