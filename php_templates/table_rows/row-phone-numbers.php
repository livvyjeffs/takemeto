<!-- SAMPLE VARIABLES -->
<!-- $opened = false; $phone_number = ""; $row_number = 1; $main = "Yes"; $label="Ringio Toll Free Number"; $audio="Standard"; $routing = "normal"; -->

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
  <td class="col-1 stay-visible"><?php echo $phone_number; ?>
  </td>
  <td class="col-2 center stay-visible"> 
    <div class="row edit-options stay-visible float-left">
      <div class="btn btn-ringio btn-cancel stay-visible">Drop this Number</div>
    </div>
    <span class="disappear"><?php echo $main; ?></span>
  </td>
  <td class="col-3"><?php echo $label; ?></td>
  <td class="col-4"><?php echo $audio; ?></td>
  <td class="col-5 stay-visible">
    <div class="row edit-options stay-visible float-right">
      <div class="btn btn-ringio btn-cancel stay-visible">Cancel</div>
      <div class="btn btn-ringio btn-save stay-visible">Save</div>
    </div>
    <span class="disappear"><?php echo $routing; ?></span></td>

  </tr>
  <tr>
    <td colspan="5" class="hiddenRow">
      <div id="demo<?php echo $row_number; ?>" class="accordion-body collapse <?php echo $in_or_out; ?>">
        <div class="row outer-container no-margin">
          <div class="col-md-12 data-container" option-container>
            <h1>Greeting</h1>
            <div class="row option" option>
              <div class="col-md-3">
               <div class="input-group option-input-group input-group-sm">
                <span class="input-group-addon">
                  <input type="radio" checked option-controller>
                </span>
                <div class="form-control"><label>Greeting</label></div>
              </div><!-- /input-group -->
            </div>
            <div class="col-md-1 separator">
            </div>
            <div class="col-md-8">
              <div class="row option">
               <div class="col-md-12">
                 <div class="input-group option-input-group input-group-sm">
                  <span class="input-group-addon">
                    <input type="checkbox">
                  </span>
                  <div class="form-control"><label>Greet your callers by name if recognized</label></div>
                </div><!-- /input-group -->
              </div>
            </div>
            <div class="row option">
              <div class="col-md-12">
               <div class="input-group option-input-group input-group-sm">
                <span class="input-group-addon">
                  <input type="checkbox">
                </span>
                <div class="form-control"><label>Announce Company Name</label></div>
              </div><!-- /input-group -->
            </div>
          </div>
          <input type="text" placeholder="Company Name">
        </div>
      </div>
      <div class="row option" option>
        <div class="col-md-3">
         <div class="input-group option-input-group input-group-sm">
          <span class="input-group-addon">
            <input type="radio" option-controller>
          </span>
          <div class="form-control"><label>Custom</label></div>
        </div><!-- /input-group -->
      </div>
      <div class="col-md-1 separator">
      </div>
      <div class="col-md-6">
        <!-- <div class="option no-padding"> -->
        <?php $text="file212.wav"; $classes="option"; include("php_templates/dropdown.php"); ?>
        <!-- </div> -->
        <div class="btn btn-ringio btn-upload">Upload Sound File</div>
      </div>
    </div>
  </div>
  <div class="col-md-12 data-container" option-container>
    <h1>Routing</h1>
    <div class="row option" option>
      <div class="col-md-12">
       <div class="input-group option-input-group input-group-sm">
        <span class="input-group-addon">
          <input type="radio" option-controller>
        </span>
        <div class="form-control"><label>Route based on the Department or Extension selected by the Caller</label></div>
      </div><!-- /input-group -->
    </div>

  </div>
  <div class="row option" option>
   <div class="col-md-6">
     <div class="input-group option-input-group input-group-sm">
      <span class="input-group-addon">
        <input type="radio" checked option-controller>
      </span>
      <div class="form-control"><label>Route all calls to this Department</label></div>
    </div><!-- /input-group -->
  </div>
  <div class="col-md-1 separator">
  </div>
  <div class="col-md-4">
    <!-- <div class="option no-padding"> -->
    <?php $text="Technical Support"; include("php_templates/dropdown.php"); ?>
    <!-- </div> -->
  </div>
</div>
<div class="row option">
  <div class="col-md-12">
   <div class="input-group option-input-group input-group-sm">
    <span class="input-group-addon">
      <input type="checkbox">
    </span>
    <div class="form-control"><label>Route calls differently after hours</label></div>
  </div><!-- /input-group -->
</div>
 <!--     <div class="col-md-12">
       <div class="option option-input-group">
        <input type="checkbox"><label>Route calls differently after hours</label>
      </div>
    </div> -->
  </div>
</div>
<div class="col-md-12 data-container" option-container>
  <h1>On-hold Music</h1>
  <div class="row option" option>

    <div class="col-md-6">
     <div class="input-group option-input-group input-group-sm">
      <span class="input-group-addon">
        <input type="radio" option-controller>
      </span>
      <div class="form-control"><label>Standard Hold Music</label></div>
    </div><!-- /input-group -->
  </div>

</div>
<div class="row option" option>
 <div class="col-md-4">
   <div class="input-group option-input-group input-group-sm">
    <span class="input-group-addon">
      <input type="radio" checked option-controller>
    </span>
    <div class="form-control"><label>Custom Hold Music</label></div>
  </div><!-- /input-group -->
</div>
<div class="col-md-1 separator">
</div>
<div class="col-md-4">
  <div class="option no-padding">
    <?php $text="customhold.wav"; include("php_templates/dropdown.php"); ?>
  </div>
  <div class="btn btn-ringio btn-upload option">Upload Sound File</div>
</div>
</div>
</div>
<div class="col-md-12 data-container">
  <h1>Screen Pop Label & Web Triggers</h1>
  <div class="row option">
   <div class="col-md-12">
     <div class="input-group">
       <span class="input-group-addon">Screen Pop Label</span>
       <div class="form-control">
        <input type="text" placeholder="703-879-8041 // Jon Yu">
      </div>
    </div>
  </div>
</div>
<div class="row option">
  <div class="col-md-12">
   <div class="input-group">
     <span class="input-group-addon">Web Trigger Button</span>
     <div class="form-control">
      <input type="text">
    </div>
  </div>
</div>
</div>
<div class="row option">
  <div class="col-md-12">
   <div class="input-group">
     <span class="input-group-addon">URL to Invoke</span>
     <div class="form-control">
      <div class="input-group option-input-group input-group-sm">
        <span class="input-group-addon">
          <input type="checkbox">
        </span>
        <div class="form-control"><label>Also send phone call data as parameters</label></div>
      </div><!-- /input-group -->
    </div>
  </div>
</div>
   <!--    <div class="col-md-3">
        <label class="input-style">
          URL to Invoke
        </label>
      </div>
      <div class="col-md-8">
       <div class="input-group option-input-group input-group-sm">
        <span class="input-group-addon">
          <input type="checkbox">
        </span>
        <div class="form-control"><label>Also send phone call data as parameters</label></div>
      </div> /input-group  -->
    </div>

  </div>
</div>
</div>
</td>
</tr>