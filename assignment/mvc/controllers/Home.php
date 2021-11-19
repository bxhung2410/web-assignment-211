<?php

    class Home extends Controller{
        function index(){
            $layout = $this->view("layouts/application", ["page"=>"application/Home/index", "header"=>"shared/header", "footer"=>"shared/footer"]);
            
        }

        function catalog(){
            //load Model
            
            $layout = $this->view("layouts/application", ["page"=>"application/Home/catalog", "header"=>"shared/header", "footer"=>"shared/footer"]);
            echo $layout;
        }

        function product(){
            //load model with ID
            $layout = $this->view("layouts/application", ["page"=>"application/Home/product", "header"=>"shared/header", "footer"=>"shared/footer"]);
            echo $layout;
        }

        function contact(){
            $layout = $this->view("layouts/application", ["page"=>"application/Home/contact", "header"=>"shared/header", "footer"=>"shared/footer"]);
            echo $layout;
        }

        function cart(){

        }
    }
?>