<?php

    class Category extends Controller{
        function index(){

            $layout = $this->view("layouts/admin", ["admin_page"=>"admin/categories/index", "admin_header"=>"shared/admin_header", "admin_sidebar"=>"shared/admin_sidebar"]); 
        }
        function new(){
            $layout = $this->view("layouts/admin", ["admin_page"=>"admin/categories/new", "admin_header"=>"shared/admin_header", "admin_sidebar"=>"shared/admin_sidebar"]); 
        }
        function edit(){
            $layout = $this->view("layouts/admin", ["admin_page"=>"admin/categories/edit", "admin_header"=>"shared/admin_header", "admin_sidebar"=>"shared/admin_sidebar"]); 
        }

    }
?>