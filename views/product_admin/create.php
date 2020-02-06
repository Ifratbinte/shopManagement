<?php
include_once '../config.php';
include_once CON_FRONT.'productController.php';
$category = category();

?>
<html>
    <head>
        <?php include "../layout/adminHeader.php";?>

        <script src="../../resources/script/jQuery.js"></script>

        <!-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
        <script src="../../resources/script/images.js"></script>

        <script src="../../resources/script.js"></script>
        <style>
        .uploadedImage{
            height: 200px;
            width: 200px
        }
    </style>
    </head>

    <body>
        
        <br>
        <div class="section-title text-center">
            <h2 style="font-weight: 700;">Admin </h2>
        </div>
        <br>
        <h2>Product admin</h2>
        <h4>Create</h4>
        <a class="btn btn-primary" href="index.php">Back to list</a>
        <br>
        <br>
        
        <div> 
    <form id="uploadForm" method="post" enctype="multipart/form-data">
        <div id="targetLayer"><img src="../../resources/img/default.png" alt=""  style="height:100px;width:100px" id="img"></div>
        <div id="uploadFormLayer">
            <input id="imgUpload" name="userImage" type="file" /><br/>
            <input type="submit" value="Upload" />
            <div id="msgSuccess" style="color:red"></div>
        </div>
    </form>
    </div>

        <form action="" method="POST" style="padding-left: 25% ">
            <input type="hidden" name="proPic" id="proPic" value="">
            Name: <input type="text" name="name">
            <br>
            <br>
            Buying Price: <input type="number" name="buyingPrice">
            <br>
            <br>
            Selling Price: <input type="number" name="sellingPrice">
            <br>
            <br>
            Quantity: <input type="number" name="quantity">
            <br>
            <br>
            Status: <input type="text" name="status">
            <br>
            <br>
            Category: <select name="categoryId" id="" onchange="subcategory(this.value)">
                <option value="" disabled selected>--select one--</option>
                <?php foreach($category as $d)
                { ?>
                    <option value="<?= $d->Id ?>"><?= $d->Id ." : "  ?><?= $d->Name ?></option>
                <?php } ?>
            </select>
            <br>
            <br>
            Sub Category: <select name="subCategoryId" id="subCategory">
                <option value="" disabled selected>--select one--</option>
                
            </select>
            <br>
            <br>
            Description: <input type="text" name="description">
            <br>
            <br>
            <input type="submit" name="submit">
        </form>
            <br>
            <br>
            <br>
            <br>
            <br>
    </body>
            
    <footer>
      <?php include "../layout/adminFooter.php";?>  
    </footer>

</html>
