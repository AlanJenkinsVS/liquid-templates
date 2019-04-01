<?php
class ViewModel
{
  public $data;

  function __construct()
	{
    $viewData = [];

    $viewData["document"] = [
      "title" => "Nginx, PHP56-FPM and Liquid Templates",
      "canonical" => $_SERVER['REQUEST_URI'],
      "copyright" => "VS Store. All Rights Reserved."
    ];

    $viewData["breadcrumb"] = [
      "css" => [
        "item" => "p-2 text-red-light",
        "link" => "p-2 text-red-dark no-underline hover:text-grey-dark hover:underline",
        "divider" => "text-red-lighter block",
      ],
      "items" => [
        [
          "text" => "Home",
          "url" => "/"
        ],
        [
          "text" => "Men",
          "url" => "/men-c1"
        ],
        [
          "text" => "Big Blue Jumper"
        ]
      ]
    ];

  $viewData["nav"] = [
      "css" => [
        // "nav" => "bg-red-dark text-red-lighter",
        "container" => "list-reset flex w-full max-w-xl mx-auto justify-center relative",
        // "link" => "cursor-pointer block flex-1 text-center p-4 border border-transparent no-underline text-red-lightest hover:text-blue-darker hover:bg-blue-lighter hover:border-blue"
      ],
      "items" => [
        [
          "text" => "New",
          "url" => "/new"
        ],
        [
          "text" => "Mens",
          "url" => "/mens",
          "items" => [
            "text" => "Clothing",
            "items" => [
              [
                "text" => "Coats &amp; Jackets",
                "url" => "https://psyche.co.uk/men-c1/coats-jackets-c412"
              ]
            ],
            
          ]
        ],
        [
          "text" => "Womens",
          "url" => "/womens"
        ],
        [
          "text" => "Kids",
          "url" => "/kids"
        ],
        [
          "text" => "Brands",
          "url" => "/brands"
        ],
        [
          "text" => "Sales",
          "url" => "/sales"
        ]
      ]
    ];

    $viewData["sliver_banner"] = [
      "type" => "sliver",
      "template" => "components/promo_units/sliver",
      "css" => [
        // "sliver" => "text-sm border-b",
        // "container" => "flex w-full max-w-xl mx-auto justify-between",
        // "link" => "flex items-center p-4 no-underline text-black hover:underline",
        "content" => "flex items-center p-4 text-red",
      ],
      "items" => [
        [
          "id" => "promo_unit_5c91fc5f9a28a6812",
          "text" => "Free UK Next Day Delivery On Orders Over £99",
          "url" => "https://psyche.co.uk/delivery-and-returns-i284",
          "icon" => ""
        ],
        [
          "id" => "promo_unit_5c91fc5f9a68d1527",
          "text" => "Buy Now, Play Later - Klarna",
          "url" => "https://psyche.co.uk/klarna-i302",
          "icon" => ""
        ],
        [
          "id" => "promo_unit_5c91fc5f9aa717355",
          "text" => "Worldwide Shipping",
          "url" => "https://psyche.co.uk/delivery-information-i5",
          "icon" => ""
        ]
      ]
    ];

    $viewData["products"][] = [
      "name" => "Bradstreet Chukka Boots",
      "brand" => "Timberland Footwear",
      "price" => "119.99",
      // "description" => "my product",
      "image" => "12.jpg"
    ];

    $viewData["products"][] = [
      "name" => "Ethan Wedge Vibram Sole Boots",
      "brand" => "Trickers",
      "price" => "424.99",
      // "description" => "my product",
      "image" => "15.jpg"
    ];

    $this->data = $viewData;
  }

  function data()
  {
    return $this->data;
  }
}
