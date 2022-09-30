
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>ReShope Dashboard</title>
	<meta name="description" content="<b>TRENDY * FASHION</b> <br/>
	All the time we try to provide good service<br/>">

	<!--iOS -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="stylesheet" href="loading/css/main.css">



	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	<!--font awsome cdn-->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	<!--loading-->
	<script src="loading/js/vendor/modernizr-2.6.2.min.js"></script>

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
    margin-bottom: 8px;
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
    background-color: rgb(228, 228, 228);
  
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
  height:0%;
  width: 30%;
  position: fixed;
  z-index: 1;
  bottom: 0;
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
      background-color: rgb(228, 252, 168);
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

.profile_image{
	height: 150px;
	width: 35%;
	border-radius: 10px;
}

.logout{
	text-decoration: none;
	border: solid 1px;
	padding-left: 5px;
	padding-right: 5px;
	border-radius: 10px;
	background-color: #F1C40F;
	color: blue;	
}
.logout-main{
	margin-left: 275px;
	margin-top: 100px;
	position: fixed;
}
.address{
	background-color: #E8F6F3 ;
	margin-top: 10px;
	padding: 5px;
	width: 100%;
}
.upd{
    display: flex;
    justify-content: space-between;
  
    background-color: #E8F6F3;
    font-size: 20px;
}
.a1{
    text-decoration: none;
    background-color: rgb(0, 247, 255);
    padding-left: 10px;
    padding-right: 5px;
    border-radius: 5px;
}
.a2{
    text-decoration: none;
    background-color: rgb(254, 98, 98);
    padding-left: 5px;
    padding-right: 10px;
    border-radius: 5px;
}
</style>
<style>
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
    a{
        text-decoration: n;
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

	<script>
        function no(){
            alert("facility not available");
        }
    </script>
		
</head>
<body>






        <div class="top-nav">
			<div class="left">
				<a class="back" href="entry.php">🔙</a>
			</div>

			<div class="right">
				
			</div>
		</div>
    
    		<?php
			
            include('conn4.php');

			 $select="SELECT * from items";
			 $search=mysqli_query($conn, $select);
			
			#for product......
			 while($fetch=mysqli_fetch_array($search)){
				 ?>

				 <?php
				 $product_image=$fetch['product_image'];
				 $product_name=$fetch['product_name'];
				 $product_price=$fetch['product_price'];
				 $product_id=$fetch['id'];
					 
				 ?>

				<div class="product">
					<div class="product-1">
						<div class="nav-link" >
							<img src=" <?php echo "/admin/product_image/" .$product_image?>" alt="image not available" class="product-image" id="product-style">
							<label class="rs"><b>  <?php echo "RS " .$product_price ."/-"?> </b></label>

                            
                        </div>
					</div>
                   <div class="upd">
                       <a href="#" class="a1" onclick="no()">update</a>
                       <a  class="a2" href="delete.php?id=<?php echo "$product_id" ?>">remove</a>
                   </div>
				</div>
				 
			<?php
			 }

			?>

				
		</div>
		<!-- desktop view  -->
	<div class="desktop">
		Desktop view not available<br/>
		Please switch your Browser on mobile screen...

		<br/><br/><br/><br/><br/>
		Error<br/>
	</div>	
	
	<div class="b-space">
		..
	</div>
	<br/><br/><br/><br/><br/><br/>


	<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	<!-- loader

    <div id="loader-wrapper">
			<div id="loader"></div>

			<div class=""></div>
            <div class=""></div>

	<!-- /Demo content


	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="loading/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="loading/js/main.js"></script>-->

</body>
</html>
