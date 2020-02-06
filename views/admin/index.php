

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>

<?php include "../layout/adminHeader.php";?>


<div class="card-columns" style="margin-left: 100px;margin-right: 100px;margin-bottom: 350px;margin-top: 20px;">

        <a href="../product_admin/index.php">
            <div class="card bg-primary">
                <div class="card-body text-center">
                    <p class="card-text">product admin</p>
                </div>
            </div>
        </a>

        <a href="../category/index.php">
            <div class="card bg-primary">
                <div class="card-body text-center">
                    <p class="card-text">category</p>
                </div>
            </div>
        </a>

        <a href="../sub_category/index.php">
            <div class="card bg-primary">
                <div class="card-body text-center">
                    <p class="card-text">sub category</p>
                </div>
            </div>
        </a>
        <a href="../employee/index.php">
            <div class="card bg-primary">
                <div class="card-body text-center">
                    <p class="card-text">employee</p>
                </div>
            </div>
        </a>
    </div>
    <a href="../login/logout.php">Louout</a>



<?php include "../layout/adminFooter.php";?>
    
</body>
</html>