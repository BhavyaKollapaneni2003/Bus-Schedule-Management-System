<?php require('sessionadmin.php');?>
<link rel="icon" href="image\favicon.jpg" sizes="16*16 32*32">  
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Login</title>
   
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <style>
      #bg{
        position: fixed;
        width:1500;
height:900;
      
        top: 0;
        right:0;
        left:0;
        bottom:0;
        margin: auto;
        min-width:100%;
        min-height:100%;
        background-size:cover;
        opacity: 80%;

      }
      .container{
        position: fixed;
        top:50px;
        bottom: 50px;
        right: 50px;;
        left:50px;
      }
    </style>

  </head>
  <?php if(logged_in()){ ?>
    <script type="text/javascript">
      window.location = "index.php";
    </script>
   <?php
 } ?>

  <body >
<div>   <img src="image\adminbg.jpeg" alt="" id="bg"></div>
    <div class="container d-flex " >
 
   <div class="container">
      <div class="row"> 
        <div class="col-md-5 mx-auto"> 
          <div class="card"> 
            <div class="card-body">
               <div class="row"> 
                 <div class="col"> 
                   <center>
                      <img width="150px" src="image\adminuser.png"/> 
                    </center>
                   </div>
                   </div>
                   <div class="row"> 
                 <div class="col"> 
                   <center>
                      <h3>Admin Login</h3>
                    </center>
                   </div>
                   </div>
                   <form method="POST" action="successadmin.php">
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="user" required="required" autofocus="autofocus">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                              <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-danger btn-block" id="login">Login</button>
          </form>
           
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>

        </div>
        <b><a href="mainpage.php" style="color:darkblue;">>>Back to Home</a><b>
      </div>
      
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
