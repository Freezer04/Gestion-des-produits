<?php
  class Brand{
      static public function getAllbrands(){
            $stmt = db::connect()->prepare( 'SELECT * FROM brands');
            $stmt ->execute();
            return $stmt->fetchAll();
            $stmt = null;
        }


        static public function getBrand($data){
            $id = $data['id'];
            try{
                $query = 'SELECT * FROM brands WHERE id=:id';
                $stmt = db::connect()->prepare($query);
                $stmt->execute(array(":id" => $id));
                $produt = $stmt->fetch(PDO::FETCH_OBJ);
                return $produt;
            }catch(PDOException $ex){
                echo 'error' .$ex->getMessage();
            }
     
        }


        static public function addbrands($data){
            $stmt = db::connect()->prepare('INSERT INTO brands (name,active)
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

        static public function updateBrands($data){
            $stmt = db::connect()->prepare('UPDATE  brands SET name =:name ,active =:active  WHERE id = :id');
            $stmt ->bindParam(':id' ,$data['id']);
            $stmt ->bindParam(':name' ,$data['name']);
            $stmt ->bindParam(':active' ,$data['active']);
            var_dump($stmt);
            if($stmt->execute()){
                return 'ok';
            }else{
                return 'error';
            }
            $stmt = null;
            
        
           }

           static public function deleteBrand($data){
            $id = $data['id'];
            try{
             $query = 'DELETE  FROM brands WHERE id=:id';
             $stmt = db::connect()->prepare($query);
             $stmt->execute(array(":id" => $id));
             if($stmt->execute()){
                 return 'ok';
             }
            
         }catch(PDOException $ex){
             echo 'error' .$ex->getMessage();
         }
     
        } 
        
        
        static public function searchBrand($data){
            $search = $data['recherch'];
            try{
             $query = 'SELECT *  FROM brands WHERE  name LIKE ?';
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