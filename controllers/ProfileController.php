<?php

class ProfileController{
    public function getoneAdmin(){
        if( $_SESSION['email']){
            $data = array(
                'email' =>  $_SESSION['email']
            );
        $Admin = Profile::getAdmin($data);
        return $Admin;
       }
    }

    public function updateProfil(){
        
            if(isset($_POST['update'])){
                $data = array(
                    'email'=> $_SESSION['email'],
                    'Fname'=> $_POST['Fname'],
                    'Lname'=> $_POST['Lname'],
                    'email'=> $_POST['email'],
                    'pass'=> $_POST['pass'],
                    'phone'=> $_POST['phone'],
                   
                );
                $result = Profile::updateAdmin($data);
                if($result === 'ok'){
                    Session::set('success','Profil Edit');
                    Redirect::to('profile');
    
    
                }else{
                    echo $result;
                }
            }
        

    }
}
?>