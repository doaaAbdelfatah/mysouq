<?php 
$page_name = "cats";
include("admin_header.php");
?>
<div class="row">
    <div class="col-md-4">
        <?php
            $mode ="Save";
            $cid = "";
            $cname="";
            if (!empty($_GET["cat_id"]) && !empty($_GET["cat_name"]))
            {
                // filter and validate
                $cid = $_GET["cat_id"];
                $cname = $_GET["cat_name"];
                $mode="Edit";

            }
        
        ?>
        
        <div class="card border-secondary">
        <div class="card-header <?php
                if($mode =="Save") echo "bg-secondary";
                else echo "bg-success"
            ?> text-light">
            <?php
                if($mode =="Save") echo "Add New Category";
                else echo "Edit Category"
            ?>
        </div>
        <div class="card-body">
            <form action="cat_action.php" method="post">
                <?php
                    if($mode =="Edit")
                    echo "<input type='hidden' name='cat_id'  value='$cid'/>";
                ?>
                
                <div class="form-group">
                    <label>Name</label>
                    <input name="cat_name" class="form-control" placeholder="Enter Category Name" value="<?php echo $cname?>"/>
                </div>
                <div class="form-group">
                   <input type="submit" name="btn" class="btn <?php
                            if($mode =="Save") echo "btn-secondary";
                            else echo "btn-success"
                        ?> btn-block" value="<?php echo $mode ?>"/>
                </div>

            </form>
        </div>
        
        </div>
    </div>
    <div class="col-md-8">
        <?php
        
                
        require_once("my_classes/Category.php");
        $cat_search =""          ;
        if (!empty($_GET["cat_search"]))
        {
            $cat_search = $_GET["cat_search"];                       
            $cats = Category::find_by_name($cat_search);
        }else {
            $cats = Category::get_all();
        }
        ?>
        <div class="card border-secondary">
        <div class="card-header bg-secondary text-light">
           All Categories 
           <div class="float-right">
           <form class="form-header" action="cats.php" method="get">
            <input class="form-control form-control-sm border-light"  type="text" name="cat_search" value="<?php echo  $cat_search ;?>" placeholder="Search Category" />
            <button class="btn btn-dark btn-sm" type="submit">
                <i class="zmdi zmdi-search"></i>
            </button>
        </form>
           </div>
        </div>
        <div class="card-body" style="overflow: auto">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <td>Name</td>                        
                        <td  colspan="2" ></td>
                    </tr>
                </thead>
                <tbody>
                <?php

                    foreach($cats as $cat)       
                    {
                 ?>
                    <tr>
                        <td><?php echo $cat["name"] ?></td>
                        <td style="width: 30px"><a href="cats.php?cat_id=<?php echo $cat["id"] ?>&cat_name=<?php echo $cat["name"] ?>" class="fa fa-edit text-success"></a></td>
                        <td style="width: 30px"><a href="cat_action.php?cat_id=<?php echo $cat["id"] ?>" class="fa fa-trash text-danger"></a></td>
                    </tr>
                    <?php
                     }
                    ?>
                </tbody>
            </table>
        </div>
        
        </div>
    </div>
</div>





<?php 
include("admin_footer.php");
?>