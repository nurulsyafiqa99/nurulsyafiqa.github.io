 <div class="modal fade" id="modalBahan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
 	<div class="modal-dialog"> 
 		<div class="modal-content"> 
 			<div class="modal-header"> 
 				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> 
 					<h4 class="modal-title" id="myModalLabel">Masukan Nama Bahan</h4> 
 			</div> 
	 			<div class="modal-body">
		 			<div class="form-group"> 
						<input type="text" class="form-control" id="idRecipe" placeholder="Nama Resep" name="idRecipe" disabled="disabled" required>
					</div> 
					<div class="form-group"> 
						<label for="JudulResep">Nama Bahan</label>
						<input type="text" class="form-control" id="addBahan" placeholder="Nama Resep" name="addBahan"  required>
					</div> 
	 			</div> 
	 			<div class="modal-footer"> 
	 			<button type="button" class="btn btn-default" data-dismiss="modal">Tutup </button> 
	 			<button type="button" class="btn btn-primary" id="btnTambahBahan" name="btnTambahBahan"> Simpan </button> 
	 			</div> 

 		</div><!-- /.modal-content --> 
 	</div><!-- /.modal -->
 </div>

 <!-- add Image -->

  <div class="modal fade" id="modalAddImage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
 	<div class="modal-dialog"> 
 		<div class="modal-content"> 
 			<div class="modal-header"> 
 				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> 
 					<h4 class="modal-title" id="myModalLabel">Tambah Gambar</h4> 
 			</div> 
	 			<div class="modal-body">
		 			<div class="form-group"> 
						<input type="text" class="form-control" id="idRecipe" placeholder="Nama Resep" name="idRecipe" required>
					</div> 
					<div class="form-group"> 
						<label for="JudulResep">Pilih Gambar</label>
						<input type="file" id="addImage" name="addImage" required>
					</div> 
	 			</div> 
	 			<div class="modal-footer"> 
	 			<button type="button" class="btn btn-default" data-dismiss="modal">Tutup </button> 
	 			<button type="button" class="btn btn-primary" id="btnAddImage" name="btnAddImage"> Simpan </button> 
	 			</div> 

 		</div><!-- /.modal-content --> 
 	</div><!-- /.modal -->
 </div>
 <!-- add Making -->

  <div class="modal fade" id="modalAddMaking" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
 	<div class="modal-dialog"> 
 		<div class="modal-content"> 
 			<div class="modal-header"> 
 				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button> 
 					<h4 class="modal-title" id="myModalLabel">Tambah Cara Buat</h4> 
 			</div> 
	 			<div class="modal-body">
		 			<div class="form-group"> 
						<input type="text" class="form-control" id="idRecipe" placeholder="Nama Resep" name="idRecipe" disabled="disabled" required>
					</div> 
					<div class="form-group"> 
						<input type="text" class="form-control" id="addMaking" placeholder="Nama Resep" name="addMaking" required>
					</div>  
	 			</div> 
	 			<div class="modal-footer"> 
	 			<button type="button" class="btn btn-default" data-dismiss="modal">Tutup </button> 
	 			<button type="button" class="btn btn-primary" id="btnAddMaking" name="btnTambahBahan"> Simpan </button> 
	 			</div> 

 		</div><!-- /.modal-content --> 
 	</div><!-- /.modal -->
 </div>