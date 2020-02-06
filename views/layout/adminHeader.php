<html>
	<div class="global-wrap">

       <?php include 'link.php';?>
       
       <body>

       		 <!-- //////////////////////////////////
	//////////////MAIN HEADER///////////// 
	////////////////////////////////////-->
        <div class="top-main-area text-center">
            <div class="container">
                <a href="index.html" class="logo mt5">
                    <img src="#" alt="Image Alternative text" title="Image Title" /> 
                    
                </a>
            </div>
        </div>
        <header class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!--START MAIN NAVIGATION -->
                        <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>
                        <nav>
                            <ul class="nav nav-pills flexnav" id="flexnav" data-breakpoint="800">
                                <li class="active"><a href="../admin/index.php">Admin Home</a></li>
                                <li><a href="../product_admin/index.php">Product Admin</a></li>
                                <li><a href="../sub_category/index.php">Sub Category</a></li>
                                <li><a href="../category/index.php">Category</a></li>
                                <li><a href="../employee/index.php">Employee</a></li>
                                
                            </ul>
                        </nav>
                        <!-- END MAIN NAVIGATION -->
                    </div>
                    <div class="col-md-6">
                        <!-- LOGIN REGISTER LINKS -->
                        <ul class="login-register">
                            <li class="shopping-cart"><a href="page-cart.html"><i class="fa fa-shopping-cart"></i>Login As</a>
                                <div class="shopping-cart-box">
                                    <a href="admin.html"><option value="">Admin</option></a>
                                    <a href="../index.php"><option value="">User</option></a>
                                </div>
                            </li>
                            <li><a class="popup-text" href="<?= VIEW_FRONT."login/create.php"?>" data-effect="mfp-move-from-top"><i class="fa fa-sign-in"></i>Sign in</a>
                            </li>
                            <li><a class="popup-text" href="<?= VIEW_FRONT."customer/create.php"?>" data-effect="mfp-move-from-top"><i class="fa fa-edit"></i>Sign up</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <!-- LOGIN REGISTER LINKS CONTENT -->
        <div id="login-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
            <i class="fa fa-sign-in dialog-icon"></i>
            <h3>User Login</h3>
            <h5>Welcome back, Login to get started</h5>
            <form class="dialog-form">
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" placeholder="user@domain.com" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" placeholder="Password" class="form-control">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox">Remember me
                    </label>
                </div>
                <input type="submit" value="Sign in" class="btn btn-primary">
            </form>
            <ul class="dialog-alt-links">
                <li><a class="popup-text" href="#register-dialog" data-effect="mfp-zoom-out">Not member yet</a>
                </li>
                <li><a class="popup-text" href="#password-recover-dialog" data-effect="mfp-zoom-out">Forgot password</a>
                </li>
            </ul>
        </div>


        <div id="register-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
            <i class="fa fa-edit dialog-icon"></i>
            <h3>Member Register</h3>
            <h5>Ready to get best offers? Let's get started!</h5>
            <form class="dialog-form">
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" placeholder="user@domain.com" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" placeholder="My secret password" class="form-control">
                </div>
                <div class="form-group">
                    <label>Repeat Password</label>
                    <input type="password" placeholder="Type your password again" class="form-control">
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Your Area</label>
                            <input type="password" placeholder="Boston" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Postal/Zip</label>
                            <input type="password" placeholder="12345" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox">Get hot offers via e-mail
                    </label>
                </div>
                <input type="submit" value="Sign up" class="btn btn-primary">
            </form>
            <ul class="dialog-alt-links">
                <li><a class="popup-text" href="#login-dialog" data-effect="mfp-zoom-out">Already member</a>
                </li>
            </ul>
        </div>

        <!-- END LOGIN REGISTER LINKS CONTENT -->

        <!-- SEARCH AREA -->
        <form class="search-area form-group">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 clearfix">
                        <label><i class="fa fa-search"></i><span>I am searching for</span>
                        </label>
                        <div class="search-area-division search-area-division-input">
                            <input class="form-control" type="text" placeholder="Reliable Product" />
                        </div>
                    </div>
                    <div class="col-md-3 clearfix">
                        <label><i class="fa fa-map-marker"></i><span>In</span>
                        </label>
                        <div class="search-area-division search-area-division-location">
                            <input class="form-control" type="text" placeholder="Bangladesh" />
                        </div>
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-block btn-white search-btn" type="submit">Search</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- END SEARCH AREA -->
       	
       </body>
</html>


