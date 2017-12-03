<?php
session_start();
error_reporting(0);
$con= mysql_connect("localhost","","");
if(!$con)
{
    die("unable to connect");
}
else
{    $sql = mysql_select_db("text");
     $flag=1;
}

if(isset($_POST["login"]))
{
    $name=$_POST["user_username"];
    $pass=$_POST["user_password"];
    if(flag==1)
    {
       
        if( $sql)
        {
            $sql="SELECT email FROM user WHERE username=$name and password=$pass";
            $res=mysql_query($sql);
        }
    }
    else
    {
        echo "error2";
    }
    
}
if(isset($_POST["signup"]))
{
    $email=$_POST["user_email"];
    if(empty($email))
    {
        header('Location:error.php');
        
    }
    else
    {
         if($sql)
        {
             $no="this";
            $sql="INSERT INTO compname VALUES($no,$email,$no,1111,$no,$no,$no,$no,$no)";
            $res=mysql_query($sql);     
        }
        else
        {
            echo "error1";
        }
    }
}

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
            top:120px;
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
         #login
        {
            color:white;
            position:absolute;
            top:100px;
            left:300px;
        }

        
    
        
        </style>
        <title>
            SpotOn.in-User login
        </title>
    </head>
    <body>
    <div class="header animated slideInLeft ">
        <a href="home.html"><h1>SpotOne</h1></a>
    </div>
    <div id="#login" class="animated rubberBand">
    
    
    <div class="container">
        <div class="row">
        <div class="col-lg-5 col-lg-offset-4" >
           <div id="form-group" class="col-lg-8 ">
            <h1 style="color:white">User-login</h1>
            <form class="form-group" method="POST" action="user.php">
                <label style="color:white">
                    Username
                </label>
                <input type="text" name="user_username" placeholder="username" class="form-control">
                  <label style="color:white"> 
                    Password
                </label>
                  <input type="password"name="user_password" class="form-control">
                 
                  <input type="submit" class="btn" name="login" style="margin-top:10px;"value="Login">
                </form>
                    <h1 style="color:white">SIGNUP</h1>
                 <form class="form-group" method="POST" action="user.php">
                <label style="color:white">
                Email
                </label>
                <input type="text" name="user_email" placeholder="Email" class="form-control">
                <input type="submit" class="btn" name="signup" style="margin-top:10px;"value="Signup">
                
            </div>
        </div>
    </div>
    </div>
        </div>
    
        

   

    </body>
</html>