<?php
	//GET
	$page = ISSET($_GET['page']) ? $_GET['page'] : null;
	$action = ISSET($_GET['action']) ? $_GET['action'] : null;
	$execute = ISSET($_GET['execute']) ? $_GET['execute'] : null;
	$id = ISSET($_GET['id']) ? $_GET['id'] : null;

	//POST
	$username = isset($_POST['username']) ? $_POST['username'] :null;
	$category = isset($_POST['category']) ? $_POST['category'] :null;
	$message = isset($_POST['message']) ? $_POST['message'] :null;
	$idRecipe = isset($_POST['idRecipe']) ? $_POST['idRecipe'] :null;
	$descript = isset($_POST['descript']) ? $_POST['descript'] :null;
	$titleRecipe = isset($_POST['titleRecipe']) ? $_POST['titleRecipe'] :null;

	//file
	$image =isset($_FILES['imgRecipe']['name']) ? $_FILES['imgRecipe']['name'] : null;
	$sizeImage=isset($_FILES['imgRecipe']['size']) ? $_FILES['imgRecipe']['size'] : null;
	$imgError=isset($_FILES['imgRecipe']['error']) ? $_FILES['imgRecipe']['error'] : null;
	$imgTmp=isset($_FILES['imgRecipe']['tmp_name']) ? $_FILES['imgRecipe']['tmp_name'] : null;	
	
	$dateNow = date("Y-m-d");
	$dirImage = 'storage/img/'.$titleRecipe;
?>