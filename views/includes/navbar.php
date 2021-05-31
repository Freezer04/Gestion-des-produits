         <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <form action="profile" method="post">
           
            <input type="hidden" name="id" value="<?php echo $_SESSION['email']?>">
            <button class="btn btn-sm  btn-warning"><i class="fa fa-user"></i></button>
       </form>
            <button class="btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href=""><i class="fas fa-home"></i></button> 
            <div class="float-end"><a href="<?php echo BASE_URL;?>logout"><button class="btn btn-sm  btn-warning ">Logout</button></a>
        </nav> </div>

   
    
        

    
       

        
        