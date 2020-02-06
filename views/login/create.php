<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form  method="post">
    Username: <input type = "text" name="username"  > <br/> <br/>
    Password: <input type = "password" name="password" value = ""> <br/> <br/>
    <input type="submit" value = "login" name="submit"> <br> <br>
    <button><a href=""></a>Back</button>
    <button>Registration</button>
    </form>
</body>
</html> -->


<?php 
    include '../config.php';
    include CON_FRONT.'loginController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<header>

    <?php include '../layout/header.php';?>
    
</header>
<body>
    <br>    
    <div class="dialog-form">    
        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-md-6 col-md-offset-3 login-form">
                    <h3>User Login</h3>
                    <h5>Welcome back, Login to get started</h5>
                    <form  method="post">
                        <label>Username/Email</label><br>   
                            <input type = "text" name="username"  > <br/> <br/>
                        <label>Password</label><br> 
                            <input type = "password" name="password" value = ""> <br/> <br/>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">Remember me
                            </label>
                        </div>
                            <input type="submit" value = "login" name="submit"> <br> <br>
                        <button><a href="<?php echo VIEW_FRONT ?>index.php"></a>Back</button>
                        <a class="btn btn-primary" href="../customer/create.php">Registartion</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>    

<style>
    .login-form{
        background-color: #f2f2f2;

    }
    .login-form h3,h5{
        color: #000;
        font-weight: 700;
        text-align: center;
    }
    input[type="text"] 
    {
    width: 80%;
    height: 35px;
    position: absolute;
}
    input[type="password"] 
    {
    width: 80%;
    height: 35px;
    position: absolute;
}
    
</style>
<?php include '../layout/footer.php';?>
</html>