<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
        <table class="table table-responsive d-flex justify-content-center">
            <tr class="thead-inverse">
                <th>brand</th>
                <th>name</th>
                <th>create_date</th>
                <th>type</th>
                <th>update</th>
                <th>delete</th>
                <th>See more</th>
            </tr>
            <?php foreach ($vehicle as $key => $vehiclevalue) {
              ?>
            <tr>
                <td>
                    <?php echo $vehiclevalue->brand ?>
                </td>
                <td>
                    <?php echo $vehiclevalue->name ?>
                </td>
                <td>
                    <?php echo $vehiclevalue->create_date ?>
                </td>
                <td>
                    <?php echo $vehiclevalue->type ?>
                </td>
                <td><a href="update.php?updateid=<?php echo $vehiclevalue->id ?>"><i class="fa fa-wrench" aria-hidden="true"></i></a></td>
                <td><a href="index.php?deleteid=<?php echo $vehiclevalue->id ?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                <td><a href="details.php?id=<?php echo $vehiclevalue->id ?>"><i class="fa fa-info" aria-hidden="true"></i></a></td>
            </tr>

            <?php
            } ?>

        </table>
    </div>
</div>
