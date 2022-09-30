<?php
    
    
    include('conn4.php');

    ?>
        <div class="top-nav">
			<div class="left">
				<a class="back" href="entry.php">🔙</a>
			</div>

			<div class="right">
				
			</div>
		</div>
    <?php

        $select_buy="SELECT * from buy";
        $query2=mysqli_query($conn,$select_buy);
        while($fetch=mysqli_fetch_array($query2)){
            $name=$fetch['uname'];
            $phone=$fetch['uphone'];
            $email=$fetch['uemail'];
            $address=$fetch['uaddress'];
            $orderid=$fetch['orderid'];
            $date=$fetch['od'];
            $status=$fetch['status'];
            $cancle=$fetch['cancel'];
            $pname=$fetch['pname'];
            $pprice=$fetch['pprice'];
            $pimage=$fetch['pimage'];
            $id=$fetch['id'];

            ?>
            
            <div>
                <div class="style1">
                    <br/>
                    <span class="r1">Name: <?php echo $name ?></span><br>
                    <span class="r1">Phone No: <?php echo $phone ?></span><br>
                    <span class="r1">Order Id: <?php echo $orderid ?></span><br>
                    <span class="r1">Order Date: <?php echo $date ?></span><br>
                    <span class="r1 r3">Product Price: <?php echo $pprice ." /-" ?></span><br>
                   
                    
                    <span><img src="<?php echo "/admin/product_image/". $pimage ?>" alt="not available"></span>

                    <div class="address">
                    <span>Delivery Address:</span><br/>  <?php echo $address ?>
                    </div><br/>

                    <br/>
                    <label>
                        <a href="delete-order.php?id=<?php echo $id?>" class="blue">Delete</a>
                        <a href="#"><?php echo "$cancle" ?></a>
                        <a href="complete.php?id=<?php echo "$id" ?>"><?php echo "$status" ?></a>
                    </label>

                    <br/><br/>
                </div>
        </div><br>
    <?php
            
        }

?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<!--iOS -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <style>
        body{
            background-color: #D0D3D4;
        }
        .style1{
            border-radius: 10px;
            background-color: white;
                  
        }
        a{
            text-decoration: none;
           
        }
        span{
            margin-left: 10px;           
        }
        img{
            width: 20%;
            height: 90px;
            border-radius: 10px; 
            margin-top: -85px;       
            
        }
        .r1{
            margin-left: 90px;
        }
        .r3{
            color: red;
        }
        label{
            color: #1BFF00;
            margin-left: 15px;
            margin-right: 15px;
            overflow: auto;
            display: flex;
            justify-content: space-between;

        }
        .blue{
            color: red;
        }

    /*...........top nav...........*/
    .top-nav{
        display: flex;
        justify-content: center;
        align-items: center;
        justify-content: space-between;
        background-color: #D0D3D4;
        border-radius:  0px 0px 20px 20px;
        position: sticky;
        top: 0;
        margin-bottom: 20px;
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






    /*...........mobile screen...........*/
    @media screen and (max-width:600px){
       
    }
    /*........for desktop screen...........*/
    @media screen and (min-width:601px){
        .top-nav{
            display: none;
        }
        
    
    }

    .back{
        font-size: 40px;
              
    }

</style>

	
		
</head>
<body>

	<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
	<!-- loader-->

    <div id="loader-wrapper">
			<div id="loader"></div>

			<div class=""></div>
            <div class=""></div>

	<!-- /Demo content-->


	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="loading/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="loading/js/main.js"></script>	


</body>
</html>






