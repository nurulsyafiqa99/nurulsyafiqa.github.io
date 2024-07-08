
<div class="row">
	<div class="col-md-12">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="row">
					<div  class="col-sm-12">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span></button>
							<a class="navbar-brand" href="index.php">Resep Makanan  |</a>
						</div>
						<div class="collapse navbar-collapse" id="example-navbar-collapse">
							<ul class="nav navbar-nav">
								<li ><a href="index.php?page=home"><span class="glyphicon glyphicon-home" style=""></span></a></li>
								<li><a href="index.php?page=guest-book" data-toggle="tooltip" data-placement="bottom" title="Isi Buku tamu">Isi Buku tamu</a></li>
								<li><a href="index.php?page=view-guest-book" data-toggle="tooltip" data-placement="bottom" title="Lihat Buku Tamu">Lihat Buku tamu</a></li>
								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Kategori <b class="caret"></b> </a>

									<ul class="dropdown-menu">
									<?php
									$query = "SELECT * FROM category order by category ASC";
									$sql = mysql_query($query);
									while($row = mysql_fetch_array($sql)){
										echo'<li><a href="index.php?page=home&category='.$row[1].'">'.$row[1].'</a></li> ';
									}
									?>
									</ul> 
								</li> 
								<li><a href="index.php?page=help" data-toggle="tooltip" data-placement="bottom" title="Bantuan">Bantuan</a></li>
							</ul> 
							<?php 
								if(empty($user->getSession())){
							echo'
								<ul class="nav navbar-nav pull-right">
										<li><a href="signin.php">Masuk</a></li>
										<li><a href="signup.php" data-toggle="tooltip" data-placement="bottom" title="">Daftar</a></li>
								</ul>';
								}else{
								echo '<div class="dropdown navbar-text pull-right">Selamat Datang <a data-toggle="dropdown" href="#">'.$user->getSession().'<span class="caret"></span></a> 
									<ul class="dropdown-menu">
											<li class="divider"></li> 
											<li><a href="" data-toggle="modal" data-target="#myModal">Profile</a></li> 
											<li class="divider"></li> 
											<li><a href="index.php?action=logout">Keluar</a></li>
									</ul>
								</div>';
								}
								?>
					</div>
					</div>
				</div>
			</div>
		</nav>
	</div>
</div>