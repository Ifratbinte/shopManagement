<html>
<div class="global-wrap">
        <?php include 'linkIndex.php';?>

        <!-- //////////////////////////////////
	//////////////MAIN HEADER///////////// 
	////////////////////////////////////-->
    <body>
        <header class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>
                        <nav>
                            <ul class="nav nav-pills flexnav" id="flexnav" data-breakpoint="800">
                                <li class="active"><a href="<?= VIEW_FRONT."index.php"?>">Home</a></li>
                                <li><a href="<?= VIEW_FRONT."index.php"?>">Category</a>
                                    <!-- <ul>
                                        <li><a href="#">Cloth</a>
                                            <ul>
                                                <li><a href="womens-fasion.html">Womens Fasion</a></li>
                                                <li><a href="mens-fasion.html">Mens Fasion</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="kids.html">Kids Zone</a></li>
                                        <li><a href="accessories.html">Electronic Device Accessories</a>
                                            <ul>
                                                <li><a href="computer.html">Computer and Laptopo</a>
                                                <li><a href="mobile.html">Mobile</a>
                                                <li><a href="audio.html">Audio</a>
                                            </ul>
                                        </li>
                                        <li><a href="health-and-beauty.html">Health And Beauty</a></li>
                                        <li><a href="foods.html">Foods</a></li>
                                    </ul> -->
                                </li>
                                <li class="shopping-cart"><a href="<?= VIEW_FRONT."cart/index.php"?>"><i class="fa fa-shopping-cart"></i>My Cart</a>
                            </li>
                            </ul>
                        </nav>

                    </div>
                    <div class="col-md-6">
                        <!-- LOGIN REGISTER LINKS -->
                        <ul class="login-register">
                            <li><a href="<?= VIEW_FRONT."login/create.php"?>" ><i class="fa fa-sign-in"></i>Sign in</a>
                            </li>
                            <li><a href="<?= VIEW_FRONT."customer/create.php"?>" ><i class="fa fa-edit"></i>Sign up</a>
                            </li>
                            <li><a href="<?= VIEW_FRONT."login/logout.php"?>" ><i class="fa fa-sign-out"></i>Logout</a>
                            </li>
                            <li><a href="<?= VIEW_FRONT."admin/index.php"?>" ><i class=""></i>Admin Panel</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    </body>
 </html>
        <!-- END SEARCH AREA -->