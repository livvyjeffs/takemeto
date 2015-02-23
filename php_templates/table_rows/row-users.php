<!-- variables are $opened, $first_name, $last_name, $phone_number, $row_number -->

<?php 

if($opened){
  $collapsed = "";
  $opened = "true";
  $in_or_out = "in";
}else{
  $collapsed = "collapsed";
  $opened= "false";
  $in_or_out = "";
}

if($checked){
  $checked="checked";
}else{
  $checked="";
}

if($img_src === undefined){
  $img_src="";
}

?>

<tr data-toggle="collapse" data-target="#demo<?php echo $row_number; ?>" class="accordion-toggle <?php echo $collapsed; ?>" aria-expanded="<?php echo $opened; ?>">
  <td class="col-1 stay-visible centered"><input class="stay-visible" type="checkbox" <?php echo $checked; ?>></td>
  <td class="col-2 stay-visible"><img class="profile-icon stay-visible" src="<?php echo $img_src; ?>"><?php echo $first_name." ".$last_name ?></td>
  <td class="col-3"><?php echo $phone_number; ?></td>
  <td class="col-4 stay-visible">
    <div class="row edit-options stay-visible float-right">
      <div role="button" class="btn btn-ringio btn-cancel stay-visible">Cancel</div>
      <div role="button" class="btn btn-ringio btn-save stay-visible">Save Changes</div>
    </div>
    <span class="disappear"> <?php echo $departments; ?></span>
  </td>
</tr>
<tr>
  <td colspan="4" class="hiddenRow">
    <div id="demo<?php echo $row_number; ?>" class="accordion-body collapse <?php echo $in_or_out; ?>">
     <div class="row outer-container no-margin">
       <div class="col-md-12 data-container">
        <div class="row option">
          <div data-label="personal-ringio-number">
            <label>Personal Ringio Number</label>
            <div data-type="phone-number"><?php echo $phone_number; ?></div>
          </div>
        </div>
        <div class="row option">
          <div class="col-md-4"> 
            <label>First Name</label>
            <input type="text" placeholder="<?php echo $first_name; ?>">
          </div>
          <div class="col-md-4">
            <label>Last Name</label>
            <input type="text" placeholder="<?php echo $last_name; ?>">
          </div>
          <div class="col-md-4"> 
            <label>Email</label>
            <input type="text" placeholder="<?php echo $first_name; ?>@ringio.com">
          </div>
        </div>
        <div class="row option">
          <div class="col-md-4"> 
            <label>Departments</label>
            <input type="text" placeholder="Reseller Programs">
          </div>
          <div class="col-md-8">
            <label>Receive Calls At</label>
            <div class="row option">
              <div class="col-md-3">
                <?php $text="SIP"; include("php_templates/dropdown.php"); ?>
              </div>
              <div class="col-md-9">
                <input type="text" placeholder="<?php echo $first_name; ?>@ringio.onsip.com">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</td>
</tr>