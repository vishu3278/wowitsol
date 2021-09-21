<style type="text/css">
  .has-feedback label~.form-control-feedback{ top: 0px; }
</style>
<?php
include_once('../config.php'); 
	
	
	/*if(isset($_COOKIE['uid'])){
	$_SESSION['siteadmin']['id']=$_COOKIE['uid'];
	}*/
	if((isset($_SESSION['siteadmin']['id']))){
		if (headers_sent())
		    {
		    echo "<script> window.location.assign('" . BASE_ADMIN_URL . "home.php'); </script>";
		    }
	  	else
		    {
		    header('Location: ' . BASE_ADMIN_URL . "home.php");
		    }
		}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php echo WEBSITE; ?>| Log in</title>
	 <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="css/iCheck.css">
  <link rel="stylesheet" href="css/admin-all-demo.css">
  <link rel="stylesheet" href="css/custom.css">
  </head>
  
<body class="login-box-body">
    <div class="login-box">
      <div class="login-logo">
        <a href="<?php echo BASE_ADMIN_URL; ?>"><img src="<?php echo HOST_NAME; ?>image/logo.png" style="max-width: 250px;"/></a>
      </div><!-- /.login-logo -->
      
        <?php if(isset($_SESSION['error']) ) { ?>
<div class="alert alert-danger"  style="overflow: hidden;">
<?php echo $_SESSION['error']; ?> </div>

<?php unset($_SESSION['error']); } ?>
      </p>
      <div class="login-form">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="include/admin_post.php" method="post" id="admin_login" name="admin_login" class="form">
          <div class="form-group has-feedback">
            <input type="email" class="form-control required email" placeholder="Email" id="username" name="adminemail"  aria-required="true">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control required" placeholder="Password" id="password" name="adminpassword" aria-required="true">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox" name="rme" value="1"> Remember Me
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
        <input type="submit" value="Sign In"  class="btn btn-danger btn-block btn-flat" name="loginbtn"/>
             
            </div><!-- /.col -->
          </div>
        </form>

        <a href="#">I forgot my password</a><br>
      

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
  


    <script src="<?php echo BASE_ADMIN_URL ; ?>js/jquery-2.2.4.min.js"></script>

   <script src="<?php echo BASE_ADMIN_URL ; ?>js/bootstrap.min.js"></script>

   <script src="<?php echo BASE_ADMIN_URL; ?>js/iCheck/icheck.min.js"></script>
   <script src="<?php echo BASE_ADMIN_URL ; ?>js/jquery.validate.js"></script>
    
	 <script>
  
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #register-form element
		$("#admin_login").validate();
	
	});
	</script>
	
<!-- <script type="text/javascript">
$(document).on('click', '.login-button', function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: $(".form").attr('action'),
        data: $(".form").serialize(),
        success: function(response) {
             if (response === "danger") {
                  window.reload;
             } else {
                   $_SESSION['error'] ;
             }
        }
    });
});
</script>
 -->
</body>

</html>