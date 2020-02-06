<?php
    include '../config.php';
    include CON_FRONT.'productController.php';
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
    <br>
<br><br
    <div class="section-title text-center">
        <h2 style="font-weight: 700;">Admin </h2>
    </div>
    <br>
    <h2>Product Admin</h2>
    <h4>details</h4>
    <a class="btn btn-primary" href="index.php">Back to list</a>   
    <a class="btn btn-primary" href="update.php?Id=<?= $subCat[0]->Id ?>">Edit</a>   
    <br>
    <br>
<img src="<?php echo RSR.$subCat[0]->img_path; ?>" style="height:500px;width:500px" alt="" >
    <div class="detail-content" style="padding-left: 25% ">
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
    Buying Price: <?php echo $subCat[0]->Buying_Price; ?>
    <br>
    <br>
    Selling Price: <?php echo $subCat[0]->Selling_Price; ?>
    <br>
    <br>
    Quantity: <?php echo $subCat[0]->Quantity; ?>
    <br>
    <br>
    Status: <?php echo $subCat[0]->Status; ?>
    <br>
    <br>
    CategoryId: <?php echo $subCat[0]->cid; ?>
    <br>
    <br>
    CategoryName: <?php echo $subCat[0]->cname; ?>
    <br>
    <br>
    SubCategoryId: <?php echo $subCat[0]->SCid; ?>
    <br>
    <br>
    SubCategoryName: <?php echo $subCat[0]->SCname; ?>
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
