<?php 
if(isset($_POST['id'])){
    $exitProduct = new ProductsController();
    $product = $exitProduct->getoneProduct();

 }else{
   Redirect::to('home');

 }
 if(isset($_POST['submit'])){
    $exitProduct = new ProductsController();
    $exitProduct->updateProduct();
    
     }


?> 

<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
               <div class="card-header">Edit Product</div>
                <div class="card-body bg-light">
                    <a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-primary mr-2 mb-2"><i class="fas fa-home"></i></a>
                    <form method="post">
                       <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $product->name; ?>">
                       </div>
                       <div class="form-group">
                          <label for="Qty">Qty</label>
                          <input type="text" name="Qty" class="form-control" placeholder="Qty"  value="<?php echo $product->Qty; ?>" >
                       </div>
                       <div class="form-group">
                          <label for="brand_id">Brand</label>
                          <input type="text" name="brand_id" class="form-control" placeholder="Brand"  value="<?php echo $product->brand_id;?>">
                       </div>
                       <div class="form-group">
                          <label for="category_id">Category</label>
                          <input type="text" name="category_id" class="form-control" placeholder="Category" value="<?php echo $product->category_id;?>">
                          <input type="hidden" name="id" value="<?php echo $product->id;?>">
                       </div>
                       <div class="form-group">
                          <label for="image">image</label>
                          <input type="file" name="image" class="form-control" placeholder="image" value="<?php echo $product->image;?>">
                       </div>
                       <div class="form-group">
                          <label for="price">Price</label>
                          <input type="text" name="price" class="form-control" placeholder="Price" value="<?php echo $product->price;?>">
                       </div>
                       <div class="form-group">
                          <label for="availibilty">Availibity</label>
                          <select class="form-control" id="cars" name="availibilty">
                            <option value="1"<?php echo $product->availibilty ? 'selected':'';?>>Yes</option>
                            <option value="0"<?php echo !$product->availibilty ? 'selected':'';?>>No</option>
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