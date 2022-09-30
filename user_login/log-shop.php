<!DOCTYPE html>
<head>

	<!--iOS -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


    <style>
        body{
            background-color: #D0D3D4 ;
            
        }
        .image{
            width: 100%;
            border-radius: 5px;
            box-shadow: 2px 2px 50px 10px white;
        }
        .name{
            color: #2ECC71;
            text-align: center;
            font-size: 20px;
        }
        .price{
            color: #E74C3C;
            display: flex;
            justify-content: space-between;
            font-size: 20px;
        }
        .buy{
            text-decoration: none;
            border: solid 1px;
            padding-left: 20px;
            padding-right: 20px;
            background-color: #2ECC71;
            font-size: 20px;
        }

        

.overlay {
  border-radius: 10px;
  height:0%;
  width: 30%;
  position: fixed;
  z-index: 1;
  top: 0;
  left:35%;
  background-color:rgb(222, 240, 255);
  overflow-x: hidden;
  transition: 0s;
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
@media screen and (max-height: 740px) {
  .overlay a {font-size: 20px}
  .overlay{
      background-color: white;
      width: 100%; 
      left: 0; 
      bottom: 0;
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

    
    .image2{
        border-radius: 5px;
        width: 50%;
    }
    .price2{
        color: blue;
        font-size: 20px;
    }
    textarea{
        resize: none;
        width: 100%;
        height: 80px;
        
    }
    label{
        color: #E74C3C;
    }
    input{
        width: 60%;
        border: none;
    }
    .back1{
        margin-top: 50px;
        text-align: center;
        flex-direction: column;
        font-size: 20px;
    }
    .back{
        font-size: 40px;
        margin-top: 30px;
    }
    button{
        border: none;
        background-color: #53A93F;
        border-radius: 5px;
        font-size: 25px;
    }
    option{
        background-color: rgb(159, 255, 250);        
    }
    select{
        font-size: 20px;
    }
    span{
        font-size: 20px;
    }
    .pay{
        text-decoration:line-through;
    }
    select{
        border-radius: 10px;
    }
    .q{
        width: 20%;
        border: solid 1px;
        border-radius: 5px;
        text-align: center;
        font-size: 20px;
    }
    </style>
</head>
<body>

<?php
     $id=$_REQUEST['product_id'];   #items id
     $email=$_REQUEST['email'];     #user email
    
    /*from items table*/
   include('conn2.php');
    $p_select="SELECT * From items where id='$id'";
    $query=mysqli_query($conn,$p_select);
        while($fetch=mysqli_fetch_array($query)){
            $product_image=$fetch['product_image'];
            $product_name=$fetch['product_name'];
            $product_price=$fetch['product_price'];
        
        }
    
    /*from user table*/
        $u_select="SELECT * from user where email='$email'";
        $u_query=mysqli_query($conn,$u_select);
        while($search=mysqli_fetch_array($u_query)){
            $user_id=$search['id'];
           	$photo=$search['photo'];
           	$name= $search ['name'];
            $phone=$search['phone'];
           	$email=$search['email'];
            $password=$search['password'];
           	$address=$search['address'];
        
        }

    ?>

    <?php
    $delivery_charge=30;
    $total=$product_price+$delivery_charge;
    ?>
    <div class="body-1">
        <img class="image" src="<?php echo "/admin/product_image/" .$product_image ?>">

        <div class="name">
            <?php echo $product_name ?>
        </div>
        
        <br/>
        <div class="price1"> 
            <?php echo "Product Price: " .$product_price. "/-" ?><br/>
            <?php echo "Delivery Charge: " .$delivery_charge. "/-" ?><br/>

        </div><br/>
          
        <div class="price"> 
            <?php echo "Total Price:  " .$total. "/-" ?>
            <a href="#" class="buy" onclick="openNav()"> Buy</a>
        </div>
    </div>

    <div class="back1" >
        <a class="back" href="relogin.php?email=<?php echo $email ?>&password=<?php echo $password ?>"> ⏪ </a><br/>
        Home

        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    </div>




    <!--side bar-->

    <div id="myNav" class="overlay">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br/>
        <div class="body-2">
            <img class="image2" src="<?php echo "/admin/product_image/" .$product_image ?>">
            <br/><br/>
            <label>*** Cash on Delivery***</label>
            <div class="pay"> 
                Online Payment
            </div>
            <div class="price2">
                <?php echo "Rs " .$total. "/-" ?>
            </div>
            <br/><br/>

            <form action="log-order.php" method="POST">
                User Name: <input type="text" name="u_name" value="<?php echo $name ?>" ><br/>
                User Name: <input type="text" name="u_phone" value="<?php echo $phone ?>" ><br/>
                User Email: <input type="text" name="email" value="<?php echo $email ?>" ><br/><br/>
                <label>Item will be delivered on this address within 7 days:</label><br/>
                <textarea  name="address" ><?php echo $address ?></textarea>    

                <input type="text" name="p_price" value="<?php echo $total ?>" hidden><br/>
                <input type="text" name="p_name" value="<?php echo $product_name ?>" hidden><br/>
                

                <input type="text" name="p_image" value="<?php echo $product_image ?>" hidden>
                <input type="text" name="u_photo" value="<?php echo $photo ?>" hidden><br/>
                <span>Dress Size: </span><select name="size1" required>
                    <option value="">select</option>
                    <option value="s">s</option>
                    <option value="m">m</option>
                    <option value="l">l</option>
                    <option value="xl">xl</option>
                    <option value="2xl">2xl</option>
                    <option value="xs">xs</option>
                    <option value="xxl">xxl</option>
                    <option value="xxs">xxs</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="32">32</option>
                    <option value="34">34</option>
                    <option value="36">36</option>
                    <option value="38">38</option>
                    <option value="40">40</option>
                    <option value="42">42</option>
                    <option value="44">44</option>
                    <option value="default">default</option>

                </select>

                <input type="text" name="product_id" value="<?php echo $id ?>" hidden><br/>
                <input type="text" name="password" value="<?php echo $password ?>" hidden><br/>
                <br/>
                <span>Quantity: </span>
                <input class="q" type="number" value="1" max="10" min="1">
                <br/><br/><br/><br/>

                

                <button>Order Now</button>   
                <br/><br/><br/><br/><br/> <br/><br/><br/><br/>            
            </form>

        </div>
		
		
	</div>
    <script>
		function openNav() {
		document.getElementById("myNav").style.height = "100%";
		}

		function closeNav() {
		document.getElementById("myNav").style.height = "0";
		}
	</script>

<script>
		function openNav1() {
		document.getElementById("myNav").style.height = "100%";
		}

		function closeNav1() {
		document.getElementById("myNav").style.height = "0";
		}
	</script>


</body>
</html>
