<section id="team-sec">
    <div class="container">
        <div class="row pad-btm">
            <div class="col-lg-8 col-md-8 col-sm-8 col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-12">
                <h1 data-scroll-reveal="enter from the bottom after 0.1s"><?php echo $page->teamtitle()->kirbytext() ?> </h1>
                <p data-scroll-reveal="enter from the bottom after 0.3s">
                <?php echo $page->teamtext()->kirbytext() ?>
                </p>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2  col-xs-12 " data-scroll-reveal="enter from the bottom after 0.4s">
                <img src="<?= $page->avatar()->toFile()->url() ?>" class="img-circle img-responsive set-img" />

            </div>
            <div class="col-lg-4 col-md-4 col-sm-4  col-xs-12 " data-scroll-reveal="enter from the bottom after 0.5s">
                <h2><?php echo $page->avatartitle()->kirbytext() ?></h2>
                <p>
                <?php echo $page->avatartext()->kirbytext() ?>
                </p>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2  col-xs-12 " data-scroll-reveal="enter from the bottom after 0.6s">
                <img src="<?= $page->avatar1()->toFile()->url() ?>" class="img-circle img-responsive set-img" />

            </div>
            <div class="col-lg-4 col-md-4 col-sm-4  col-xs-12 " data-scroll-reveal="enter from the bottom after 0.7s">
                <h2><?php echo $page->avatartitle1()->kirbytext() ?></h2>
                <p>
                  <?php echo $page->avatartext1()->kirbytext() ?>
                </p>
            </div>
        </div>

    </div>

</section>
