<?php
include 'header.php';
 ?>
 <div class="container d-flex justify-content-center">
<a href="index.php"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
<ul>
  <li>Brand : <?php echo $vehicledetailvalue->getBrand(); ?></li>
  <li>Name : <?php echo $vehicledetailvalue->getName(); ?></li>
  <li>type of vehicle : <?php echo $vehicledetailvalue->getType(); ?></li>
  <li>Create date :<?php echo $vehicledetailvalue->getCreateDate(); ?></li>
  <?php
    if ( $vehicledetailvalue->getType() == "car") {
      ?>
        <li>door : <?php echo $vehicledetailvalue->getDoor(); ?></li>
      <?php
    }
    else if($vehicledetailvalue->getType() == "bike") {
      ?>
        <li>provided helmet: <?php echo $a; ?></li>
      <?php
    }
    else {
      ?>
        <li>max speed:<?php echo $vehicledetailvalue->getMaxspeed(); ?></li>
      <?php
    }

   ?>
   <li>
     <a href="update.php?updateid=<?php echo $vehicledetailvalue->getId() ?>" class="btn btn-primary">Update</a>
     <a href="index.php?deleteid=<?php echo $vehicledetailvalue->getId() ?>"class="btn btn-primary">Delete</a>
   </li>
</ul>
</div>

<?php
include 'footer.php';
 ?>
