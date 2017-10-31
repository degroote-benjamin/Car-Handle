<?php
include 'header.php';
 ?>
 <div class="container d-flex justify-content-center">
   <div class="col-1">
   <a href="index.php" class="col-12"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
</div>
<form method="post" action="index.php">
   <div class="form-group">
     <label for="brand">Brand</label>
     <select class="" name="brand" id="brand">
     <?php foreach ($vehicle->getType()::brand as $key => $value) {
     if ($vehicle->getBrand() == $value) {
         ?>
      <option value="<?php echo $value; ?>" selected><?php echo $value; ?></option>
       <?php
     } else {
         ?>
         <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
         <?php
     }
 } ?>

   </select>
   </div>
   <div class="form-group">
     <label for="name">name</label>
        <input type="text" name="name" value="<?php echo $vehicle->getName();?>" id="name">
   </div>
   <div class="form-group">
     <label for="color">color</label>
     <select class="" name="color" id="color">
     <?php foreach (vehicle::color as $key => $value) {
     if ($vehicle->getColor() == $value) {
         ?>
      <option value="<?php echo $value; ?>" selected><?php echo $value; ?></option>
       <?php
     } else {
         ?>
         <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
         <?php
     }
 } ?>
   </select>
   </div>
   <?php
          if ($vehicle->getType() =="car") {
              ?>
        <div class="form-group">
          <label for="door">door</label>
          <select class="" name="door" id="door">
          <?php foreach (car::door as $key => $value) {
                  if ($vehicle->getDoor()== $value) {
                      ?>
           <option value="<?php echo $value; ?>" selected><?php echo $value; ?></option>
            <?php
                  } else {
                      ?>
              <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
              <?php
                  }
              } ?>
        </select>
        </div>
        <?php
      } elseif ($vehicle->getType() =="bike") {
              ?>
  <div class="form-group">
    <label for="helmet">helmet</label>
    <select class="" name="helmet" id="helmet">
    <?php foreach (bike::helmet as $key => $value) {
                  $value1 = ($value) ? 'true' : 'false';
                  if ($vehicle->getHelmet() == $value) {
                      ?>
     <option value="<?php echo $value; ?>" selected><?php echo $value1; ?></option>
      <?php
                  } else {
                      ?>
        <option value="<?php echo $value; ?>"><?php echo $value1; ?></option>
        <?php
                  }
              } ?>
  </select>
  </div>
  <?php
} elseif ($vehicle->getType() =="truck") {
              ?>
<div class="form-group">
  <label for="speed">max_speed</label>
  <select class="" name="maxSpeed" id="speed">
  <?php foreach (truck::speed as $key => $value) {
                  if ($vehicle->getMaxspeed() == $value) {
                      ?>
   <option value="<?php echo $value; ?>" selected><?php echo $value; ?></option>
    <?php
                  } else {
                      ?>
      <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
      <?php
                  }
              } ?>
</select>
</div>
<?php
          }
    ?>
    <input type="hidden" name="id" value="<?php echo $vehicle->getId();?>">
    <input type="hidden" name="type" value="<?php echo $vehicle->getType();?>">
   <input type="submit" class="btn btn-primary" name="updatesubmit">
 </form>
</div>

<?php
include 'footer.php';
 ?>
