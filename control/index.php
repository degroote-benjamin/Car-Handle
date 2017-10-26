<?php
include "model/connect.php";
// connect db
$manager = new VehicleManager($db);

if(isset($_GET['deleteid'])){
  $manager->delete($_GET['deleteid']);
}
// get all vehicle from db
$vehicle = $manager->getList();
include "view/index.php";
