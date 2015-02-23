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
  <td class="col-2 stay-visible"><img class="icon stay-visible" src="<?php echo $img_src; ?>"><?php echo $first_name." ".$last_name ?></td>
  <td class="col-3"><?php echo $phone_number; ?></td>
  <td class="col-4"><?php echo $departments; ?></td>
  <td class="row edit-options stay-visible">
    <button type="button" class="btn btn-ringio btn-cancel stay-visible">Drop this Number</button>
    <button type="button" class="btn btn-ringio btn-cancel stay-visible">Cancel</button>
    <button type="button" class="btn btn-ringio btn-save stay-visible">Save</button>
  </td>
</tr>
<tr>
  <td colspan="4" class="hiddenRow">
    <div id="demo<?php echo $row_number; ?>" class="accordion-body collapse <?php echo $in_or_out; ?>">

      <div class="row outer-container no-margin">

        <div class="col-md-12">
          <div class="row">
            <div data-label="personal-ringio-number">
              <label>Personal Ringio Number</label>
              <div data-type="phone-number"><?php echo $phone_number; ?></div>
            </div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4 right-half-padding"> 
              <label>First Name</label>
              <input type="text" placeholder="<?php echo $first_name; ?>">
            </div>

            <div class="col-md-4 right-half-padding">
              <label>Last Name</label>
              <input type="text" placeholder="<?php echo $last_name; ?>">
            </div>
            <div class="col-md-4"> 
              <label>Email</label>
              <input type="text" placeholder="<?php echo $first_name; ?>@ringio.com">
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4 right-half-padding"> 
              <label>Departments</label>
              <input type="text" placeholder="Reseller Programs">
            </div>
            <div class="col-md-8">
              <label>Receive Calls At</label>
              <div class="row">
                <div class="col-md-3 right-half-padding">
                  <div class="dropdown">
                    <button class="btn btn-dropdown dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                      SIP
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                    </ul>
                  </div>
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