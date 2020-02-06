<?php
    include_once '../config.php';
    include_once CON_FRONT.'employeeController.php';
    $emp = show();
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php include "../layout/adminHeader.php";?>
    <br>
    <br>
    <br>
    <br>
    <br>

<h1>employee: </h1>
<h3>Edit</h3>
    <form action="" method="post" style="padding-left: 15% ">
        <input type="hidden" name="id" value="<?php echo $emp[0]->Id; ?>">
        id: <?php echo $emp[0]->Id; ?>
        <br>
        <br>
        name: <input type="text" name="name" value="<?php echo $emp[0]->Name; ?>">
        <br>
        <br>
        email: <input type="text" name="email" value="<?php echo $emp[0]->Email; ?>">
        <br>
        <br>
        phone: <input type="number" name="phone" value="<?php echo $emp[0]->Phone_No; ?>">
        <br>
        <br>
        address: <input type="text" name="address" value="<?php echo $emp[0]->Address; ?>">
        <br>
        <br>
        join date: <input type="text" name="joindate" value="<?php echo $emp[0]->Join_Date; ?>">
        <br>
        <br>
        salary: <input type="number" name="salary" value="<?php echo $emp[0]->Salary; ?>">
        <br>
        <br>
        login id: <input type="text" name="loginid" value="<?php echo $emp[0]->Login_Id; ?>">
        <br>
        <br>
        <input type="submit" name="update" value="update">
    </form>
<br>
<br>
<br>
<br>
<br>
    <?php include "../layout/adminFooter.php";?>

</body>
</html>