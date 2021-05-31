<?php 
if(isset($_POST['submit'])){
$newProduct = new ProductsController();
$newProduct->addProduct();

 }

?> 

<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
               <div class="card-header">Add Product</div>
                <div class="card-body bg-light">
                    <a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-primary mr-2 mb-2"><i class="fas fa-home"></i></a>
                    <form method="post">
                       <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" name="name" class="form-control" placeholder="Name">
                       </div>
                       <div class="form-group">
                          <label for="Qty">Qty</label>
                          <input type="text" name="Qty" class="form-control" placeholder="Qty">
                       </div>
                       <div class="form-group">
                          <label for="brand_id">Brand</label>
                          <input type="text" name="brand_id" class="form-control" placeholder="Brand">
                       </div>
                       <div class="form-group">
                          <label for="category_id">Category</label>
                          <input type="text" name="category_id" class="form-control" placeholder="Category">
                          
                       </div>
                       
                       <div class="form-group">
                          <label for="image">image</label>
                          <input type="file" name="image" class="form-control" placeholder="image">
                       </div>
                       <div class="form-group">
                          <label for="price">Price</label>
                          <input type="text" name="price" class="form-control" placeholder="Price">
                       </div>
                       <div class="form-group">
                          <label for="availibilty">Availibity</label>
                          <select class="form-control" id="cars" name="availibilty">
                            <option value="1">Yes</option>
                            <option value="0 ">No</option>
                          </select>  
                       </div>
                       <div class="form-group">
                          <button type="submit" class="btn btn-primary" name="submit">Valid</button>
                       </div>
                    </form>
                
                </div>
            
            </div>
      
        </div>
    </div>
</div>