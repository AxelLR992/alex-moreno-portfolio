<?php
include "includes/init.php";
include "functions/render_fixed_rightbar.php";

$locale = isset($_SESSION['lang']) ? strtolower($_SESSION['lang']) : $i18n->getFallbackLang();
$fetch = new Fetch();
$fetch->set_api_key($_ENV["REST_API_KEY"]);
$fetch->set_base_url($_ENV["REST_API_URL"]);

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
                  <img src="img/projects/thumbnails/2.jpg" alt="sunset house">
                  <div class="qrt-about-info qrt-right-position">
                    <div class="qrt-cover-info">
                      <ul class="qrt-table">
                        <li>
                          <h5 class="qrt-white">Date:</h5><span><?php echo $item -> date ?></span>
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

                <h3 class="qrt-mb-40">Latest Alex's works</h3>

                <div class="qrt-masonry-grid">
                  <div class="qrt-grid-sizer"></div>
                  <?php foreach ($portfolio_content as $item){
                $generateContent = rand(1,2);
                ?>
                <?php if($generateContent === 1) {?>
                <div class="qrt-masonry-grid-item qrt-masonry-grid-item-50 interior architecture">
                  <div class="qrt-work-item"><a data-fancybox="works" href="<?php echo $_ENV["ASSETS_URL"] . $item -> image -> path ?>" class="qrt-cursor-scale qrt-work-cover-frame"><img src="<?php echo $_ENV["ASSETS_URL"] . $item->image->path ?>" alt="#" alt="work cover">
                      <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                      <div class="qrt-work-category"><span><?php echo $item -> category?></span></div>
                    </a>
                    <div class="qrt-work-descr">
                      <h4 class="qrt-cursor-color qrt-white"><a href="single-work-1.php?id=<?php echo $item -> _id ?>" class="qrt-anima-link"><?php echo $item -> title?></a></h4><a href="single-work-1.php?id=<?php echo $item -> _id ?>" class="qrt-cursor-scale qrt-work-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <?php } elseif($generateContent === 2) {?>
                  <div class="qrt-masonry-grid-item qrt-masonry-grid-item-50 qrt-masonry-grid-item-h-x-2 repair architecture">
                  <div class="qrt-work-item"><a data-fancybox="works" href="<?php echo $_ENV["ASSETS_URL"] . $item -> image -> path ?>" class="qrt-cursor-scale qrt-work-cover-frame"><img src="<?php echo $_ENV["ASSETS_URL"] . $item -> image -> path ?>" alt="work cover">
                      <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                      <div class="qrt-work-category"><span><?php echo $item -> category?></span></div>
                    </a>
                    <div class="qrt-work-descr">
                      <h4 class="qrt-cursor-color qrt-white"><a href="single-work-1.php?id=<?php echo $item -> _id ?>" class="qrt-anima-link"><?php echo $item -> title?></a></h4><a href="single-work-1.php?id=<?php echo $item -> _id ?>" class="qrt-cursor-scale qrt-work-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
              <?php } ?>
              <?php } ?>
                </div>

                <div class="qrt-just-text">
                  <p>Facilis inventore dignissimos ut ea expedita velit, corrupti dicta! Quae fugit reprehenderit illum tenetur saepe magni perspiciatis, similique ea eligendi sit quis fugiat, possimus
                    voluptatibus eius! Odio quas at, nihil nobis blanditiis voluptas libero maiores rerum!</p>
                  <p>Eerror amet modi explicabo quaerat ratione!</p>
                </div>

              </div>
            </div>

            <div class="qrt-divider qrt-space-fix"></div>

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
          <div id="fixed" class="qrt-right">
            <div class="qrt-half-banner qrt-left-align qrt-animated-zoom">
              <div class="qrt-image-frame">
                <img src="img/banners/banner3.jpg" alt="banner">
              </div>
              <div class="qrt-overlay">
                <div class="qrt-scroll-hint"><span></span></div>
                <div class="qrt-banner-title">
                  <h2 class="qrt-white qrt-mb-10">Our Works</h2>
                  <div class="qrt-divider-2"></div>
                  <div class="qrt-text qrt-white qrt-mb-20">Dolor sit amet, consectetur adipisicing elit. <br>Vel excepturi, earum inventore.</div><a href="contact.html" class="qrt-btn qrt-btn-md qrt-btn-color qrt-anima-link"><span>Get in
                      touch</span></a>
                </div>
              </div>
            </div>
          </div>
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
