<?php
/*Author: Hery Septyadi*/
class Layout{
	function fieldInput($type,$label,$name,$value,$placeholder){
		echo '<div class="form-group"> 
				<label for="'.$name.'">'.$label.'</label>
				<input type="'.$type.'" class="form-control" id="'.$name.'" placeholder="'.$placeholder.'" name="'.$name.'" value="'.$value.'" required></div> ';
	}
	function fieldRadioButton($label,$name,$values,$checked){
		echo '<div class="form-group">
				<label>'.$label.'</label>
				<div class="col-md-12">';
				foreach($values as $key=>$value){
		echo '<div class="checkbox-inline">
				<input type="radio" name="'.$name.'" id="'.$name.'" value="'.$key.'" ';
				if($checked==$key) echo $check = 'checked';
		echo'> '.$value.'</div>';
		}
		echo '</div><label for="'.$name.'" class="error"></label></div>';
	}
	function fieldSelected($label,$name,$values,$selected){
		echo'<div class="form-group"> 
	<label for="name">'.$label.'</label> 
		<select class="form-control" name="'.$name.'"> ';
		echo'<option value="">--Select--</option>' ;
			foreach($values as $key=>$value){
			echo'<option value="'.$key.'"';
				if($selected==$key) echo 'selected';
			echo '>'.$value.'</option>' ;
			}
		echo'
		</select>
	</div>';
	}
	/*
		echo "<input type='checkbox' name='chk_category[]
		-------------------------------------------------
		$array_category = implode(",",$this->getCategory()); 
	}*/
	function fieldChecked($label,$name,$values,$checked){
		echo'<div class="form-group"> 
	<label for="'.$name.'">'.$label.'</label>';
			foreach($values as $key=>$value){
			echo'<div class="checked">
					<label><input type="checkbox" name="'.$name.'" value="'.$key.'" ';
					if($checked==$key) echo 'checked';
			echo'> '.$value.' </label> 	
				</div>';
			}
		echo'
	</div>';
	}
	
	function fieldSubmit($name,$value){
		echo '<div class="form-group">
				<input class="btn btn-primary" type="submit" value="'.$value.'" name="'.$name.'">';
	}
	function fieldTextarea($name,$rows){
		echo '<form role="form"> 
		<div class="form-group"> 
		<label for="'.$name.'">Text Area</label> 
		<textarea class="form-control" rows="'.$rows.'" name="'.$name.'"></textarea> 
		</div> 
		</form>';
	}
	/*
	$alert -> alert-success/alert-info/alert-warning/alert-danger
	*/
	function alertMessageClose($alert,$message){
		echo '<div class="alert '.$alert.' alert-dismissable"> 
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times; </button> 
		<p class="text-center">'.$message.'</p> </div>';
	}
	
}

?>