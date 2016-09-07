<section id="features-sec">
    <div class="container ">
        <div class="row pad-btm">
            <div class="col-lg-8 col-md-8 col-sm-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-12">
                <h1 data-scroll-reveal="enter from the bottom after 0.1s"><?php echo $page->featuretitle()->kirbytext() ?> </h1>
                <p data-scroll-reveal="enter from the bottom after 0.3s">
                <?php echo $page->featuretext()->kirbytext() ?>
                </p>
            </div>

        </div>
        <div class="row ">
            <div class="col-lg-4 col-md-4 col-sm-4  col-xs-12 text-center" data-scroll-reveal="enter from the bottom after 0.5s">
                <i class="fa fa-recycle fa-5x"></i>
                <h4 ><?php echo $page->responsivetitle()->kirbytext() ?></h4>
                <p>
                  <?php echo $page->responsivetext()->kirbytext() ?>
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4  col-xs-12 text-center" data-scroll-reveal="enter from the bottom after 0.7s" >
                <i class="fa fa-briefcase fa-5x"></i>
                <h4><?php echo $page->easytitle()->kirbytext() ?></h4>
                <p>
                  <?php echo $page->easytext()->kirbytext() ?>
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4  col-xs-12 text-center" data-scroll-reveal="enter from the bottom after 0.9s">
                <i class="fa fa-history fa-5x"></i>
                <h4><?php echo $page->freetitle()->kirbytext() ?></h4>
                <p>
                <?php echo $page->freetext()->kirbytext() ?>
                </p>
            </div>

        </div>

    </div>

</section>
<!-- FEATURE SECTION END-->
