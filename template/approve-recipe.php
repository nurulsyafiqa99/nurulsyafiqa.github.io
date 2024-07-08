
<div class="container" style="padding:60px;">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<?php 
				if($execute=='approve-delete'){
					$user->getRecord('*','recipe WHERE id="'.$id.'"');
					$getRecipe = $user->getArray();
					unlink($getRecipe[2]);
					$delete = $user->delete('recipe','id="'.$id.'"');
					$delete = $user->delete('resep_bahan','id_recipe="'.$id.'"');
					$delete = $user->delete('tb_cara_buat','id_recipe="'.$id.'"');
					$layout->alertMessageClose('alert-success','Recipe telah di hapus');
				}elseif($execute=='approve-insert-recipe'){
					$data = array('status'=>'1');
					$user->update('recipe',$data,'id="'.$id.'"');
				}
			?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<table class="table table-hover"> 
			<h1 class="text-center" style="margin-bottom:8%;">Setujui Tambah/Hapus Resep</h1> 
			<thead> 
				<tr> 
					<th>Resep Makanan</th> 
					<th class="text-center">Setujui Tambah Resep</th> 
					<th class="text-center">Setujui Hapus Resep</th> 
				</tr> 
			</thead> 
			<?php
				$user->getRecord('*','recipe WHERE status="2" OR status="0"');
					while($getRecipe = $user->getArray()){
					echo '
					<tbody> 
					<tr>
						<td>'.$getRecipe[1].'</td> ';
						if($getRecipe[5]=='0'){
					echo '<td class="text-center"><a href="index.php?page=approve&execute=approve-insert-recipe&id='.$getRecipe[0].'"><span class="glyphicon glyphicon-ok-circle" style=""></span></a></td><td></td>';
						}
						if($getRecipe[5]=='2'){
					echo '<td></td><td class="text-center"><a href="index.php?page=approve&execute=approve-delete&id='.$getRecipe[0].'"><span class="glyphicon glyphicon-ok-circle" style=""></span></a></td>';
						}
					echo'	</tr> 
				</tbody> 
					';
				}
			?>
			</table>
		</div>
	</div>
	<!-- <div style="margin-top:4%" class="row">
		<div class="col-md-8 col-md-offset-2">
			<table class="table table-hover"> 
			<h1 class="text-center">Setujui Tambah Resep</h1> 
			<thead> 
				<tr> 
					<th>Resep Makanan</th> 
					<th class="text-center">Setujui</th> 
				</tr> 
			</thead> 
			<?php
				$user->getRecord('*','recipe WHERE status="0"');
					while($getRecipe = $user->getArray()){
					echo '
					<tbody> 
					<tr>
						<td>'.$getRecipe[1].'</td> 
						<td class="text-center"><a href="index.php?page=approve&execute=approve-insert-recipe&id='.$getRecipe[0].'"><span class="glyphicon glyphicon-ok-circle" style=""></span></a></td>
						</tr> 
				</tbody> 
					';
				}
			?>
			</table>
		</div>
	</div> -->
	</div>