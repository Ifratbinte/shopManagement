<?php
    include_once '../config.php';
    include_once CON_FRONT.'subCategoryController.php';
    $subCategory = details();
    $cat = category();
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
    <br>
    <br>
    <br>
	<form method = "POST" style="padding-left: 15% ">
        <input type="hidden" name="id" value="<?php echo $subCategory[0]->Id; ?>">
        Id: <?php echo $subCategory[0]->Id; ?>
        <br>
        Name: <input type="text" name="Name" id="" value="<?php echo $subCategory[0]->Name ?>">
        <br>
        <br>
        CategoryId: <select name="categoryId" id="">
            <?php foreach($cat as $d)
            { 
                if($subCategory[0]->Category_Id == $d->Id )
                { ?>
                <option value="<?= $d->Id ?>" selected ><?= $d->Name ?></option>
                    
               <?php  }
               else
               { ?>
                <option value="<?= $d->Id ?>"><?= $d->Name ?></option>
                <?php 
                } 
            } ?>
        </select>
        <br>
        <br>
        Description: <input type="text" name="Description" id="" value="<?php echo $subCategory[0]->Description ?>">
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