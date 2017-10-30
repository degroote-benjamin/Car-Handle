<?php
include 'header.php';
 ?>
 <div class="container d-flex justify-content-center">
<a href="index.php"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
<ul>
  <li>Brand : <?php echo $vehicledetailvalue->brand; ?></li>
  <li>Name : <?php echo $vehicledetailvalue->name; ?></li>
  <li>type of vehicle : <?php echo $vehicledetailvalue->type; ?></li>
  <li>Create date :<?php echo $vehicledetailvalue->create_date; ?></li>
  <?php
    if ( $vehicledetailvalue->type == "car") {
      ?>
        <li>door : <?php echo $vehicledetailvalue->door; ?></li>
      <?php
    }
    else if($vehicledetailvalue->type == "bike") {
      ?>
        <li>provided helmet: <?php echo $a; ?></li>
      <?php
    }
    else {
      ?>
        <li>max speed:<?php echo $vehicledetailvalue->max_speed; ?></li>
      <?php
    }

   ?>
   <li>
     <a href="update.php?updateid=<?php echo $vehicledetailvalue->id ?>" class="btn btn-primary">Update</a>
     <a href="index.php?deleteid=<?php echo $vehicledetailvalue->id ?>"class="btn btn-primary">Delete</a>
   </li>
</ul>
</div>

<?php
include 'footer.php';
 ?>
