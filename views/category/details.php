<?php
    include '../config.php';
    include CON_FRONT.'categoryController.php';
    $category = details();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

    <?php include "../layout/adminHeader.php";?>
    <br><br>
    <div class="section-title text-center">
        <h2 style="font-weight: 700;">Product Category Details</h2>
    </div>

    <div class="detail-content" style="padding-left: 25% ">
        <br>
     <br>
     <br>
     <br>
     <br>
    Id: <?php echo $category[0]->Id; ?>
    <br>
    <br>
    Name: <?php echo $category[0]->Name; ?>
    <br>
    <br>
    Description: <?php echo $category[0]->Description; ?>

        

    <br>
     <br>
     <br>
     <br>
     <br>
    </div>
    <?php include "../layout/adminFooter.php";?>

    
</body>
</html>
