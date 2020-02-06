<?php
    include_once '../config.php';
    include_once CON_FRONT.'buyingPriceController.php';
    $buyingPrice = index();
?>
<html>

    <?php include '../layout/adminHeader.php';?>
     <br>
    <br>

    <div class="section-title text-center">
        <h2 style="font-weight: 700;">Buying Price Show</h2>
    </div> 
    <br>
    <br>
    <br>
    <br>
	<table border="1px" align="center">
        <tr">
            <th>Id</th>
            <th>Product_Id</th>
            <th>Buying_Price</th>
            <th>Date_&_Time</th>
            <th>Option</th>
        </tr>
        <?php foreach($buyingPrice as $e){ ?>
        <tr>
            <td><?= $e->Id ?></td>
            <td><?= $e->Product_Id ?></td>
            <td><?= $e->Buying_Price ?></td>
            <td><?= $e->Date_Time ?></td>
            <td><a href="details.php?Id=<?= $e->Id ?>">details</a> | <a href="update.php?Id=<?= $e->Id ?>">edit</a></td>
        </tr>
        <?php } ?>
    </table>

    <br>
    <br>
    <br>
    <br>
    <br>

    <?php include '../layout/adminFooter.php';?>
</html>