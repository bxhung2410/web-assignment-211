<?php

    class Customer extends Controller{
        function index(){

            $layout = $this->view("layouts/admin", ["admin_page"=>"admin/customers/index", "admin_header"=>"shared/admin_header", "admin_sidebar"=>"shared/admin_sidebar"]); 
        }

        function new(){
            $layout = $this->view("layouts/admin", ["admin_page"=>"admin/customers/new", "admin_header"=>"shared/admin_header", "admin_sidebar"=>"shared/admin_sidebar"]); 
        }
        function edit(){
            $layout = $this->view("layouts/admin", ["admin_page"=>"admin/customers/edit", "admin_header"=>"shared/admin_header", "admin_sidebar"=>"shared/admin_sidebar"]); 
        }

    }
?>