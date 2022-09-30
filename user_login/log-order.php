<?php
$product_name=$_POST['p_name'];
$product_price=$_POST['p_price'];
$product_image=$_POST['p_image'];  
$product_id=$_POST['product_id'];
$size=$_POST['size1'];           
 
$name= $_POST ['u_name'];
$phone= $_POST ['u_phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$u_image=$_POST['u_photo'];
$password=$_POST['password'];
$orderid=random_int(1,999999);
$date=date("d/m/y");
$status="Processing";
$cancle="Cancel";

  include('conn2.php');
  $send="INSERT into buy(uname,uphone,uemail,uaddress,pname,pprice,pimage,uimage,orderid,od,status,size,cancel) values('$name','$phone','$email','$address','$product_name','$product_price','$product_image','$u_image','$orderid','$date','$status','$size','$cancle')";
  $query=mysqli_query($conn,$send);
  if($query){
    include('orjs/ordersuccess.html');
    include('log-shop.php');
    
    







    
    }else{
      ?>

      <div class="style">

      <label class="l1">Authentication Error...</label><br/><br/><br/><br/>
          
      </div>

  <?php
  }


?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!--iOS -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>




</body>
</html>
