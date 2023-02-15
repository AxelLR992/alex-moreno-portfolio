<?php
// Call the API to obtain the clients

$fetch = new Fetch();
$fetch->set_api_key($_ENV["REST_API_KEY"]);
$fetch->set_base_url($_ENV["REST_API_URL"]);

$banners = json_decode($fetch->get("/content/items/banners"));
?>

<div class="swiper-container qrt-main-slider-onepage">
    <div class="qrt-slider-pagination">
        <div class="swiper-pagination swiper-main-pagination"></div>
    </div>
    <div class="qrt-slider-navigation qrt-absolute">
        <div class="qrt-slider-nav-btn qrt-main-prev qrt-cursor-scale qrt-cursor-color">
            <i class="fas fa-arrow-left"></i><span><?php echo L::sliderControls_previous; ?></span>
        </div>
        <div class="qrt-slider-nav-btn qrt-main-next qrt-cursor-scale qrt-cursor-color">
            <span><?php echo L::sliderControls_next; ?></span><i class="fas fa-arrow-right"></i>
        </div>
    </div>
    <div class="swiper-wrapper">
        <?php
        foreach ($banners as $banner) { ?>
            <div class="swiper-slide">
                <div class="qrt-project-cover">
                    <div class="qrt-image-frame">
                        <img class="" src="<?php echo $_ENV['ASSETS_URL'] . $banner->{'background-image'}->path ?>" alt="<?php echo $banner->title ?>" data-swiper-parallax="400" data-swiper-parallax-scale="1.4" />
                    </div>
                    <div class="qrt-overlay">
                        <div class="qrt-parallax-fix" data-swiper-parallax-x="-400" data-swiper-parallax-duration="1000">
                            <div class="qrt-banner-title">
                                <h1 class="qrt-white qrt-mb-30" style="max-width: 600px">
                                    <?php echo $banner->title ?>
                                </h1>
                                <div class="qrt-divider-2"></div>
                                <div class="qrt-text qrt-white qrt-mb-20">
                                    <?php echo $banner->description ?>
                                </div>
                                <?php echo $banner->{'main-button-text'} ? 
                                    '<a href="' . $banner->{'main-button-url'} . '" class="qrt-btn qrt-btn-md qrt-btn-color qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>' . $banner->{'main-button-text'} . '</span><i class="fas fa-arrow-right"></i></a>' 
                                    : "" 
                                ?>
                                <?php echo $banner->{'secondary-button-text'} ? 
                                    '<a href="' . $banner->{'secondary-button-url'} . '" class="qrt-btn qrt-btn-md qrt-btn-border qrt-cursor-scale qrt-anima-link qrt-mb-20"><span>' . $banner->{'secondary-button-text'} . '</span><i class="fas fa-arrow-right"></i></a>' 
                                    : "" 
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
</div>