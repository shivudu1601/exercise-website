<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style>
        body{
            background-image: url('background1.png');
            background-repeat: no-repeat;
            background-size: 1550px 700px;
            
            
        }
        *{
            text-decoration: none;
        }
        
        .navbar{
            background:  rgb(82, 78, 78); font-family: 'Times New Roman', Times, serif; padding-right: 20px; padding-left: 20px;
        }
        .navdiv{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .logo a{
            font-size: 35px;
            font-weight: 600;
            color: white;
        }
        li{
            list-style: none;
            display: inline-block;
        }
        li a{
            color: white;
            font-size: 18px;
            font-weight: bold;
            margin-right: 25px;
        }
        button{
            background-color:black;
            margin-left: 10px;
            border-radius: 10px;
            padding: 10px;width: 90px;
        }
        button a{
            color: white;
            font-weight: bold;
            font-size: 15px;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navdiv">
            <div class="logo"><a href="#">AJIO</a></div>
        <ul>
        <button><a href="login.html">Login</a></button>
        <button> <a href="register.html">Register</a></button>
        </ul>
        </div>
    </nav>
</div>
</body>
</html>