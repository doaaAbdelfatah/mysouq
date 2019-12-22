<?php 
include("admin_header.php");
?>
<div class="row">
    <div class="col-md-6">
       
        <div class="card border-secondary">
        <div class="card-header  bg-secondary  text-light">
            Add New Brand
        </div>
        <div class="card-body">
            <form action="brand_action.php" method="post">
              
                <div class="form-group">
                    <label>Name</label>
                    <input name="name" class="form-control" placeholder="Enter Brand Name" />
                </div>
                <div class="form-group">
                    <label>Site URL</label>
                    <input name="site" class="form-control" placeholder="Enter Brand Site URL" />
                </div>
                <div class="form-group">
                    <label>Logo</label>
                    <input name="logo" class="form-control" type="file"  />
                </div>
                
                <div class="form-group">
                   <input type="submit" name="btn" class="btn btn-secondary btn-block" value="Save"/>
                </div>

            </form>
        </div>
        
        </div>
    </div>
    <div class="col-md-8">
      
        
       
    </div>
</div>





<?php 
include("admin_footer.php");
?>