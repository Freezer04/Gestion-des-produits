<?php
  class Category{
      static public function getCategory(){
        $stmt = db::connect()->prepare( 'SELECT * FROM categories');
        $stmt ->execute();
        return $stmt->fetchAll();
        $stmt = null;
      }

      static public function getCaty($data){
        $id = $data['id'];
        try{
            $query = 'SELECT * FROM categories WHERE id=:id';
            $stmt = db::connect()->prepare($query);
            $stmt->execute(array(":id" => $id));
            $produt = $stmt->fetch(PDO::FETCH_OBJ);
            return $produt;
        }catch(PDOException $ex){
            echo 'error' .$ex->getMessage();
        }
 
    }

      static public function addCategory($data){
        $stmt = db::connect()->prepare('INSERT INTO categories (name,active)
         VALUES(:name,:active)');
        $stmt ->bindParam(':name' ,$data['name']);
        $stmt ->bindParam(':active' ,$data['active']);
        if($stmt->execute()){
            return 'ok';  
        }else{
            return 'error';
        }
        $stmt = null;
        
    
       }

       static public function updateCategory($data){
        $stmt = db::connect()->prepare('UPDATE  categories SET name =:name ,active =:active  WHERE id = :id');
        $stmt ->bindParam(':id',$data['id']);
        $stmt ->bindParam(':active',$data['active']);
        if($stmt->execute()){
            return 'ok';
        }else{
            return 'error';
        }
        $stmt = null;
        
    
       }

       static public function deleteCategory($data){
        $id = $data['id'];
        try{
         $query = 'DELETE  FROM categories WHERE id=:id';
         $stmt = db::connect()->prepare($query);
         $stmt->execute(array(":id" => $id));
         if($stmt->execute()){
             return 'ok';
         }
        
        }catch(PDOException $ex){
         echo 'error' .$ex->getMessage();
        }
           
       }


       static public function searchCatygory($data){
        $seraching = $data['seraching'];
        
        try{
         $query = 'SELECT *  FROM categories WHERE  name LIKE ?';
         $stmt = db::connect()->prepare($query);
         $stmt->execute(array('%'.$seraching.'%'));
         $catygory = $stmt->fetchAll();
         return $catygory;
         
        
     }catch(PDOException $ex){
         echo 'error' .$ex->getMessage();
     }
    
       }
  }


?>