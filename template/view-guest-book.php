	<div class="row hs-content">
		<div class="col-md-3">
			<?php include "template/widget/sidebar.php";?>
		</div>
		<div class="col-md-1">
		</div>
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-12">

				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
				<h3 style="margin-bottom:5%" class="text-center"><span class="glyphicon glyphicon-book" style=""></span> Lihat Buku Tamu</h3>
				<?php
				$i=0;
				$style='';
				$user->getRecord('*','guest_book');
				while ($row= $user->getArray()){
				if(($i % 2) == 0){
					$style = 'panel-warning';
				}else{
					$style = 'panel-danger';
				}
				echo'<div class="panel '.$style.'"> 
					<div class="panel-heading"> 
						<h3 class="panel-title"><span class="glyphicon glyphicon-user" style=""></span> '.$row[2].'</h3> 
					</div> 
					<div class="panel-body"> <p>'.$row[1].'</p><p class="pull-right" style="margin-right:2%;"><small><span class="glyphicon glyphicon-time" style=""></span> '.$row[3].'</small></p></div> 

				</div>';
				$i++;
				}
				?>
				</div>
			</div>
		</div>
	</div>
