<?php
    include_once 'baseController.php';


    function getUid(){
        $id = $_SESSION['userId'];
        $type = $_SESSION['userType'];
        // echo $id;
        if($type == 'user')
        {
             $sql = "select * from customer where Login_Id = ".$id;
 
             $jsonResult = readQuery($sql);
             $data = json_decode($jsonResult);
             $_SESSION["custId"] = $data[0]->Id;
             $cid = $_SESSION['custId'];

             $sql = "select * from productcart where Customer_Id = ".$cid;
             $jsonResult = readQuery($sql);
             $cartdata = json_decode($jsonResult);

             return $cartdata;
 
        }
       
     }


     function ajaxAddToCart($pid,$qnty)
    {
        $cid = $_SESSION['userId'];
        $sql = "select * from cart where Product_Id = ".$pid." and Customer_Id = ".$cid."";
        $j = readQuery($sql);
        $cart = json_decode($j);

        if($cart != null)
        {
            $qnty += $cart[0]->Quantity;
            if($qnty > 0)
            {
                $sq = "update cart set Quantity = ".$qnty." where Product_Id=".$pid." and Customer_Id = ".$cid." ";
                $result = deleteAndUpdateQuery($sq);
                //return $result;
            }
            
        }
        else
        {
            $sql = "INSERT INTO `cart`(`Id`, `Product_Id`, `Customer_Id`, `Quantity`) VALUES (null,".$pid.",".$cid.",".$qnty.")";
            $result = executeQuery($sql);
            //return $result;
            
        }
        if($result > 0)
        {
            $sql = "select * from productcart where Id = ".$pid." and Customer_Id = ".$cid."";
            $cart = readQuery($sql);
            // $cart = json_decode($j);
            return $cart;
        } 
    }

    function showCart()
    {

        $log = $_SESSION["loggedUser"];
        if($log!=true)
        {
            header('Location: '.VIEW_ROOT.'login/create.php');
        }
        
        $cid = $_SESSION['userId'];
        $sql = "select * from productcart where Customer_Id = ".$cid."";
        $ce = readQuery($sql);
        $cart = json_decode($ce);

        
        return $cart;
    }

    function create()
    {
        
    }
    function ajaxDeleteCart($pid)
    {
        $cid = $_SESSION['userId'];
        $sq = "delete from cart where Product_Id=".$pid." and Customer_Id = ".$cid." ";
        $result = deleteAndUpdateQuery($sq);

        $sql = "select * from productcart where Customer_Id = ".$cid."";
        $ce = readQuery($sql);
        $result = json_decode($ce);

        return $result;
    }
    function ajaxCartTotal()
    {
        $cid = $_SESSION['userId'];
        $sql = "select * from productcart where Customer_Id = ".$cid."";
        $ce = readQuery($sql);
        $result = json_decode($ce);
        $sub = 0;
        foreach($result as $p)
        {
            $sub += ($p->Selling_Price * $p->Cart_Quantity);
        }

        return $sub;
    }

    
?>