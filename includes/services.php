<?php
// Call the API to obtain the prices
$locale = isset($_SESSION['lang']) ? strtolower($_SESSION['lang']) : $i18n->getFallbackLang();
$fetch = new Fetch();
$fetch->set_api_key($_ENV["REST_API_KEY"]);
$fetch->set_base_url($_ENV["REST_API_URL"]);

$services = json_decode($fetch->get("/content/items/services", array("locale" => $locale)));
?>

<section class="row">

    <div class="col-lg-12">

        <h3 class="qrt-mb-40">
            <?php echo L::common_services ?>
        </h3>

    </div>

    <?php foreach ($services as $service) { ?>
        <div class="col-lg-4">

            <div class="qrt-icon-box">
                <img class="mb-20" src="<?php echo $_ENV['ASSETS_URL'] . $service->icon->path ?>" alt="icon">
                <h4 class="mb-20"><?php echo $service->name ?></h4>
                <div><?php echo $service->description ?></div>
            </div>

        </div>
    <?php } ?>

</section>