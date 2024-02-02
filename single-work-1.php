<?php
include "includes/init.php";
include "functions/render_fixed_rightbar.php";

$locale = isset($_SESSION['lang']) ? strtolower($_SESSION['lang']) : $i18n->getFallbackLang();
$fetch = new Fetch();
$fetch->set_api_key($_ENV["REST_API_KEY"]);
$fetch->set_base_url($_ENV["REST_API_URL"]);

$owner = json_decode($fetch->get("/content/item/owner", array("locale" => $locale)));
$id = htmlspecialchars($_GET["id"]);
$portfolio_content = json_decode($fetch->get("/content/items/portfolio_content", array("locale" => $locale)));
$item = json_decode($fetch->get("/content/item/portfolio_content/".$id, array("locale" => $locale)));
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
    <?php echo render_navbar("portfolio", $i18n); ?>
    <?php include "includes/leftbar.php"; ?>
    <div class="qrt-curtain"></div>
    <div id="qrt-dynamic-content" class="qrt-dynamic-content">
      <div class="qrt-content" id="qrt-scroll-content">
        <div class="qrt-half-content-frame">
          <div class="qrt-left">

            <div class="row">
              <div class="col-lg-12">

                <h2 class="qrt-mb-40"><?php echo $item -> title ?></h2>

                <div class="qrt-page-cover qrt-cover-center">
                  <img src="<?php echo $_ENV["ASSETS_URL"] . $item -> image -> path ?>" alt="sunset house">
                  <div class="qrt-about-info qrt-right-position">
                    <div class="qrt-cover-info">
                      <ul class="qrt-table">
                        <li>
                          <h5 class="qrt-white">Date:</h5><span><?php 
                          $date = $item -> date; 
                          echo date('F j, Y', strtotime($date)) ?></span>
                        </li>
                        <li>
                          <h5 class="qrt-white">Client:</h5><span><?php echo $item -> client ?></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>

                <div class="qrt-just-text">
                  <?php echo $item -> content ?>
                </div>

                <div class="qrt-divider qrt-space-fix"></div>

                <h3 class="qrt-mb-40">Latest
                <?php echo explode(" ", $owner->fullname)[0] ?>'s works
                </h3>
                <?php include("includes/works-slider.php")?>

                <div class="qrt-divider"></div>

            <div class="row">
              <div class="col-lg-12">

                <?php include("includes/clients-slider.php")?>

              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="qrt-call-to-action">
                  <h4>Do you have a project?</h4><a class="qrt-btn qrt-btn-sm qrt-btn-color qrt-cursor-scale qrt-anima-link" href="contact.html"><span>Let's discuss</span></a>
                </div>
              </div>
            </div>
            
          </div>
          
          <?php echo render_fixed_rightbar($owner->fullname, "This is a test", "Get in touch", "/contact.php")?>
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
