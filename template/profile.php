
<?php
	$user = $user->getUser($user->getSessionUsername());
?>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
    	<h1 class="text-center"><span class="glyphicon glyphicon-user"></span> Profile</h1>
	</div>
</div>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
    	<form class="form-horizontal form-signup" role="form" method="post" action=""> 
			<?php						
				$layout->fieldInput('text','First Name','firstName',$user[1],'Enter First Name');
				$layout->fieldInput('text','Last Name','lastName',$user[2],'Enter Last Name');
				$layout->fieldInput('text','Username','username',$user[3],'Enter Username');
				$layout->fieldInput('text','Email','email',$user[4],'Enter Email');
				$layout->fieldInput('password','Password','password','','Enter Password');
				$layout->fieldInput('password',' Re-Password','password2','','Enter Password');
				$values = array('m'=>'Male','f'=>'Female');
				$layout->fieldRadioButton('Sex','sex',$values,$user[6]);
				$layout->fieldSelected('Sex','sex',$values,$user[6]);
				$layout->fieldChecked('Sex','sex',$values,$user[6]);
			?>
			<div class="form-group">
				<input class="btn btn-primary" type="submit" value="Sign Up" name="btnSignup">
				<a href="signin.php" class="alert-link pull-right">Sign In</a>
			</div>
		</form>
    </div>
 </div>