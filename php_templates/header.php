<?php 

$btn_1 = $btn_2 = $btn_3 = $btn_4 = $btn_5 = $btn_6 = "";

switch($page_title){
  case 'Dashboard':
  $btn_1 = "active";
  break;
  case 'Users':
  $btn_2 = "active";
  break;
  case 'Departments':
  $btn_3 = "active";
  break;
  case 'Phone Numbers':
  $btn_4 = "active";
  break;
  case 'CRM Integrations':
  $btn_5 = "active";
  break;
  case 'CRM Integrations Edit':
  $btn_5 = "active";
  break;
  case 'Premium Features':
  $btn_6 = "active";
  break;
}

?>

<?php include("navbar-top.php"); ?>


<div class="navbar navbar-static-top navbar-bottom-row navbar-ringio" role="navigation">
  <div class="container no-padding">
    <div class="navbar-collapse collapse">
      <ul class="nav nav-justified nav-ringio">
        <li class="<?php echo $btn_1; ?>"><a href="index.php"><span class="ringio-icon icon-carets"></span>Dashboard</a></li>
        <li class="<?php echo $btn_2; ?>"><a href="users.php">Users</a></li>
        <li class="<?php echo $btn_3; ?>"><a href="departments.php">Departments</a></li>
        <li class="<?php echo $btn_4; ?>"><a href="phone-numbers.php">Phone Numbers</a></li>
        <li class="<?php echo $btn_5; ?>"><a href="crm-integrations.php">CRM Integrations</a></li>
        <li class="<?php echo $btn_6; ?>"><a href="premium-features.php">Premium Features</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>

<!-- End Navigation Bar -->

<!-- Begin Main Content Container -->

<div class="container">


