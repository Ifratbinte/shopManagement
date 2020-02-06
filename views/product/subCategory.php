<?php
    include '../config.php';
    include CON_FRONT.'userController.php';
    $subCategory = subCategory();
    $category = category();
?>


<html>
<header>
    <?php include '../layout/headerIndex.php';?>

</header>

<body>


    <div class="global-wrap">


        <div class="bg-holder">
            <div class="bg-mask"></div>
            
            <div class="container bg-holder-content">
                <div class="gap gap-big text-center">
                    <?php foreach($category as $c)
                    { ?>

                    <h1 class="mb30 text-white">Categories of <?= $c->Name ?></h1>

                    <?php } ?>
                    <div class="row row-wrap">


                        <?php foreach($subCategory as $s)
                    { ?>
                        <a class="col-md-4" href="product.php?Id=<?= $s->Id ?>">
                            <div class="product-thumb">
                                <header class="product-header">
                                    <img src="<?php echo RSR.$s->img_path; ?>" alt="Image Alternative text" height="200" width="80"
                                        title="<?= $s->Name ?>" />
                                </header>
                                <div class="product-inner">
                                    <h5 class="product-title"><?= $s->Name ?></h5>
                                    <p class="product-desciption"><?= $s->Description ?></p>
                                </div>
                            </div>
                        </a>

                        <?php } ?>

                    </div>
                    <a href="#" class="btn btn-white btn-lg btn-ghost">See More</a>
                </div>
            </div>
        </div>

        <<footer>
            <?php include '../layout/footer.php'?>
            </footer>



    </div>
</body>


<!-- Mirrored from remtsoy.com/tf_templates/couponia/demo_v3_3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Jul 2019 21:16:47 GMT -->

</html>