<!DOCTYPE html>
<html>
    <head>
        <title>signup</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial sceal 1.0">
       <style type="text/css">
            body{
                display: flex;
                justify-content: center;
                align-items: center;
                
            }
            form{
                padding-top: 5px;
                padding: 20px;
                border-radius: 25px;
                font-size: 20px;
               
                
            }
            span{
                padding-bottom: 20px;
                text-align: center;
                font-size: 30px;
                color: rgb(255, 0, 0);
               
            }
  
            .signup{
                text-align: center;
            }
            .signup input{   
                font-size: 20px;
                border: none;
                border-radius: 10px;
                background-color: aquamarine;
            }
            .signup :hover{
                background-color: rgb(255, 0, 0);
                border-radius: 10px; 
            }
            .cor{
                cursor: pointer;
            }
            input{
                font-size: 22px;
                border-radius: 5px;
            }
            label{
                font-size: 25px;
            }
            textarea{
                resize: none;
                width: 100%;
                height: 100px;
            }
            a{
                text-decoration: none;
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

.login{
	border-radius: 5px;
	font-size: 20px;
	background-color: white;
	margin-right: 5px;
}

.cor{
	text-decoration: none;
	border: solid 2px;
	border-radius: 5px;
	font-size: 25px;
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
 
  .closebtn{
	  font-size: 120px;
	  color: red;
	  border: solid 1px;
	  border-radius: 10px;
	  top: 10px;
	  padding: 10px;
  }
 .log{
     border: solid;
     background-color: blue;
     color: white;
     border-radius: 10px;
     font-size: 16px;
     padding: 5px;
 }
  .home{
    border: solid;
     background-color: green;
     color: white;
     border-radius: 10px;
     font-size: 16px;
     padding: 6px;

  }
  
}
       </style>
    </head>
    <body>

     <!--profile login/signup-->

            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a><br/><br/><br/><br/>
            
                <form action="/user_login/u-autho.php" method="POST">
                    <input type="text" name="uid" placeholder="Enter Your Email"><br/><br/>
                    <input type="password" name="upass" placeholder="Password"><br/><br/>
                    <button class="login">Login</button>
                </form>
                <br/><br/>
            
            
            </div>
            <br/><br/><br/><br/>

            <script>
            function openNav() {
            document.getElementById("myNav").style.height = "100%";
            }

            function closeNav() {
            document.getElementById("myNav").style.height = "0";
            }
            </script>


        <div class="main">
            <form action="data-insert.php" method="POST">

               
                    <label>Full name</label><br/>
                    <input type="text" name="fullname" placeholder="Enter your first name" required><br/><br/>
            
                   
                    <label>Phone Number</label><br/>
                    <input type="text" name="phone"  placeholder="Enter phone number" maxlength="10" minlength="10" required><br/><br/>
                    <label>E-mail </label><br/>
                    <input type="email" name="email"  placeholder="Enter email" required><br/><br/>
                    <label>Address</label><br/>
                    <textarea name="address" required></textarea><br/><br/>
                    <label>Password</label><br/>
                    <input type="text" name="password"  placeholder="Enter password" required><br/><br/>
                    <label>Conform Password</label><br/>
                     <input type="password" name="conform"  placeholder="Enter password" required><br/><br/>
                    
                    <div class="signup">
                        <input class="cor" type="submit" value="Signup" name="signup"><?php echo "&nbsp&nbsp&nbsp&nbsp" ?> //<?php echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp" ?> <a href="#" onclick="openNav()" class="log">Login</a>

                        <br/><br/>
                        <a href="/index.php" class="home">Back to Home</a>
                    </div>
                 </form>
            </div>
        </div>
      
    </body>
</html>