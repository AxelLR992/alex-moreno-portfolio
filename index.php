<?php include "includes/init.php"; ?>
<?php
$locale = isset($_SESSION['lang']) ? strtolower($_SESSION['lang']) : $i18n->getFallbackLang();
?>
<!DOCTYPE html>
<html lang="<?php echo $locale ?>">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- color of address bar in mobile browser -->
  <meta name="theme-color" content="#28292C" />
  <!-- favicon  -->
  <link rel="shortcut icon" href="img/thumbnail.ico" type="image/x-icon" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/plugins/bootstrap.min.css" />
  <!-- font awesome css -->
  <link rel="stylesheet" href="css/plugins/font-awesome.min.css" />
  <!-- swiper css -->
  <link rel="stylesheet" href="css/plugins/swiper.min.css" />
  <!-- fancybox css -->
  <link rel="stylesheet" href="css/plugins/fancybox.min.css" />
  <!-- mapbox css -->
  <link href="css/plugins/mapbox-style.css" rel="stylesheet" />
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- animate style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <title>Alex Moreno - Graphic Designer</title>
</head>

<body>
  <div class="qrt-app">
    <?php include "includes/preloader.php"; ?>
    <div id="cursor" class="qrt-cursor">
      <div></div>
      <div class="qrt-follower"><i class="fas fa-circle-notch"></i></div>
    </div>
    <?php echo render_navbar("home", $i18n); ?>
    <?php include "includes/leftbar.php"; ?>
    <div class="qrt-curtain"></div>
    <div id="qrt-dynamic-content" class="qrt-dynamic-content">
      <div class="qrt-content" id="qrt-scroll-content">

        <?php include "includes/homepage-banners.php"; ?>

        <div class="qrt-content-frame">
          <div class="qrt-left">

            <div class="fullscreen-caption">
              <h3 class="animate__animated animate__fadeIn animate__delay-3s"><?php echo L::homepageCaptions_first ?></h3>

              <p class="animate__animated animate__fadeIn animate__delay-3s">
                <?php echo L::homepageCaptions_firstDescription ?>
              </p>

              <img class="animate__animated animate__fadeIn animate__delay-3s" src="img/imgIndex/logos-isometric-mockup.png" alt="Meaningful logos">
            </div>
            <div class="fullscreen-caption">
              <h3 class="animate__animated animate__fadeIn animate__delay-4s"><?php echo L::homepageCaptions_second ?></h3>

              <p class="animate__animated animate__fadeIn animate__delay-4s">
                <?php echo L::homepageCaptions_secondDescription ?>
              </p>

              <img class="animate__animated animate__fadeIn animate__delay-4s" src="img/imgIndex/brand-book-homepage-mockup.png" alt="Amazing branding">
            </div>
            <div class="fullscreen-caption">
              <h3 class="animate__animated animate__fadeIn animate__delay-5s"><?php echo L::homepageCaptions_third ?></h3>

              <p class="animate__animated animate__fadeIn animate__delay-5s">
                <?php echo L::homepageCaptions_thirdDescription ?>
              </p>

              <img class="animate__animated animate__fadeIn animate__delay-5s" src="img/imgIndex/key art mockup.png" alt="Amazing branding">
            </div>

            <div class="row mt-5">
              <div class="col-12 text-light p-3 home-blockquote" style="background-color: #222534">
                <div class="row">
                  <div class="col-12 col-md-6 col-lg-4 text-center">
                    <img src="img/blog/Picture4.jpg" style="max-width: 250px;" class="w-75" alt="Alex Moreno Picture">
                  </div>
                  <div class="col-12 col-md-6 col-lg-8 mt-3">
                    <img src="img/icons/quote.svg" alt="Quote" style="width: 50px" class="mb-2">
                    <p class="fs-1">
                      <?php echo L::homepageCaptions_blockquote ?> <br />

                      <small class="mt-4 d-block">
                        Alex Moreno <br />
                        <span style="color: #414455"><?php echo L::common_graphicDesigner ?></span>
                      </small>
                    </p>
                    <a href="contact.php" class="qrt-btn qrt-btn-md qrt-btn-color qrt-send-request qrt-anima-link qrt-mr-20">
                      <span><?php echo L::common_getInTouch ?></span>
                    </a>
                  </div>
                </div>

              </div>
            </div>

            <div class="qrt-divider"></div>

            <?php include "includes/achievements.php"; ?>

            <div class="qrt-divider qrt-space-fix"></div>

            <?php include "includes/prices.php"; ?>

            <div class="qrt-divider qrt-space-fix"></div>

            <?php include "includes/testimonials-slider.php"; ?>

            <div class="qrt-divider"></div>

            <?php include "includes/clients-slider.php"; ?>

            <div class="row">
              <div class="col-lg-12">
                <div class="qrt-call-to-action">
                  <h4>Do you have a project?</h4>
                  <a class="qrt-btn qrt-btn-sm qrt-btn-color qrt-cursor-scale qrt-anima-link" href="contact.html"><span>Let's discuss</span></a>
                </div>
              </div>
            </div>
          </div>
          <div id="fixed" class="qrt-right"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- jquery js -->
  <script src="js/plugins/jquery.min.js"></script>
  <!-- anime js -->
  <script src="js/plugins/anime.min.js"></script>
  <!-- swiper js -->
  <script src="js/plugins/swiper.min.js"></script>
  <!-- progressbar js -->
  <script src="js/plugins/progressbar.min.js"></script>
  <!-- smooth scrollbar js -->
  <script src="js/plugins/smooth-scrollbar.min.js"></script>
  <!-- overscroll js -->
  <script src="js/plugins/overscroll.min.js"></script>
  <!-- isotope js -->
  <script src="js/plugins/isotope.min.js"></script>
  <!-- fancybox js -->
  <script src="js/plugins/fancybox.min.js"></script>
  <!-- swup js -->
  <script src="js/plugins/swup.min.js"></script>
  <!-- mapbox js -->
  <script src="js/plugins/mapbox.min.js"></script>

  <!-- main js -->
  <script src="js/main.js"></script>
</body>

</html>