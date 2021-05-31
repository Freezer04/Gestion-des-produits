<?php

class ProductsController{
    public function getAllProducts(){
        $products = Product::getAll();
        return $products;
    }

    public function getoneProduct(){
        if(isset($_POST['id'])){
            $data = array(
                'id' => $_POST['id']
            );
        $product = Product::getProduct($data);
        return $product;
       }
    }

    public function findProducts(){
        if(isset($_POST['search'])){
            $data = array('search' => $_POST['search']);
        }
        $products = Product::searchProduct($data);
        return $products;

    }

    public function addProduct(){
        if(isset($_POST['submit'])){
            $data = array(
                'name'=> $_POST['name'],
                'Qty'=> $_POST['Qty'],
                'brand_id'=> $_POST['brand_id'],
                'image'=> $_POST['image'],
                'category_id'=> $_POST['category_id'],
                'availibilty'=> $_POST['availibilty'],
                'price'=> $_POST['price'],
            );
            $result = Product::add($data);
            if($result === 'ok'){
               Session::set('success','Product Add');
               Redirect::to('home');

            }else{
                echo $result;
            }
        }
    }

    public function updateProduct(){
        if(isset($_POST['submit'])){
            $data = array(
                'id'=> $_POST['id'],
                'name'=> $_POST['name'],
                'Qty'=> $_POST['Qty'],
                'brand_id'=> $_POST['brand_id'],
                'image'=> $_POST['image'],
                'category_id'=> $_POST['category_id'],
                'availibilty'=> $_POST['availibilty'],
                'price'=> $_POST['price'],
            );
            $result = Product::update($data);
            if($result === 'ok'){
                Session::set('success','Product Edit');
                Redirect::to('home');


            }else{
                echo $result;
            }
        }
    }

    public function deleteProduct(){
        if(isset($_POST['id'])){
            $data['id'] = $_POST['id'];
            $result = Product::delete($data);
            if($result === 'ok'){
                Session::set('error','Product Delete');
                Redirect::to('home');


            }else{
                echo $result;
            }
        
        }

    }
}

?>