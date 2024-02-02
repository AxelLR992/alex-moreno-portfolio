<?php
include "includes/init.php";
include "functions/render_fixed_rightbar.php";

$locale = isset($_SESSION['lang']) ? strtolower($_SESSION['lang']) : $i18n->getFallbackLang();
$fetch = new Fetch();
$fetch->set_api_key($_ENV["REST_API_KEY"]);
$fetch->set_base_url($_ENV["REST_API_URL"]);

$owner = json_decode($fetch->get("/content/item/owner", array("locale" => $locale)));
?>
<!doctype html>
<html lang="<?php echo $locale ?>">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- color of address bar in mobile browser -->
  <meta name="theme-color" content="#28292C">
  <!-- favicon  -->
  <link rel="shortcut icon" href="img/thumbnail.ico" type="image/x-icon">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/plugins/bootstrap.min.css">
  <!-- font awesome css -->
  <link rel="stylesheet" href="css/plugins/font-awesome.min.css">
  <!-- swiper css -->
  <link rel="stylesheet" href="css/plugins/swiper.min.css">
  <!-- fancybox css -->
  <link rel="stylesheet" href="css/plugins/fancybox.min.css">
  <!-- mapbox css -->
  <link href="css/plugins/mapbox-style.css" rel='stylesheet'>
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css">

  <title>Quarty</title>
</head>

<body>

  <div class="qrt-app">
    <?php include "includes/preloader.php"; ?>
    <div id="cursor" class="qrt-cursor">
      <div></div>
      <div class="qrt-follower"><i class="fas fa-circle-notch"></i></div>
    </div>
    <?php echo render_navbar("about", $i18n); ?>
    <?php include "includes/leftbar.php"; ?>
    <div class="qrt-curtain"></div>
    <div id="qrt-dynamic-content" class="qrt-dynamic-content">
      <div class="qrt-content" id="qrt-scroll-content">
        <div class="qrt-half-content-frame">
          <div class="qrt-left">

            <div class="row">
              <div class="col-lg-6 col-md-12">

                <div class="qrt-about-me-cover">
                  <img src="img/team/tm1.jpg" alt="team member">
                </div>

              </div>
              <div class="col-lg-6 col-md-12 align-self-center">

                <div class="qrt-member-about">
                  <h3 class="qrt-mb-5">
                    <?php echo $owner->fullname ?>
                  </h3>
                  <div class="qrt-el-suptitle">
                    <?php echo $owner->profession ?>
                  </div>

                  <div class="qrt-divider"></div>

                  <ul class="qrt-table">
                    <li>
                      <h5>
                        <?php echo L::common_country ?>:
                      </h5><span>
                        <?php echo $owner->country ?>
                      </span>
                    </li>
                    <li>
                      <h5>
                        <?php echo L::common_city ?>:
                      </h5><span>
                        <?php echo $owner->city ?>
                      </span>
                    </li>
                    <li>
                      <h5>
                        <?php echo L::common_email ?>:
                      </h5><span><a class="qrt-cursor-color" href="mailto:<?php echo $owner->email ?>">
                          <?php echo $owner->email ?>
                        </a></span>
                    </li>
                    <li>
                      <h5>
                        <?php echo L::common_phone ?>:
                      </h5><span><a class="qrt-cursor-color" href="tel:<?php echo $owner->phone ?>">
                          <?php echo $owner->phone ?>
                        </a></span>
                    </li>
                  </ul>

                  <div class="qrt-divider"></div>

                  <ul class="qrt-social-list">
                    <li><a href="https://www.behance.net/alexmoreno8" class="qrt-cursor-scale qrt-cursor-color"><i
                          class="fab fa-behance"></i></a></li>
                    <li><a href="https://dribbble.com/alexmorenoac" class="qrt-cursor-scale qrt-cursor-color"><i
                          class="fab fa-dribbble"></i></a></li>
                    <li><a href="https://www.instagram.com/alexmorenoac/" class="qrt-cursor-scale qrt-cursor-color"><i
                          class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.facebook.com/alexmorenoac" class="qrt-cursor-scale qrt-cursor-color"><i
                          class="fab fa-facebook"></i></a></li>
                  </ul>
                </div>

              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">

                <h3 class="qrt-mb-20">
                  <?php echo L::common_about ?>
                  <?php echo explode(" ", $owner->fullname)[0] ?>
                </h3>

              </div>
              <div class="col-lg-12 qrt-mb-25">

                <p>Organised and reliable, Viktoria is driven to integrate aesthetics with highly functional and
                  exciting interior spaces. Her experience covers a broad range of project types and she works
                  tirelessly to ensure that projects run
                  smoothly from concept to completion. Viktoria is currently undertaking her Masters in Urban Design.
                </p>

                <p class="mb-20">A global traveler, Viktoria has enjoyed vacations far and wide. When it comes to
                  design, Viktoria cites Interior designer India Mahdavi as one of her biggest inspirations. Her clever
                  use of colour, texture, and
                  artworks combine
                  to provide an endless source of inspiration.</p>

              </div>
              <div class="col-lg-12">

                <blockquote>
                  Design is not what you see, but how you look at the world.
                  <div class="image-container">
                    <img src="img/blog/Picture4.jpg" alt="PictureBack">
                  </div>  
                </blockquote>

              </div>
            </div>

            <div class="qrt-divider"></div>

            <?php include "./includes/services.php" ?>

            <div class="qrt-divider qrt-space-fix"></div>

            <?php include "./includes/achievements.php" ?>

            <div class="qrt-divider qrt-space-fix"></div>

            <h3 class="qrt-mb-40">Latest
            <?php echo explode(" ", $owner->fullname)[0] ?>'s works
            </h3>

            <?php include("includes/works-slider.php")?>

            <div class="qrt-divider"></div>

            <?php include "includes/prices.php"; ?>

            <div class="qrt-divider qrt-space-fix"></div>

            <?php include "includes/testimonials-slider.php"; ?>

            <div class="qrt-divider"></div>

            <?php include "includes/clients-slider.php"; ?>

            <div class="row">
              <div class="col-lg-12">

                <div class="qrt-call-to-action">
                  <h4>Do you have a project?</h4>
                  <a class="qrt-btn qrt-btn-sm qrt-btn-color qrt-cursor-scale qrt-anima-link"
                    href="contact.html"><span>Let's discuss</span></a>
                </div>

              </div>
            </div>

          </div>
          <?php echo render_fixed_rightbar($owner->fullname, "This is a test", "Get in touch", "/contact.php") ?>
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