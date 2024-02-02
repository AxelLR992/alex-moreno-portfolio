<?php
include "includes/init.php";
include "functions/render_fixed_rightbar.php";

$locale = isset($_SESSION['lang']) ? strtolower($_SESSION['lang']) : $i18n->getFallbackLang();
$fetch = new Fetch();
$fetch->set_api_key($_ENV["REST_API_KEY"]);
$fetch->set_base_url($_ENV["REST_API_URL"]);
$portfolio_content = json_decode($fetch->get("/content/items/portfolio_content", array("locale" => $locale)));
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
        <div class="qrt-content-frame">
          <div class="qrt-left">

            <div class="qrt-filter qrt-mb-40">
              <a href="#" data-filter="*" class="qrt-work-category qrt-current qrt-filter-icon qrt-cursor-color qrt-cursor-scale"><i class="fas fa-filter"></i>All Categories</a>
              <a href="#" data-filter=".architecture" class="qrt-work-category qrt-cursor-color qrt-cursor-scale">Architecture</a>
              <a href="#" data-filter=".interior" class="qrt-work-category qrt-cursor-color qrt-cursor-scale">Interior Design</a>
              <a href="#" data-filter=".repair" class="qrt-work-category qrt-cursor-color qrt-cursor-scale">Repair</a>
            </div>

            <div class="qrt-masonry-grid qrt-mb-40">
              <div class="qrt-grid-sizer"></div>
              <?php $reset = 8; for($i = 1; $i<=37; $i++){ foreach ($portfolio_content as $item){
                
                $generateContent = rand(1,$reset);
                if( $generateContent === 2 || $generateContent === 5 || $generateContent === 6 || $generateContent === 3 ){ #bonus for the common container (1x1)
                  $generateContent = 1;
                }elseif($generateContent === 7 || $generateContent === 4){ 
                  $generateContent = 2;
                }elseif($generateContent === 8){ 
                  $generateContent = 4;
                }
                $saveRandom = $generateContent;
                $reset -= $saveRandom;
                $probability;
                
                if($reset === 0){
                  $reset = 8;
                }
                $probability = $generateContent;
                ?>
                <?php if($probability === 1) {?>
                <div class="qrt-masonry-grid-item <?php echo $item -> filter?>">
                  <div class="qrt-work-item"><a data-fancybox="works" href="<?php echo $_ENV["ASSETS_URL"] . $item -> image -> path ?>" class="qrt-cursor-scale qrt-work-cover-frame"><img src="<?php echo $_ENV["ASSETS_URL"] . $item->image->path ?>" alt="#" alt="work cover">
                      <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                      <div class="qrt-work-category"><span><?php echo $item -> filter?></span></div>
                    </a>
                    <div class="qrt-work-descr">
                      <h4 class="qrt-cursor-color qrt-white"><a href="single-work-1.php?id=<?php echo $item -> _id ?>" class="qrt-anima-link"><?php echo $item -> title?></a></h4><a href="single-work-1.php?id=<?php echo $item -> _id ?>" class="qrt-cursor-scale qrt-work-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <?php } elseif($probability === 2) {?>
                  <div class="qrt-masonry-grid-item qrt-masonry-grid-item-h-x-2 <?php echo $item -> filter?>">
                  <div class="qrt-work-item"><a data-fancybox="works" href="<?php echo $_ENV["ASSETS_URL"] . $item -> image -> path ?>" class="qrt-cursor-scale qrt-work-cover-frame"><img src="<?php echo $_ENV["ASSETS_URL"] . $item -> image -> path ?>" alt="work cover">
                      <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                      <div class="qrt-work-category"><span><?php echo $item -> filter?></span></div>
                    </a>
                    <div class="qrt-work-descr">
                      <h4 class="qrt-cursor-color qrt-white"><a href="single-work-1.php?id=<?php echo $item -> _id ?>" class="qrt-anima-link"><?php echo $item -> title?></a></h4><a href="single-work-1.php?id=<?php echo $item -> _id ?>" class="qrt-cursor-scale qrt-work-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                  <?php } elseif($probability === 4) {?>
                    <div class="qrt-masonry-grid-item qrt-masonry-grid-item-50 <?php echo $item -> filter?>">
                  <div class="qrt-work-item"><a data-fancybox="works" href="<?php echo $_ENV["ASSETS_URL"] . $item -> image -> path ?>" class="qrt-cursor-scale qrt-work-cover-frame"><img src="<?php echo $_ENV["ASSETS_URL"] . $item -> image -> path ?>" alt="work cover">
                      <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                      <div class="qrt-work-category"><span><?php echo $item -> filter?></span></div>
                    </a>
                    <div class="qrt-work-descr">
                      <h4 class="qrt-cursor-color qrt-white"><a href="single-work-1.php?id=<?php echo $item -> _id ?>" class="qrt-anima-link"><?php echo $item -> title?></a></h4><a href="single-work-1.php?id=<?php echo $item -> _id ?>" class="qrt-cursor-scale qrt-work-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <?php } ?>
              <?php }} ?>
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
