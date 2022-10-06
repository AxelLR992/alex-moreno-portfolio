<?php
require("../classes/Fetch.php");
require("../vendor/autoload.php");

// Load .env
$dotenv = Dotenv\Dotenv::createImmutable("../");
$dotenv->load();

$fetch = new Fetch();
$fetch->set_api_key($_ENV["REST_API_KEY"]);
$fetch->set_base_url($_ENV["REST_API_URL"]);

$response = json_decode($fetch->get("/content/item/clients"));
var_dump($response);
