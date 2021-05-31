<?php 
if(isset($_POST['id'])){
    $exitProduct = new ProductsController();
    $exitProduct->deleteProduct();
 }



?> 