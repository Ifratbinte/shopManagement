 <?php
    include 'config.php';
    include '../app/controller/productController.php';
    $productCate = category();
    $popularPro = popular();
    $recent = recent();
    

?>

 <html>
 <header>
     <?php include 'layout/headerIndex.php'?>
 </header>

 <body>
     <!-- TOP AREA -->

     <div class="top-area">
         <div class="owl-carousel owl-slider" id="owl-carousel-slider" data-inner-pagination="true"
             data-white-pagination="true">
             <div>
                 <div class="bg-holder">
                     <img src="bridge_1200x480.jpg" alt="Image Alternative text" title="4 Strokes of Fun" />
                     <div class="bg-mask"></div>
                     <div class="bg-front vert-center text-white text-center">
                         <h2 class="text-hero">Black Friday</h2>
                         <div class="countdown countdown-big" data-countdown="Jul 10, 2019 4:30:00"></div><a
                             class="btn btn-lg btn-ghost btn-white" href="#">Save 80% Now</a>
                     </div>
                 </div>
             </div>
             <div>
                 <div class="bg-holder">
                     <img src="img/4_strokes_of_fun_1200x480.jpg" alt="Image Alternative text" title="Bridge" />
                     <div class="bg-mask"></div>
                     <div class="bg-front vert-center text-white text-center">
                         <h2 class="text-hero">Sell in Weekends</h2>
                         <div class="countdown countdown-big" data-countdown="Jul 14, 2019 12:30:00"></div><a
                             class="btn btn-lg btn-ghost btn-white" href="#">Save 50% Now</a>
                     </div>
                 </div>
             </div>
             <div>
                 <div class="bg-holder">
                     <img src="img/lhotel_porto_bay_sao_paulo_luxury_suite_1200x480.jpg" alt="Image Alternative text"
                         title="LHOTEL PORTO BAY SAO PAULO luxury suite" />
                     <div class="bg-mask"></div>
                     <div class="bg-front vert-center text-white text-center">
                         <h2 class="text-hero">Premium Platforms</h2>
                         <div class="countdown countdown-big" data-countdown="Jul 16, 2019 11:30:00"></div><a
                             class="btn btn-lg btn-ghost btn-white" href="#">Save 60% Now</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- END TOP AREA -->

     <!------------------Category------------------>

     <div class="gap"></div>
     <div class="container">
         <div class="row">
             <div class="col-md-10 col-md-offset-1">
                 <div class="text-center">
                     <h1>Explore Best Deals in Your City</h1>
                     <p class="text-bigger">Augue feugiat vulputate quam at dignissim aliquam vestibulum elit convallis
                         iaculis dictumst dui taciti himenaeos taciti arcu non sollicitudin viverra id blandit cursus ac
                         et mauris curabitur tortor feugiat nulla</p>
                 </div>
             </div>
         </div>
         <div class="gap"></div>
     </div>
     <div class="bg-holder">
         <div class="bg-mask"></div>
         <div class="bg-blur" style="background-image:url(road.jpg)"></div>
         <div class="container bg-holder-content">
             <div class="gap gap-big text-center">
                 <h1 class="mb30 text-white">Category</h1>



                 <div class="row row-wrap">

                     <?php foreach($productCate as $c)
                            { ?>
                     <a class="col-md-3" href="<?php echo VIEW_FRONT ?>product/subCategory.php?Id=<?= $c->Id ?>">
                         <div class="product-thumb">
                             <header class="product-header">
                                 <img src="<?php echo "../resources/".$c->img_path; ?>" alt="Image Alternative text"
                                     title="Nikon Prime love" height="180px" width="80px"/>
                             </header>
                             <div class="product-inner">
                                 <h5 class="product-title"><?= $c->Name ?></h5>
                                 <p class="product-desciption"><?= $c->Description ?></p>

                             </div>
                         </div>
                     </a>
                     <?php } ?>

                 </div>


                 <a href="#" class="btn btn-white btn-lg btn-ghost">See More</a>
             </div>
         </div>
     </div>

     <!------------------Popular product------------------>

     <div class="gap"></div>
     <div class="container">
         <div class="row">
             <div class="col-md-10 col-md-offset-1">
                 <div class="text-center">
                     <h1>Explore Best Deals in Your City</h1>
                     <p class="text-bigger">Augue feugiat vulputate quam at dignissim aliquam vestibulum elit convallis
                         iaculis dictumst dui taciti himenaeos taciti arcu non sollicitudin viverra id blandit cursus ac
                         et mauris curabitur tortor feugiat nulla</p>
                 </div>
             </div>
         </div>
         <div class="gap"></div>
     </div>
     <div class="bg-holder">
         <div class="bg-mask"></div>
         <div class="bg-blur" style="background-image:url(keyboard.jpg)"></div>
         <div class="container bg-holder-content">
             <div class="gap gap-big text-center">
                 <h1 class="mb30 text-white">Popular Product</h1>
                 <div class="row row-wrap">

                     <?php foreach($popularPro as $pp)
                            { ?>
                     <a class="col-md-3" href="<?php echo VIEW_FRONT ?>product/details.php?Id=<?= $pp->Id ?>">
                         <div class="product-thumb">
                             <header class="product-header">
                                 <img src="<?php echo "../resources/".$pp->img_path; ?>" alt="Image Alternative text"
                                     title="Nikon Prime love" height="180px" width="80px"/>
                             </header>
                             <div class="product-inner">
                                 <h5 class="product-title"><?= $pp->Name ?></h5>
                                 <p class="product-desciption"><?= $pp->Description ?></p>
                                 <ul class="product-price-list">
                                     <li><span class="product-price"><?= $pp->Selling_Price ?></span></li>
                                 </ul>
                             </div>
                         </div>
                     </a>
                     <?php } ?>

                 </div>
                 <a href="#" class="btn btn-white btn-lg btn-ghost">See More</a>
             </div>
         </div>
     </div>

     <!------------------Upcoming product------------------>

     <div class="gap"></div>
     <div class="container">
         <div class="row">
             <div class="col-md-10 col-md-offset-1">
                 <div class="text-center">
                     <h1>Explore Best Deals in Your City</h1>
                     <p class="text-bigger">Augue feugiat vulputate quam at dignissim aliquam vestibulum elit convallis
                         iaculis dictumst dui taciti himenaeos taciti arcu non sollicitudin viverra id blandit cursus ac
                         et mauris curabitur tortor feugiat nulla</p>
                 </div>
             </div>
         </div>
         <div class="gap"></div>
     </div>
     <div class="bg-holder">
         <div class="bg-mask"></div>
         <div class="bg-blur" style="background-image:url(bridge_1200x480.jpg)"></div>
         <div class="container bg-holder-content">
             <div class="gap gap-big text-center">
                 <h1 class="mb30 text-white">Recent Product</h1>
                 <div class="row row-wrap">

                     <?php foreach($recent as $r)
                 { ?>


                     <a class="col-md-3" href="computer.html">
                         <div class="product-thumb">
                             <header class="product-header">
                                 <img src="<?php echo "../resources/".$r->img_path; ?>" alt="Image Alternative text"
                                     title="<?= $r->Name ?>" />
                             </header>
                             <div class="product-inner">
                                 <h5 class="product-title"><?= $r->Name ?></h5>
                                 <p class="product-desciption"><?= $r->Description ?></p>
                                 <ul class="product-price-list">
                                     <li><span class="product-price"><?= $r->Selling_Price ?></span>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </a>

                     <?php } ?>

                 </div>
                 <a href="#" class="btn btn-white btn-lg btn-ghost">See More</a>
             </div>
         </div>
     </div>



 </body>
 <footer>
     <?php include 'layout/footerIndex.php'?>
 </footer>

 </html>