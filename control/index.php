<?php
include "model/connect.php";
// connect db
$manager = new VehicleManager($db);

//if click on submit add
if(isset($_POST['submitadd'])){
  if(isset($_POST['color'],$_POST['createdate'],$_POST['name'],$_POST['brand'])){
    foreach ($_POST as $key => $value) {
      $data[$key] = strip_tags($value);
    }
$vehicle = new $_POST['type']($data);
$manager->add($vehicle);
  }
}

//if click on submit update
if(isset($_POST['updatesubmit'])){
  foreach ($_POST as $key => $value) {
    $data[$key] = strip_tags($value);
  }
  $vehicle = new $_POST['type']($data);
  $manager->update($vehicle);
}

// if click on delete and isset deleteid
if(isset($_GET['deleteid'])){
  $deletevehicle = $manager->get($_GET['deleteid']);
  $manager->delete($deletevehicle);
}

// get all vehicle from db
if(isset($_GET['id'])){
  $vehicledetailvalue = $manager->get($_GET['id']);
  $a = ($vehicledetailvalue->getType()) ? 'true' : 'false';
  include "view/details.php";
}
else{
  $vehicle = $manager->getList();
  foreach ($vehicle as $key => $value) {
    $list[$key] = new $value['type']($value);
  }
  include "view/index.php";
}
