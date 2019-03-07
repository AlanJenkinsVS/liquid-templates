<?php
require __DIR__ . '/vendor/autoload.php';

use Liquid\Liquid;
use Liquid\Template;

Liquid::set('INCLUDE_SUFFIX', 'liquid');
Liquid::set('INCLUDE_PREFIX', '');

$viewsPath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR;

try {
  $liquid = new Template($viewsPath . 'templates' . DIRECTORY_SEPARATOR);
  $liquid->parse(file_get_contents($viewsPath . 'templates' . DIRECTORY_SEPARATOR . 'pages/index.liquid'));

  $viewData = [];

  $viewData["document"] = [
    "title" => "Nginx, PHP56-FPM and Liquid Templates",
    "content" => "Some intro content",
    "copyright" => "VS Store. All Rights Reserved."
  ];

  $viewData["products"][] = [
    "name" => "T-Shirt",
    "price" => "8.99",
    "description" => "my product"
  ];

  $viewData["products"][] = [
    "name" => "T-Shirt",
    "price" => "8.99",
    "description" => "my product"
  ];

  echo $liquid->render($viewData);
} catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}
