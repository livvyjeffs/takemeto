<?php

$btn_1 = $btn_2 = $btn_3 = $btn_4 = $btn_5 = $btn_6 = $white_bg = "";

switch($page_title){
  case 'Dashboard':
  $btn_1 = "active";
  $white_bg="white-bg";
  break;
  case 'Support':
  $btn_2 = "active";
  break;
  case 'Billing':
  $btn_3 = "active";
  break;
  case 'Billing History':
  $btn_3 = "active";
  break;
  case 'Get Ringio':
  $btn_4 = "active";
  break;
}

?>

<?php include("navbar-top.php"); ?>

<div class="navbar navbar-static-top navbar-bottom-row navbar-ringio <?php echo  $white_bg; ?>" role="navigation">
  <div class="container">
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav nav-ringio">
        <li class="<?php echo $btn_1; ?>"><a href="index.php"><span class="ringio-icon icon-dashboard"></span>Dashboard</a></li>
        <li class="<?php echo $btn_2; ?>"><a href="#"><span class="ringio-icon icon-sound"></span>Support</a></li>
        <li class="<?php echo $btn_3; ?>"><a href="billing.php"><span class="ringio-icon icon-credit"></span>Billing</a></li>
        <li class="<?php echo $btn_4; ?>"><a href="#"><span class="ringio-icon icon-download"></span>Get Ringio</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<!-- End Navbar -->

<!-- Begin Main Content Container -->

<div class="container <?php echo $white_bg; ?>">