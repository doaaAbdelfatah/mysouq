<?php 
$page_name = "users";
include("admin_header.php");
?>
<div class="row">
    <div class="col-md-6">
       
        <div class="card border-secondary">
        <div class="card-header  bg-secondary  text-light">
            Add New User
        </div>
        <div class="card-body">
            <form action="user_action.php" method="post" data-parsley-validate >
              
                <div class="form-group">
                    <label>Name</label>
                    <input name="Full_Name" required maxlength="5" class="form-control" placeholder="Enter  Name" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input name="email" type="email" class="form-control" placeholder="Enter Email" />
                </div>

                <div class="form-group">
                    <label>Type</label>
                    <select name="type" class="form-control" >
                        <option>Vendor</option>
                        <option>Admin</option>
                    </select>
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



</div>

<?php 
include("admin_footer.php");
?>