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
              <div class="qrt-masonry-grid-item qrt-masonry-grid-item-50 architecture">
                <div class="qrt-work-item"><a data-fancybox="works" href="img/projects/original-size/1.jpg" class="qrt-cursor-scale qrt-work-cover-frame"><img src="img/projects/thumbnails/1.jpg" alt="work cover">
                    <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                    <div class="qrt-work-category"><span>architecture</span></div>
                  </a>
                  <div class="qrt-work-descr">
                    <h4 class="qrt-cursor-color qrt-white"><a href="single-work-1.html" class="qrt-anima-link">Sunset House</a></h4><a href="single-work-1.html" class="qrt-cursor-scale qrt-work-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="qrt-masonry-grid-item interior architecture">
                <div class="qrt-work-item"><a data-fancybox="works" href="img/projects/original-size/2.jpg" class="qrt-cursor-scale qrt-work-cover-frame"><img src="img/projects/thumbnails/2.jpg" alt="work cover">
                    <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                    <div class="qrt-work-category"><span>architecture</span><span>interior</span></div>
                  </a>
                  <div class="qrt-work-descr">
                    <h4 class="qrt-cursor-color qrt-white"><a href="single-work-1.html" class="qrt-anima-link">MinimalListic interior</a></h4><a href="single-work-1.html" class="qrt-cursor-scale qrt-work-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="qrt-masonry-grid-item qrt-masonry-grid-item-h-x-2 repair">
                <div class="qrt-work-item"><a data-fancybox="works" href="img/projects/original-size/v-1.jpg" class="qrt-cursor-scale qrt-work-cover-frame"><img src="img/projects/thumbnails/v-1.jpg" alt="work cover">
                    <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                    <div class="qrt-work-category"><span>repair</span></div>
                  </a>
                  <div class="qrt-work-descr">
                    <h4 class="qrt-cursor-color qrt-white"><a href="single-work-1.html" class="qrt-anima-link">Rem house</a></h4><a href="single-work-1.html" class="qrt-cursor-scale qrt-work-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="qrt-masonry-grid-item architecture interior">
                <div class="qrt-work-item"><a data-fancybox="works" href="img/projects/original-size/4.jpg" class="qrt-cursor-scale qrt-work-cover-frame"><img src="img/projects/thumbnails/4.jpg" alt="work cover">
                    <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                    <div class="qrt-work-category"><span>architecture</span><span>interior</span></div>
                  </a>
                  <div class="qrt-work-descr">
                    <h4 class="qrt-cursor-color qrt-white"><a href="single-work-1.html" class="qrt-anima-link">OP House</a></h4><a href="single-work-1.html" class="qrt-cursor-scale qrt-work-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="qrt-masonry-grid-item interior">
                <div class="qrt-work-item"><a data-fancybox="works" href="img/projects/original-size/5.jpg" class="qrt-cursor-scale qrt-work-cover-frame"><img src="img/projects/thumbnails/5.jpg" alt="work cover">
                    <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                    <div class="qrt-work-category"><span>interior</span></div>
                  </a>
                  <div class="qrt-work-descr">
                    <h4 class="qrt-cursor-color qrt-white"><a href="single-work-1.html" class="qrt-anima-link">Modern Reception</a></h4><a href="single-work-1.html" class="qrt-cursor-scale qrt-work-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="qrt-masonry-grid-item repair architecture">
                <div class="qrt-work-item"><a data-fancybox="works" href="img/projects/original-size/6.jpg" class="qrt-cursor-scale qrt-work-cover-frame"><img src="img/projects/thumbnails/6.jpg" alt="work cover">
                    <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                    <div class="qrt-work-category"><span>architecture</span><span>repair</span></div>
                  </a>
                  <div class="qrt-work-descr">
                    <h4 class="qrt-cursor-color qrt-white"><a href="#.">Villa La Siesta</a></h4><a href="single-work-1.html" class="qrt-cursor-scale qrt-work-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="qrt-masonry-grid-item architecture repair">
                <div class="qrt-work-item"><a data-fancybox="works" href="img/projects/original-size/7.jpg" class="qrt-cursor-scale qrt-work-cover-frame"><img src="img/projects/thumbnails/7.jpg" alt="work cover">
                    <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                    <div class="qrt-work-category"><span>architecture</span><span>repair</span></div>
                  </a>
                  <div class="qrt-work-descr">
                    <h4 class="qrt-cursor-color qrt-white"><a href="single-work-1.html" class="qrt-anima-link">Terrace garden</a></h4><a href="single-work-1.html" class="qrt-cursor-scale qrt-work-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="qrt-masonry-grid-item interior">
                <div class="qrt-work-item"><a data-fancybox="works" href="img/projects/original-size/8.jpg" class="qrt-cursor-scale qrt-work-cover-frame"><img src="img/projects/thumbnails/8.jpg" alt="work cover">
                    <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                    <div class="qrt-work-category"><span>interior</span></div>
                  </a>
                  <div class="qrt-work-descr">
                    <h4 class="qrt-cursor-color qrt-white"><a href="single-work-1.html" class="qrt-anima-link">TZ hotel</a></h4><a href="single-work-1.html" class="qrt-cursor-scale qrt-work-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="qrt-masonry-grid-item qrt-masonry-grid-item-h-x-2 repair architecture">
                <div class="qrt-work-item"><a data-fancybox="works" href="img/projects/original-size/v-1.jpg" class="qrt-cursor-scale qrt-work-cover-frame"><img src="img/projects/thumbnails/v-2.jpg" alt="work cover">
                    <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                    <div class="qrt-work-category"><span>architecture</span><span>repair</span></div>
                  </a>
                  <div class="qrt-work-descr">
                    <h4 class="qrt-cursor-color qrt-white"><a href="single-work-1.html" class="qrt-anima-link">Apartment Building</a></h4><a href="single-work-1.html" class="qrt-cursor-scale qrt-work-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="qrt-masonry-grid-item architecture">
                <div class="qrt-work-item"><a data-fancybox="works" href="img/projects/original-size/10.jpg" class="qrt-cursor-scale qrt-work-cover-frame"><img src="img/projects/thumbnails/10.jpg" alt="work cover">
                    <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                    <div class="qrt-work-category"><span>architecture</span></div>
                  </a>
                  <div class="qrt-work-descr">
                    <h4 class="qrt-cursor-color qrt-white"><a href="single-work-1.html" class="qrt-anima-link">Weelywally</a></h4><a href="single-work-1.html" class="qrt-cursor-scale qrt-work-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="qrt-masonry-grid-item qrt-masonry-grid-item-50 interior repair">
                <div class="qrt-work-item"><a data-fancybox="works" href="img/projects/original-size/11.jpg" class="qrt-cursor-scale qrt-work-cover-frame"><img src="img/projects/thumbnails/11.jpg" alt="work cover">
                    <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                    <div class="qrt-work-category"><span>interior</span><span>repair</span></div>
                  </a>
                  <div class="qrt-work-descr">
                    <h4 class="qrt-cursor-color qrt-white"><a href="single-work-1.html" class="qrt-anima-link">Modern country house</a></h4><a href="single-work-1.html" class="qrt-cursor-scale qrt-work-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="qrt-masonry-grid-item repair interior">
                <div class="qrt-work-item"><a data-fancybox="works" href="img/projects/original-size/12.jpg" class="qrt-cursor-scale qrt-work-cover-frame"><img src="img/projects/thumbnails/4.jpg" alt="work cover">
                    <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                    <div class="qrt-work-category"><span>interior</span><span>repair</span></div>
                  </a>
                  <div class="qrt-work-descr">
                    <h4 class="qrt-cursor-color qrt-white"><a href="single-work-1.html" class="qrt-anima-link">Waterline</a></h4><a href="single-work-1.html" class="qrt-cursor-scale qrt-work-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                  </div>
                </div>
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
