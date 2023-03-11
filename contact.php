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
    <?php echo render_navbar("contact", $i18n); ?>
    <?php include "includes/leftbar.php"; ?>
    <div class="qrt-curtain"></div>
    <div id="qrt-dynamic-content" class="qrt-dynamic-content">
      <div class="qrt-content" id="qrt-scroll-content">
        <div class="qrt-half-content-frame">
          <div class="qrt-left">

            <div class="row qrt-p-0-40">
              <div class="col-lg-12">

                <div class="qrt-page-cover">
                  <img src="img/banners/cover2.jpg" alt="our office">
                  <div class="qrt-about-info">
                    <div class="qrt-cover-info">
                      <ul class="qrt-table">
                        <li>
                          <h5 class="qrt-white">Main office</h5><span>Toronto, Canada</span></a>
                        </li>
                        <li>
                          <h5 class="qrt-white">Adress:</h5><a href="https://goo.gl/maps/MAa6Au5d9ZMgSfBV7"
                            target="_blank" data-no-swup><span>2420 Jane St, Downsview</span></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">

                <h3 class="qrt-mb-40">
                  <?php echo L::common_contactInfo ?>
                </h3>

              </div>
              <div class="col-lg-6">

                <div class="qrt-icon-box">
                  <!-- icon -->
                  <img class="mb-20" src="./img/icons/phone-outline.svg" alt="Phone icon">
                  <!-- title -->
                  <h4 class="mb-20">
                    <?php echo L::common_phone ?>
                  </h4>
                  <!-- description -->
                  <a href="tel:<?php echo $owner->phone ?>" data-no-swup><span>
                      <?php echo $owner->phone ?>
                    </span></a><br>
                </div>

              </div>
              <div class="col-lg-6">

                <div class="qrt-icon-box">
                  <!-- icon -->
                  <img class="mb-20" src="./img/icons/email-outline.svg" alt="Email icon">
                  <!-- title -->
                  <h4 class="mb-20">
                    <?php echo L::common_email ?>
                  </h4>
                  <a href="mailto:<?php echo $owner->email ?>" data-no-swup><span>
                      <?php echo $owner->email ?>
                    </span></a><br>
                </div>

              </div>
            </div>

            <div class="qrt-divider qrt-space-fix"></div>

            <div class="row">
              <div class="col-lg-12">

                <h3 class="qrt-mb-40">Get in touch</h3>

              </div>
              <div class="col-lg-12">

                <form id="form" class="qrt-contact-form">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="qrt-form-field">
                        <input id="name" name="name" class="qrt-input" type="text" placeholder="Name" required>
                        <label for="name"><i class="fas fa-user"></i></label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="qrt-form-field">
                        <input id="email" name="email" class="qrt-input" type="email" placeholder="Email" required>
                        <label for="email"><i class="fas fa-at"></i></label>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="qrt-form-field">
                        <textarea id="message" name="text" class="qrt-input" placeholder="Message" required></textarea>
                        <label for="message"><i class="far fa-envelope"></i></label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="qrt-mb-20">We promise not to disclose your personal information to third parties.
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="qrt-submit-frame qrt-text-right qrt-sm-text-left qrt-mb-40">
                        <button class="qrt-btn qrt-btn-md qrt-btn-color qrt-cursor-scale" type="submit"><span>Send
                            message</span></button>
                      </div>
                    </div>

                  </div>
                </form>

              </div>
            </div>

            <div class="qrt-divider qrt-space-fix"></div>

            <?php include("./includes/clients-slider.php") ?>
            <div class="row">
              <div class="col-lg-12">

                <div class="qrt-call-to-action">
                  <h4>Learn more about us!</h4>
                  <a class="qrt-btn qrt-btn-sm qrt-btn-color qrt-cursor-scale qrt-anima-link"
                    href="about-us.html"><span>About us</span></a>
                </div>

              </div>
            </div>

          </div>
          <?php echo render_fixed_rightbar(L::common_getInTouch, "This is a test", "Portfolio", "/portfolio.php"); ?>
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