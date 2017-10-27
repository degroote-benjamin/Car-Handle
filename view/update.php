<form method="post" action="index.php">
   <div class="form-group">
     <label for="brand">Brand</label>
     <select class="" name="brand" id="brand">
     <?php foreach ($vehicle->type::brand as $key => $value) {
    ?>
      <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
       <?php
} ?>

   </select>
   </div>
   <div class="form-group">
     <label for="name">name</label>
        <input type="text" name="name" value="<?php echo $vehicle->name;?>" id="name">
   </div>
   <div class="form-group">
     <label for="color">color</label>
     <select class="" name="color" id="color">
     <?php foreach (vehicle::color as $key => $value) {
        ?>
      <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
       <?php
    } ?>
   </select>
   </div>
   <?php
          if ($vehicle->type =="car") {
              ?>
        <div class="form-group">
          <label for="door">door</label>
          <select class="" name="door" id="door">
          <?php foreach (car::door as $key => $value) {
                  ?>
           <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
            <?php
              } ?>
        </select>
        </div>
        <?php
      } elseif ($vehicle->type =="bike") {
              ?>
  <div class="form-group">
    <label for="door">helmet</label>
    <select class="" name="door" id="door">
    <?php foreach (bike::helmet as $key => $value) {
                  ?>
     <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
      <?php
              } ?>
  </select>
  </div>
  <?php
} elseif ($vehicle->type =="truck") {
              ?>
<div class="form-group">
  <label for="door">max_speed</label>
  <select class="" name="max_speed" id="door">
  <?php foreach (truck::speed as $key => $value) {
                  ?>
   <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
    <?php
              } ?>
</select>
</div>
<?php
          }
    ?>
    <input type="hidden" name="id" value="<?php echo $vehicle->id;?>">
    <input type="hidden" name="type" value="<?php echo $vehicle->type;?>">
   <input type="submit" class="btn btn-primary" name="updatesubmit">
 </form>
