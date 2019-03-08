<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__.'/classes/ViewModel.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

use Liquid\Liquid;
use Liquid\Template;

Liquid::set('INCLUDE_SUFFIX', 'liquid');
Liquid::set('INCLUDE_PREFIX', '');

$viewBag = new ViewModel();

$viewsPath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR;

try {
  $liquid = new Template($viewsPath . 'templates' . DIRECTORY_SEPARATOR);
  $liquid->parse(file_get_contents($viewsPath . 'templates' . DIRECTORY_SEPARATOR . 'pages/index.liquid'));

  echo $liquid->render($viewBag->data());
} catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}
