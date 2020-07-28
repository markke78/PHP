<?php 

if(isset($_POST['create_user'])){
    
      
        $user_firstname = $_POST['user_firstname'];
        $user_lastname = $_POST['user_lastname'];
        $user_role= $_POST['user_role'];
        $username = $_POST['username'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
//        $user_image = $_FILES['image']['name'];
//        $user_image_temp = $_FILES['image']['tmp_name'];
 
 
    
    
    
//            move_uploaded_file($post_image_temp, "../images/$post_image");
    
    $query = "INSERT INTO users(user_firstname, user_lastname, user_role, username, user_email, user_password) ";
    
    $query .= "VALUES('{$user_firstname}','{$user_lastname}','{$user_role}','{$username}','{$user_email}','{$user_password}')";
    
    $create_user_query =mysqli_query($connection, $query);
    
    confirm($create_user_query);
    
    
}



?>
   

   
   
   <form action="" method="post" enctype="multipart/form-data">
   
    <div class="gorm-group">
        <label for="user_firstname">First Name</label>
        <input type="text" class="form-control" name="user_firstname">
    </div>
    
    <div class="gorm-group">
        <label for="user_lastname">Last Name</label>
        <input type="text" class="form-control" name="user_lastname">
    </div>
    
    <div class="gorm-group">
       <label for="user_role">Role</label>
        
        <select class="form-control" name="user_role" id="">
            
          <option value="subscriber">Slect Options</option>
          <option value="admin">Admin</option>
          <option value="subscriber">Subscriber</option>
            
            
        </select>
        
    </div>
    
    <div class="gorm-group">
        <label for="title">Username</label>
        <input type="text" class="form-control" name="username">
    </div>
    
    <div class="gorm-group">
        <label for="post_tags">Email</label>
        <input type="email" class="form-control" name="user_email">
    </div>
    
    <div class="gorm-group">
        <label for="title">Password</label>
        <input type="text" class="form-control" name="user_password">
    </div>
    

    
    
<!--
    <div class="gorm-group">
        <label for="post_image">Image</label>
        <input type="file" name="image">
    </div>
-->
        
    <div class="gorm-group">
        <input class="btn btn-primary" type="submit" name="create_user" value="Add User">
    </div>
 
 
</form>