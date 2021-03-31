<?php
class sanpham extends DBControllers{
    public function __construct(){
       parent::__construct();

    }
    public function chitietsanpham($id,$sg){
        echo 'chi tiết sản phẩm';
        echo $id;
        echo $sg;
    }
}

?>