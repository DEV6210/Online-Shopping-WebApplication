<?php

    $id=$_GET['id'];

    include('conn4.php');
    $delete="DELETE FROM items where id=$id";
    $query=mysqli_query($conn,$delete);
    if($query){
        header('location:product-delete.php');
    }else{
        echo "Error";
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
