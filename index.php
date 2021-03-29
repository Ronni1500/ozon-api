<?
require 'SwaggerClient-php/autoload.php';


use Swagger\Client\Api\WarehouseAPIApi;
use Swagger\Client\ApiClient;
use Swagger\Client\Configuration;
use Swagger\Client\Model\Productv2ImportProductsResponseResult;
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


/**
 * Class ozonSeller
 */
class ozonSeller{

    /**
     * @var
     */
    private $apiKey;

    /**
     * @return mixed
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @return mixed
     */
    public function getClientId()
    {
        return $this->clientId;
    }
    /**
     * @var
     */
    private $clientId;
    /**
     * @var ApiClient
     */
    private $apiClient;

    /**
     * @var string
     */
    private $hostApi = 'cb-api.ozonru.me';

    /**
     * OzonSeller constructor.
     * @param $clientId (required)
     * @param $apiKey (required)
     */
    public function __construct($clientId, $apiKey)
    {
        $config = new Configuration();
        $config->addDefaultHeader('Client-Id', $clientId);
        $config->addDefaultHeader('Api-Key', $apiKey);
        $this->clientId = $clientId;
        $this->apiKey = $apiKey;
        $config->setHost($this->hostApi);
        $this->apiClient = new ApiClient($config);
    }




    /**
     * @param array $data (required)
     * @return mixed|Productv2ImportProductsResponseResult
     */
    public function productImport(array $data = [])
    {
        $product = new ProductAPIApi($this->apiClient);
        $body = new Swagger\Client\Model\Productv2ImportProductsRequest($data);
        $client = $product->getApiClient()->getConfig()->getDefaultHeaders();
        try {
            $response = $product->productAPIImportProductsV2(
                $this->getClientId(),
                $this->getApiKey(),
                $body
            );
            $result = $response->getResult();
            return $result['task_id'];
        } catch (\Swagger\Client\ApiException $e) {
            return $e->getResponseBody();
        }
    }

     public function getInfoProduct(array $data = [])
    {
        $product = new ProductAPIApi($this->apiClient);
        $body = new Swagger\Client\Model\Productv2GetProductInfoListRequest($data);
        try {
            $response = $product->productAPIGetProductInfoListV2(
                $this->getClientId(),
                $this->getApiKey(),
                $body
            );
            return $response->getResult();
        } catch (\Swagger\Client\ApiException $e) {
            echo "Exeption <br>";
            return $e->getResponseBody();
        }
    }
    public function getInfoListProduct($data)
    {
        $product = new ProductAPIApi($this->apiClient);
        $body = new Swagger\Client\Model\Productv2GetProductInfoListRequest($data);
        try {
            $response = $product->productAPIGetProductInfoListV2(
                $this->getClientId(),
                $this->getApiKey(),
                $body
            );
            return $response->getResult();
        } catch (\Swagger\Client\ApiException $e) {
            echo "Exeption <br>";
            return $e->getResponseBody();
        }
    }

    public function updatePriceProduct($data)
    {
        $product = new ProductAPIApi($this->apiClient);
        $body = new \Swagger\Client\Model\ProductImportProductsPricesRequest($data);
        try {
            $response = $product->productAPIImportProductsPrices(
                $this->getClientId(),
                $this->getApiKey(),
                $body
            );
            return $response->getResult();
        } catch (\Swagger\Client\ApiException $e) {
            echo "Exeption <br>";
            return $e->getResponseBody();
        }
    }

    public function updateStocks($data)
    {
        $product = new ProductAPIApi($this->apiClient);
        $body = new \Swagger\Client\Model\Productv2ProductsStocksRequest($data);
        try {
            $response = $product->productAPIProductsStocksV2(
                $this->getClientId(),
                $this->getApiKey(),
                $body
            );
            return $response->getResult();
        } catch (\Swagger\Client\ApiException $e) {
            echo "Exeption <br>";
            return $e->getResponseBody();
        }
    }

    public function getCategoriesTree()
    {
        $product = new Swagger\Client\Api\CategoryAPIApi($this->apiClient);
        try {
            $response = $product->categoryAPIGetCategoryTree3(
                $this->getClientId(),
                $this->getApiKey()
            );
            return $response->getResult();
        } catch (\Swagger\Client\ApiException $e) {
            echo "Exeption <br>";
            return $e->getResponseBody();
        }
    }

    public function getCategoryAttr($data)
    {
        $product = new Swagger\Client\Api\CategoryAPIApi($this->apiClient);
        $body = new \Swagger\Client\Model\Categoryv2CategoryAttributeRequest($data);
        try {
            $response = $product->categoryAPICategoryAttribute(
                $this->getClientId(),
                $this->getApiKey(),
                $body
            );
            return $response->getResult();
        } catch (\Swagger\Client\ApiException $e) {
            echo "Exeption <br>";
            return $e->getResponseBody();
        }
    }
}



$ozonSeller = new ozonSeller('836', '0296d4f2-70a1-4c09-b507-904fd05567b9');

$data = [
    "barcode" => "8801643566784",
    "description" => "Red Samsung Galaxy S9 with 512GB",
    "category_id" => 0,
    "name" => "Samsung Galaxy S9",
    "offer_id" => "REDSGS9-512",
    "price" => "79990",
    "old_price" => "89990",
    "premium_price" => "75555",
    "vat" => "0",
    "vendor" => "Samsung",
    "vendor_code" => "SM-G960UZPAXAA",
    "height" => 0,
    "depth" => 0,
    "width" => 0,
    "dimension_unit" => "mm",
    "weight" => 0,
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

$task_id = $ozonSeller->productImport($data);
echo $task_id;

$dataInfoProduct = [
    'offer_id'=> "item_6060091",
    'product_id'=> 7154396,
    'sku'=> 150583609
];
$dataPrices['prices'] = [
    [
      "product_id" => 120000,
      "offer_id"=> "PRD-1",
      "price"=> "79990",
      "old_price"=> "89990",
      "premium_price"=> "75555"
    ],
    [
      "product_id"=> 124100,
      "offer_id"=> "PRD-2",
      "price"=> "79990",
      "old_price"=> "89990",
      "premium_price"=> "75555",
    ],
    [
      "product_id"=> 124201,
      "offer_id"=> "PRD-3",
      "price"=> "89990",
      "old_price"=> "79990",
      "premium_price"=> "75555",
    ]
  ];

echo "<pre>";
//print_r($ozonSeller->updatePriceProduct($dataPrices));
echo "</pre>";

echo "<pre>";
//print_r($ozonSeller->getInfoProduct($dataInfoProduct));
echo "</pre>";

$dataStocks['stocks'] = [
    [
        'offer_id' => 'item_6060091',
        'product_id' => 0,
        'stock' => 0,
        'warehouse_id' => 0
    ]
];

$dataAttr = [
    'attribute_type' => 'required',
    'category_id' => 78731083,
    'language' => 'RU'
];
// 78731083
echo "<pre>";
print_r($ozonSeller->getCategoryAttr($dataAttr));
echo "</pre>";


