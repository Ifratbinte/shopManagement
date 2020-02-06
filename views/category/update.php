<?php
    include_once '../config.php';
    include_once CON_FRONT.'categoryController.php';
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
        <h2 style="font-weight: 700;">Product Category Update</h2>
    </div>
     <br>
     <br>
     <br>
     <br>
     <br>
	<form method = "POST" style="padding-left: 25% ">
        <input type="hidden" name="id" value="<?php echo $category[0]->Id; ?>">
        Id: <?php echo $category[0]->Id; ?>
        <br>
        Name: <input type="text" name="Name" id="" value="<?php echo $category[0]->Name ?>">
        <br>
        <br>
        Description: <input type="text" name="Description" id="" value="<?php echo $category[0]->Description ?>">
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