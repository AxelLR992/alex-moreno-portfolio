<?php
// Call the API to obtain the clients

$fetch = new Fetch();
$fetch->set_api_key($_ENV["REST_API_KEY"]);
$fetch->set_base_url($_ENV["REST_API_URL"]);

$clients = json_decode($fetch->get("/content/items/clients"));
?>

<div class="row">
    <div class="col-lg-12">
        <div class="swiper-container qrt-brands-slider" style="overflow: visible">
            <div class="swiper-wrapper clients-slider">
                <?php
                // Loop through the clients to export the corresponding HTML
                foreach ($clients as $client) { ?>
                    <div class="swiper-slide">
                        <img src="<?php echo $_ENV["ASSETS_URL"] . $client->logo->path ?>" alt="<?php echo $client->name ?>" />
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>