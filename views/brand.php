<?php

$data = new BrandController();
$brands = $data->getbarnd();

    
?>

<?php 
   if(isset($_POST['recherch'])){
   $data = new BrandController();
   $category = $data->findBrand();
   }else{
    $data = new BrandController();
    $category = $data->getbarnd();
   }
 

?> 

<div class="container">
    <div class="row my-5">
        <div class="col-md-10 mx-auto">
          <?php include('./views/includes/alert.php'); ?>
            <div class="card">
                <div class="card-body bg-light">
                    <a href="<?php echo BASE_URL;?>addbrand" class="btn btn-sm btn-primary mr-2 mb-2"><i class="fas fa-plus"></i></a>
                    <a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2"><i class="fas fa-home"></i></a>
                    <a href="<?php echo BASE_URL;?>profile" class="btn btn btn-link mr-2 mr-2 mb-2"><i class="fas fa-user">  <?php echo $_SESSION['email'];?></i></a>

                    <form method="POST" class="float-end mb-2 d-flex flex-row">
                          <input type="text" class="form-control" name="recherch" placeholder="search">
                          <button class="btn btn-info btn-sm" name="recherch" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                    <table class="table e table-success table-striped table-hover">
                        <thead>
                            <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                         <tbody>
                            <?php foreach($brands as $brand):?>
                            <tr>
                            <th scope="row"><?php echo $brand['name'];?></th>
                            <td><?php echo $brand['active']
                                   ?'<span class="badge bg-success" >Yes</span>'
                                   :'<span class="badge bg-danger" >No</span>';
                            
                            ;?></td>
                            <td class="d-flex flex-row"> 
                              <form action="updatebrand" class="mr-1" method="post" >
                              <input type="hidden" name="id" value="<?php echo $brand['id']?>">
                              <button class="btn btn-sm  btn-warning"><i class="fa fa-edit"></i></button>
                              </form>
                              <form action="deletebrand" class="mr-1" method="post">
                              <input type="hidden" name="id" value="<?php echo $brand['id']?>">
                              <button class="btn btn-sm  btn-danger"><i class="fa fa-trash"></i></button>
                              </form>
                             </td>
                            <?php  endforeach; ?>
                            </tr>
                        </tbody>
                    </table>
                
                </div>
            
            </div>
      
        </div>
    </div>
</div>