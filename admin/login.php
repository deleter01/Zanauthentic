<?php require_once('include/conn.php');

    session_start();
            
?>
    


<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="theme-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/vendors.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN CHAMELEON  CSS-->
    <link rel="stylesheet" type="text/css" href="theme-assets/css/app-lite.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END CHAMELEON  CSS-->
  </head>
  <body>
 
    <center>
      <div class="container-fluid">
      
        <div class="card">
          <div class="col-lg-12">
            <div class="form-body ">
              <form class="form" method="post" action="login.php" name="login">
                <img src="theme-assets/images/logo/logo.png" class="logoLogin text-center">
                  <div class="card-block">
                    <div class="card-body">
                        <fieldset class="form-group">
                          <input type="text" class="form-control" id="placeholderInput" placeholder="Email Address"name="username" required>
                        </fieldset>
                        <fieldset class="form-group">
                          <input type="password" class="form-control" id="passwordField" placeholder="Password" name="password" required>
                        </fieldset>
                        <div class="form-actions center">
                          <button type="submit" class="btn btn-outline-primary" name="submit">Submit</button>
                        </div>
                        <fieldset class="form-group"></fieldset>
                        <fieldset class="form-group"></fieldset>
                    </div>
                          <a href = "../index.php" class = "mr-1 mb-1">Back to home</a>

                    <div class='form-group'>
                      <h4><?php  // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
      // removes backslashes
        $username = stripslashes($_REQUEST['username']);    
        $username = mysqli_real_escape_string($conn, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM users WHERE username='$username'
                     AND password='$password'";
        $result = mysqli_query($conn, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
         echo $error = "Incorrect Username/password.";
        }
      }?></h4>
                    </div>
                             
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </center>

    <!-- BEGIN VENDOR JS-->
    <script src="theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="theme-assets/vendors/js/forms/tags/form-field.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>