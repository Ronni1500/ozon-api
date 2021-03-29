<?
require 'SwaggerClient-php/autoload.php';


use Swagger\Client\Api\WarehouseAPIApi;
use Swagger\Client\ApiClient;
use Swagger\Client\Configuration;
use Swagger\Client\Model\WarehouseWarehouseListRequest;
use Swagger\Client\Api\ProductAPIApi;


$config = [
    'Client-Id' => '836',
    'Api-Key' => '0296d4f2-70a1-4c09-b507-904fd05567b9'
];
$data = [
  'stocks' => [
      "product_id"=> 120000,
      "offer_id"=> "PRD-1",
      "stock"=> 20
    ],
    [
      "product_id" =>  124100,
      "offer_id" => "PRD-2",
      "stock" => 20
    ]
];

$config = new Configuration();

$config->addDefaultHeader('Client-Id', '836');
$config->addDefaultHeader('Api-Key', '0296d4f2-70a1-4c09-b507-904fd05567b9');
$config->setHost('cb-api.ozonru.me');

$apiClient = new ApiClient($config);
$warehouseAPIApi = new WarehouseAPIApi($apiClient);
$client = $warehouseAPIApi->getApiClient()->getConfig()->getDefaultHeaders();


// Example Work with api
$body = new WarehouseWarehouseListRequest();
$body->offsetSet('offsetSet', ["product_id"=> 120000, "offer_id"=> "PRD-1","stock"=> 20]);
try {
    $response = $warehouseAPIApi->warehouseAPIWarehouseList(
        $client['Client-Id'],
        $client['Api-Key'],
        $body
    );
} catch (\Swagger\Client\ApiException $e) {
    echo $e->getMessage();
}

$product = new ProductAPIApi($apiClient);

$data = [
    "barcode" => "8801643566784",
    "description" => "Red Samsung Galaxy S9 with 512GB",
    "category_id" => 17030819,
    "name" => "Samsung Galaxy S9",
    "offer_id" => "REDSGS9-512",
    "price" => "79990",
    "old_price" => "89990",
    "premium_price" => "75555",
    "vat" => "0",
    "vendor" => "Samsung",
    "vendor_code" => "SM-G960UZPAXAA",
    "height" => 77,
    "depth" => 11,
    "width" => 120,
    "dimension_unit" => "mm",
    "weight" => 120,
    "weight_unit" => "g",
    "images" => [
        [
            "file_name" => "https =>//ozon-st.cdn.ngenix.net/multimedia/c1200/1022555115.jpg",
            "default" => true
        ],
        [
            "file_name" => "https =>//ozon-st.cdn.ngenix.net/multimedia/c1200/1022555110.jpg",
            "default" => false
        ],
        [
            "file_name" => "https =>//ozon-st.cdn.ngenix.net/multimedia/c1200/1022555111.jpg",
            "default" => false
        ]
    ],
    "attributes" => [
        [
            "id" => 8229,
            "value" => "4747"
        ],
        [
            "id" => 9048,
            "value" => "Samsung Galaxy S9"
        ],
        [
            "id" => 4742,
            "value" => "512 ГБ"
        ],
        [
            "id" => 4413,
            "collection" => ["1", "2", "13"]
        ],
        [
            "id" => 4018,
            "complex_collection" => [
                [
                    "collection" => [
                        [
                            "id" => 4068,
                            "value" => "Additional video"
                        ],
                        [
                            "id" => 4074,
                            "value" => "5_-NKRVn7IQ"
                        ]
                    ]
                ],
                [
                    "collection" => [
                        [
                            "id" => 4068,
                            "value" => "Another one video"
                        ],
                        [
                            "id" => 4074,
                            "value" => "5_-NKRVn7IQ"
                        ]
                    ]
                ]
            ]
        ]
    ]
];
$body = new Swagger\Client\Model\Productv2ImportProductsRequest($data);

try {
    $response = $product->productAPIImportProductsV2(
        $client['Client-Id'],
        $client['Api-Key'],
        $body
    );
    echo "<pre>";
    print_r($response->getResult());
    echo "</pre>";
} catch (\Swagger\Client\ApiException $e) {
    echo "<pre>";
    print_r($e->getResponseBody());
    echo "</pre>";
    echo $e->getMessage();
}
