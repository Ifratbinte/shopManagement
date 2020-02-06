<?php
    include '../config.php';
    include CON_FRONT.'subCategoryController.php';
    $subCat = details();
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

    <div class="detail-content" style="padding-left: 15% ">
        <br>
<br>
<br>
<br>
<br>
    Id: <?php echo $subCat[0]->Id; ?>
    <br>
    <br>
    Name: <?php echo $subCat[0]->Name; ?>
    <br>
    <br>
    CategoryId: <?php echo $subCat[0]->Category_Id; ?>
    <br>
    <br>
    Description: <?php echo $subCat[0]->Description; ?>

    <br>
    <br>
    <br>
    <br>
    <br>
    </div>

    <?php include "../layout/adminFooter.php";?>

</body>
</html>
