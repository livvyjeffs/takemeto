  <?php 
  $key; 
  $email;
  ?>
  <div class="row option"><!-- 
    <div class="col-md-12 option">
      <div class="row"> -->
        <div class="col-md-6">
         <input type="text" placeholder="<?php echo $key; ?>">
       </div>
       <div class="col-md-4">
        <?php $text=$email; $left_icon = "icon-user"; include("php_templates/dropdown.php"); ?>
      </div>
      <div class="col-md-2" style="text-align: center">
        <div class="row no-margin">
          <div class="col-md-6">
            <span class="btn icon-refresh ringio-icon"></span>
          </div>
          <div class="col-md-6">
            <span class="btn icon-delete ringio-icon"></span>
          </div>
        </div>
       <!-- <span class="btn icon-refresh ringio-icon"></span>
       <span class="ringio-icon separator"></span>
       <span class="btn icon-delete ringio-icon"></span> -->
<!--    </div>
</div> -->
</div>
</div>