<?php
    include("../Model/List_Procduct.php");
    class ProductController 
    {
        public static function getAll()
        {
            $products = new List_Procduct();
            return $products->getAll();
        }
        // public static function getProduct($id)
        // {
        //     $member = new List_Procduct();
        //     return $member->getProduct($id);
        // }
    }
?>