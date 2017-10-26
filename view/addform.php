<form method="post" action="">
   <div class="form-group">
     <label for="brand">Brand</label>
     <select class="" name="brand" id="brand">
     <?php foreach (vehicle::brand as $key => $value) {
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
     <label for="brand">Brand</label>
     <select class="" name="brand" id="brand">
     <?php foreach (vehicle::color as $key => $value) {
        ?>
      <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
       <?php
    } ?>
   </select>
   </div>
   <div class="form-group">
     <label for="date">create_date</label>
        <input type="date" name="create_date" value="" id="date">
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
    <label for="door">door</label>
    <select class="" name="door" id="door">
    <?php foreach (car::helmet as $key => $value) {
                  ?>
     <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
      <?php
              } ?>
  </select>
  </div>
  <?php
          } else {
              ?>
<div class="form-group">
  <label for="door">max_speed</label>
  <select class="" name="max_speed" id="door">
  <?php foreach (car::spped as $key => $value) {
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
   <input type="submit" class="btn btn-primary">
 </form>
