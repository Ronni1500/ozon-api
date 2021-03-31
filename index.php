<?
require 'SwaggerClient-php/autoload.php';


use Swagger\Client\Api\WarehouseAPIApi;
use Swagger\Client\ApiClient;
use Swagger\Client\Configuration;
use Swagger\Client\Model\Productv2ImportProductsResponseResult;
use Swagger\Client\Model\WarehouseWarehouseListRequest;
use Swagger\Client\Api\ProductAPIApi;

$prodConfig = [
    'Client-Id' => '106040',
    'Api-Key' => '90ee6f55-619d-410c-949f-4c13b7dae716'
];
$config = [
    'Client-Id' => '836',
    'Api-Key' => '0296d4f2-70a1-4c09-b507-904fd05567b9'
];
//$data = [
//  'stocks' => [
//      "product_id"=> 120000,
//      "offer_id"=> "PRD-1",
//      "stock"=> 20
//    ],
//    [
//      "product_id" =>  124100,
//      "offer_id" => "PRD-2",
//      "stock" => 20
//    ]
//];

//$config = new Configuration();
//
//$config->addDefaultHeader('Client-Id', '836');
//$config->addDefaultHeader('Api-Key', '0296d4f2-70a1-4c09-b507-904fd05567b9');
//$config->setHost('cb-api.ozonru.me');
//
//$apiClient = new ApiClient($config);
//$warehouseAPIApi = new WarehouseAPIApi($apiClient);
//$client = $warehouseAPIApi->getApiClient()->getConfig()->getDefaultHeaders();


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
class ozonSeller
{

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
//        $config->setHost($this->hostApi);
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

