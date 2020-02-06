<?php
    include_once '../config.php';
    include_once CON_FRONT.'productController.php';
    $product = details();
    $sub = subCategory();
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
    <br>
    <div class="section-title text-center">
        <h2 style="font-weight: 700;">Admin </h2>
    </div>
  

<br>
<h2>Product Admin</h2>
<h4>Update</h4>
<a class="btn btn-primary" href="index.php">Back to list</a>   

<br>
<br>
	<form method = "POST" style="padding-left: 15% ">
        <input type="hidden" name="id" value="<?php echo $product[0]->Id; ?>">
        Id: <?php echo $product[0]->Id; ?>
        <br>
        <br>
        Name: <input type="text" name="name" id="" value="<?php echo $product[0]->Name ?>">
        <br>
        <br>
        Buying Price: <input type="number" name="buyingPrice" id="" value="<?php echo $product[0]->Buying_Price ?>">
        <br>
        <br>
        Selling Price: <input type="Number" name="sellingPrice" id="" value="<?php echo $product[0]->Selling_Price ?>">
        <br>
        <br>
        Quantity: <input type="number" name="quantity" id="" value="<?php echo $product[0]->Quantity ?>">
        <br>
        <br>
        status: <input type="text" name="status" id="" value="<?php echo $product[0]->Status ?>">
        <br>
        <br>
        
        Sub Category Id: <select name="subCategoryId" id="">
            <?php foreach($sub as $d)
            { 
                
                if($product[0]->Sub_Category_Id == $d->Id )
                { ?>
                <option value="<?= $d->Id ?>" selected ><?= $d->Name ?></option>
                    
               <?php  }
               else
               { ?>
                <option value="<?= $d->Id ?>"><?= $d->Name ?></option>
                <?php 
                }
            }
         ?>
        </select>
        <br>
        <br>
        Description: <input type="text" name="description" id="" value="<?php echo $product[0]->Description ?>">
        <br>
        <br>
        <input type="submit" name="update" id="" value = "update">

        <br>
        <br>
        <br>
        <br>
        <br>
    </form>    

        <?php include "../layout/adminFooter.php";?>


</body>
</html>