<?php
    class News extends Controller{
        function index(){
            $index = $this->view("application/Home/index");
            $layout = $this->view("layouts/application", ["page"=>$index]);
            echo $layout;
        }
    }
?>