<?php


?>
<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" href="bootstrap.css" type="text/css">
        <link rel="stylesheet" href="animate.css" type="text/css">
    <style>
       body
        {
         background-image: url("bg2.jpg");
            background-size: cover;
            font-family:verdana;
        }
        #form-group
        {
            position:absolute;
            top:150px;
        }
        .header
        {
            position:fixed;
            width:100%;
            height:100px;
        }
        .header a
        {
            text-decoration:none;
        }
        .header h1 
        {
           margin-left:10px;
           width:150px;
           font-size:200%;
            color:white;
            border: solid 1px white;
            padding:10px;
           border-radius:50px;
            font-weight: bold;
    
}
         #company-login
        {
            color:white;
            position:absolute;
            top:180px;
            left:280px;
        }
        
        </style>
        <title>
            SpotOn.in-Company login
        </title>
    </head>
    <body>
    <div class="header animated slideInLeft">
        <a href="home.html"><h1>SpotOne</h1></a>
    </div>
  
    <div class="container">
        <div class="row">
        <div class="col-lg-5 col-lg-offset-4" >
           <div id="form-group" class="col-lg-8 animated rubberBand">
            <h1 style="color:white">Company-login</h1>
            <form class="form-group">
                <label style="color:white">
                    Username
                </label>
                <input type="text" name="comp_username" placeholder="company username" class="form-control">
                  <label style="color:white"> 
                    Password
                </label>
                  <input type="password"name="comp_password" class="form-control">
                <input type="submit" class="btn"name="submit" style="margin-top:10px;"value="Login">
            
            </form>
                 <h1 style="color:white">Signup</h1>
                 <form class="form-group" method="POST" action="user.php">
                <label style="color:white">
                 Email
                </label>
                <input type="text" name="user_email" placeholder="Email" class="form-control">
                <input type="submit" class="btn" name="submit" style="margin-top:10px;"value="Signup">
            </div>
        </div>
    </div>
    </div>
    </body>
</html>