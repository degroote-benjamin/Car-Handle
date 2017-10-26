<?php
include "model/connect.php";
// connect db
$manager = new VehicleManager($db);

// if click on delete and isset deleteid
if(isset($_GET['deleteid'])){
  $manager->delete($_GET['deleteid']);
}
// get all vehicle from db
if(isset($_GET['id'])){
  $vehicledetailvalue = $manager->get($_GET['id']);
  include "view/details.php";
}
else{
  $vehicle = $manager->getList();
  include "view/index.php";
}
