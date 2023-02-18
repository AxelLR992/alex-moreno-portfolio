<?php include "includes/init.php"; ?>
<?php
$locale = isset($_SESSION['lang']) ? strtolower($_SESSION['lang']) : $i18n->getFallbackLang();
$fetch = new Fetch();
$fetch->set_api_key($_ENV["REST_API_KEY"]);
$fetch->set_base_url($_ENV["REST_API_URL"]);

$owner = json_decode($fetch->get("/content/item/owner", array("locale" => $locale)));
?>
<!doctype html>
<html lang="zxx">

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
                  <h3 class="qrt-mb-5"><?php echo $owner->fullname ?></h3>
                  <div class="qrt-el-suptitle"><?php echo $owner->profession ?></div>

                  <div class="qrt-divider"></div>

                  <ul class="qrt-table">
                    <li>
                      <h5><?php echo L::common_country ?>:</h5><span><?php echo $owner->country ?></span>
                    </li>
                    <li>
                      <h5><?php echo L::common_city ?>:</h5><span><?php echo $owner->city ?></span>
                    </li>
                    <li>
                      <h5><?php echo L::common_email ?>:</h5><span><a class="qrt-cursor-color" href="mailto:<?php echo $owner->email ?>"><?php echo $owner->email ?></a></span>
                    </li>
                    <li>
                      <h5><?php echo L::common_phone ?>:</h5><span><a class="qrt-cursor-color" href="tel:<?php echo $owner->phone ?>"><?php echo $owner->phone ?></a></span>
                    </li>
                  </ul>

                  <div class="qrt-divider"></div>

                  <ul class="qrt-social-list">
                    <li><a href="https://www.behance.net/alexmoreno8" class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-behance"></i></a></li>
                    <li><a href="https://dribbble.com/alexmorenoac" class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-dribbble"></i></a></li>
                    <li><a href="https://www.instagram.com/alexmorenoac/" class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.facebook.com/alexmorenoac" class="qrt-cursor-scale qrt-cursor-color"><i class="fab fa-facebook"></i></a></li>
                  </ul>
                </div>

              </div>
            </div>

            <div class="row">
              <div class="col-lg-12">

                <h3 class="qrt-mb-20"><?php echo L::common_about ?> <?php echo explode(" ", $owner->fullname)[0] ?></h3>

              </div>
              <div class="col-lg-12 qrt-mb-25">

                <p>Organised and reliable, Viktoria is driven to integrate aesthetics with highly functional and exciting interior spaces. Her experience covers a broad range of project types and she works tirelessly to ensure that projects run
                  smoothly from concept to completion. Viktoria is currently undertaking her Masters in Urban Design.</p>

                <p class="mb-20">A global traveler, Viktoria has enjoyed vacations far and wide. When it comes to design, Viktoria cites Interior designer India Mahdavi as one of her biggest inspirations. Her clever use of colour, texture, and
                  artworks combine
                  to provide an endless source of inspiration.</p>

              </div>
              <div class="col-lg-12">

                <blockquote>
                  Change is an opportunity! We want to lead people towards durable solutions and designs that enhance feelings of closeness, wellbeing and hopefully, happiness.
                </blockquote>

              </div>
            </div>

            <div class="qrt-divider"></div>

            <div class="row">

              <div class="col-lg-12">

                <h3 class="qrt-mb-40"><?php echo L::common_services ?></h3>

              </div>

              <div class="col-lg-4">

                <div class="qrt-icon-box">
                  <img class="mb-20" src="img/icons/icon-1.svg" alt="icon">
                  <h4 class="mb-20">Architecture</h4>
                  <div>Vero explicabo dolorem quod voluptatem consequatur, sint eius voluptates, amet. Animi perspiciatis amet.</div>
                </div>

              </div>
              <div class="col-lg-4">

                <div class="qrt-icon-box">
                  <img class="mb-20" src="img/icons/icon-2.svg" alt="icon">
                  <h4 class="mb-20">Interior design</h4>
                  <div>Eum sapiente odit nisi ad et, amet. Animi perspiciatis amet, quo? Ea similique, ex quas tempore excepturi eos eaque.</div>
                </div>

              </div>
              <div class="col-lg-4">

                <div class="qrt-icon-box">
                  <img class="mb-20" src="img/icons/icon-3.svg" alt="icon">
                  <h4 class="mb-20">Repair</h4>
                  <div>Animi perspiciatis amet, quo? Ea similique, ex quas tempore excepturi eos eaque esse itaque alias eveniet, vero explicabo.</div>
                </div>

              </div>
            </div>

            <div class="qrt-divider qrt-space-fix"></div>

            <?php include "./includes/achievements.php" ?>

            <div class="qrt-divider qrt-space-fix"></div>

            <div class="row">
              <div class="col-lg-12">

                <h3 class="qrt-mb-40">Latest <?php echo explode(" ", $owner->fullname)[0] ?>'s works</h3>

              </div>
              <div class="col-lg-12">

                <div class="swiper-container qrt-latest-works-slider qrt-mb-20" style="overflow: visible">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">

                      <div class="qrt-work-item qrt-work-open">
                        <a data-fancybox="works" href="img/projects/original-size/5.jpg" class="qrt-cursor-scale qrt-work-cover-frame">
                          <img src="img/projects/thumbnails/5.jpg" alt="work cover">
                          <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                        </a>
                        <div class="qrt-work-descr">
                          <h4 class="qrt-cursor-color qrt-white"><a href="work-single.html">Project title</a></h4>
                          <a href="work-single.html" class="qrt-cursor-scale qrt-work-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                        </div>
                      </div>

                    </div>
                    <div class="swiper-slide">

                      <div class="qrt-work-item qrt-work-open">
                        <a data-fancybox="works" href="img/projects/original-size/8.jpg" class="qrt-cursor-scale qrt-work-cover-frame">
                          <img src="img/projects/thumbnails/8.jpg" alt="work cover">
                          <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                        </a>
                        <div class="qrt-work-descr">
                          <h4 class="qrt-cursor-color qrt-white"><a href="work-single.html">Project title</a></h4>
                          <a href="work-single.html" class="qrt-cursor-scale qrt-work-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                        </div>
                      </div>

                    </div>
                    <div class="swiper-slide">

                      <div class="qrt-work-item qrt-work-open">
                        <a data-fancybox="works" href="img/projects/original-size/7.jpg" class="qrt-cursor-scale qrt-work-cover-frame">
                          <img src="img/projects/thumbnails/7.jpg" alt="work cover">
                          <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
                        </a>
                        <div class="qrt-work-descr">
                          <h4 class="qrt-cursor-color qrt-white"><a href="work-single.html">Project title</a></h4>
                          <a href="work-single.html" class="qrt-cursor-scale qrt-work-more qrt-anima-link"><i class="fas fa-arrow-right"></i></a>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6">

                <div class="swiper-latest-works-pagination"></div>

              </div>
              <div class="col-6">

                <div class="qrt-slider-nav">
                  <!-- prev -->
                  <div class="qrt-slider-prev qrt-latest-works-prev"><i class="fas fa-arrow-left"></i></div>
                  <!-- next -->
                  <div class="qrt-slider-next qrt-latest-works-next"><i class="fas fa-arrow-right"></i></div>
                </div>

              </div>
            </div>

            <div class="qrt-divider"></div>

            <div class="row">
              <div class="col-lg-6">

                <h3 class="qrt-mb-40">Education</h3>

                <div class="qrt-timeline qrt-mb-40">

                  <div class="qrt-timeline-item">
                    <div class="qrt-timeline-mark"></div>
                    <div class="qrt-a qrt-timeline-content">
                      <div class="qrt-card-header">
                        <div class="qrt-date qrt-mb-20">jan 2018 - may 2020</div>
                        <h4 class="qrt-mb-5">University of toronto</h4>
                        <div class="qrt-el-suptitle">Student</div>
                      </div>
                      <div class=" qrt-mb-20">Dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</div>
                      <a data-fancybox="diploma" href="img/files/diploma.jpg" class="qrt-link qrt-w-chevron">diploma</a>
                    </div>
                  </div>

                  <div class="qrt-timeline-item">
                    <div class="qrt-timeline-mark"></div>
                    <div class="qrt-a qrt-timeline-content">
                      <div class="qrt-card-header">
                        <div class="qrt-date qrt-mb-20">jan 2018 - may 2020</div>
                        <h4 class="qrt-mb-5">3D visualization courses</h4>
                        <div class="qrt-el-suptitle">Student</div>
                      </div>
                      <div class=" qrt-mb-20">Dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</div>
                      <a data-fancybox="diploma" href="img/files/certificate.jpg" class="qrt-link qrt-w-chevron">Certificate</a>
                    </div>
                  </div>

                </div>

              </div>
              <div class="col-lg-6">

                <h3 class="qrt-mb-40">Experience</h3>

                <div class="qrt-timeline qrt-mb-40">

                  <div class="qrt-timeline-item">
                    <div class="qrt-timeline-mark"></div>
                    <div class="qrt-a qrt-timeline-content">
                      <div class="qrt-card-header">
                        <div class="qrt-date qrt-mb-20">jan 2018 - may 2020</div>
                        <h4 class="qrt-mb-5">Envato market</h4>
                        <div class="qrt-el-suptitle">Template author</div>
                      </div>
                      <div class="qrt-mb-20">Dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</div>
                      <a data-fancybox="recommendation" href="#rec-1" class="qrt-link qrt-w-chevron">Recommendation</a>

                    </div>
                  </div>

                  <div class="qrt-rec-popup" style="display: none;" id="rec-1">

                    <div class="qrt-testimonial">
                      <div class="qrt-testimonial-header">
                        <img src="img/testimonials/t1.jpg" alt="customer">
                        <div class="qrt-testimonial-name">
                          <h4 class="qrt-mb-5">Emma Newman</h4>
                          <div class="qrt-el-suptitle">Chief Architect</div>
                        </div>
                      </div>
                      <div class="qrt-testimonial-text">
                        We engaged Paul Trueman of quarty Studio to manage the planning process and to design and manage a full renovation and remodelling of our 1930s house. We really enjoyed working with Paul. We would not hesitate to
                        recommend Paul and Quarty.
                      </div>
                      <ul class="qrt-stars">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                      </ul>
                    </div>

                  </div>

                  <div class="qrt-timeline-item">
                    <div class="qrt-timeline-mark"></div>
                    <div class="qrt-a qrt-timeline-content">
                      <div class="qrt-card-header">
                        <div class="qrt-date qrt-mb-20">jan 2018 - may 2020</div>
                        <h4 class="qrt-mb-5">Themeforest</h4>
                        <div class="qrt-el-suptitle">Art Director</div>
                      </div>
                      <div class="qrt-mb-20">Dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</div>
                      <a data-fancybox="recommendation" href="#rec-2" class="qrt-link qrt-w-chevron">Recommendation</a>

                    </div>
                  </div>

                  <div class="qrt-rec-popup" style="display: none;" id="rec-2">

                    <div class="qrt-testimonial">
                      <div class="qrt-testimonial-header">
                        <img src="img/testimonials/t2.jpg" alt="customer">
                        <div class="qrt-testimonial-name">
                          <h4 class="qrt-mb-5">Paul Trueman</h4>
                          <div class="qrt-el-suptitle">Chief Architect</div>
                        </div>
                      </div>
                      <div class="qrt-testimonial-text">
                        We worked with Quarty Studio for approximately 2 years on the complete overhaul of our house. This included the design of the project, and the execution of the work. Quarty provided excellent design ideas but
                        were also
                        indispensable in managing the practical side of the build.
                      </div>
                      <ul class="qrt-stars">
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                        <li><i class="fas fa-star"></i></li>
                      </ul>
                    </div>

                  </div>

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
          <div id="fixed" class="qrt-right">
            <div class="qrt-half-banner qrt-left-align qrt-animated-zoom">
              <div class="qrt-image-frame">
                <img src="img/banners/banner3.jpg" alt="banner">
              </div>
              <div class="qrt-overlay">
                <div class="qrt-scroll-hint">
                  <span></span>
                  <span><?php echo L::common_scrollDown ?></span>
                </div>
                <div class="qrt-banner-title">
                  <h2 class="qrt-white qrt-mb-10"><?php echo $owner->fullname ?></h2>
                  <div class="qrt-divider-2"></div>
                  <div class="qrt-text qrt-white qrt-mb-20">Dolor sit amet, consectetur adipisicing elit. <br>Vel excepturi, earum inventore.</div>
                  <a href="contact.html" class="qrt-btn qrt-btn-md qrt-btn-color qrt-anima-link"><span>Get in touch</span></a>
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