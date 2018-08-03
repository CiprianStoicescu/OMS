<?php
$config = [
    // Meta and titles
    'title'             => "My Website", // Title, used all over the site.
    'logo'              => "https://cdn.energysys.com/wp-content/uploads/2012/03/Energysys_avatar-logo-transparent-bg.png", // Logo, must be a direct url or direct path to file, used all over the site.
    'favicon'           => "https://cdn.energysys.com/wp-content/uploads/2012/03/Energysys_avatar-logo-transparent-bg.png", // Favicon, must be a direct url or direct path to file, used all over the site.
    'description'       => "Your website description here", // Description, used for meta purposes.
    'author'            => "OMS", // Website author, your name or alias, used for meta purposes.
    'keywords'          => "Sleek, nice, fast", // Keywords, please divide all keywords using a comma, used for meta purposes.
    'locale'            => "en_US", // Country and language, if you don't know what to put here, don't change it, used for meta purposes.

    // General
    'basePath'          => "http://localhost", // Your website url and installation path, ex; http://localhost/oms.
    'homePage'          => "-", // Ability to change the homePage file will come in a future update.
    'errorDocument'     => "error.tpl", // Ability to change the homePage file will come in a future update.
    'credityn'          => "true", // Credits, set to true if you want to add credits to OpenCMS in your footer.
    'homepageJumbotron' => "true", // Homepage Jumbotron, set to true if you want to add a homepage jumbotron to OpenCMS on your homepage.
    'navbaryn'          => "true", // Site navigation bar, set to true if you want to add a navigation bar to OpenCMS.

    // Database
    'DatabaseServer'    => "localhost", // Database server you want to connect to.
    'DatabaseUser'      => "root", // Database username you have set, usually root when running locally.
    'DatabasePass'      => "", // Database password you have set, usually empty when running locally.
    'DatabaseName'      => "omswip", // Database name you have set, can't be empty.

    // Theme
    'theme'             => "template", // Enter the theme name here

    // Widgets

    // Advanced, DO NOT EDIT THIS UNLESS YOU KNOW WHAT YOU'RE DOING!
    'corever'           => "1",
    'corevernr'         => "20983",
    'corestatus'        => "dev",
    'year'              => date("Y"),
    'phpversion'        => phpversion(),
    'credit'            => "OMSP",
    'crediturl'         => "https://omsp.org",
    'charset'           => "utf-8",
    'bootstrapyn'       => "true",
];

// Compiled
$config["omsfullver"] = "OpenCMS R".$config['corever'].".".$config['corevernr']."-".$config['corestatus'];
