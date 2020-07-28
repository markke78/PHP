<?php include "includes/admin_header.php" ?>
    
<?php 

    if(isset($_SESSION['username'])){
       
        $username = $_SESSION['username'];
        
        $query = "SELECT * FROM users WHERE username = '{$username}' ";
        
        $select_user_profile_query = mysqli_query($connection, $query);
        
        while($row = mysqli_fetch_array($select_user_profile_query)){
            
            $user_id = $row['user_id'];
            $username = $row['username'];
            $user_password = $row['user_password'];
            $user_firstname = $row['user_firstname'];
            $user_lastname = $row['user_lastname'];
            $user_email = $row['user_email'];
            $user_image = $row['user_image'];
            $user_role = $row['user_role'];
            
        }
        
    }

?>  


<?php 



if(isset($_POST['update_user'])){
        
        $user_firstname = $_POST['user_firstname'];
        $user_lastname = $_POST['user_lastname'];
        $user_role = $_POST['user_role'];
        $username = $_POST['username'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
    

        
        $query = "UPDATE users SET ";
        $query .="user_firstname = '{$user_firstname}', ";
        $query .="user_lastname = '{$user_lastname}', ";
        $query .="user_role = '{$user_role}', ";
        $query .="username = '{$username}', ";
        $query .="user_email = '{$user_email}', ";
        $query .="user_password = '{$user_password}' ";
        $query .=" WHERE username = '{$username}' ";

            
        $edit_user_query = mysqli_query($connection, $query);
        
        confirm($edit_user_query);
    }


?>




    <div id="wrapper">

        <!-- Navigation -->
<?php include "includes/admin_navigation.php" ?>
       
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                     
                        <h1 class="page-header">
                        Welcome to admin
                        <small>Author</small>
                        </h1> 
                        
<form action="" method="post" enctype="multipart/form-data">
   
    <div class="gorm-group">
        <label for="user_firstname">First Name</label>
        <input value="<?php echo $user_firstname ?>" type="text" class="form-control" name="user_firstname">
    </div>
    
    <div class="gorm-group">
        <label for="user_lastname">Last Name</label>
        <input value="<?php echo $user_lastname ?>" type="text" class="form-control" name="user_lastname">
    </div>
    
    <div class="gorm-group">
        <label for="user_role">Role</label>
        <select class="form-control" name="user_role" id="">
           <option value="subscriber"><?php echo $user_role; ?></option>
           
           <?php 
            if($user_role =='admin'){
                
             echo "<option value='subscriber'>subscriber</option>";
                
            }else{
                
               echo "<option value='admin'>admin</option>";
            }
    
            ?>
      
        </select>
    </div>
    
    <div class="gorm-group">
        <label for="username">Username</label>
        <input value="<?php echo $username ?>" type="text" class="form-control" name="username">
    </div>
    
    <div class="gorm-group">
        <label for="user_email">Email</label>
        <input value="<?php echo $user_email ?>" type="email" class="form-control" name="user_email">
    </div>
    
    <div class="gorm-group">
        <label for="user_password">Password</label>
        <input value="<?php echo $user_password ?>"  type="password" class="form-control" name="user_password">
    </div>
    
 
    
    
<!--
    <div class="gorm-group">
        <label for="post_image">Image</label>
        <input type="file" name="image">
    </div>
-->
        
    <div class="gorm-group">
        <input class="btn btn-primary" type="submit" name="update_user" value="Update Profile">
    </div>
 
 
</form>
                         
                     
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->


<?php include "includes/admin_footer.php"?>