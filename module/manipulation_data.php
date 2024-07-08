<?php
require_once "user.class.php";
require_once "../controller/layout.class.php";
require_once "variable.php";
$layout = new Layout();
$user = new User();


if($_GET['execute']=='addBahan'){
    $bahan =$_GET['bahan'];
    $array = array('',$bahan,$id);
    $insert = $user->insert('resep_bahan',$array);

}elseif($_GET['execute']=='view-bahan'){
    $user->getRecord('*','resep_bahan WHERE id_recipe="'.$_GET['id'].'"');
    $count = $user->recordCount();
    if($count>0){
        echo'<table class="table table-hover">  
                <thead> 
                    <tr> 
                        <th>Bahan</th> 
                        <th class="pull-right">Hapus</th> 
                    </tr> 
                </thead> ';
                    
                        while($getData = $user->getArray()){
                            echo '
                    <tbody> 
                        <tr>
                            <td>'.$getData[1].'</td> 
                            <td class="pull-right"><a href="index.php?page=insert-recipe&execute=delete-bahan&id='.$getData[0].'"><span class="glyphicon glyphicon-trash" style=""></span></a></td>
                        </tr> 
                    </tbody> 
                        ';
                        }
        echo '</table>';
  
    }
}elseif($_GET['execute']=='recipe-bahan'){
    $user->getRecord('*','resep_bahan WHERE id_recipe="'.$_GET['id'].'"');
    $i = 1;
    while ($getData = $user->getArray()) {
        echo $i++.'. '.$getData[1].'<br/>';
    }
}elseif($_GET['execute']=='recipe-making'){
    $user->getRecord('*','tb_cara_buat WHERE id_recipe="'.$_GET['id'].'"');
    $i=1;
    while ($getData = $user->getArray()) {
        echo $i++.'. '.$getData[1].'<br/>';
    }
}elseif($_GET['execute']=='view-rating'){
    $user->getRecord('*','view-rating WHERE id_recipe="'.$_GET['id'].'"');
    $i=1;
    while ($getData = $user->getArray()) {
        echo $i++.'. '.$getData[1].'<br/>';
    }
}elseif($_GET['execute']=='addRating'){
    //
}else if($_GET['execute']=='addMaking'){
    $addMaking =$_GET['making'];
    $array = array('',$addMaking,$id);
    $insert = $user->insert('tb_cara_buat',$array);
}else if($_GET['execute']=='addImage'){
    //
    
}elseif($_GET['execute']=='view-making'){
    $user->getRecord('*','tb_cara_buat WHERE id_recipe="'.$_GET['id'].'"');
    $count = $user->recordCount();
    if($count>0){
        echo'<table class="table table-hover">  
                <thead> 
                    <tr> 
                        <th>Bahan</th> 
                        <th class="pull-right">Action</th> 
                    </tr> 
                </thead> ';
                    
                        while($getData = $user->getArray()){
                            echo '
                    <tbody> 
                        <tr>
                            <td>'.$getData[1].'</td> 
                            <td class="pull-right"><a href="index.php?page=insert-recipe&execute=delete-making&id='.$getData[0].'"><span class="glyphicon glyphicon-trash" style=""></span></a></td>
                        </tr> 
                    </tbody> 
                        ';
                        }
        echo '</table>';
    }
}
?>