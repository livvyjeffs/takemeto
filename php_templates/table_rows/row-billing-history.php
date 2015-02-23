<?php

if($status==='failed'){
	$class = 'red';
}else{
	$class = 'normal';
}

?>

<tr>
	<td><?php echo $date; ?></td>
	<td><?php echo $type; ?></td>
	<td><?php echo $description; ?></td>
	<td><?php echo $amount; ?></td>
	<td><span class="icon ringio-icon <?php echo $class; ?>"></span><span class="<?php echo $class; ?>"><?php echo $status; ?></span></td>
</tr>

<?php

$class=null;

?>