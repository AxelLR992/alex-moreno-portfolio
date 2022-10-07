<?php
require("./classes/Fetch.php");
require("./vendor/autoload.php");

// Load .env
$dotenv = Dotenv\Dotenv::createImmutable("./");
$dotenv->load();

// Call the API to obtain the clients

$fetch = new Fetch();
$fetch->set_api_key($_ENV["REST_API_KEY"]);
$fetch->set_base_url($_ENV["REST_API_URL"]);

$clients = json_decode($fetch->get("/content/items/clients"));

// Loop through the clients to export the corresponding HTML
foreach ($clients as $client) { ?>
    <div class="swiper-slide">
        <img 
            src="<?php echo "https://cms.alexmorenoac.com/storage/uploads" . $client->logo->path ?>" 
            alt="<?php echo $client->name ?>" 
        />
    </div>
<?php }