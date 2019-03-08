<?php
class ViewModel
{
  public $data;

  function __construct()
	{
    //
    $viewData = [];

    $viewData["document"] = [
      "title" => "Nginx, PHP56-FPM and Liquid Templates",
      "content" => "Some intro content",
      "canonical" => $_SERVER['REQUEST_URI'],
      "copyright" => "VS Store. All Rights Reserved."
    ];

    $viewData["products"][] = [
      "name" => "T-Shirt",
      "price" => "8.99",
      "description" => "my product"
    ];

    $viewData["products"][] = [
      "name" => "Big Blue Jumper",
      "price" => "23.99",
      "description" => "my product"
    ];

    $this->data = $viewData;
  }

  function data()
  {
    return $this->data;
  }
}
