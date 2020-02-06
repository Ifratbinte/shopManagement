<?php
    include '../config.php';
    include CON_FRONT.'orderController.php';
    $order = details();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

    <?php include "../layout/adminHeader.php";?>

    <br>
    <br>
    <br>
    <br>
    <br>

	Id: <?php echo $order[0]->Id; ?>
    <br>
    <br>
    Product Id: <?php echo $order[0]->Product_Id; ?>
    <br>
    <br>
    Customer Id: <?php echo $order[0]->Customer_Id; ?>
    <br>
    <br>
    Quantity: <?php echo $order[0]->Quantity; ?>
    <br>
    <br>
    Price: <?php echo $order[0]->Price; ?>
    <br>
    <br>
    Total Price: <?php echo $order[0]->Total_Price; ?>
    <br>
    <br>
    Invoice: <?php echo $order[0]->Invoice_Id; ?>
    <br>
    <br>

    <br>
    <br>
    <br>

    <?php include "../layout/adminFooter.php";?>
	
</body>
</html>