<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
        <table class="table table-responsive d-flex justify-content-center my-5">
            <tr class="thead-inverse">
                <th>brand</th>
                <th>name</th>
                <th>create_date</th>
                <th>type</th>
                <th>update</th>
                <th>delete</th>
                <th>See more</th>
            </tr>
            <?php foreach ($list as $key => $vehiclevalue) {
              ?>
            <tr>
                <td>
                    <?php echo $vehiclevalue->getBrand() ?>
                </td>
                <td>
                    <?php echo $vehiclevalue->getName() ?>
                </td>
                <td>
                    <?php echo $vehiclevalue->getCreateDate() ?>
                </td>
                <td>
                    <?php echo $vehiclevalue->getType() ?>
                </td>
                <td><a href="update.php?updateid=<?php echo $vehiclevalue->getId() ?>"><i class="fa fa-wrench" aria-hidden="true"></i></a></td>
                <td><a href="index.php?deleteid=<?php echo $vehiclevalue->getId() ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                <td><a href="index.php?id=<?php echo $vehiclevalue->getId() ?>"><i class="fa fa-info" aria-hidden="true"></i></a></td>
            </tr>

            <?php
            } ?>

        </table>
    </div>
</div>

<?php
include 'footer.php';
 ?>
