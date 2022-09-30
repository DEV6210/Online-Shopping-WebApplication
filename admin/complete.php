<?php

    $id=$_GET['id'];

    include('conn4.php');
    $select="SELECT * FROM buy where id=$id";
    $query=mysqli_query($conn,$select);
    while($fetch=mysqli_fetch_array($query)){
        $status=$fetch['status'];
    }
    
    if($status=='Processing'){
        $update="UPDATE buy set status='Completed' where id=$id"; 
        mysqli_query($conn,$update);
        header('location:orderstatus.php');
    }else{
        include('js/alreadycom.html');
        include('orderstatus.php');
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