        try {
            $response = $product->productAPIImportProductsV2(
                $this->getClientId(),
                $this->getApiKey(),
                $body
            );
            $result = $response->getResult();
            return $result['task_id'];
        } catch (\Swagger\Client\ApiException $e) {
            echo $e->getMessage();
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

class importBitrixOzon
{
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


$ozonSeller = new ozonSeller($prodConfig['Client-Id'], $prodConfig['Api-Key']);

// task 15023761
$data['items'] = [
    0 => [
        "attributes" => [ // Массив характеристик товара. Да
            [
                "complex_id" => 0,
                "id" => 8229,
                "values" => [
                    [
                        "dictionary_value_id" => 0,
                        'value' => "115950958"
                    ]
                ]
            ],
            [
                "complex_id" => 0,
                'id' => 85, //Бренд
                "values" => [
                    ["dictionary_value_id" => 0,
                        'value' => 'Теплолюкс']
                ]
            ],
            [
                "complex_id" => 0,
                'id' => 4194, // Изображение товара
                "values" => [
                    ["dictionary_value_id" => 0,
                        'value' => 'https://www.teploluxe.ru/upload/iblock/0b2/0b2ebdc35157f950905225554762e31c.png']
                ]
            ],
            [
                "complex_id" => 0,
                'id' => 4851, //
                "values" => [
                    ["dictionary_value_id" => 0,
                        'value' => '70']
                ]
            ],
            [
                "complex_id" => 0,
                'id' => 6160, // Вид обогревателя
                "values" => [
                    ["dictionary_value_id" => 0,
                        'value' => "2506"]
                ]
            ],
            [
                "complex_id" => 0,
                'id' => 10096, // Цвет товара
                "values" => [
                    ["dictionary_value_id" => 0,
                        'value' => "61574"]
                ]
            ],
            [
                "complex_id" => 0,
                'id' => 9048, // Название модели
                "values" => [
                    ["dictionary_value_id" => 0,
                        'value' => 'Теплолюкс Carpet 50x80. Электрический коврик для сушки обуви']
                ]
            ],
            [
                "complex_id" => 0,
                'id' => 4382, // Размеры, мм
                "values" => [
                    ["dictionary_value_id" => 0,
                        'value' => '50Х80']
                ]
            ]
        ],
        'description' => '',
        "barcode" => '',// Штрихкод товара. нет
        "category_id" => '17034071', // Идентификатор категории. да
        "name" => "Теплолюкс Carpet 50x80. Электрический коврик для сушки обуви (в коробке)", // Название товара
        "offer_id" => "teplolyuks-carpet-50x80-elektricheskiy-kovrik-dlya-sushki-obuvi-v-korobke", // Идентификатор товара в системе продавца. Да
        "price" => '2099.00', // Цена товара с учетом скидок, Да
        "vat" => "0", // Ставка НДС для товара Да.
        "height" => '0', // Высота. Да
        "depth" => '0', // Глубина упаковки. Да
        "width" => '0', // Ширина упаковки. Да
        "dimension_unit" => "mm", // Единица измерения габаритов. Да
        "weight" => '0', // Вес товара в упаковке. Да.
        "weight_unit" => "g", // Единицы измерения веса. Да
        "images" => [ // Картинки одна из них главная
            "https://www.teploluxe.ru/upload/iblock/0b2/0b2ebdc35157f950905225554762e31c.png",
            "https://www.teploluxe.ru/upload/iblock/705/70521eb2c409e4b16c5fc9f9496acbd1.jpg",
            "https://www.teploluxe.ru/upload/iblock/f6f/f6fe7a9b4dba4c5563e72f70f3378474.png",
            "https://www.teploluxe.ru/upload/iblock/bc3/bc36c2cc20c69833afaed620f56839e7.png",
            "https://www.teploluxe.ru/upload/iblock/6c0/6c0aaf8901ebfee7cdf57610e9f250fc.png",
        ]
    ]];

//$task_id = $ozonSeller->productImport($data);
echo "<pre>";
//print_r($task_id);
echo "</pre>";


$dataInfoProduct = [
    'offer_id' => "item_6060091",
    'product_id' => 7154396,
    'sku' => 150583609
];
$dataPrices['prices'] = [
    [
        "product_id" => 120000,
        "offer_id" => "PRD-1",
        "price" => "79990",
        "old_price" => "89990",
        "premium_price" => "75555"
    ],
    [
        "product_id" => 124100,
        "offer_id" => "PRD-2",
        "price" => "79990",
        "old_price" => "89990",
        "premium_price" => "75555",
    ],
    [
        "product_id" => 124201,
        "offer_id" => "PRD-3",
        "price" => "89990",
        "old_price" => "79990",
        "premium_price" => "75555",
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
    'category_id' => 17034071, // теплый пол
    'language' => 'RU'
];
// 17034071 Обогреватель (для тестового товара коврик)
// 78731083
echo "<pre>";
//foreach ($ozonSeller->getCategoryAttr($dataAttr) as $prop) {
//    print_r($prop);
//}
echo "</pre>";

echo "<pre>";
$list_category = $ozonSeller->getCategoriesTree();
$tree = [];
$result = [];
function convertToSimpleArray($array){
    $resArray[$array['category_id']] = [
        'category_id' => $array['category_id'],
        'title' => $array['title']
    ];
    if(is_array($array['children'])){
        foreach($array['children'] as $below){
            convertToSimpleArray($below);
        }
    }else{
        $resArray[] = $array;
    }
    return $resArray;
}
foreach ($list_category as $cat) {
    global $tree;
    $tree = convertToSimpleArray($cat);
}
print_r($tree);

/*foreach ($list_category as &$category) {
    if (!$category['children']) {
        print_r($category['children']);
        $tree[$category['category_id']] = [
            'name' => $category['title'],
            'category_id' => $category['category_id']
        ];
    } else {
        $tree[$category['category_id']]['title'] = $category['title'];
        while (true) {
            $res = getChildren($category);
            if (key_exists('children', $res)) {

            }
            $tree[$res['category_id']] = [
                'title' => $res['title'],
                'parent'
            ];
        }
        $list_category[$category['category_id']]['children'][$category['category_id']] = &$category;
    }
}*/
$stop = false;
//while (!$stop) {
//    $res = getChildren($list_category);
//    if(key_exists('children', $res)) getChildren($list_category);
//    else $stop = true;
//}

print_r($tree);

function getChildren($array)
{
    if ($array['children'] != []) {
       return $array['children'];
    } else {
        return [
            'category_id'  => $array['category_id'],
            'title' => $array['title']
        ];
    }
}

echo "</pre>";


