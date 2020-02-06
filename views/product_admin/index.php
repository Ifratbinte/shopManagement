<?php
    include_once '../config.php';
    include_once CON_FRONT.'productController.php';
    $product = index();
?>
<html>

<?php include "../layout/adminHeader.php";?>
<br>
<br>
 <div class="section-title text-center">
        <h2 style="font-weight: 700;">Product Admin </h2>
    </div>
  

<br>
<h2>Product Admin</h2>
<h4>index</h4>
<a class="btn btn-primary" href="create.php">Create</a> 
	<table border="1px" align="center">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Sub_Category_Id</th>
            <th>Option</th>
        </tr>
        <?php foreach($product as $e){ ?>
        <tr>
            <td><?= $e->Id ?></td>
            <td><?= $e->Name ?></td>
            <td><?= $e->Sub_Category_Id ?></td>
            <td><a href="details.php?Id=<?= $e->Id ?>">details</a> | <a href="update.php?Id=<?= $e->Id ?>">edit</a></td>
        </tr>
        <?php } ?>
    </table>

    <?php include "../layout/adminFooter.php";?>
<br>
<br>
<br>
<br>
<br>

</html>