<?php 

$precon = "";

switch($page_title){
  case "Users":
  $icon_class = "user";
  $h1 = "Users";
  $h2 = "& Personal Numbers";
  break;
  case "Departments":
  $icon_class = "department";
  $h1 = "Departments";
  $h2 = "& Hunt Groups";
  break;
  case "Phone Numbers":
  $icon_class = "phone-numbers";
  $h1 = "Phone Numbers";
  $h2 = "& Routing";
  break;
  case "Dashboard":
  $icon_class = "user";
  $h1 = "Users";
  $h2 = "& Personal Numbers";
  break;
  case "CRM Integrations":
  $icon_class="crm";
  $h1 = "CRM Integrations";
  $h2 = "& API Access";
  break;
  case "CRM Integrations Edit":
  $icon_class="highrise";
  $precon_class="caret";
  $precon = "<span class='pull-left glyphicon glyphicon-".$precon_class." large'></span>";
  $h1 = "HighRise";
  $h2 = "Sync Contacts & Notes";
  break;
  case "Billing":
  $icon_class="billing";
  $h1 = "Billing";
  $h2 = "& Account Information";
  break;
  case "Billing History":
  $icon_class="billing-history";
  $precon_class="caret";
  $precon = "<span class='pull-left glyphicon glyphicon-".$precon_class." large'></span>";
  $h1 = "History";
  $h2 = "& Account Payments";
  break; 
  case "Premium Features":
  $icon_class="premium-features";
  $h1 = "Premium Features";
  $h2 = "& Other Settings";
  break;
}

?>

<div class="row">
  <div class="page-header">
   <ul class="media-list">
    <li class="media">
      <?php echo $precon; ?>
      <span class="pull-right glyphicon glyphicon-<?php echo $icon_class ?> large"></span>
      <div class="media-body">
        <h1 class="media-heading"><?php echo $h1; ?></h1>
        <h2 class="media-heading"><?php echo $h2; ?></h2>
      </div>
    </li>
  </ul>
</div>
</div>