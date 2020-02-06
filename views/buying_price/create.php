<?php
    include_once '../config.php';
    include_once CON_FRONT.'buyingPriceController.php';
    $product = product();
    $employee = employee();
    
?>
<html>

    <?php include "../layout/adminHeader.php"?>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="section-title text-center">
        <h2 style="font-weight: 700;">Buying Price</h2>
    </div> <br><br><br>   
	  <form action="" method="POST" style="padding-left: 25% ">
        product Id: <select name="productId" id="">
        	<option value="" disabled selected>--select one--</option>
            <?php foreach($product as $p)
            { ?>
                <option value="<?= $p->Id ?>"><?= $p->Id ." : "  ?><?= $p->Name ?></option>
            <?php } ?>
        </select>
        <br>
        <br>
        Buying Price Lot: <input type="number" name="buyingPriceLot">
        <br>
        <br>
        Date Time: <input type="datetime-local" name="dateTime">
        <br>
        <br>
        Quantity: <input type="number" name="quantity">
        <br>
        <br>
        Buying Price: <input type="number" name="buyingPrice">
        <br>
        <br>
        Employee Id: <select name="employeeId" id="">
        	<option value="" disabled selected>--select one--</option>
            <?php foreach($employee as $e)
            { ?>
                <option value="<?= $e->Id ?>"><?= $e->Id ." : "  ?><?= $e->Name ?></option>
            <?php } ?>
        </select>
        <br>
        <br>
        Description: <input type="text" name="description">
        <br>
        <br>
        <input type="submit" name="submit">
    </form>

<br>
<br>
<br>
<br>
<br>
    <?php include "../layout/adminFooter.php"?>

</html>
