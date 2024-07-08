<?php
require_once "module/user.class.php";
require_once "controller/layout.class.php";
require_once "module/variable.php";
$layout = new Layout();
$user = new User();
//$user->checkSession('index');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resep Makanan | Hery's Web </title>
    <link rel="icon" href="assets/img/icon.png">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.hs.css" rel="stylesheet">
  </head>
  <body class="index-hs">
	<div class="container" style="margin-top:1%">
		<div class="row">
			<?php
				include "template/widget/header.php";
				include "template/widget/menu.php";
				if(!empty($page)){
					switch($page){
						case "home":
							include "template/home.php";
							break;
						case "single-recipe":
							include "template/single-recipe.php";
							break;
						case "profile":
							include "template/profile.php";
							break;
						case "insert-recipe":
							include "template/insert-recipe.php";
							break;
						case "recipe":
							include "template/recipe.php";
							break;
						case "insert-category":
							include "template/insert-category.php";
							break;
						case "guest-book":
							include "template/guest-book.php";
							break;
						case "view-guest-book":
							include "template/view-guest-book.php";
							break;
						case "category":
							include "template/category.php";
							break;
						case "approve":
							include "template/approve-recipe.php";
							break;
						case "recipe":
							include "template/recipe.php";
							break;
						case "help":
							include "template/help.php";
							break;
						default:
							include "include/home.php";
							break;
					}
				}elseif(!empty($action)){
					$user->logout();
				}else{
					include "template/home.php";
					//header("location: index.php") ;
					//header("location: home.php") ;
				}
			?>
		</div>
	</div>
	<?php 
		include "template/widget/footer.php";
		include 'template/widget/modals.php';
	 ?>

	<script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.validate.hs.min.js"></script>
    <script src="assets/js/hs.control.jquery.js"></script>
    <script src="assets/js/jRate.js"></script>
 	</body>
</html>