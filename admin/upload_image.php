<!DOCTYPE html>
<html>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
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

  <head>
    <style>
      body{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        text-align: center;
        background-color: rgb(189, 203, 198);
      }
      label{
        border:solid;
        border-radius: 10px;
        padding: 10px;
        background-color: rgb(2, 255, 162);
        font-size: 20px;
      }
      .submit{
        border-radius: 5px;
      }
      form{
        background-color: white;
        padding: 25px;
        padding-top: 30px;
        border-radius: 10px;
      }
      input{
        font-size: 20px;
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
  

<form action="upload_query.php" method="post" enctype="multipart/form-data">
    

  <label for="checked">Select Product image</label><br/><br/>
  <input type="file" name="up" id="checked" hidden required><br/><br/>
  <input type="text" name="product_name" placeholder="Enter Product Name"><br/><br/>
  <input type="number" name="product_price" placeholder="Enter Product ₹ Price" required><br/><br/><br/>

  <input class="submit" type="submit" value="submit" name="submit">

  <br/><br/><br/>
  <div class="top-nav">
			<div class="left">
				<a class="back" href="entry.php">🔙</a>
			</div>

			<div class="right">
			
			</div>
		</div>

</form>



 
<!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	<!-- loader--

  <div id="loader-wrapper">
			<div id="loader"></div>

			<div class=""></div>
      <div class=""></div>

	<!-- /Demo content-


	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="loading/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
	<script src="loading/js/main.js"></script>-->

</body>
</html>

