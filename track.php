<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Status</title>
    <style>
        .track{
            top: 100px;
            position: absolute;
            width: 95%;
            height: 150px;
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
            position: fixed;
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
</head>
<body>
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

    

    <a href="#" onclick="show()">adsa</a>

    <script>
        function show(){
            document.getElementById('show11').style.display="block"
        }
    </script>
</body>
</html>