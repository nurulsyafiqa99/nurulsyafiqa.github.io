	<div class="row">
		<div class="col-md-3">
			<?php include 'template\widget\sidebar.php' ?>
		</div>
		<div class="col-md-1">
		</div>
		<div class="col-md-8 content-hs">
			<?php
			
		
		if(!empty($_GET['category'])){
			$user->getRecord('*','recipe WHERE category="'.$_GET["category"].'" && status="1"');
			while($getRecipe = $user->getArray()){
			echo '<div class="col-md-4"> 
				<div class="thumbnail"> 
					<img src="'.$getRecipe[2].'" alt="Generic placeholder thumbnail"> 
				</div> 
				<div class="caption"> 
					<h3 class="text-center">'.$getRecipe[1].'</h3> 
					<p class="text-center"><small><span class="glyphicon glyphicon-time" style=""></span> '.$getRecipe[4].'</small><br/></p>
				</div>
				<div class="caption"> 
					<p>'.strip_tags(substr($getRecipe[3],0,100)).'</p> 
					<p><a href="index.php?page=single-recipe&id='.$getRecipe[0].'" class="btn btn-primary btn-xs" role="button"> Lihat detil <span class="glyphicon glyphicon-chevron-right" style=""></span></a> 
					<small class="pull-right"><span class="glyphicon glyphicon-tag" style=""></span>  '.$getRecipe[8].'</small></p> 
				</div>
			</div>';
			}
			$user->getRecord('*','recipe WHERE category = "'.$_GET['category'].'"');
			$getCount = $user->recordCount();
			if($getCount==null){
				echo "<h1 class='text-center'>Resep Makanan tidak ada</h1>";
			}
		}else{
			$user->getRecord('*','recipe WHERE status="1"');
			while($getRecipe = $user->getArray()){
			echo '<div class="col-md-4"> 
				<div class="thumbnail"> 
					<img src="'.$getRecipe[2].'" alt="Generic placeholder thumbnail"> 
				</div> 
				<div class="caption"> 
					<h3 class="text-center">'.$getRecipe[1].'</h3> 
					<p class="text-center"><small><span class="glyphicon glyphicon-time" style=""></span> '.$getRecipe[4].'</small><br/></p>
				</div>
				<div class="caption"> 
					<p>'.strip_tags(substr($getRecipe[3],0,100)).'</p> 
					<p><a href="index.php?page=single-recipe&id='.$getRecipe[0].'" class="btn btn-primary btn-xs" role="button"> Lihat detil <span class="glyphicon glyphicon-chevron-right" style=""></span></a> 
					<small class="pull-right"><span class="glyphicon glyphicon-tag" style=""></span>  '.$getRecipe[8].'</small></p> 
				</div>
			</div>';
		}
		$user->getRecord('*','recipe');
		$getCount = $user->recordCount();
		if($getCount==null){
			echo "<h1  class='text-center'>Resep makanan Tidak ada</h1>";
		}
		}
		?>
		</div>
	</div>
	