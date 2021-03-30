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
//$body = new WarehouseWarehouseListRequest();
//$body->offsetSet('offsetSet', ["product_id"=> 120000, "offer_id"=> "PRD-1","stock"=> 20]);
//try {
//    $response = $warehouseAPIApi->warehouseAPIWarehouseList(
//        $client['Client-Id'],
//        $client['Api-Key'],
//        $body
//    );
//} catch (\Swagger\Client\ApiException $e) {
//    echo $e->getMessage();
//}


/**
 * Интеграция с ozon
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
     * Загружает товар на площадку ozon
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

    /**
     * Возвращает информацию о товаре
     * @param array $data
     * @return mixed|\Swagger\Client\Model\Productv2GetProductInfoListResponseResult
     */
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

    /**
     * Возвращает информацию о товаре список
     * @param $data
     * @return mixed|\Swagger\Client\Model\Productv2GetProductInfoListResponseResult
     */
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

    /**
     * Обновляет цену у заданного товара
     * @param $data
     * @return mixed|\Swagger\Client\Model\ProductImportProductsPricesResponseProcessResult[]
     */
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

    /**
     * Обновляет остатки заданного товара
     * @param $data
     * @return mixed|\Swagger\Client\Model\Productv2ProductsStocksResponseResult[]
     */
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

    /**
     * Получить список категорий с ozon
     * @return mixed|\Swagger\Client\Model\GetCategoryTreeResponseItem[]
     */
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

    /**
     * Получить атрибуты категории с ozon
     * @param $data
     * @return mixed|\Swagger\Client\Model\CategoryAttributeResponseAttribute[]
     */
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

class importBitrixOzon{
    public function getProduct()
    {
        $result = [
            'items' => []
        ];
        $res = \Bitrix\Iblock\ElementTable::getList([
            'filter' => [
                'IBLOCK_ID' => 2,
                'ACTIVE' => 'Y'
            ],
            'order' => [
                'ID' => 'ASC'
            ],
            'select' => [
                'IBLOCK_ID',
                'ID',
                'NAME',
                'PROPERTY_SELECT_TP_INSERT'
            ]
        ]);

        while ($arr = $res->fetchAll()) {
            $result['items'][] = [
                'description' => '',
                'barcode' => '',
                'category_id' => 33633390,
                'attributes' => [
                    'id' => 8292, // Характеристика объединяющая товары в ТП
                    'value' => ''
                ]
            ];
        }
    }
}



$ozonSeller = new ozonSeller('836', '0296d4f2-70a1-4c09-b507-904fd05567b9');

$data = [
    "attributes" => [ // Массив характеристик товара. Да
        [
            "id" => 8229,
            "value" => "4747"
        ],
    ],
    'description' => '',
    "barcode" => "8801643566784",// Штрихкод товара. нет
    "category_id" => 0, // Идентификатор категории. да
    "name" => "Модуль управления Neptun Smart+", // Название товара
    "offer_id" => "REDSGS9-512", // Идентификатор товара в системе продавца. Да
    "price" => "13900.00", // Цена товара с учетом скидок, Да
    "vat" => "0", // Ставка НДС для товара Да.
    "height" => 0, // Высота. Да
    "depth" => 0, // Глубина упаковки. Да
    "width" => 0, // Ширина упаковки. Да
    "dimension_unit" => "mm", // Единица измерения габаритов. Да
    "weight" => 0, // Вес товара в упаковке. Да.
    "weight_unit" => "g", // Единицы измерения веса. Да
    "images" => [ // Картинки одна из них главная
        [
            "file_name" => "https://www.teploluxe.ru/upload/iblock/dab/dab3ce52531643a4cb32fdc5189231e6.jpg",
            "default" => true
        ],
        [
            "file_name" => "https://www.teploluxe.ru/upload/iblock/d46/d4664b187fd01c7b72384b0718fbec01.png",
            "default" => false
        ],
        [
            "file_name" => "https://www.teploluxe.ru/upload/iblock/666/666c8f7cc4ba901e601b25fe66f342ba.png",
            "default" => false
        ]
    ],

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
    'category_id' => 33633390, // теплый пол
    'language' => 'RU'
];
// 78731083
echo "<pre>";
//print_r($ozonSeller->getCategoryAttr($dataAttr));
echo "</pre>";

echo "<pre>";
//print_r($ozonSeller->getCategoriesTree());
echo "</pre>";


