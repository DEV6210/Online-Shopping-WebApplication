<?php


     $item=$_POST['search_item'];
     include('conn1.php');

     $select="SELECT * from items where product_name='$item'";
     $search=mysqli_query($conn, $select);
   
$product_name=null;
     while($fetch=mysqli_fetch_array($search)){
         ?>

         <?php
         $product_image=$fetch['product_image'];
         $product_name=$fetch['product_name'];
         $product_price=$fetch['product_price'];
     }

     if($item==$product_name){
        $select2="SELECT * from items where product_name='$item'";
        $search2=mysqli_query($conn, $select2);
        while($fetch=mysqli_fetch_array($search2)){
        ?>
        <div class="product">
            <div class="product-1">
                <a href="#" class="nav-link" onclick="openNav()">
                    <img src=" <?php echo "admin/product_image/ " .$product_image?>" alt="image not available" class="product-image" id="product-style">
                    <label class="rs1"><b>  <?php echo $product_name ?> </b></label>
                    <label class="rs"><b>  <?php echo "RS " .$product_price ."/-"?> </b></label>
                </a>
            </div>
        </div>
        <?php
    }    
}else{
        include('item_notpresenr.html');
        include('index.php');
}

?>





<!DOCTYPE html>
<html>
    <head>
        <title>Filter item</title>
    
    
     <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
body{
    margin: auto;
}
/*...........top nav...........*/
.top-nav{
    display: flex;
    justify-content: center;
    align-items: center;
    justify-content: space-between;
    background-color: rgb(255, 255, 255);
    position: sticky;
    top: -5px;
}
.search-body{
  
    border-radius: 10px;
    display: flex;
    align-items: center;
   
}
.search-option{
    border-radius: 10px;
    width: 100%;
    height: 28px;
    margin-left: auto;
}
.search-button{
    background-color: white;
    border: none;
    margin-left: auto;
}

/*...........bottom nav...........*/
.bottom-nav{
    background-color: rgb(240, 251, 251);
    position: fixed;
    bottom: 0;
    width: 100%;
    height: 55px;
    display: flex;
    overflow-x: auto;
    padding-top: 5px;
    border-radius: 15px 15px 0px 0px;  
}

.nav-link{
    display: flex;
    flex-grow: 1;
    overflow: hidden;
    flex-direction: column;
    text-decoration: none;
    align-items: center;
}
#tap-hover:hover{
    background-color: rgb(255, 255, 255);
    color: rgb(255, 0, 0);
}
/*--------main body-------*/
.banner{
    margin-top: 5px;
    margin-bottom: 3px;
    width: 100%;
    height: 200px;
}
.banner{
    
    background-image: url('/image/b1.jpg');
    background-size: 100% 100%;
    box-shadow: 1px 2px 10px 10px rgb(255, 255, 255);
    animation: slider 10s infinite linear;
}  
@keyframes slider{

    0%{
        background-image: url('/image/b2.png');
    }
    45%{
        background-image: url('/image/b3.png');
    }
    80%{
        background-image: url('/image/b1.jpg');
    }
}
/*...... 2 ........*/
.row{
    display: flex;
    justify-content: space-between;
    background-color: rgb(216, 241, 142);
    margin-bottom: 18px;
}
.left-row{
    width: 33%;
}
.middle-row{
    width: 33%;
    border-radius: 10px;
    border-left: solid rgb(0, 136, 255);
}
.right-row{
    width: 33%;
    border-radius: 10px;
    border-left: solid rgb(0, 136, 255);
}
.img-style{
    display: flex;
    justify-content: space-between;
    text-align: center;
    text-align: center;
}

/*...... 3 ........*/
.product{
    float: left;
    width: 49%;
    margin: 1px;    
    border-radius: 10px;
    margin-bottom: 10px;
    background-color: #ECF0F1  ;
  
}
#product-style{
    border-radius: 10px;
}

/*
.product-1{
    width: 50%;
    margin-left:5px;
    margin-right: 2px;
    background-color: rgb(0, 255, 255);
    border-radius: 10px;
}
.product-2{
    width: 50%;
    margin-right:5px;
    margin-left: 2px;
    background-color: rgb(0, 255, 255);
    border-radius: 10px;
}
.p{
    width: 50%;
    float: left;
}*/
.product-image{
    width: 100%;
    height: 250px;
    overflow: hidden;
}
.rs1{
    color: blue;
}

.rs{
    color: red;
}
.desktop{
    display: none;
}
/*...........mobile screen...........*/
@media screen and (max-width:600px){
    body{
        background-color: rgb(255, 255, 255);
    }
   
}
/*........for desktop screen...........*/
@media screen and (min-width:601px){
    .top-nav{
        display: none;
    }
	.main-body{
		display: none;
	}
	.bottom-nav{
		display: none;
	}
    .desktop{
        display: block
    }
    .desktop{
        text-align: center;
        font-size: 30px;
    }
   
}





.overlay {
  border-radius: 10px;
  height: 0;
  width: 30%;
  position: fixed;
  z-index: 1;
  top: 5px;
  left:35%;
  background-color:rgb(222, 240, 255);
  overflow-x: hidden;
  transition: 0.6s;
}




.overlay a:hover, .overlay a:focus {
  color: red;
}

.closebtn {
	padding: 8px;
  text-decoration: none;
  font-size: 36px;
  position: absolute;
  top: 0;
  right: 10px;
  font-size: 60px;
}
.overlay{
    text-align: center;
}
input{
    width: 50%;
    height: 20px;
}
.login{
	border-radius: 5px;
	font-size: 20px;
	background-color: white;
	margin-right: 5px;
}

.signup{
	text-decoration: none;
	border: solid 2px;
	border-radius: 5px;
	font-size: 20px;
	background-color: white;
	padding-left: 3px;
	padding-right: 3px;
	margin-left: 5px;
}


@media screen and (max-height: 740px) {
  .overlay a {font-size: 20px}
  .overlay{
      background-color: #a6fed0;
      width: 100%; 
      left: 0; 
      top: 0;
  }
  input{
      width: 60%;
      height: 25px;
      border-radius: 5px;
  }
  .closebtn{
	  font-size: 120px;
	  color: red;
	  border: solid 1px;
	  border-radius: 10px;
	  top: 10px;
	  padding: 10px;
  }
}

</style>

    </head>
    <body>
        
    </body>
</html>