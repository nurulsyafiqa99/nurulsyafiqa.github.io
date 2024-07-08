
<div class="container" style="padding:60px;">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<?php 
				if($execute=='delete'){
					$delete = $user->delete('category','id="'.$id.'"');
					$layout->alertMessageClose('alert-success','Kategori Berhasil di Hapus');
				}
			?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<table class="table table-hover"> 
			<h1 class="text-center">Edit Kategori Makanan</h1> 
			<thead> 
				<tr> 
					<th>Kategori</th> 
					<th class="text-center">edit</th> 
					<th class="text-center">Hapus</th> 
				</tr> 
			</thead> 
			<?php
				$user->getRecord('*','category');
					while($getCategory = $user->getArray()){
					echo '
					<tbody> 
					<tr>
						<td>'.$getCategory[1].'</td> 
						<td class="text-center"><a href="index.php?page=insert-category&execute=update&id='.$getCategory[0].'"><span class="glyphicon glyphicon-edit" style=""></span></a></td>
						<td class="text-center"><a href="index.php?page=category&execute=delete&id='.$getCategory[0].'"><span class="glyphicon glyphicon-trash" style=""></span></a></td>
					</tr> 
				</tbody> 
					';
				}
			?>
			</table>
		</div>
	</div>
</div>