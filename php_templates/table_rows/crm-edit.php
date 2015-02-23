  <?php 
  $key; 
  $email;
  ?>

  <tr>
  	<td>
  		<div class="row option no-margin">
  			<div class="col-md-6 right-half-padding">
         <input type="text" placeholder="<?php echo $key; ?>">
       </div>
       <div class="col-md-4 right-half-padding">
        <?php $text=$email; $left_icon = "icon-user"; include("php_templates/dropdown.php"); ?>
     </div>
     <div class="col-md-1 right-half-padding">
       <span class="btn icon-refresh ringio-icon"></span>
     </div>
     <div class="col-md-1 border-left">
       <span class="btn icon-delete ringio-icon"></span>
     </div>

   </div>
 </td>
</tr>