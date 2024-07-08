<?php
require_once "module/user.class.php";
require_once "controller/layout.class.php";
$addInput = new Layout();
$user = new User();
$user->checkSession('signin');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up | Hery's Web</title>
    <link rel="icon" href="assets/img/icon.png">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.hs.css" rel="stylesheet">
  </head>
  <body class="signin-signup">
	<div class="container" style="margin-top:2%">
		<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="row">
				<div class="col-md-12">
					<?php
						if(!empty($_POST['btnSignup'])){
							$user=$user->insertUser();
							if($user>0){
								$addInput->alertMessageClose('alert-success','Sign Up Succses');
							}else if($user==0){
								$addInput->alertMessageClose('alert-danger','Username is available');
							}else{
								null;
							}	
						}
					?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
				<h1 class="text-center">Sign Up</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<form class="form-horizontal form-signup" role="form" method="post" action=""> 
						<div class="form-group"> 
							<label for="fullName">Nama Lengkap</label>
							<input type="text" class="form-control" id="fullName" placeholder="Masukan Nama Lengkap" name="fullName" required>
						</div> 
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control" id="username" placeholder="Masukan Username" name="username" required>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" class="form-control" id="email" placeholder="Masukan Email" name="email" required>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
								<input type="password" class="form-control" id="password" placeholder="Masukan Password" name="password" required>
						</div>
						<div class="form-group">
							<label for="password2">Re-Enter Password</label>
								<input type="password" class="form-control" id="password2" placeholder="Masukan Kembali Password" required>
						</div>
						<div class="form-group">
							<label for="sex">Level</label>
							<div class="col-md-12">
								<label class="checkbox-inline">
									<input type="radio" name="level" id="optionsRadios3" value="0"> Admin</label>
								<label class="checkbox-inline">
									<input type="radio" name="level" id="optionsRadios3" value="1"> Member </label>
							</div>
						</div>
						<div class="form-group">
							<input class="btn btn-primary" type="submit" value="Sign Up" name="btnSignup">
							<a href="signin.php" class="alert-link pull-right">Sign In</a>
						</div>
					</form>
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