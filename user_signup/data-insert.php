<?php
session_start();
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address=$_POST['address'];
    $password = $_POST['password'];
    $conform_password = $_POST['conform'];
    $photo=' default.jpg';



        /*   insert data   */

    include('conn3.php');
    if($password==$conform_password)
    {

        /*   select data    */

        $select = "SELECT * FROM user where email='$email'";
        $fetch = mysqli_query($conn,$select);

         /*   search data   */

        $search_num=mysqli_num_rows($fetch);
        if($search_num == 1)
        {
            include('javascript/choose _another_email.html');
            include('user-signup.php');
            
        }
        else{           
           
                $insert="INSERT INTO user(name,phone,email,address,password,conform,photo) VALUE('$fullname','$phone','$email','$address','$password','$conform_password','$photo')";
                
                $send=mysqli_query($conn,$insert);
                if($send)
                {
                    include('javascript/record_insert_sucess.html');
                    include('user-signup.php');
                                   
                    
                }
        }
    }
    else{
        include('javascript/pass_not_match.html');
        include('user-signup.php');
    }


    session_destroy();
  
?>