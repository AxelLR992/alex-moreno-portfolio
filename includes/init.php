<?php
require_once 'vendor/autoload.php';
include "functions/render_navbar.php";
require("./classes/Fetch.php");

// Load .env
$dotenv = Dotenv\Dotenv::createImmutable("./");
$dotenv->load();

// Start session to persist configurations
session_start();

// Setup i18n
$i18n = new i18n();
$i18n->setFilePath('locales/{LANGUAGE}/translation.json');
$i18n->init();