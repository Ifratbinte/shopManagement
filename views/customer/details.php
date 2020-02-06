<?php
    include_once '../config.php';
    include_once CON_FRONT.'customerController.php';
    $cust = show();

    //print_r($emp);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php include "../layout/adminHeader.php";?>
	<br><br>

	<div class="section-title text-center">
        <h2 style="font-weight: 700;">Customer Info Details</h2>
    </div>
    <br><br>
	<div class="detail-content" style="padding-left: 15% ">
		<br>
	<br>
	<br>
	<br>
	<br>
		<h1>customer: </h1>
		<h3>details</h3>
		<br>
		<br>
		Id: <?php echo $cust[0]->Id; ?>
		<br>
		<br>
		Name: <?php echo $cust[0]->Name; ?>
		<br>
		<br>
		email: <?php echo $cust[0]->Email; ?>
		<br>
		<br>
		phone: <?php echo $cust[0]->Phone; ?>
		<br>
		<br>
		Address: <?php echo $cust[0]->Address; ?>
		<br>
		<br>
		Join date: <?php echo $cust[0]->Join_Date; ?>
		<br>
		<br>
		login id: <?php echo $cust[0]->Login_Id; ?>
		<br>
		<br>
		<br>
		<br>
		<br>
	</div>

	
	<?php include "../layout/adminFooter.php";?>
		
</body>
</html>
