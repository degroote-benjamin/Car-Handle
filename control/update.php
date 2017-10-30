<?php
include "model/connect.php";
// connect db
$manager = new VehicleManager($db);

// if get exist
if(isset($_GET['updateid']))
{
  // object of 1 vehicle
$vehicle = $manager->get($_GET['updateid']);
}

include 'view/update.php';
