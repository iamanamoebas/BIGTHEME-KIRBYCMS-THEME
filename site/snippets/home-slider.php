<div id="home-sec">

    <div id="carousel-example" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
            <div class="item active ">

                <img src="assets/img/1.jpg" alt="" />
                <div class="carousel-caption">
                    <h1 class="slide-h1 wow bounceInDown" data-wow-duration="1s"><?php echo $page->slidertitle()->kirbytext() ?></h1>
                    <h2 class="slide-h2 wow bounceInLeft" data-wow-duration="2s" data-wow-delay="1s"><?php echo $page->slidertext()->kirbytext() ?></h2>
                </div>
            </div>
            <div class="item">
                <img src="assets/img/1.jpg" alt="" />
                <div class="carousel-caption">
                    <h1 class="slide-h1 wow bounceInDown" data-wow-duration="2s"><?php echo $page->slidertitle1()->kirbytext() ?></h1>
                    <h2 class="slide-h2 wow bounceInLeft" data-wow-duration="2s" data-wow-delay="1s"><?php echo $page->slidertext1()->kirbytext() ?></h2>
                </div>
            </div>
            <div class="item">
                <img src="assets/img/1.jpg" alt="" />
                <div class="carousel-caption">
                    <h1 class="slide-h1 wow bounceInDown" data-wow-duration="2s"><?php echo $page->slidertitle2()->kirbytext() ?> </h1>
                    <h2 class="slide-h2 wow bounceInLeft" data-wow-duration="2s" data-wow-delay="1s"><?php echo $page->slidertext2()->kirbytext() ?></h2>
                </div>
            </div>
        </div>
        <!--INDICATORS-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example" data-slide-to="1"></li>
            <li data-target="#carousel-example" data-slide-to="2"></li>
        </ol>

    </div>
</div>
