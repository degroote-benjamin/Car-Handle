<?php
include 'header.php';
 ?>
 <div class="container d-flex justify-content-center">
   <div class="col-1">
   <a href="add.php"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
      </div>
<form method="post" action="index.php">
   <div class="form-group">
     <label for="brand">Brand</label>
     <select class="" name="brand" id="brand">
     <?php foreach ($_GET['type']::brand as $key => $value) {
     ?>
      <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
       <?php
 } ?>

   </select>
   </div>
   <div class="form-group">
     <label for="name">name</label>
        <input type="text" name="name" value="" id="name">
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
   <div class="form-group">
     <label for="date">create_date</label>
        <input type="date" name="createdate" value="" id="date">
   </div>
   <?php
      if (isset($_GET['type'])) {
          if ($_GET['type']=="car") {
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
          } elseif ($_GET['type']=="bike") {
              ?>
  <div class="form-group">
    <label for="helmet">helmet</label>
    <select class="" name="helmet" id="helmet">
    <?php foreach (bike::helmet as $key => $value) {
                  $value1 = ($value) ? 'true' : 'false'; ?>

     <option value="<?php echo $value; ?>"><?php echo $value1; ?></option>
      <?php
              } ?>
  </select>
  </div>
  <?php
          } else {
              ?>
<div class="form-group">
  <label for="speed">max_speed</label>
  <select class="" name="maxSpeed" id="speed">
  <?php foreach (truck::speed as $key => $value) {
                  ?>
   <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
    <?php
              } ?>
</select>
</div>
<?php
          }
      }
    ?>
    <input type="hidden" name="type" value="<?php echo $_GET["type"];?>">
   <input type="submit" name="submitadd" class="btn btn-primary">
 </form>

</div>


<?php
include 'footer.php';
 ?>
