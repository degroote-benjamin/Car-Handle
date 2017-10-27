<?php
include "model/connect.php";
// connect db
$manager = new VehicleManager($db);

if(isset($_GET['type'])){
  include 'view/addform.php';
}
else {
  include 'view/selecttype.php';
}

 ?>
