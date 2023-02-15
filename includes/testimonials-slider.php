<?php
// Call the API to obtain testimonials
$locale = strtolower($_SESSION['lang']);

$fetch = new Fetch();
$fetch->set_api_key($_ENV["REST_API_KEY"]);
$fetch->set_base_url($_ENV["REST_API_URL"]);

$testimonials = json_decode($fetch->get("/content/items/testimonials", array("locale" => $locale)));
?>

<div class="row">
    <div class="col-lg-12">
        <h3 class="qrt-mb-40">Testimonials</h3>
    </div>
    <div class="col-lg-12">
        <div class="swiper-container qrt-testimonials-slider" style="overflow: visible">
            <div class="swiper-wrapper">
                <?php
                foreach ($testimonials as $testimonial) { ?>
                    <div class="swiper-slide">
                        <div class="qrt-testimonial">
                            <div class="qrt-testimonial-header">
                                <img src="<?php echo $_ENV["ASSETS_URL"] . $testimonial->picture->path ?>" alt="<?php echo $testimonial->author ?>" />
                                <div class="qrt-testimonial-name">
                                    <h4 class="qrt-mb-5"><?php echo $testimonial->author ?></h4>
                                    <div class="qrt-el-suptitle"><?php echo $testimonial->{'author-position'} ?></div>
                                </div>
                            </div>
                            <div class="qrt-testimonial-text">
                                <?php echo $testimonial->testimonial ?>
                            </div>
                            <ul class="qrt-stars">
                                <!-- Filled stars -->
                                <?php
                                for ($i = 0; $i < $testimonial->puntuation; $i++) { ?>
                                    <li><i class="fas fa-star"></i></li>
                                <?php } ?>
                                <!-- Empty stars -->
                                <?php
                                for ($i = 0; $i < 5 - $testimonial->puntuation; $i++) { ?>
                                    <li class="qrt-empty">
                                        <i class="fas fa-star"></i>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="swiper-testi-pagination qrt-cursor-color qrt-cursor-scale"></div>
    </div>
    <div class="col-6">
        <div class="qrt-slider-nav">
            <!-- prev -->
            <div class="qrt-slider-prev qrt-testi-prev qrt-cursor-color qrt-cursor-scale">
                <i class="fas fa-arrow-left"></i>
            </div>
            <!-- next -->
            <div class="qrt-slider-next qrt-testi-next qrt-cursor-color qrt-cursor-scale">
                <i class="fas fa-arrow-right"></i>
            </div>
        </div>
    </div>
</div>