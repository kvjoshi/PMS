<?php
   include("config.php");
   session_start();
   
   if(isset($_POST['submit'])) {
      // username and password sent from form 
      
     echo $myusername = mysqli_real_escape_string($db,$_POST['username']);
      echo  $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT u_id FROM user WHERE u_username = '$myusername' and u_password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_assoc($result);      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: dashboard.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui" name="viewport">
                    <title>
                        Work Management System
                    </title>
                    <meta content="Admin Dashboard" name="description">
                        <meta content="ThemeDesign" name="author">
                            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                                <link href="assets/images/favicon.ico" rel="shortcut icon">
                                    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
                                        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
                                            <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
                                        </link>
                                    </link>
                                </link>
                            </meta>
                        </meta>
                    </meta>
                </meta>
            </meta>
        </meta>
    </head>
    <body class="fixed-left">
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                </div>
            </div>
        </div>
        <!-- Begin page -->
        <div class="accountbg">
            <div class="content-center">
                <div class="content-desc-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5 col-md-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="text-center mt-0 m-b-15">
                                            <a class="logo logo-admin" href="index-2.html">
                                                <img alt="logo" height="30" src="assets/images/logo-dark.png"/>
                                            </a>
                                        </h3>
                                        <h4 class="text-muted text-center font-18">
                                            <b>
                                                Sign In
                                            </b>
                                        </h4>
                                        <div class="p-2">
                                            <form action="" class="form-horizontal m-t-20" method="POST">
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <input class="form-control" name="username" placeholder="Username" required="" type="text"/>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <input class="form-control" name="password" placeholder="Password" required="" type="password"/>
                                                    </div>
                                                </div>
                                                <div class="form-group text-center row m-t-20">
                                                    <div class="col-12">

                                                        <button class="btn btn-primary btn-block waves-effect waves-light" name="submit" type="submit">
                                                            Log In
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js">
        </script>
        <script src="assets/js/bootstrap.bundle.min.js">
        </script>
        <script src="assets/js/modernizr.min.js">
        </script>
        <script src="assets/js/detect.js">
        </script>
        <script src="assets/js/fastclick.js">
        </script>
        <script src="assets/js/jquery.slimscroll.js">
        </script>
        <script src="assets/js/jquery.blockUI.js">
        </script>
        <script src="assets/js/waves.js">
        </script>
        <script src="assets/js/jquery.nicescroll.js">
        </script>
        <script src="assets/js/jquery.scrollTo.min.js">
        </script>
        <!-- App js -->
        <script src="assets/js/app.js">
        </script>
    </body>
</html>