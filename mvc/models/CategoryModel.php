<?php 
    class CategoryModel extends DB{
        public function getAllCategory(){
            $qr = "SELECT * FROM category";
            return mysqli_query($this->con, $qr);
        }

    }

?>