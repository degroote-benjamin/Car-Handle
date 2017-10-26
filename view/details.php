<a href="index.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
<ul>
  <li><?php echo $vehicledetailvalue->brand; ?></li>
  <li><?php echo $vehicledetailvalue->name; ?></li>
  <li><?php echo $vehicledetailvalue->type; ?></li>
  <li><?php echo $vehicledetailvalue->create_date; ?></li>
  <?php
    if ( $vehicledetailvalue->type = "car") {
      ?>
        <li><?php echo $vehicledetailvalue->door; ?></li>
      <?php
    }
    else if($vehicledetailvalue->type = "bike") {
      ?>
        <li><?php echo $vehicledetailvalue->helmet; ?></li>
      <?php
    }
    else {
      ?>
        <li><?php echo $vehicledetailvalue->max_speed; ?></li>
      <?php
    }

   ?>
</ul>
