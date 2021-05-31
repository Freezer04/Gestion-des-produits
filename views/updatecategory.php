<?php 
if(isset($_POST['id'])){
    $exitcategory = new CategoryController();
    $category = $exitcategory->getoneCategory();

 }else{
   Redirect::to('category');

 }
 if(isset($_POST['valid'])){
    $exitcategory = new CategoryController();
    $exitcategory->updateCaty();
    
     }


?> 

<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
               <div class="card-header">Edit Category</div>
                <div class="card-body bg-light">
                    <a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-primary mr-2 mb-2"><i class="fas fa-home"></i></a>
                    <form method="post">
                       <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $category->name; ?>">
                       </div>
                       <div class="form-group">
                          <label for="active">Status</label>
                          <select class="form-control" id="cars" name="active">
                            <option value="1"<?php echo $category->active ? 'selected':'';?>>Yes</option>
                            <option value="0"<?php echo !$category->active ? 'selected':'';?>>No</option>
                          </select>  
                       </div>
                       <div class="form-group">
                          <button type="submit" class="btn btn-primary" name="valid">Valid</button>
                       </div>
                    </form>
                
                </div>
            
            </div>
      
        </div>
    </div>
</div>