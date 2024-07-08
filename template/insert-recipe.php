<div class="row">
	<div class="col-md-6 col-md-offset-3 hs-insert-data">
	<div class="row">
		<div class="col-md-12">
			<?php 
				if(ISSET($_POST['btnInsert'])){ 
					if(file_exists($dirImage.$image)){
						$layout->alertMessageClose('alert-danger','Gambar sudah ada');
					}else{
						if($sizeImage>0 || $imgError>0){
							$file_move=move_uploaded_file($imgTmp,$dirImage.$image);
							$user->getRecord('*','user WHERE username="'.$user->getSession().'"');
							$getUser = $user->getArray();
							$array = array($user->autonumber('recipe','Id','4','R'),$titleRecipe,$dirImage.$image,$descript,$dateNow,$getUser[5],'1',$getUser[0],$category);
							$user->insert('recipe',$array);
							$layout->alertMessageClose('alert-success','Resep Berhasil disimpan');
						}
					}
				}else if($execute=='delete-bahan'){
					$user->delete('resep_bahan','id="'.$id.'"');
					$layout->alertMessageClose('alert-success','Bahan Berhasil dihapus');
				}else if($execute=='delete-making'){
					$user->delete('tb_cara_buat','id="'.$id.'"');
					$layout->alertMessageClose('alert-success','"Cara buat" Berhasil dihapus');
				}else if($execute=='clear'){
					$user->delete('resep_bahan','id_recipe="'.$id.'"');
					$user->delete('tb_cara_buat','id_recipe="'.$id.'"');
					$layout->alertMessageClose('alert-success','Data Berhasil dihapus');
				}
			?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
		<h1 class="text-center"> <?php if($action=='update'){ echo "Edit"; }else{ echo "Tambah"; } ?> Resep Makanan</h1><br/>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
		<form class="form-horizontal" role="form" method="POST" action="" enctype="multipart/form-data"> 
			<div class="form-group"> 
				<input type="text" class="form-control" id="idRecipe" placeholder="" name="idRecipe" value="<?php echo $user->autonumber('recipe','Id','4','R');?>" disabled="disabled" reqired>
			</div> 
			<div class="form-group"> 
				<label for="JudulResep">Nama Resep</label>
				<input type="text" class="form-control" id="titleRecipe" placeholder="Nama Resep" name="titleRecipe" required>
			</div> 
			<div class="form-group"> 
				<label for="inputfile">Pilih Gambar</label> 
				<input type="file" id="inputfile" name="imgRecipe"> 
					<p class="help-block">Format Gambar JPG, PNG.</p> 
			</div> 
			<!-- <div class="form-group">
				<a href="#modalAddImage" class="btn btn-primary btn-xs" id="sendParameterImage" role="button" data-id="<?php echo $user->autonumber('recipe','Id','4','R');?>" data-toggle="modal" data-target="#modalAddImage"><span class="glyphicon glyphicon-plus" style=""></span></a> Tambah Gambar
			</div>
			<div class="view-image">
			</div> -->

			<div class="form-group">
				<a href="#modalBahan" class="btn btn-primary btn-xs" id="sendParameterBahan" role="button" data-id="<?php echo $user->autonumber('recipe','Id','4','R');?>" data-toggle="modal" data-target="#modalBahan"><span class="glyphicon glyphicon-plus" style=""></span></a> Tambah Bahan
			</div>
			<div class="view-bahan">
			</div>

			<div class="form-group">
				<a href="#modalAddMaking" class="btn btn-primary btn-xs" id="sendParameterMaking" role="button" data-id="<?php echo $user->autonumber('recipe','Id','4','R');?> " data-toggle="modal" data-target="#modalAddMaking"><span class="glyphicon glyphicon-plus" style=""></span></a> Tambah Cara Buat
			</div>
			<div class="view-making">
			</div>

			<!-- <div class="form-group"> 
				<label for="JudulResep">Tambah Bahan</label>
				<input type="text" class="form-control" id="addBahan" placeholder="Bahan" name="addBahan" required><br/>
				<button class="btn btn-primary" id="btnTambahBahan" name="btnTambahBahan">Add</button>
			</div>  -->

			<div class="form-group"> 
				<label for="name">Deskripsi Resep Makanan</label> 
				<textarea class="form-control" rows="5" name="descript"></textarea>
			</div>
			<div class="form-group"> 
				<label for="name">Category</label> 
				<select class="form-control" name="category"> 
					<?php
						$user->getRecord('*','category');
						while($rowCategory = $user->getArray()){
							echo "<option value='".$rowCategory[1]."'>".$rowCategory[1]."</option>";
						}
					?>
				</select> 
			</div>
			</div>
			<div class="form-group">
				<input class="btn btn-primary" type="submit" value="Simpan" name="btnInsert">
				<a href="index.php?page=insert-recipe&execute=clear&id=<?php echo $user->autonumber('recipe','Id','4','R');?>" class="btn btn-primary btn-md" role="button">Batal<a/>
			</div> 
		</form>
	</div>
	</div>
</div>

<!-- <button type="button" id="btnDeleteBahan" class="btn btn-default">Add</button> -->