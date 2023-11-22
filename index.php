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
            <div class="row">
              <div class="col-lg-12">
                <div class="containerElements">
                  <div class="content1">
                    <h3 class="qrt-mb-40">
                      Meaningful Logos
                    </h3>
                    <p>
                      With a keen attention to detail and big passion for the craft, 
                      we develop purposeful logotypes. We merge creativity with 
                      thoughtful storytelling, creating not only symbols, but visual 
                      ambassadors of their brands, that catch the eyes of customers 
                      and resonate with audiences, to help you launch 
                      industry-leading businesses.
                    </p>
                  </div> 
                  <div class="mark"></div>
                  <div class="imageWhite">
                    <img src="img/imgIndex/logos-isometric-mockup.png" alt="Image1">
                  </div> 
                </div>  
                <div class="containerElements2">
                  <div class="content2">
                    <h3 class="qrt-mb-40">
                      Branding so Irresistible <br> You’ll be inevitable
                    </h3>
                    <p>
                      We create design materials that embody the essence of your 
                      brand, shaping a cohesive visual narrative. We specialize in 
                      distilling the very spirit of your business into a compelling 
                      and unforgettable visual experience. Elevate your presence, 
                      captivate your audience, and leave an indelible 
                      mark in your audience.
                    </p>
                  </div>
                  <div class="mark"></div>
                  <div class="imagePurple">
                    <img src="img/imgIndex/brand-book-homepage-mockup.png" alt="Image1">
                  </div> 
                </div>
                <div class="containerElements">
                  <div class="content1">
                    <h3 class="qrt-mb-40">
                      Striking key visuals
                    </h3>
                    <p>
                      As the market becomes more saturated each day, our powerful 
                      key arts can give your company the upper hand when advertising 
                      your products and services. We transform your vision into 
                      captivating images, enhancing your message and leaving a 
                      lasting impact on your clients.
                    </p>
                  </div> 
                  <div class="mark"></div>
                  <div class="imageWhite">
                    <img src="img/imgIndex/key art mockup.png" alt="Image1">
                  </div> 
                </div> 
              </div>

              <div class="col-lg-12">
                <div class="CardPresentation">
                  <div>
                    <div class="text-container"> Design is not what you see,<br> but how you look at the world. </div>
                    <div class="text-container2"> Alex Moreno</div>
                    <div class="text-container3"> Graphic Design </div>
                    <div class="miniMarks">
                      <div class="Gray"></div>
                      <div class="Gray"></div>
                      <div class="Gray"></div>
                      <div class="Gray"></div>
                    </div>
                  </div>
                  <div class="image-container">
                    <img src="img/blog/Picture4.jpg" alt="PictureBack">
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
                  <a class="qrt-btn qrt-btn-sm qrt-btn-color qrt-cursor-scale qrt-anima-link"
                    href="contact.html"><span>Let's discuss</span></a>
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