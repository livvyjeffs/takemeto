<?php 

if($left_icon===null){
	$left="";
}else{
	$left = "<span class='".$left_icon." ringio-icon left-icon'></span>";
}

?>

<div class="dropdown <?php echo $classes; ?>">
	<div class="btn btn-dropdown dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown">
		<?php echo $left; ?>
		<?php echo $text; ?>
		<span class="icon-toggle"></span>
	</div>
	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
		<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
		<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
		<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
	</ul>
</div>

<?php 

$left_icon = null;
$left = null;
$classes=null;

?>