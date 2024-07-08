<div class="row">
	<div class="col-md-6 col-md-offset-3 hs-insert-data">
		<div class="row">
			<div class="col-md-12">
				<?php
					if(!empty($_POST['btnInsert'])){
							$user->getRecord('*',"category WHERE category = '".$category."'");
							$getCountCategory = $user->recordCount();
							if($getCountCategory >0){
								$layout->alertMessageClose('alert-danger','Kategori Sudah ada');
							}else{
								$data = array('',$category);
								$insertCategory = $user->insert('category',$data);
								if($insertCategory>0){
									$layout->alertMessageClose('alert-success','Kategori Berhasil di tambah');
								}else{
									$layout->alertMessageClose('alert-danger','Gagal');
								}
							}
					}else if(!empty($_POST['btnUpdate'])){
							$data = array('category'=>$category);
							$user->update("category",$data,"id='$id'");
							$layout->alertMessageClose('alert-success','Kategori Berhasil di Ubah');
						}
					$user->getRecord('*','category WHERE id="'.$id.'"');
					$getData= $user->getArray();
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
			<h1 class="text-center"><?php if($execute=='update') echo"ubah"; else echo "Tambah";?> Kategori Makanan</h1><br/>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
			<form class="form-horizontal" role="form" method="post" action=""> 
				<div class="form-group"> 
					<label for="category">Kategori</label>
					<input type="text" class="form-control" id="category" placeholder="Kategory" name="category" value="<?php if($execute=='update'){echo $getData[1];}?>">
				</div> 
				</div>
				<div class="form-group">
					<?php if($execute=='update'){
						echo '<input class="btn btn-primary" type="submit" value="Ubah" name="btnUpdate">';
					}else{
						echo '<input class="btn btn-primary" type="submit" value="Tambah" name="btnInsert">';
					}
					?>
				</div>
			</form>
		</div>
	</div>
</div>