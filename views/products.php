<?php 
   if(isset($_POST['find'])){
   $data = new ProductsController();
   $products = $data->findProducts();
   }else{
    $data = new ProductsController();
    $products = $data->getAllProducts();
   }
 

?> 

<div class="container">
    <div class="row my-5">
        <div class="col-md-10 mx-auto">
          <?php include('./views/includes/alert.php'); ?>
            <div class="card">
                <div class="card-body bg-light">
                    <a href="<?php echo BASE_URL;?>add" class="btn btn-sm btn-primary mr-2 mb-2"><i class="fas fa-plus"></i></a>
                    <a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2"><i class="fas fa-home"></i></a>
                    <a href="<?php echo BASE_URL;?>profile" class="btn btn btn-link mr-2 mr-2 mb-2"><i class="fas fa-user">  <?php echo $_SESSION['email'];?></i></a>

                    <form method="POST" class="float-end mb-2 d-flex flex-row">
                          <input type="text" class="form-control" name="search" placeholder="search">
                          <button class="btn btn-info btn-sm" name="find" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                    <table class="table  table-success table-striped table-hover">
                        <thead>
                            <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Category</th>
                            <th scope="col">image</th>
                            <th scope="col">Price</th>
                            <th scope="col">Availibity</th>
                            <th scope="col">Action</th>

                            </tr>
                        </thead>
                         <tbody>
                            <?php foreach($products as $product):?>
                            <tr>
                            <th scope="row"><?php echo $product['name'];?></th>
                            <td><?php echo $product['Qty'];?></td>
                            <td><?php echo $product['brand_id']?></td>
                            <td><?php echo $product['category_id'];?></td>
                            <td><img src="../icons/<?=$product['image']?>" alt="helll"><?php echo $product['image'];?></td>
                            <td><?php echo $product['price'];?></td>
                            <td><?php echo $product['availibilty']
                                   ?'<span class="badge bg-success" >Yes</span>'
                                   :'<span class="badge bg-danger" >No</span>';
                            
                            ;?></td>
                            <td class="d-flex flex-row"> 
                              <form action="update" class="mr-1" method="post" >
                              <input type="hidden" name="id" value="<?php echo $product['id']?>">
                              <button class="btn btn-sm  btn-warning"><i class="fa fa-edit"></i></button>
                              </form>
                              <form action="delete" class="mr-1" method="post">
                              <input type="hidden" name="id" value="<?php echo $product['id']?>">
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