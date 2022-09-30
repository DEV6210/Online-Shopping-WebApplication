<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>u-autho</title>
	<!--iOS -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .a1{
            border: solid 1px;
            text-decoration: none;
            padding: 10px;
            border-radius: 10px;
            background-color: aquamarine;
            
        }
        .a1:hover{
            background-color: red;
            color: white;
        }
        .style{
           
            text-align: center;
            bottom: 20px;
            margin-top: 100px;
        }
        .l1{
            font-size: 25px;
        }
    </style>
</head>

<body>
<?php
    
    $email = $_GET['email'];
    $password = $_GET['password'];
    
    include('conn2.php');
    

    $select = "SELECT * FROM user where email='$email' AND password='$password' ";
    $fetch = mysqli_query($conn,$select);

    $search_num=mysqli_num_rows($fetch);


    if($search_num == 1)
    {
        include('dashboard.php');
        
    }
    else
    {
        
        ?>

            <div class="style">

            <label class="l1">Authentication Error...</label><br/><br/><br/><br/>
                
            </div>

        <?php
    }
?>
</body>
</html>


