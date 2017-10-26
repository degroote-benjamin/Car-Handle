<?php
include "model/connect.php";
// connect db
$manager = new VehicleManager($db);

$vehicle = $manager->get($_GET['updateid']);

include 'view/update.php';
