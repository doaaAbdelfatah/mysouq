<?php 
$page_name = "brands";
include("admin_header.php");
?>
<div class="row">
    <div class="col-md-6">
       
        <div class="card border-secondary">
        <div class="card-header  bg-secondary  text-light">
            Add New Brand
        </div>
        <div class="card-body">
            <form action="brand_action.php" method="post" enctype="multipart/form-data">
              
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
                    <!-- <input name="logo[]" class="form-control" type="file" multiple  /> -->
                    <input name="logo" class="form-control" type="file"  />
                </div>
                
                <div class="form-group">
                   <input type="submit" name="btn" class="btn btn-secondary btn-block" value="Save"/>
                </div>

            </form>
        </div>
        
        </div>
    </div>    
</div>

<div class="row">

    <?php
        require_once("my_classes/Brand.php");
        $brands = Brand::get_all();
        foreach($brands as $brand){       
    ?>
    <div class="col-md-3 card p-2">
        <img src="<?php echo $brand['logo']?>" class="card-img-top p-2" style="height: 150px">
        <div class="card-body">
            <h5 class="card-title"><a href="<?php echo $brand['site']?>" target="_blank"><?php echo $brand['name']?></a></h5>

            <a href="brand_action.php?bid=<?php echo $brand['id']?>" class="btn btn-danger">Delete</a>
        </div>
    </div>

    <?php
            }
    ?>

</div>





<?php 
include("admin_footer.php");
?>