<?php
  
  if(isset($_POST['id'])){
  $deletbrand = new BrandController();
  $deletbrand->deletebrands();
  }


?>