
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
    background-color: #FBFCFC;
  
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
        background-color: black;
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
      background-color: #00FFF7;
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


/*phpto*/
.overlay2 {
  border-radius: 0px 0px 80px 80px;
  height:0%;
  width: 30%;
  position: fixed;
  z-index: 1;
  top: 0%;
  left:35%;
  background-color:rgb(222, 240, 255);
  overflow-x: hidden;
  transition: 0s;
}



.overlay2 a:hover, .overlay2 a:focus {
  color: red;
}

.closebtn2 {
padding: 8px;
  text-decoration: none;
  font-size: 36px;
  position: absolute;
  top: 0;
  right: 10px;
  font-size: 60px;
}
.overlay2{
    text-align: center;
}
@media screen and (max-height: 740px) {
  .overlay2 a {font-size: 20px}
  .overlay2{
      background-color: white;
      width: 100%; 
      left: 0; 
	  top:32%;
      bottom: 5%;
  }
  .closebtn2{
	  font-size: 120px;
	  color: red;
	  border: solid 1px;
	  border-radius: 10px;
	  top: 20px;
	  padding: 10px;
  }


.c_photo{
	border: solid 1px yellow ;
	border-radius: 10px;
	padding-left: 15px;
	padding-right: 15px;
	padding-top: 10px;
	padding-bottom: 10px;
	background-color: #1BFF00;
}
.sub_photo{
	border-radius: 5px;
	background-color: #D0D3D4;
}

}

</style>


	
		
</head>
<body>

<div class="top-nav">
			<div class="left">
				<img src="/image/shopicon.ico" height="60" width="100%">
			</div>

			<div class="right">
				<form class="search-body" method="POST" action="">
					<input class="search-option" type="search" name="search_item" placeholder="Search ...">
					<button name="submit1" class="search-button">
						<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
						<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
						</svg>
					</button>
				</form>
			</div>
		</div>














		<div class="main-body">
			<!-- 1
			<div class="banner">
				
			</div>

			
			 2 
			<div class="row">
				<div class="left-row">
					<a href="#" class="nav-link" >
						<img src="" alt="image not available" width="100%">
						name
					</a>
				</div>
				<div class="middle-row">
					<a href="#" class="nav-link" >
						<img src="" alt="image not available" width="100%">
						name
					</a>				
				</div>
				<div class="right-row">
					<a href="#" class="nav-link" >
						<img src="" alt="image not available" width="100%">
						name
					</a>
				</div>
			</div>

			 3 -->

			<?php
			
			include('conn2.php');

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
						<a href="log-shop.php?product_id=<?php echo $product_id ?>&email=<?php echo $email ?>" class="nav-link" >
							<img src=" <?php echo "/admin/product_image/" .$product_image?>" alt="image not available" class="product-image" id="product-style">
							<label class="rs1"><b>  <?php echo $product_name ?> </b></label>
							<label class="rs"><b>  <?php echo "RS " .$product_price ."/-"?> </b></label>
						</a>
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
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	


	


   <!--profile login/signup-->

		<?php
		
			#for user............
			$uselect = "SELECT * FROM user where email='$email' ";
			$query = mysqli_query($conn,$uselect);

			while($search=mysqli_fetch_array($query))
			{
			$user_id=$search['id'];
			$photo=$search['photo'];
			$name= $search ['name'];
			$password=$search['password'];
			$email=$search['email'];
			$address=$search['address'];
        }
		?>

		<!--profile-->
		<div id="myNav" class="overlay">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br/><br/><br/><br/>
		
		
		<a href="#" onclick="openNav2()"> <img src="user_profile_photo/ <?php echo $photo?>" alt="Upload Photo" class="profile_image"></a>
	

		<div class="uname">
			<?php echo $name ?>
		</div>	
		<div class="uemail">
			<?php echo $email ?>
		</div>
		<div class="address">
			<?php echo $address ?>
		</div>
		<div class="logout-main">
			<a class="logout" href="logout.php">Logout</a>
		</div>
		
		</div>
		<br/><br/><br/><br/>

		<script>
		function openNav() {
		document.getElementById("myNav").style.height = "500px";
		}

		function closeNav() {
		document.getElementById("myNav").style.height = "0";
		}
		</script>


		<!--u-phpto-->

		<div id="myNav2" class="overlay2">
			<a href="javascript:void(0)" class="closebtn2" onclick="closeNav2()">&times;</a><br/><br/><br/><br/>

			<form action="user_photo.php"  method="post" enctype="multipart/form-data" class="user_form">
				<input type="text" name="id" value="<?php echo $user_id?>" hidden><br/>
				<input type="text" name="email" value="<?php echo $email?>" hidden><br/>
				<input type="text" name="password" value="<?php echo $password?>" hidden><br/>


				<label for="check" class="c_photo">Choose Photo</label><br/><br/><br/>
				<input type="file" name="uphoto" id="check" hidden required><br/>
				<button class="sub_photo">Change</button>
			</form>
		
		</div>
		<script>
		function openNav2() {
		document.getElementById("myNav2").style.height = "auto";
		}

		function closeNav2() {
		document.getElementById("myNav2").style.height = "0";
		}
		</script>


	<!--bottom navigation-->
	<div class="bottom-nav">
		<a href="#" class="nav-link" id="tap-hover">
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
			<path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
			</svg>
			Home
		</a>
		<a href="https://wa.me/qr/3Y642PINFFJDJ1" class="nav-link" id="tap-hover">
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  			<path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
			</svg>
			Chat
		<a href="#" class="nav-link" id="tap-hover">
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
			<path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
			</svg>	
			Shop	
		</a>
		<a href="order-history.php?email=<?php echo $email ?>" class="nav-link" id="tap-hover">
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
			<path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
			</svg>	
			Order	
		</a>
		<a href="#" class="nav-link" id="tap-hover" onclick="openNav()">
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
			<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
			</svg>	
			Profile	
		</a>
	</div>


	<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-
	<!-- loader--

	<div id="loader-wrapper">
			<div id="loader"></div>

			<div class=""></div>
            <div class=""></div>

	<!-- /Demo content--


	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="loading/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="loading/js/main.js"></script>-->


	
	

</body>
</html>
