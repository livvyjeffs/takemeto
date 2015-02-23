<?php

if($checked){
	$checked = "checked";
}else{
	$checked="";
}
?>

<label class="switch switch-light switch-ios" style="width: 70px" onclick="">
	<input type="checkbox" <?php echo $checked; ?>>
	<span>
		<span>Off</span>
		<span>On</span>
	</span>
	<a></a>
</label>