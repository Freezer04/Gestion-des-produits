<?php
  
class Profile{

    static public function getAdmin($data){
        $email = $data['email'];
        try{
            $query = 'SELECT * FROM admin WHERE email=:email';
            $stmt = db::connect()->prepare($query);
            $stmt->execute(array(":email" => $email));
            $Admin = $stmt->fetch(PDO::FETCH_OBJ);
            return $Admin;
        }catch(PDOException $ex){
            echo 'error' .$ex->getMessage();
        }
 
    }


    static public function updateAdmin($data){
        $stmt = db::connect()->prepare('UPDATE  admin SET Fname =:Fname ,Lname =:Lname ,email =:email ,pass =:pass ,phone =:phone  WHERE email = :email');
        $stmt ->bindParam(':email' ,$data['email']);
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