<div class="row sidebar-hs">
	<div class="col-md-12">
		<?php 
		
		if(!empty($user->getSession())){
		echo '<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading" style="background:#a76a27;">
					<h3 class="panel-title text-center" style="color:#fff">Menu User</h3>
				</div> <div class="panel-body">
					<p><a href="index.php?page=insert-recipe" class="btn btn-primary btn-xs" role="button"><span class="glyphicon glyphicon-plus" style=""></span></a> Tambah Resep Makanan</p>
					<p><a href="index.php?page=insert-category" class="btn btn-primary btn-xs" role="button"><span class="glyphicon glyphicon-plus" style=""></span></a> Tambah Kategori</p>
					<p><a href="index.php?page=recipe" class="btn btn-primary btn-xs" role="button"><span class="glyphicon glyphicon-plus" style=""></span></a> Edit Resep Makanan</p>
					<p><a href="index.php?page=category" class="btn btn-primary btn-xs" role="button"><span class="glyphicon glyphicon-plus" style=""></span></a> Edit Kategori Makanan</p>';
		$levelUser = $user->getUser($user->getSessionUsername());
		if($levelUser[5]==1){
				echo'<p><a href="index.php?page=approve"  class="btn btn-primary btn-xs" role="button"><span class="glyphicon glyphicon-plus" style=""></span></a> Setujui Post</p>';
		}
		echo'
				</div>
			</div>
		</div>';
		}
		?>
	</div>
	<div class="col-md-12">
	<h4 class="text-center sidebar-head"><span class="glyphicon glyphicon-plus" style=""></span> Resep Terbaru</h4>
		<?php
			$query = "SELECT * FROM recipe WHERE status='1' limit 5";
			$sql = mysql_query($query);
			while($row = mysql_fetch_array($sql)){
				echo '<a href="index.php?page=single-recipe&id='.$row[0].'" class="list-group-item">'.$row[1].'</a> ';
			}
		?>
	</div>
	<div class="col-md-12">
		<h4 class="text-center sidebar-head"><span class="glyphicon glyphicon-tags" style=""></span> Kategori</h4>
			<ul class="nav nav-pills nav-stacked"  style="background:#f0edda;">
				<?php 
					$user->getRecord('*','category');
					while($getRow = $user->getArray()){
						echo '<li> <a href="index.php?page=home&category='.$getRow[1].'"> <span class="badge pull-right"></span>
						<span class="glyphicon glyphicon-chevron-right" style=""></span>'.$getRow[1].'</a></li>';
					}
				?>
			</ul>
	</div>
	<div class="col-md-12">
		<h4 class="text-center sidebar-head"><span class="glyphicon glyphicon-book" style=""></span> Buku Tamu</h4>
			<ul class="nav nav-pills nav-stacked" style="background:#f0edda;">
				<li> <a href="index.php?page=guest-book"> <span class="badge pull-right"></span>Isi Buku Tamu</a></li>
				<li> <a href="index.php?page=view-guest-book"> <span class="badge pull-right"></span>Lihat Buku Tamu</a></li>
			</ul>
	</div>
	<div class="col-md-12">
		<h4 class="text-center sidebar-head">Follow Me on Social Media</h4>
		<div class="col-xs-3">
          <a href="http://www.facebook.com/herysepty"><img src="assets/img/icon-social/facebook.png" class="img-responsive text-center" alt="Responsive image"></a>
        </div>
        <div class="col-xs-3">
          <a href="http://www.twitter.com/herysepty"><img src="assets/img/icon-social/twitter.png" class="img-responsive text-center" alt="Responsive image"></a>
        </div>
        <div class="col-xs-3">
          <a href="http://www.youtube.com/TheGizue"><img src="assets/img/icon-social/youtube.png" class="img-responsive text-center" alt="Responsive image"></a>
        </div>
        <div class="col-xs-3">
          <a href="http://www.instagram.com/herysepty"><img src="assets/img/icon-social/instagram.png" class="img-responsive text-center" alt="Responsive image"></a>
        </div>
			
	</div>
</div>
