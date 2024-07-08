
	<div class="row">
		<div class="col-md-3">
			<?php include "template/widget/sidebar.php";?>
		</div>
		<div class="col-md-1">
		</div>
		<div class="col-md-8 content-hs">
			<?php
				$user->getRecord('*','recipe WHERE id="'.$id.'"');
				$getData = $user->getArray();
				
				echo '
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
							<h1 class="text-center"> '.$getData[1].'</h1>
							<p class="text-center" ><small><span class="glyphicon glyphicon-time" style=""></span> '.$getData[4].' - <span class="glyphicon glyphicon-user"></span> '.$getData[7].' - <span class="glyphicon glyphicon-tag" style=""></span> '.$getData[8].'</small></p>
							<p><div class="text-center" id="jRate"data-id=""></div></p>
							<p class="text-center" style="margin-bottom:5%;"><hr/></p>
							</div>
						</div>
						';
					/*echo'
					<div class="media"> 
						<a class="pull-left" href="#"> 
						<img class="media-object" src="'.$row[2].'" alt="Media Object"> </a> <div class="media-body"><p>'.$row[3].'<p> </div>
					</div>
				</div>';*/
					echo '<div class="row">
						<div class="col-md-12">
						<img src="'.$getData[2].'" class="img-responsive center-block" alt="Responsive image"><br/><br/>';
					echo '</div></div>

				';
					echo '<div class="row">
							<div class="col-md-5">
							<h3><span class="glyphicon glyphicon-list-alt"></span> Bahan-Bahan</h3>
							<div class="recipe-bahan">';
						$j=1;
						$user->getRecord('*','resep_bahan WHERE id_recipe="'.$id.'"');
						while($getBahan = $user->getArray()){
							echo $j++.'. '.$getBahan[1].'<br/>';
						}

					echo '
						</div><br/><br/><p> <a href="#modalBahan" class="btn btn-primary btn-xs" id="sendParameterBahan" role="button" data-id="'.$id.'" data-toggle="modal" data-target="#modalBahan"><span class="glyphicon glyphicon-plus" style=""></span></a> Tambah Bahan</p>
					';
								
					echo'</div>
							<div class="col-md-7">
								<h3><span class="glyphicon glyphicon-list-alt"></span> Cara pembuatan</h3>
								<div class="recipe-making">';
						$user->getRecord('*','tb_cara_buat WHERE id_recipe="'.$id.'"');
						$i=1;
						while($getMaking = $user->getArray()){
							echo $i++.'. '.$getMaking[1].'<br/>';
						}
					echo '
						</div><br/><br/><p> <a href="#modalAddMaking" class="btn btn-primary btn-xs" id="sendParameterMaking" role="button" data-id="'.$id.'" data-toggle="modal" data-target="#modalAddMaking"><span class="glyphicon glyphicon-plus" style=""></span></a> Tambah Cara Pembuatan</p>
					';
					echo'
							</div>
						</div>';
					echo '
						<div class="row" style="margin:100px 0px 100px 0px;">
							<div class="col-md-12">
								<h3>Deskripsi</h3>
								'.$getData[3].'
							</div>
						</div>';
	
				?>
				</div>
			</div>
		</div>
	</div>