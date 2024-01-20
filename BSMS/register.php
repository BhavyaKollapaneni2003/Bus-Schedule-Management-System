
<!DOCTYPE html>
<html lang="en">
<style>
   #bg{
        position: fixed;
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
</style>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB User - Register</title>
    <link rel="icon" href="image\favicon.jpg" sizes="16*16 32*32">

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body >
  <div>   <img src="image\register.jpeg" alt="" id="bg"></div>
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header bg-dark"><center style="color:white">Register an Account</center></div>
        <div class="card-body">
        <div class="row"> 
                 <div class="col"> 
                   <center>
                      <img width="150px" src="image\generaluser.png"/> 
                    </center></br>
                   </div>
                   </div>
          <form method="POST" action="success1.php">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  
                  <div class="form-label-group">
                    <input type="text" id="firstName" class="form-control" placeholder="First name" name="firstname" required="required" autofocus="autofocus">
                    <label for="firstName">First name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="lastName" class="form-control" placeholder="Last name" name="lastname" required="required">
                    <label for="lastName">Last name</label>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required="required">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required="required">
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" name="confirm" required="required">
                    <label for="confirmPassword">Confirm password</label>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="register" style="background-image: linear-gradient(, #2144);">Register</button>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="login.php" Login Page</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>
        </div>
        <b><a href="mainpage.php" style="color:darkblue;">>>Back to Home</a><b>
      </div>
      
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js" style="background-image: linear-gradient(gray, #2144);"> </script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>

