<?php

require_once './views/includes/header.php';
require_once './autoload.php';
require_once './views/includes/navbar.php';
require_once './controllers/HomeController.php';


$home = new HomeController();

$pages = ['home','add','update','delete','logout','category','addcategory','updatecategory','deletecategory',
'brand','addbrand','updatebrand','deletebrand','profile','products'];
if(isset($_SESSION['logged']) && $_SESSION['logged'] === true){

if(isset($_GET['page'])){
    if(in_array($_GET['page'],$pages)){
        $page = $_GET['page'];
        $home->index($page);

    }else{
        include('views/includes/404.php');
    }
}else{
    $home->index('home');
}



require_once './views/includes/footer.php';

}else if(isset($_GET['page']) && $_GET['page'] === 'Register') {
    $home->index('Register');
}else{
    $home->index('login');
}
?>/