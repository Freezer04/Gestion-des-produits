<?php

class Product {
   static public function getAll() {
       $stmt = db::connect()->prepare( 'SELECT * FROM products');
       $stmt ->execute();
       return $stmt->fetchAll();
       $stmt = null;

   }
   static public function getProduct($data){
       $id = $data['id'];
       try{
           $query = 'SELECT * FROM products WHERE id=:id';
           $stmt = db::connect()->prepare($query);
           $stmt->execute(array(":id" => $id));
           $produt = $stmt->fetch(PDO::FETCH_OBJ);
           return $produt;
       }catch(PDOException $ex){
           echo 'error' .$ex->getMessage();
       }

   }

   static public function add($data){
    $stmt = db::connect()->prepare('INSERT INTO products (name,Qty,brand_id,image,category_id,availibilty,price)
     VALUES(:name,:Qty,:brand_id,:image,:category_id,:availibilty,:price)');
    $stmt ->bindParam(':name' ,$data['name']);
    $stmt ->bindParam(':Qty' ,$data['Qty']);
    $stmt ->bindParam(':brand_id' ,$data['brand_id']);
    $stmt ->bindParam(':image' ,$data['image']);
    $stmt ->bindParam(':category_id' ,$data['category_id']);
    $stmt ->bindParam(':availibilty' ,$data['availibilty']);
    $stmt ->bindParam(':price' ,$data['price']);

    if($stmt->execute()){
        return 'ok';  
    }else{
        return 'error';
    }
    $stmt = null;
    

   }

   static public function update($data){
    $stmt = db::connect()->prepare('UPDATE  products SET name =:name ,Qty =:Qty ,brand_id =:brand_id ,image =:image ,category_id =:category_id ,availibilty =:availibilty ,price =:price WHERE id = :id');
    $stmt ->bindParam(':id' ,$data['id']);
    $stmt ->bindParam(':name' ,$data['name']);
    $stmt ->bindParam(':Qty' ,$data['Qty']);
    $stmt ->bindParam(':brand_id' ,$data['brand_id']);
    $stmt ->bindParam(':image' ,$data['image']);
    $stmt ->bindParam(':category_id' ,$data['category_id']);
    $stmt ->bindParam(':availibilty' ,$data['availibilty']);
    $stmt ->bindParam(':price' ,$data['price']);

    if($stmt->execute()){
        return 'ok';
    }else{
        return 'error';
    }
    $stmt = null;
    

   }

   static public function delete($data){
       $id = $data['id'];
       try{
        $query = 'DELETE  FROM products WHERE id=:id';
        $stmt = db::connect()->prepare($query);
        $stmt->execute(array(":id" => $id));
        if($stmt->execute()){
            return 'ok';
        }
       
    }catch(PDOException $ex){
        echo 'error' .$ex->getMessage();
    }

   }

   static public function searchProduct($data){
    $search = $data['search'];
    try{
     $query = 'SELECT *  FROM products WHERE  name LIKE ?';
     $stmt = db::connect()->prepare($query);
     $stmt->execute(array('%'.$search.'%'));
     return $produts = $stmt->fetchAll();
     if($stmt->execute()){
         return 'ok';
     }
    
 }catch(PDOException $ex){
     echo 'error' .$ex->getMessage();
 }

   }
}
?>