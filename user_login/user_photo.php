<?php
    $id=$_POST['id'];
    $email=$_POST['email'];
    $password=$_POST['password'];
   

    if(isset($_FILES['uphoto'])){
        $file_name=$_FILES['uphoto']['name'];
        $file_size=$_FILES['uphoto']['size'];
        $file_temp=$_FILES['uphoto']['tmp_name'];
        $file_type=$_FILES['uphoto']['type'];
        move_uploaded_file($file_temp, "user_profile_photo/ " .$file_name);
    }

    include('conn2.php');
    $update="UPDATE user set photo='$file_name' where id='$id'";
    if(mysqli_query($conn,$update)){

        $select = "SELECT * FROM user where email='$email' AND password='$password' ";
        $fetch = mysqli_query($conn,$select);
    
        $search_num=mysqli_num_rows($fetch);
    
    
        if($search_num == 1)
        {
            include('dashboard.php');
            
        }else{            
            ?>
    
                <div class="style">
    
                <label class="l1">Authentication Error...</label><br/><br/><br/><br/>
                    
                </div>
    
            <?php
            
        }
    }


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <!--iOS -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
    </body>
</html>