<?php
// Call the API to obtain the prices
$locale = isset($_SESSION['lang']) ? strtolower($_SESSION['lang']) : $i18n->getFallbackLang();
$fetch = new Fetch();
$fetch->set_api_key($_ENV["REST_API_KEY"]);
$fetch->set_base_url($_ENV["REST_API_URL"]);

$prices = json_decode($fetch->get("/content/items/prices", array("locale" => $locale)));
?>

<div class="row">
    <div class="col-lg-12">
        <h3 class="qrt-mb-40 text-center">
            <?php echo L::common_prices ?>
        </h3>
    </div>
</div>
<div class="d-flex justify-content-center mt-5">
    <div class="d-flex" style="gap: 40px">

        <?php foreach ($prices as $price) { ?>
            <div>
                <div class="qrt-a qrt-price d-flex align-items-center justify-content-center <?php echo $price->{'popular-flag'} == true ? "qrt-popular-price" : "" ?>" style="width: 400px; height: 500px;">
                    <div class="qrt-price-body">
                        <h5 class="qrt-mb-20">
                            <?php echo $price->title ?>
                        </h5>
                        <div class="qrt-price-cost">
                            <?php
                            if ($price->price == 0) { ?>
                                <div class="qrt-number text-uppercase">
                                    <?php echo L::common_free ?>
                                    <?php echo $price->observations ? "<sup>*</sup>" : "" ?>
                                </div>
                            <?php } else { ?>
                                <!-- <span>$</span>29<span>h</span> -->
                                <div class="qrt-number">
                                    <span>$</span>
                                    <?php echo $price->price ?>
                                    <span>
                                        <?php echo $price->{'price-periodicity'} ? substr($price->{'price-periodicity'}, 0, 1) : "" ?>
                                    </span>
                                </div>
                            <?php } ?>
                        </div>
                        <ul class="qrt-price-list">
                            <?php
                            foreach ($price->{'included-features'} as $feature) { ?>
                                <li>
                                    <?php echo $feature ?>
                                </li>
                            <?php } ?>
                            <?php
                            if (isset($price->{'not-included-features'})) {

                                foreach ($price->{'not-included-features'} as $feature) { ?>
                                    <li class="qrt-empty-item">
                                        <?php echo $feature ?>
                                    </li>
                            <?php }
                            } ?>
                        </ul>
                        <a class="qrt-btn qrt-btn-md qrt-cursor-scale qrt-anima-link" href="contact.php"><span>Order
                                now</span><i class="fas fa-arrow-right"></i></a>
                        <?php
                        if (isset($price->observations)) { ?>
                            <div class="qrt-asterisk">
                                <sup>*</sup>
                                <?php echo $price->observations ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>