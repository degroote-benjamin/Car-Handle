<?php
include "model/connect.php";
// connect db
$manager = new VehicleManager($db);

//if click on submit add
if(isset($_POST['submitadd'])){
  if(isset($_POST['color'],$_POST['createdate'],$_POST['name'],$_POST['brand'])){
$vehicle = new $_POST['type']($_POST);
var_dump($vehicle);
$manager->add($vehicle);
  }
}

//if click on submit update
if(isset($_POST['updatesubmit'])){
  $vehicle = new $_POST['type']($_POST);
  $manager->update($vehicle);
}

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
