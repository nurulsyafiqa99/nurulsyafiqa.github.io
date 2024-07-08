	<div class="row hs-content">
		<div class="col-md-3">
			<?php include "template/widget/sidebar.php";?>
		</div>
		<div class="col-md-1">
		</div>
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-12">
					<?php
						if(isset($_POST['btnGuestBook'])){
							$array = array('',$message,$username,$dateNow );
							$user->insert('guest_book',$array);
							$layout->alertMessageClose('alert-success','Berhasil di kirim, klik <a href="index.php?page=view-guest-book">Lihat Buku Tamu</a> untuk melihat');
						}
					?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
				<h3 class="text-center" style="margin-bottom:5%" class="text-center">Isi Buku Tamu</h3>
				<form role="form" method="POST"> 
				<div class="form-group"> 
					<div class="form-group">
						<label for="name">Nama Lengkap/username</label> 
						<?php 
							$user->getRecord('full_name','user WHERE username="'.$user->getSession().'"'); 
							$getUser=$user->getArray(); 
						?>
						<input type="text" class="form-control" id="username" placeholder="Nama Lengkap atau Username" name="username" value="<?php echo $getUser[0];?>" <?php if(!empty($getUser[0])) echo 'disabled'; ?> >
					</div>
					<div class="form-group">
					<label for="name">Isi Komentar</label> 
					<textarea class="form-control" rows="5"name="message"></textarea>
					</div>
					<div class="form-group">
					<input type="submit" class="btn btn-default" name="btnGuestBook" value="Kirim">
					</div>
				</div>
				</form>
			</div>
			</div>
		</div>
	</div>