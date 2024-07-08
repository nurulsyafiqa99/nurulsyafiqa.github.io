<?php
require_once "module/user.class.php";
require_once "controller/layout.class.php";
$addInput = new Layout();
$user = new User();
$user->checkSession('signup');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign In | Hery's Web</title>
    <link rel="icon" href="assets/img/icon.png">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.hs.css" rel="stylesheet">
  </head>
  <body class="signin-signup">
	<div class="container" style="margin-top:12%">
		<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="row">
				<div class="col-md-12">
					<?php
						if(!empty($_POST['btnSignIn'])){
							$user=$user->checkLogin();
							if($user>0){
								$addInput->alertMessageClose('alert-success','Sign In Success');
							}else if($user==0){
								$addInput->alertMessageClose('alert-danger','Sign In Failed');
							}else{
								null;
							}
						}
					?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
				<h1 class="text-center"><span class="glyphicon glyphicon-log-in" style="margin-right:2%"></span>   Sign In</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<form class="form-horizontal form-signup" role="form" method="post" action=""> 
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control" id="username" placeholder="Masukan Username" name="username" required>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
								<input type="password" class="form-control" id="password" placeholder="Masukan Password" name="password" required>
						</div>
						<div class="form-group">
							<input class="btn btn-primary" type="submit" value="Sign In" name="btnSignIn">
							<a href="signup.php" class="alert-link pull-right">Sign Up</a>
						</div>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-3" style="margin-top:100px;">
					<small class="text-muted">Copyright 2015 by <a href="">Hery Septyadi</a></small>
				</div>
			</div>
		</div>
	</div>
	<script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.validate.hs.min.js"></script>
    <script src="assets/js/hs.control.jquery.js"></script>
  </body>

</html>