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

?>

<tr data-toggle="collapse" data-target="#demo<?php echo $row_number; ?>" class="accordion-toggle <?php echo $collapsed; ?>" aria-expanded="<?php echo $opened; ?>">
  <td class="col-1 stay-visible"><?php echo $name; ?><span class="span-container"><span class="ringio-icon icon-users"></span><span class="user-number"><?php echo $user_number; ?></span></span></td>
  <td class="col-2 center"><?php echo $callers; ?></td>
  <td class="col-3 stay-visible">
    <div class="row edit-options stay-visible float-right">
      <button type="button" class="btn btn-ringio btn-cancel stay-visible">Cancel</button>
      <button type="button" class="btn btn-ringio btn-save stay-visible">Save Changes</button>
    </div>
    <span class="disappear"><?php echo $routing_method; ?></span>
  </td>
<!--   <td class="row edit-options stay-visible">
    <button type="button" class="btn btn-ringio btn-cancel stay-visible">Cancel</button>
    <button type="button" class="btn btn-ringio btn-save stay-visible">Save Changes</button>
  </td> -->
</tr>
<tr>
  <td colspan="3" class="hiddenRow">
    <div id="demo<?php echo $row_number; ?>" class="accordion-body collapse <?php echo $in_or_out; ?>">
      <div class="row outer-container no-margin">
        <div class="col-md-12 data-container">
          <h1>General</h1>
          <div class="row option">
            <div class="col-md-12">
             <div class="input-group">
              <span class="input-group-addon">Department Name</span>
              <div class="form-control">
                <input type="text" placeholder="<?php echo $name; ?>">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 data-container">
        <h1>Routing</h1>
        <div class="row option">
          <div class="col-md-5">
           <div class="input-group">
            <span class="input-group-addon">Routing</span>
            <div class="form-control">
              <?php $text="Smart Auto"; include("php_templates/dropdown.php"); ?>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <table class="table option">
            <thead>
              <tr>
                <th style="width: 180px">User</th>
                <th style="width: 80px">Order</th>
                <th></th>       
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <img class="profile-icon" src="images/sam.png">Sam Aparicio
                </td>
                <td>
                  <?php $text="1"; include("php_templates/dropdown.php"); ?>
                </td>
                <td>
                  <span class="close btn"></span>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="btn btn-add-user btn-medium-blue">Add User</div>
        </div>
      </div>
    </div>
    <div class="col-md-12 data-container">
      <h1>Audio</h1>
      <div class="row option">
        <div class="col-md-3">
          <label class="text-right">Before finding a User</label>
        </div>
        <div class="col-md-4">
          <?php $text="Technical Support"; $left_icon = "icon-sound"; include("php_templates/dropdown.php"); ?>
        </div>
        <div class="col-md-1 separator">
        </div>
        <div class="col-md-4">
          <div class="btn btn-upload-sound-file btn-medium-blue">Upload Sound File</div>
        </div>
      </div>
      <div class="row option">
        <div class="col-md-3">
          <label class="text-right">No one Available</label>
        </div>
        <div class="col-md-4">
          <?php $text="unavailable21.wav"; $left_icon = "icon-sound"; include("php_templates/dropdown.php"); ?>
        </div>
        <div class="col-md-1 separator">
        </div>
        <div class="col-md-4">
          <div class="btn btn-upload-sound-file btn-medium-blue">Upload Sound File</div>
        </div>
      </div>
    </div>
    <div class="col-md-12 data-container" option-container>
      <h1>Out of Hours</h1>
      <div class="row option">
        <div class="col-md-6">
          <div class="input-group">
            <span class="input-group-addon">Business Hours</span>
            <div class="form-control">
              <?php $text="Custom Hours"; include("php_templates/dropdown.php"); ?>
            </div>
          </div>

        </div>
        <div class="col-md-3">
          <div class="input-group">
            <span class="input-group-addon">Start</span>
            <div class="form-control">
              <?php $text="09:00"; include("php_templates/dropdown.php"); ?>
            </div>
          </div>

        </div>
        <div class="col-md-3">
          <div class="input-group">
            <span class="input-group-addon">Finish</span>
            <div class="form-control">
              <?php $text="15:20"; include("php_templates/dropdown.php"); ?>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>

</td>
</tr>