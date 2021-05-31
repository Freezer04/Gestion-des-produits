<?php
   class BrandController{
       static public function getbarnd(){
            $brands = Brand::getAllbrands();
            return $brands;
        }


        public function getoneBrand(){
            if(isset($_POST['id'])){
                $data = array(
                    'id' => $_POST['id']
                );
            $brand = Brand::getBrand($data);
            return $brand;
           }
        }

        
    public function findBrand(){
        if(isset($_POST['recherch'])){
            $data = array('recherch' => $_POST['recherch']);
        }
        $products = Brand::searchBrand($data);
        return $products;

    }


        public function addBrand(){
            if(isset($_POST['ajoute'])){
                $data = array(
                    'name'=> $_POST['name'],
                    'active'=> $_POST['active'],
                  
                );
                $result = Brand::addbrands($data);
                if($result === 'ok'){
                   Session::set('success','Brand Add');
                   Redirect::to('brand');
    
                }else{
                    echo $result;
                }
            }
        }


        public function updatebrand(){
            if(isset($_POST['valider'])){
                $data = array(
                    'id'=> $_POST['id'],
                    'name'=> $_POST['name'],
                    'active'=> $_POST['active'],
                   
                );
                $result = Brand::updateBrands($data);
                if($result === 'ok'){ 
                    Session::set('success','Brand Edit');
                    // Redirect::to('brand');
    
    
                }else{
                    echo $result;
                }
            }
        }


        public function deletebrands(){
            if(isset($_POST['id'])){
                $data['id'] = $_POST['id'];
                $result = Brand::deleteBrand($data);
                if($result === 'ok'){
                    Session::set('error','Brand Delete');
                    Redirect::to('brand');
    
    
                }else{
                    echo $result;
                }
            
            }
    
        }


    

    }
   

     


?>