<?php

    class Order extends Controller{
        function index(){

            $layout = $this->view("layouts/admin", ["admin_page"=>"admin/orders/index", "admin_header"=>"shared/admin_header", "admin_sidebar"=>"shared/admin_sidebar"]); 
        }

    }
?>