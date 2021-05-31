<?php
  class AdminController{

    public function auth(){
        if(isset($_POST['submit'])){
            $data['email'] = $_POST['email'];
            $result = Admin::Login($data);
            if($result->email === $_POST['email'] && 
                 password_verify($_POST['pass'],$result->pass)){

                    $_SESSION['logged'] = true;
                    $_SESSION['email'] = $result->email;
                    Redirect::to('home');

                 } else{
                    Session::set('error','email or password incorrect');
                    Redirect::to('login');
                 
            }
        
        }
    }
      public function register(){
        if(isset($_POST['submit'])){
            $option = ['cost' => 12 ];
            $password = password_hash($_POST['pass'],PASSWORD_BCRYPT,$option);
            $data = array(
                'Fname'=> $_POST['Fname'],
                'Lname'=> $_POST['Lname'],
                'email'=> $_POST['email'],
                'phone'=> $_POST['phone'],
                'pass'=> $password
                
            );
            $result = Admin::CreateAdmin($data);
            if($result === 'ok'){
               Session::set('success','Compte crate');
               Redirect::to('login');

            }else{
                echo $result;
            }
        }

      }


      static public function logout(){
          session_destroy();
      }
  }
?>