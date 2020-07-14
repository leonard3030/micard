<?php include 'includes/adminfunctions.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>MiCard | Login</title>
  	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="Assets/all/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/all/DataTables-1.10.20/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/all/css/login.css">
</head>
<body>
	<div class="body">
<div class="login-form-container col-md-6">
	<div class="left">
	<h6 class="cont">Make Login with your username and password to Create Your Own Card with <strong>MiCard</strong> Now!!!</h6>
			<img src="assets/all/login.jpg">
		</div>
	<form method="post" action="index.php" class="input-form">
	<center><h3>Login</h3></center><br>
		<?php echo display_error(); ?>
		<!-- <label>Username</label> -->
		<div class="input-group">
			<img src="assets/all/img/uname.png">
			<input type="text" class="form-control put" name="username" value="<?php echo $username ?>" placeholder="Username" autocomplete="off" style="background-color: lightgrey !important;color: #2f8bee;">
		</div><br>
		<!-- <label>Password</label> -->
		<div class="input-group">
			<img src="assets/all/img/upass.png">
			<input type="password" class="form-control put" name="password" style="background-color: lightgrey !important;color: #2f8bee;" placeholder="Password" id="myInput">
		</div><br>
			<div class="checkbox" id="checkbox">
			<input type="checkbox" id="show" size="70" class="site-check" onclick="myFunction()"><b>&nbsp;&nbsp;Show password</b>
			<p style="font-size: 14px;"><a href="#">Forgot Password?</a></p>
			<!--<a href="#forgot_password">Forgot password</b><i class="input-helper"></i>-->
			</div>
		<div class="input-group">
			<button type="submit" class="btn btn-system" name="login_btn" class="form-control">Login</button>
		</div>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script></form>
		</div>
	</div>

	<!-- <hr style="border-top: 1px dimgrey solid;border-style: groove;"> -->
        <div class="footer-section" style="display: flex;justify-content: center;margin-top: 5%;"> 
                <p style="color: lightgrey;font-size: 14px;">Copyright &copy; micard 2020 - <?php echo date('Y'); ?> All rights reserved | Developed by <b style="color: #04ff04">Omega Solutions</b></p>
        </div>

<script type="text/javascript" src="Assets/all/DataTables-1.10.20/js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="Assets/all/DataTables-1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="Assets/all/DataTables-1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#dt').DataTable();
} );
</script>

</body>
</html>


