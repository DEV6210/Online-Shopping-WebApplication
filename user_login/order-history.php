<?php
    $email=$_GET['email'];
    
    include('conn2.php');

    $select1="SELECT * from user where email='$email'";
    $query1=mysqli_query($conn,$select1);
    while($fetchp=mysqli_fetch_array($query1)){
        $password=$fetchp['password'];
    }


    ?>
        <div class="top-nav">
			<div class="left">
				<a class="back" href="relogin.php?email=<?php echo $email ?>&password=<?php echo $password ?>">🔙</a>
			</div>

			<div class="right">
				
			</div>
		</div>
    <?php
    $select="SELECT * from buy where uemail='$email'";
    $query=mysqli_query($conn,$select);
    $search=mysqli_fetch_row($query);

    if($search >null ){
        $select_buy="SELECT * from buy where uemail='$email'";
        $query2=mysqli_query($conn,$select_buy);
        while($fetch=mysqli_fetch_array($query2)){
            $name=$fetch['uname'];
            $phone=$fetch['uphone'];
            $email=$fetch['uemail'];
            $address=$fetch['uaddress'];
            $orderid=$fetch['orderid'];
            $date=$fetch['od'];
            $status=$fetch['status'];
            $cancel=$fetch['cancel'];
            $pname=$fetch['pname'];
            $pprice=$fetch['pprice'];
            $pimage=$fetch['pimage'];
            $pid=$fetch['id'];

            ?>
    <a href="javascript:void(0);" onclick="hide()">
    <div id="show11">
        <div class="track">
            <hr class="hr1"> 
            <hr class="hr2">

            <div class="rt">
                <input type="radio" checked> <br/>Order Placed 
            </div>
            <div class="rt"> 
                <input type="radio" checked> <br/>Processing
            </div>      
            <div class="rt"> 
                <input type="radio" checked> <br/>Delivered
            </div>        
        </div>
    </div>
    </a>

    

    

    <script>
        function show(){
            document.getElementById('show11').style.display="block";
        }
        function hide(){
            document.getElementById("show11").style.display="none";
        }
    </script>
            
            <a href="javascript:void(0);" onclick="show()">
                <div>
                
                    <div class="style1">
                        <br/>

                        <span class="r1">Order Id: <?php echo $orderid ?></span><br>
                        <span class="r1">Order Date: <?php echo $date ?></span><br>
                        <span class="r1 r3">Product Price: <?php echo $pprice ." /-"?></span><br>
                        <span class="r1">Item will be Delivered within 7 days</span><br>
                        
                        <span><img src="<?php echo "/admin/product_image/". $pimage ?>" alt="not available"></span>
                        <br><br>
                        <label>
                        <a href="cancle-order.php?id=<?php echo $pid?>&email=<?php echo $email?>&password=<?php echo $password?>" class="blue">
                            <?php echo $cancel?>
                        </a>
                        <?php echo "&nbsp&nbsp&nbsp&nbsp&nbsp". "$status" ?>
                        </label>

                        

                        <br/><br/>  
                    </div>
            
                 </div>
            </a><br>
    <?php
            
        }

    }else{
        ?>
            <a href="#">
                <div class="style1">
                    <br/>

                        <span>No Record Available</span><br>
                       

                    <br/><br/>
                </div>
            </a>
    <?php
    }
?>
<!DOCTYPE html>
<head>
	<!--iOS -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .track{
            top: 250px;
            position: absolute;
            width: 95%;
            height: 200px;
            background-color: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-radius: 10px;
            display: flex;
            justify-content: space-between;   
            align-items: center;         
        }
       .hr1{
            width: 79%;
            margin-left: 42px;
            position: absolute;

       }
        .hr2{
            position: absolute;
            margin-left: 42px;
            width:40%;
            height: 1px;
            background: #3CCF4E;
            animation: load 6s forwards cubic-bezier(0,0,0,0);
        }
        @keyframes load{
            0%{
                width: 0%;
            }
            50%{
                width: 40%;                
            }
            
          
        }

        .rt{
            text-align: center;
            margin-top: 18px;
        }
        #show11{
           display: none;
        }
        
    </style>
	
	
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
            margin-top: -80px;       
            
        }
        .r1{
            margin-left: 90px;
        }
        .r3{
            color: red;
        }
        label{
            color: #1BFF00;
            display: flex;
            justify-content: space-between;
            margin-left: 25px;
            margin-right: 25px;
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
    .blue{
        color: blue;
        margin-left: 65px;
    }

</style>

	
		
</head>
<body>

		
</body>
</html>






