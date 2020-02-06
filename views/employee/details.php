<?php
    include_once '../config.php';
    include_once CON_FRONT.'employeeController.php';
    $emp = show();

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

	<div class="detail-content" style="padding-left: 15% ">
		<br>
	<br>
	<br>
	<br>
	<br>
		<h1>employee: </h1>
		<h3>details</h3>
		<br>
		<br>
		Id: <?php echo $emp[0]->Id; ?>
		<br>
		<br>
		Name: <?php echo $emp[0]->Name; ?>
		<br>
		<br>
		email: <?php echo $emp[0]->Email; ?>
		<br>
		<br>
		phone: <?php echo $emp[0]->Phone_No; ?>
		<br>
		<br>
		Address: <?php echo $emp[0]->Address; ?>
		<br>
		<br>
		Join date: <?php echo $emp[0]->Join_Date; ?>
		<br>
		<br>
		salary: <?php echo $emp[0]->Salary; ?>
		<br>
		<br>
		login id: <?php echo $emp[0]->Login_Id; ?>
		<br>
		<br>
	

	<br>
	<br>
	<br>
	<br>
	<br>
	</div>
	
	<?php include "../layout/adminFOoter.php";?>
</body>
</html>
