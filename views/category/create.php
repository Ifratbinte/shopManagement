<?php
    include_once '../config.php';
    include_once CON_FRONT.'categoryController.php';
    
?>
<html>
<head>
<script src="../../resources/script/jQuery.js"></script>
    <!-- <script src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
    <script src="../../resources/script/images.js"></script>

    <script src="../../resources/script/script.js"></script>
    <style>
        .uploadedImage{
            height: 200px;
            width: 200px
        }
    </style>
</head>
<body>
    
</body>
    <?php include "../layout/adminHeader.php"?>
    <br><br>
    <div class="section-title text-center">
        <h2 style="font-weight: 700;">Product Catagory</h2>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <form id="uploadForm" method="post" enctype="multipart/form-data">
        <div id="targetLayer"><img src="../../resources/img/default.png" alt="" style="height:100px;width:100px" id="img"></div>
        <div id="uploadFormLayer">
            <input id="imgUpload" name="userImage" type="file" /><br/>
            <input type="submit" value="Upload" />
            <div id="msgSuccess" style="color:red"></div>
        </div>
    </form>
	  <form action="" method="POST" style="padding-left: 25% ">
        <input type="hidden" name="proPic" id="proPic" value="">
        name: <input type="text" name="name">
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
    <?php include "../layout/adminFooter.php"?>
    </body>

</html>
