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
  <td class="col-1 stay-visible"><?php echo $phone_number; ?></td>
  <td class="col-2 center"><?php echo $main; ?></td>
  <td class="col-3"><?php echo $label; ?></td>
  <td class="col-4"><?php echo $audio; ?></td>
  <td class="col-5"><?php echo $routing; ?></td>
  <td class="row edit-options stay-visible">
    <button type="button" class="btn btn-ringio btn-cancel stay-visible">Drop this Number</button>
    <button type="button" class="btn btn-ringio btn-cancel stay-visible">Cancel</button>
    <button type="button" class="btn btn-ringio btn-save stay-visible">Save</button>
  </td>
</tr>
<tr>
  <td colspan="5" class="hiddenRow">
    <div id="demo<?php echo $row_number; ?>" class="accordion-body collapse <?php echo $in_or_out; ?>">


      <div class="row outer-container no-margin">
        <div class="col-md-12 data-container" option-container>
          <h1>Greeting</h1>
          <div class="row" option>
            <div class="col-md-3">
              <div class="option option-input-group">
                <input type="radio" name="greeting" value="automatic" checked option-controller>
                <label>Automatic</label>
              </div><!-- /input-group -->
            </div>
            <div class="col-md-1 separator ringio-icon">
            </div>
            <div class="col-md-8">
              <div class="option option-input-group">
                <input type="checkbox" checked><label>Greet your callers by name if recognized</label>
              </div>
              <div class="option option-input-group">
                <input type="checkbox" checked><label>Announce Company Name</label>
              </div>
              <input type="text" placeholder="Company Name">
            </div>
          </div>
          <div class="row" option>
            <div class="col-md-3">
             <div class="option option-input-group">
              <input type="radio" name="greeting" value="custom" option-controller>
              <label>Custom</label>
            </div><!-- /input-group -->
          </div>
          <div class="col-md-1 separator ringio-icon">
          </div>
          <div class="col-md-6">
            <div class="option no-padding">
              <div class="dropdown">
                <button class="btn btn-dropdown dropdown-toggle" type="button" id="greetingDropdown" data-toggle="dropdown">
                  file212.wav
                  <span class="icon-toggle ringio-icon"></span>
                </button>
                <ul class="dropdown-menu" role="menu" aria-labelledby="greetingDropdown">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                </ul>
              </div>
            </div>
            <button class="btn btn-ringio btn-upload">Upload Sound File</button>
          </div>
        </div>
      </div>
      <div class="col-md-12 data-container" option-container>
        <h1>Routing</h1>
        <div class="row" option>
          <div class="col-md-12">
            <div class="option option-input-group">
              <input type="radio" name="routing" value="caller-selected" option-controller><label>Route based on the Department or Extension selected by the Caller</label>
            </div>
          </div>
        </div>
        <div class="row" option>
          <div class="col-md-6">
            <div class="option option-input-group">
              <input type="radio" name="routing" value="department" checked option-controller><label>Route all calls to this Department</label>
            </div>
          </div>
          <div class="col-md-1 separator ringio-icon">
          </div>
          <div class="col-md-4">
            <div class="option no-padding">
             <div class="dropdown">
              <button class="btn btn-dropdown dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown">
                Technical Support
                <span class="icon-toggle ringio-icon"></span>
              </button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
       <div class="col-md-12">
         <div class="option option-input-group">
          <input type="checkbox"><label>Route calls differently after hours</label>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12 data-container" option-container>
    <h1>On-hold Music</h1>
    <div class="row" option>
      <div class="col-md-5">
        <div class="option option-input-group">
          <input type="radio" name="on-hold-music" value="standard" option-controller><label>Standard Hold Music</label>
        </div>
      </div>
    </div>
    <div class="row" option>
      <div class="col-md-4">
        <div class="option option-input-group">
          <input type="radio" name="on-hold-music" value="custom" checked option-controller><label>Custom Hold Music</label>
        </div>
      </div>
      <div class="col-md-1 separator ringio-icon">
      </div>
      <div class="col-md-4">
        <div class="option no-padding">
         <div class="dropdown">
          <button class="btn btn-dropdown dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
            customhold.wav
            <span class="icon-toggle ringio-icon"></span>
          </button>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
          </ul>
        </div>
        
      </div>
      <button class="btn btn-ringio btn-upload">Upload Sound File</button>
    </div>
  </div>
</div>
<div class="col-md-12 data-container">
  <h1>Screen Pop Label & Web Triggers</h1>
  <div class="row">
    <div class="col-md-3">
      <label class="input-style">
        Screen Pop Label</label>
      </div>
      <div class="col-md-8">
        <input type="text" placeholder="703-879-8041 // Jon Yu">
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <label class="input-style">
          Web Trigger Button</label>
        </div>
        <div class="col-md-8">
          <input type="text">
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <label class="input-style">
            URL to Invoke
          </label>
        </div>
        <div class="col-md-8">
          <input type="text">
          <br>
          <div class="option">
            <input type="checkbox"><label>Also send phone call data as parameters</label>
          </div>
        </div>
      </div>
    </div>
  </div>

</td>
</tr>