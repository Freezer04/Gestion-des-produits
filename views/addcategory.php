

<?php 

if(isset($_POST['add'])){
   $newProduct = new CategoryController();
   $newProduct->addCaty();}

?> 

<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
               <div class="card-header">Add Product</div>
                <div class="card-body bg-light">
                    <a href="<?php echo BASE_URL;?>category" class="btn btn-sm btn-primary mr-2 mb-2"><i class="fas fa-home"></i></a>
                    <form method="post">
                       <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" name="name" class="form-control" placeholder="Name">
                       </div>
                       <div class="form-group">
                          <label for="active">Status</label>
                          <select class="form-control" id="cars" name="active">
                            <option value="1">Yes</option>
                            <option value="0 ">No</option>
                          </select>  
                       </div>
                       <div class="form-group">
                          <button type="submit" class="btn btn-primary" name="add">Valid</button>
                       </div>
                    </form>
                
                </div>
            
            </div>
      
        </div>
    </div>
</div>