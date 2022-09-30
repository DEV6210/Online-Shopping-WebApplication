<?php
    $product_name=$_POST['product_name'];
    $product_price=$_POST['product_price'];

    if(isset($_FILES['up']))
    {
        #echo "<pre>";
        #print_r($_FILES);
        #echo "<pre>";
        $file_name = $_FILES['up']['name'];
        $file_size = $_FILES['up']['size'];
        $file_temp = $_FILES['up']['tmp_name'];
        $file_type = $_FILES['up']['type'];
        move_uploaded_file($file_temp , "product_image/ " . $file_name);
        
    }
    
    include('conn4.php');

    $select="SELECT * from items where product_image='$file_name'";
    $fetch=mysqli_query($conn,$select);
    $search=mysqli_num_rows($fetch);
    if($search == 1){
        include("js/already_exist_product.html");
        include("upload_image.php");
    }else{
        $insert="INSERT INTO items(product_name,product_price,product_image) values('$product_name','$product_price','$file_name')";

        if(mysqli_query($conn,$insert)){
        include("js/product_upload_success.html");
        include("upload_image.php");

        }else{
            include("js/product_upload_failed.html");
            include("upload_image.php");
        }
    }

?>