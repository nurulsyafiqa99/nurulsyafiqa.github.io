<div class="container hs-content" style="padding:60px;">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<?php 
				if($execute=='delete'){
					$user->getRecord('*','user WHERE username="'.$user->getSession().'"');
					$getUser = $user->getArray();
					if($getUser[5]=='1'){
						//$user->getRecord('*','user WHERE username="'.$user->getSession().'"');
						$user->getRecord('*','recipe WHERE id="'.$id.'"');
						$getRecipe = $user->getArray();
						unlink($getRecipe[2]);
						$delete = $user->delete('recipe','id="'.$id.'"');
						$delete = $user->delete('resep_bahan','id_recipe="'.$id.'"');
						$delete = $user->delete('tb_cara_buat','id_recipe="'.$id.'"');
						$layout->alertMessageClose('alert-success','Resep Berhasil di Hapus');
						
					}else if($getUser[5]=='0'){
						$data = array('status'=>'2');
						$user->update('recipe',$data,'id="'.$id.'"');
						$layout->alertMessageClose('alert-success','Resep akan dihapus setelah disetujui admin');
					}
				}
			?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-hover"> 
			<h1 class="text-center">Edit Resep Makanan</h1><br/>
			<thead> 
				<tr> 
					<th>Resep</th> 
					<th>Tanggal</th> 
					<th colspan="2" class="text-center">Action</th> 
				</tr> 
			</thead> 
			<?php
				$user->getRecord('*','recipe');
				while($getData=$user->getArray()){
					echo '
					<tbody> 
					<tr>
						<td>'.$getData[1].'</td> 
						<td>'.$getData[3].'</td> 
						<td class="text-center"><a href="index.php?page=recipe&execute=delete&id='.$getData[0].'"><span class="glyphicon glyphicon-trash" style=""></span></a></td>
					</tr> 
				</tbody> 
					';
					
				}

				$getCount = $user->recordCount();
				if(empty($getCount)){
					echo "<h3>Data Tidak Ada</h3>";
				}

			?>
			</table>
		</div>
	</div>
</div>