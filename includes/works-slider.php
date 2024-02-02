<?php
$fetch = new Fetch();
$fetch->set_api_key($_ENV["REST_API_KEY"]);
$fetch->set_base_url($_ENV["REST_API_URL"]);

$portfolio_content = json_decode($fetch->get("/content/items/portfolio_content", array("locale" => $locale)));
?>

<div class="row">
    <div class="col-lg-12">
                
    </div>
    <div class="col-lg-12">
        <div class="swiper-container qrt-latest-works-slider qrt-mb-20" style="overflow: visible">
        <div class="swiper-wrapper">
          <?php foreach($portfolio_content as $item){?>
          <div class="swiper-slide">
        
            <div class="qrt-work-item qrt-work-open">
              <a data-fancybox="works" href="<?php echo $_ENV["ASSETS_URL"] . $item -> image -> path ?>"
                class="qrt-cursor-scale qrt-work-cover-frame">
                <img src="<?php echo $_ENV["ASSETS_URL"] . $item -> image -> path ?>" alt="work cover">
                <div class="qrt-item-zoom qrt-cursor-color"><i class="fas fa-expand"></i></div>
              </a>
              <div class="qrt-work-descr">
                <h4 class="qrt-cursor-color qrt-white"><a href="single-work-1.php?id=<?php echo $item -> _id ?>"><?php echo $item -> title?></a></h4>
                <a href="single-work-1.php?id=<?php echo $item -> _id ?>" class="qrt-cursor-scale qrt-work-more qrt-anima-link"><i
                    class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        
          <?php }?>
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