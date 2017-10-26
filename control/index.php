<?php
include "model/connect.php";


$manager = new VehicleManager($db);

$vehicle = $manager->getList();
include "view/index.php";
