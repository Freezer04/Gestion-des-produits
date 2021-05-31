<?php
 class Admin{

    static public function Login($data){
        $email = $data['email'];
        try{
         $query = 'SELECT *  FROM admin WHERE email=:email';
         $stmt = db::connect()->prepare($query);
         $stmt->execute(array(":email" => $email));
         $Admin = $stmt->fetch(PDO::FETCH_OBJ);
         return $Admin;
         if($stmt->execute()){
             return 'ok';
         }
        
     }catch(PDOException $ex){
         echo 'error' .$ex->getMessage();
     }
 
    }

    static public function CreateAdmin($data){
        $stmt = db::connect()->prepare('INSERT INTO admin (Fname,Lname,email,pass,phone)
     VALUES(:Fname,:Lname,:email,:pass,:phone)');
    $stmt ->bindParam(':Fname' ,$data['Fname']);
    $stmt ->bindParam(':Lname' ,$data['Lname']);
    $stmt ->bindParam(':email' ,$data['email']);
    $stmt ->bindParam(':pass' ,$data['pass']);
    $stmt ->bindParam(':phone' ,$data['phone']);
    

    if($stmt->execute()){
        return 'ok';  
    }else{
        return 'error';
    }
    $stmt = null;
    }

 }

?>