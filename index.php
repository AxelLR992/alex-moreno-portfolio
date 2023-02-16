<?php include "includes/init.php"; ?>
<!DOCTYPE html>
<html lang="en">

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

  <title>Alex Moreno - Graphic Designer</title>
</head>

<body>
  <div class="qrt-app">
    <?php include "includes/preloader.php"; ?>
    <div id="cursor" class="qrt-cursor">
      <div></div>
      <div class="qrt-follower"><i class="fas fa-circle-notch"></i></div>
    </div>
    <?php echo render_navbar("home"); ?>
    <?php include "includes/leftbar.php"; ?>
    <div class="qrt-curtain"></div>
    <div id="qrt-dynamic-content" class="qrt-dynamic-content">
      <div class="qrt-content" id="qrt-scroll-content">

        <?php include "includes/homepage-banners.php"; ?>

        <div class="qrt-content-frame">
          <div class="qrt-left">
            <div class="row">
              <div class="col-lg-4">
                <h3 class="qrt-mb-40">
                  We are creative <br />building - design company
                </h3>
              </div>
              <div class="col-lg-8 qrt-mb-25">
                <p>
                  We have intentionally never developed a stylistic formula
                  for our work, which is why our projects never quite look or
                  feel the same. Each of our spaces is the result of our
                  ability to listen, which has turned our designs and
                  buildings into personal reflections of our clients’
                  personalities and values, which we co-construct through
                  research, workshops and surveys.
                </p>

                <p>
                  In our studio, every project is an open ended enquiry,
                  helping people to challenge their existing state and work
                  towards an alternative, desired one. We provide guidance,
                  expertise and experience across all phases in the
                  architectural process, ranging from thinking, to designing,
                  building, and ultimately finding the right way to
                  communicate the results.
                </p>
              </div>
              <div class="col-lg-12">
                <blockquote>
                  Change is an opportunity! We want to lead people towards
                  durable solutions and designs that enhance feelings of
                  closeness, wellbeing and hopefully, happiness.
                </blockquote>
              </div>
            </div>

            <div class="qrt-divider"></div>

            <div class="row">
              <div class="col-lg-3 col-sm-6">
                <div class="qrt-counter-frame">
                  <div class="qrt-counter-box">
                    <span class="qrt-counter">10</span>
                  </div>
                  <h5>Years Experience</h5>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="qrt-counter-frame">
                  <div class="qrt-counter-box">
                    <span class="qrt-counter">143</span>
                  </div>
                  <h5>Completed Projects</h5>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="qrt-counter-frame">
                  <div class="qrt-counter-box">
                    <span class="qrt-counter">114</span>
                  </div>
                  <h5>Happy Customers</h5>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="qrt-counter-frame">
                  <div class="qrt-counter-box">
                    <span class="qrt-counter">20</span>
                  </div>
                  <h5>Honors and Awards</h5>
                </div>
              </div>
            </div>

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

  <!-- Fetch data from CMS -->
  <script src="js/custom.js"></script>
</body>

</html>