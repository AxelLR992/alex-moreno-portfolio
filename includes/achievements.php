<?php
$locale = isset($_SESSION['lang']) ? strtolower($_SESSION['lang']) : $i18n->getFallbackLang();
$fetch = new Fetch();
$fetch->set_api_key($_ENV["REST_API_KEY"]);
$fetch->set_base_url($_ENV["REST_API_URL"]);

$achievements = json_decode($fetch->get("/content/item/achievements", array("locale" => $locale)));
?>

<div class="row">
    <div class="col-lg-3 col-sm-6">
        <div class="qrt-counter-frame">
            <div class="qrt-counter-box">
                <span class="qrt-counter"><?php echo $achievements->{'value-1'} ?></span>
            </div>
            <h5><?php echo $achievements->{'label-1'} ?></h5>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="qrt-counter-frame">
            <div class="qrt-counter-box">
                <span class="qrt-counter"><?php echo $achievements->{'value-2'} ?></span>
            </div>
            <h5><?php echo $achievements->{'label-2'} ?></h5>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="qrt-counter-frame">
            <div class="qrt-counter-box">
                <span class="qrt-counter"><?php echo $achievements->{'value-3'} ?></span>
            </div>
            <h5><?php echo $achievements->{'label-3'} ?></h5>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6">
        <div class="qrt-counter-frame">
            <div class="qrt-counter-box">
                <span class="qrt-counter"><?php echo $achievements->{'value-4'} ?></span>
            </div>
            <h5><?php echo $achievements->{'label-4'} ?></h5>
        </div>
    </div>
</div>