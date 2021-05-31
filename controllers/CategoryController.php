<?php

class CategoryController{
  
        public function getAllCategory(){
            $category = Category::getCategory();
            return $category;
            
        }

        public function getoneCategory(){
            if(isset($_POST['id'])){
                $data = array(
                    'id' => $_POST['id']
                );
            $category = Category::getCaty($data);
            return $category;
           }
        }

        public function findCaty(){
            if(isset($_POST['seraching'])){
                $data = array('seraching' => $_POST['seraching']);
            }
            $category = Category::searchCatygory($data);
            return $category;
    
        }

        public function addCaty(){
            if(isset($_POST['add'])){
                $data = array(
                    'name'=> $_POST['name'],
                    'active'=> $_POST['active'],
                   
                );
                $result = Category::addCategory($data);
                if($result === 'ok'){
                   Session::set('success','Category Add');
                   Redirect::to('category');
    
                }else{
                    echo $result;
                }
            }
        }


        public function updateCaty(){
            if(isset($_POST['valid'])){
                $data = array(
                    'id'=> $_POST['id'],
                    'name'=> $_POST['name'],
                    'active'=> $_POST['active'],
                );
                $result = Category::updateCategory($data);
                if($result === 'ok'){
                    Session::set('success','Category Edit');
                    Redirect::to('category');
    
    
                }else{
                    echo $result;
                }
            }
        }

        static public function deleteCaty(){
            if(isset($_POST['id'])){
                $data['id'] = $_POST['id'];
                $result = Category::deleteCategory($data);
                if($result === 'ok'){
                    Session::set('error','Category Delete');
                    Redirect::to('category');
    
    
                }else{
                    echo $result;
                }
            
            }
    
        }



        


}
?>