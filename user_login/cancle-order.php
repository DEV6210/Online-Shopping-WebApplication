<?php

    $id=$_GET['id'];
    $email=$_GET['email'];
    $password=$_GET['password'];


    include('conn2.php');

    $select="SELECT * FROM buy where id=$id";
    $query=mysqli_query($conn,$select);
    while($fetch=mysqli_fetch_array($query)){
        $cancel=$fetch['cancel'];
        $status=$fetch['status'];
    }
    if($cancel=='Order Canceled'){
        include('orjs/cancel.html');
        include('order-history.php');
    }else
    if($status!='Completed' ){
        $update="UPDATE buy set cancel='Order Canceled' where id=$id"; 
        mysqli_query($conn,$update);
        include('order-history.php');
    }else{
        include('orjs/delivered.html');
        include('order-history.php');
    }
   

?>


<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>update</title>


</head>
<body>
  


</body>
</html>
