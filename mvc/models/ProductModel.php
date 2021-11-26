<?php 
    class ProductModel extends DB{
        public function getAllProduct(){
            $qr = "SELECT * FROM product";
            return mysqli_query($this->con, $qr);
        }
    }

?>