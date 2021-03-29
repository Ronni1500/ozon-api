# Swagger\Client\ProductAPIApi

All URIs are relative to *https://api-seller.ozon.ru*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productAPIActivateProduct**](ProductAPIApi.md#productAPIActivateProduct) | **POST** /v1/product/activate | Unavailable
[**productAPIActivateProduct2**](ProductAPIApi.md#productAPIActivateProduct2) | **POST** /v1/products/activate | Unavailable
[**productAPIClassifyProducts**](ProductAPIApi.md#productAPIClassifyProducts) | **POST** /v1/product/classify | Unavailable
[**productAPICreateProduct**](ProductAPIApi.md#productAPICreateProduct) | **POST** /v1/product/create | Unavailable
[**productAPICreateProduct2**](ProductAPIApi.md#productAPICreateProduct2) | **POST** /v1/products/create | Unavailable
[**productAPIDeactivateProduct**](ProductAPIApi.md#productAPIDeactivateProduct) | **POST** /v1/product/deactivate | Unavailable
[**productAPIDeactivateProduct2**](ProductAPIApi.md#productAPIDeactivateProduct2) | **POST** /v1/products/deactivate | Unavailable
[**productAPIDeleteProduct**](ProductAPIApi.md#productAPIDeleteProduct) | **POST** /v1/product/delete | Unavailable
[**productAPIDeleteProducts**](ProductAPIApi.md#productAPIDeleteProducts) | **POST** /v2/products/delete | 
[**productAPIGetImportProductsInfo**](ProductAPIApi.md#productAPIGetImportProductsInfo) | **POST** /v1/product/import/info | 
[**productAPIGetProductAttributesV2**](ProductAPIApi.md#productAPIGetProductAttributesV2) | **POST** /v2/products/info/attributes | 
[**productAPIGetProductInfo**](ProductAPIApi.md#productAPIGetProductInfo) | **POST** /v1/product/info | 
[**productAPIGetProductInfo2**](ProductAPIApi.md#productAPIGetProductInfo2) | **GET** /v1/products/info/{product_id} | 
[**productAPIGetProductInfoDescription**](ProductAPIApi.md#productAPIGetProductInfoDescription) | **POST** /v1/product/info/description | 
[**productAPIGetProductInfoListV2**](ProductAPIApi.md#productAPIGetProductInfoListV2) | **POST** /v2/product/info/list | 
[**productAPIGetProductInfoPrices**](ProductAPIApi.md#productAPIGetProductInfoPrices) | **POST** /v1/product/info/prices | 
[**productAPIGetProductInfoPricesV2**](ProductAPIApi.md#productAPIGetProductInfoPricesV2) | **POST** /v2/product/info/prices | 
[**productAPIGetProductInfoStocks**](ProductAPIApi.md#productAPIGetProductInfoStocks) | **POST** /v1/product/info/stocks | Deprecated
[**productAPIGetProductInfoStocksV2**](ProductAPIApi.md#productAPIGetProductInfoStocksV2) | **POST** /v2/product/info/stocks | 
[**productAPIGetProductInfoV2**](ProductAPIApi.md#productAPIGetProductInfoV2) | **POST** /v2/product/info | 
[**productAPIGetProductList**](ProductAPIApi.md#productAPIGetProductList) | **POST** /v1/product/list | 
[**productAPIGetProductListDeprecated**](ProductAPIApi.md#productAPIGetProductListDeprecated) | **GET** /v1/products/list | Deprecated
[**productAPIGetProductPriceList**](ProductAPIApi.md#productAPIGetProductPriceList) | **POST** /v1/product/list/price | Deprecated
[**productAPIImportProducts**](ProductAPIApi.md#productAPIImportProducts) | **POST** /v1/product/import | 
[**productAPIImportProductsBySKU**](ProductAPIApi.md#productAPIImportProductsBySKU) | **POST** /v1/product/import-by-sku | 
[**productAPIImportProductsPrices**](ProductAPIApi.md#productAPIImportProductsPrices) | **POST** /v1/product/import/prices | 
[**productAPIImportProductsPrices2**](ProductAPIApi.md#productAPIImportProductsPrices2) | **POST** /v1/products/prices | 
[**productAPIImportProductsStocks**](ProductAPIApi.md#productAPIImportProductsStocks) | **POST** /v1/product/import/stocks | 
[**productAPIImportProductsStocks2**](ProductAPIApi.md#productAPIImportProductsStocks2) | **POST** /v1/products/stocks | 
[**productAPIImportProductsV2**](ProductAPIApi.md#productAPIImportProductsV2) | **POST** /v2/product/import | 
[**productAPIProductArchive**](ProductAPIApi.md#productAPIProductArchive) | **POST** /v1/product/archive | 
[**productAPIProductCertificateAccordanceTypes**](ProductAPIApi.md#productAPIProductCertificateAccordanceTypes) | **GET** /v1/product/certificate/accordance-types | 
[**productAPIProductCertificateBind**](ProductAPIApi.md#productAPIProductCertificateBind) | **POST** /v1/product/certificate/bind | 
[**productAPIProductCertificateTypes**](ProductAPIApi.md#productAPIProductCertificateTypes) | **GET** /v1/product/certificate/types | 
[**productAPIProductCertificationList**](ProductAPIApi.md#productAPIProductCertificationList) | **POST** /v1/product/certification/list | 
[**productAPIProductUnarchive**](ProductAPIApi.md#productAPIProductUnarchive) | **POST** /v1/product/unarchive | 
[**productAPIProductsStocksV2**](ProductAPIApi.md#productAPIProductsStocksV2) | **POST** /v2/products/stocks | 
[**productAPISetProductIsPrepaymentStatus**](ProductAPIApi.md#productAPISetProductIsPrepaymentStatus) | **POST** /v1/product/prepayment/set | 
[**productAPIUpdateProduct**](ProductAPIApi.md#productAPIUpdateProduct) | **POST** /v1/product/update | 
[**productAPIUpdateProduct2**](ProductAPIApi.md#productAPIUpdateProduct2) | **POST** /v1/products/update | 
[**v1ProductCertificateCreatePost**](ProductAPIApi.md#v1ProductCertificateCreatePost) | **POST** /v1/product/certificate/create | 


# **productAPIActivateProduct**
> \Swagger\Client\Model\ProductActivateProductResponse productAPIActivateProduct($client_id, $api_key, $body)

Unavailable

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ProductActivateProductRequest(); // \Swagger\Client\Model\ProductActivateProductRequest | 

try {
    $result = $api_instance->productAPIActivateProduct($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIActivateProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ProductActivateProductRequest**](../Model/\Swagger\Client\Model\ProductActivateProductRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductActivateProductResponse**](../Model/ProductActivateProductResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIActivateProduct2**
> \Swagger\Client\Model\ProductActivateProductResponse productAPIActivateProduct2($client_id, $api_key, $body)

Unavailable

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ProductActivateProductRequest(); // \Swagger\Client\Model\ProductActivateProductRequest | 

try {
    $result = $api_instance->productAPIActivateProduct2($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIActivateProduct2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ProductActivateProductRequest**](../Model/\Swagger\Client\Model\ProductActivateProductRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductActivateProductResponse**](../Model/ProductActivateProductResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIClassifyProducts**
> \Swagger\Client\Model\ProductClassifyProductsResponse productAPIClassifyProducts($client_id, $api_key, $body)

Unavailable

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ProductClassifyProductsRequest(); // \Swagger\Client\Model\ProductClassifyProductsRequest | 

try {
    $result = $api_instance->productAPIClassifyProducts($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIClassifyProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ProductClassifyProductsRequest**](../Model/\Swagger\Client\Model\ProductClassifyProductsRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductClassifyProductsResponse**](../Model/ProductClassifyProductsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPICreateProduct**
> \Swagger\Client\Model\ProductCreateProductResponse productAPICreateProduct($client_id, $api_key, $body)

Unavailable

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ProductCreateProductRequest(); // \Swagger\Client\Model\ProductCreateProductRequest | 

try {
    $result = $api_instance->productAPICreateProduct($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPICreateProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ProductCreateProductRequest**](../Model/\Swagger\Client\Model\ProductCreateProductRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductCreateProductResponse**](../Model/ProductCreateProductResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPICreateProduct2**
> \Swagger\Client\Model\ProductCreateProductResponse productAPICreateProduct2($client_id, $api_key, $body)

Unavailable

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ProductCreateProductRequest(); // \Swagger\Client\Model\ProductCreateProductRequest | 

try {
    $result = $api_instance->productAPICreateProduct2($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPICreateProduct2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ProductCreateProductRequest**](../Model/\Swagger\Client\Model\ProductCreateProductRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductCreateProductResponse**](../Model/ProductCreateProductResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIDeactivateProduct**
> \Swagger\Client\Model\ProductDeactivateProductResponse productAPIDeactivateProduct($client_id, $api_key, $body)

Unavailable

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ProductDeactivateProductRequest(); // \Swagger\Client\Model\ProductDeactivateProductRequest | 

try {
    $result = $api_instance->productAPIDeactivateProduct($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIDeactivateProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ProductDeactivateProductRequest**](../Model/\Swagger\Client\Model\ProductDeactivateProductRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductDeactivateProductResponse**](../Model/ProductDeactivateProductResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIDeactivateProduct2**
> \Swagger\Client\Model\ProductDeactivateProductResponse productAPIDeactivateProduct2($client_id, $api_key, $body)

Unavailable

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ProductDeactivateProductRequest(); // \Swagger\Client\Model\ProductDeactivateProductRequest | 

try {
    $result = $api_instance->productAPIDeactivateProduct2($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIDeactivateProduct2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ProductDeactivateProductRequest**](../Model/\Swagger\Client\Model\ProductDeactivateProductRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductDeactivateProductResponse**](../Model/ProductDeactivateProductResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIDeleteProduct**
> \Swagger\Client\Model\ProductDeleteProductResponse productAPIDeleteProduct($client_id, $api_key, $body)

Unavailable

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ProductDeleteProductRequest(); // \Swagger\Client\Model\ProductDeleteProductRequest | 

try {
    $result = $api_instance->productAPIDeleteProduct($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIDeleteProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ProductDeleteProductRequest**](../Model/\Swagger\Client\Model\ProductDeleteProductRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductDeleteProductResponse**](../Model/ProductDeleteProductResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIDeleteProducts**
> \Swagger\Client\Model\Productv2DeleteProductsResponse productAPIDeleteProducts($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\Productv2DeleteProductsRequest(); // \Swagger\Client\Model\Productv2DeleteProductsRequest | 

try {
    $result = $api_instance->productAPIDeleteProducts($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIDeleteProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\Productv2DeleteProductsRequest**](../Model/\Swagger\Client\Model\Productv2DeleteProductsRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Productv2DeleteProductsResponse**](../Model/Productv2DeleteProductsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIGetImportProductsInfo**
> \Swagger\Client\Model\ProductGetImportProductsInfoResponse productAPIGetImportProductsInfo($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ProductGetImportProductsInfoRequest(); // \Swagger\Client\Model\ProductGetImportProductsInfoRequest | 

try {
    $result = $api_instance->productAPIGetImportProductsInfo($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIGetImportProductsInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ProductGetImportProductsInfoRequest**](../Model/\Swagger\Client\Model\ProductGetImportProductsInfoRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductGetImportProductsInfoResponse**](../Model/ProductGetImportProductsInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIGetProductAttributesV2**
> \Swagger\Client\Model\Productv2GetProductAttributesResponse productAPIGetProductAttributesV2($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\Productv2GetProductAttributesRequest(); // \Swagger\Client\Model\Productv2GetProductAttributesRequest | 

try {
    $result = $api_instance->productAPIGetProductAttributesV2($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIGetProductAttributesV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\Productv2GetProductAttributesRequest**](../Model/\Swagger\Client\Model\Productv2GetProductAttributesRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Productv2GetProductAttributesResponse**](../Model/Productv2GetProductAttributesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIGetProductInfo**
> \Swagger\Client\Model\ProductGetProductInfoResponse productAPIGetProductInfo($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ProductGetProductInfoRequest(); // \Swagger\Client\Model\ProductGetProductInfoRequest | 

try {
    $result = $api_instance->productAPIGetProductInfo($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIGetProductInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ProductGetProductInfoRequest**](../Model/\Swagger\Client\Model\ProductGetProductInfoRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductGetProductInfoResponse**](../Model/ProductGetProductInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIGetProductInfo2**
> \Swagger\Client\Model\ProductGetProductInfoResponse productAPIGetProductInfo2($client_id, $api_key, $product_id, $offer_id, $sku)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$product_id = "product_id_example"; // string | 
$offer_id = "offer_id_example"; // string | 
$sku = "sku_example"; // string | 

try {
    $result = $api_instance->productAPIGetProductInfo2($client_id, $api_key, $product_id, $offer_id, $sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIGetProductInfo2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **product_id** | **string**|  |
 **offer_id** | **string**|  | [optional]
 **sku** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductGetProductInfoResponse**](../Model/ProductGetProductInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIGetProductInfoDescription**
> \Swagger\Client\Model\ProductGetProductInfoDescriptionResponse productAPIGetProductInfoDescription($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ProductGetProductInfoDescriptionRequest(); // \Swagger\Client\Model\ProductGetProductInfoDescriptionRequest | 

try {
    $result = $api_instance->productAPIGetProductInfoDescription($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIGetProductInfoDescription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ProductGetProductInfoDescriptionRequest**](../Model/\Swagger\Client\Model\ProductGetProductInfoDescriptionRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductGetProductInfoDescriptionResponse**](../Model/ProductGetProductInfoDescriptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIGetProductInfoListV2**
> \Swagger\Client\Model\Productv2GetProductInfoListResponse productAPIGetProductInfoListV2($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\Productv2GetProductInfoListRequest(); // \Swagger\Client\Model\Productv2GetProductInfoListRequest | 

try {
    $result = $api_instance->productAPIGetProductInfoListV2($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIGetProductInfoListV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\Productv2GetProductInfoListRequest**](../Model/\Swagger\Client\Model\Productv2GetProductInfoListRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Productv2GetProductInfoListResponse**](../Model/Productv2GetProductInfoListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIGetProductInfoPrices**
> \Swagger\Client\Model\ProductGetProductInfoPricesResponse productAPIGetProductInfoPrices($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ProductGetProductInfoPricesRequest(); // \Swagger\Client\Model\ProductGetProductInfoPricesRequest | 

try {
    $result = $api_instance->productAPIGetProductInfoPrices($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIGetProductInfoPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ProductGetProductInfoPricesRequest**](../Model/\Swagger\Client\Model\ProductGetProductInfoPricesRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductGetProductInfoPricesResponse**](../Model/ProductGetProductInfoPricesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIGetProductInfoPricesV2**
> \Swagger\Client\Model\Productv2GetProductInfoPricesV2Response productAPIGetProductInfoPricesV2($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\Productv2GetProductInfoPricesV2Request(); // \Swagger\Client\Model\Productv2GetProductInfoPricesV2Request | 

try {
    $result = $api_instance->productAPIGetProductInfoPricesV2($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIGetProductInfoPricesV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\Productv2GetProductInfoPricesV2Request**](../Model/\Swagger\Client\Model\Productv2GetProductInfoPricesV2Request.md)|  |

### Return type

[**\Swagger\Client\Model\Productv2GetProductInfoPricesV2Response**](../Model/Productv2GetProductInfoPricesV2Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIGetProductInfoStocks**
> \Swagger\Client\Model\ProductGetProductInfoStocksResponse productAPIGetProductInfoStocks($client_id, $api_key, $body)

Deprecated

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ProductGetProductInfoStocksRequest(); // \Swagger\Client\Model\ProductGetProductInfoStocksRequest | 

try {
    $result = $api_instance->productAPIGetProductInfoStocks($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIGetProductInfoStocks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ProductGetProductInfoStocksRequest**](../Model/\Swagger\Client\Model\ProductGetProductInfoStocksRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductGetProductInfoStocksResponse**](../Model/ProductGetProductInfoStocksResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIGetProductInfoStocksV2**
> \Swagger\Client\Model\Productv2GetProductInfoStocksResponse productAPIGetProductInfoStocksV2($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\Productv2GetProductInfoStocksRequest(); // \Swagger\Client\Model\Productv2GetProductInfoStocksRequest | 

try {
    $result = $api_instance->productAPIGetProductInfoStocksV2($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIGetProductInfoStocksV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\Productv2GetProductInfoStocksRequest**](../Model/\Swagger\Client\Model\Productv2GetProductInfoStocksRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Productv2GetProductInfoStocksResponse**](../Model/Productv2GetProductInfoStocksResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIGetProductInfoV2**
> \Swagger\Client\Model\Productv2GetProductInfoResponse productAPIGetProductInfoV2($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\Productv2GetProductInfoRequest(); // \Swagger\Client\Model\Productv2GetProductInfoRequest | 

try {
    $result = $api_instance->productAPIGetProductInfoV2($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIGetProductInfoV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\Productv2GetProductInfoRequest**](../Model/\Swagger\Client\Model\Productv2GetProductInfoRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Productv2GetProductInfoResponse**](../Model/Productv2GetProductInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIGetProductList**
> \Swagger\Client\Model\ProductGetProductListResponse productAPIGetProductList($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ProductGetProductListRequest(); // \Swagger\Client\Model\ProductGetProductListRequest | 

try {
    $result = $api_instance->productAPIGetProductList($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIGetProductList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ProductGetProductListRequest**](../Model/\Swagger\Client\Model\ProductGetProductListRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductGetProductListResponse**](../Model/ProductGetProductListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIGetProductListDeprecated**
> \Swagger\Client\Model\ProductGetProductListDeprecatedResponse productAPIGetProductListDeprecated($client_id, $api_key, $page, $per_page)

Deprecated

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$page = 56; // int | 
$per_page = 56; // int | 

try {
    $result = $api_instance->productAPIGetProductListDeprecated($client_id, $api_key, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIGetProductListDeprecated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **page** | **int**|  | [optional]
 **per_page** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\ProductGetProductListDeprecatedResponse**](../Model/ProductGetProductListDeprecatedResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIGetProductPriceList**
> \Swagger\Client\Model\ProductGetProductPriceListResponse productAPIGetProductPriceList($client_id, $api_key, $body)

Deprecated

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ProductGetProductPriceListRequest(); // \Swagger\Client\Model\ProductGetProductPriceListRequest | 

try {
    $result = $api_instance->productAPIGetProductPriceList($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIGetProductPriceList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ProductGetProductPriceListRequest**](../Model/\Swagger\Client\Model\ProductGetProductPriceListRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductGetProductPriceListResponse**](../Model/ProductGetProductPriceListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIImportProducts**
> \Swagger\Client\Model\ProductImportProductsResponse productAPIImportProducts($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ProductImportProductsRequest(); // \Swagger\Client\Model\ProductImportProductsRequest | 

try {
    $result = $api_instance->productAPIImportProducts($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIImportProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ProductImportProductsRequest**](../Model/\Swagger\Client\Model\ProductImportProductsRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductImportProductsResponse**](../Model/ProductImportProductsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIImportProductsBySKU**
> \Swagger\Client\Model\ProductImportProductsBySKUResponse productAPIImportProductsBySKU($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ProductImportProductsBySKURequest(); // \Swagger\Client\Model\ProductImportProductsBySKURequest | 

try {
    $result = $api_instance->productAPIImportProductsBySKU($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIImportProductsBySKU: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ProductImportProductsBySKURequest**](../Model/\Swagger\Client\Model\ProductImportProductsBySKURequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductImportProductsBySKUResponse**](../Model/ProductImportProductsBySKUResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIImportProductsPrices**
> \Swagger\Client\Model\ProductImportProductsPricesResponse productAPIImportProductsPrices($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ProductImportProductsPricesRequest(); // \Swagger\Client\Model\ProductImportProductsPricesRequest | 

try {
    $result = $api_instance->productAPIImportProductsPrices($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIImportProductsPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ProductImportProductsPricesRequest**](../Model/\Swagger\Client\Model\ProductImportProductsPricesRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductImportProductsPricesResponse**](../Model/ProductImportProductsPricesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIImportProductsPrices2**
> \Swagger\Client\Model\ProductImportProductsPricesResponse productAPIImportProductsPrices2($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ProductImportProductsPricesRequest(); // \Swagger\Client\Model\ProductImportProductsPricesRequest | 

try {
    $result = $api_instance->productAPIImportProductsPrices2($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIImportProductsPrices2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ProductImportProductsPricesRequest**](../Model/\Swagger\Client\Model\ProductImportProductsPricesRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductImportProductsPricesResponse**](../Model/ProductImportProductsPricesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIImportProductsStocks**
> \Swagger\Client\Model\ProductImportProductsStocksResponse productAPIImportProductsStocks($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ProductImportProductsStocksRequest(); // \Swagger\Client\Model\ProductImportProductsStocksRequest | 

try {
    $result = $api_instance->productAPIImportProductsStocks($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIImportProductsStocks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ProductImportProductsStocksRequest**](../Model/\Swagger\Client\Model\ProductImportProductsStocksRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductImportProductsStocksResponse**](../Model/ProductImportProductsStocksResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIImportProductsStocks2**
> \Swagger\Client\Model\ProductImportProductsStocksResponse productAPIImportProductsStocks2($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ProductImportProductsStocksRequest(); // \Swagger\Client\Model\ProductImportProductsStocksRequest | 

try {
    $result = $api_instance->productAPIImportProductsStocks2($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIImportProductsStocks2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ProductImportProductsStocksRequest**](../Model/\Swagger\Client\Model\ProductImportProductsStocksRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductImportProductsStocksResponse**](../Model/ProductImportProductsStocksResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIImportProductsV2**
> \Swagger\Client\Model\Productv2ImportProductsResponse productAPIImportProductsV2($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\Productv2ImportProductsRequest(); // \Swagger\Client\Model\Productv2ImportProductsRequest | 

try {
    $result = $api_instance->productAPIImportProductsV2($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIImportProductsV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\Productv2ImportProductsRequest**](../Model/\Swagger\Client\Model\Productv2ImportProductsRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Productv2ImportProductsResponse**](../Model/Productv2ImportProductsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIProductArchive**
> \Swagger\Client\Model\ProductBooleanResponse productAPIProductArchive($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ProductProductArchiveRequest(); // \Swagger\Client\Model\ProductProductArchiveRequest | 

try {
    $result = $api_instance->productAPIProductArchive($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIProductArchive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ProductProductArchiveRequest**](../Model/\Swagger\Client\Model\ProductProductArchiveRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductBooleanResponse**](../Model/ProductBooleanResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIProductCertificateAccordanceTypes**
> \Swagger\Client\Model\ProductProductCertificateAccordanceTypesResponse productAPIProductCertificateAccordanceTypes($client_id, $api_key)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key

try {
    $result = $api_instance->productAPIProductCertificateAccordanceTypes($client_id, $api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIProductCertificateAccordanceTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |

### Return type

[**\Swagger\Client\Model\ProductProductCertificateAccordanceTypesResponse**](../Model/ProductProductCertificateAccordanceTypesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIProductCertificateBind**
> \Swagger\Client\Model\ProductBooleanResponse productAPIProductCertificateBind($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ProductProductCertificateBindRequest(); // \Swagger\Client\Model\ProductProductCertificateBindRequest | 

try {
    $result = $api_instance->productAPIProductCertificateBind($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIProductCertificateBind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ProductProductCertificateBindRequest**](../Model/\Swagger\Client\Model\ProductProductCertificateBindRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductBooleanResponse**](../Model/ProductBooleanResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIProductCertificateTypes**
> \Swagger\Client\Model\ProductProductCertificateTypesResponse productAPIProductCertificateTypes($client_id, $api_key)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key

try {
    $result = $api_instance->productAPIProductCertificateTypes($client_id, $api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIProductCertificateTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |

### Return type

[**\Swagger\Client\Model\ProductProductCertificateTypesResponse**](../Model/ProductProductCertificateTypesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIProductCertificationList**
> \Swagger\Client\Model\ProductProductCertificationListResponse productAPIProductCertificationList($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ProductProductCertificationListRequest(); // \Swagger\Client\Model\ProductProductCertificationListRequest | 

try {
    $result = $api_instance->productAPIProductCertificationList($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIProductCertificationList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ProductProductCertificationListRequest**](../Model/\Swagger\Client\Model\ProductProductCertificationListRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductProductCertificationListResponse**](../Model/ProductProductCertificationListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIProductUnarchive**
> \Swagger\Client\Model\ProductBooleanResponse productAPIProductUnarchive($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ProductProductUnarchiveRequest(); // \Swagger\Client\Model\ProductProductUnarchiveRequest | 

try {
    $result = $api_instance->productAPIProductUnarchive($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIProductUnarchive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ProductProductUnarchiveRequest**](../Model/\Swagger\Client\Model\ProductProductUnarchiveRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductBooleanResponse**](../Model/ProductBooleanResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIProductsStocksV2**
> \Swagger\Client\Model\Productv2ProductsStocksResponse productAPIProductsStocksV2($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\Productv2ProductsStocksRequest(); // \Swagger\Client\Model\Productv2ProductsStocksRequest | 

try {
    $result = $api_instance->productAPIProductsStocksV2($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIProductsStocksV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\Productv2ProductsStocksRequest**](../Model/\Swagger\Client\Model\Productv2ProductsStocksRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Productv2ProductsStocksResponse**](../Model/Productv2ProductsStocksResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPISetProductIsPrepaymentStatus**
> \Swagger\Client\Model\ProductSetProductIsPrepaymentStatusResponse productAPISetProductIsPrepaymentStatus($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ProductSetProductIsPrepaymentStatusRequest(); // \Swagger\Client\Model\ProductSetProductIsPrepaymentStatusRequest | 

try {
    $result = $api_instance->productAPISetProductIsPrepaymentStatus($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPISetProductIsPrepaymentStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ProductSetProductIsPrepaymentStatusRequest**](../Model/\Swagger\Client\Model\ProductSetProductIsPrepaymentStatusRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductSetProductIsPrepaymentStatusResponse**](../Model/ProductSetProductIsPrepaymentStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIUpdateProduct**
> \Swagger\Client\Model\ProductUpdateProductResponse productAPIUpdateProduct($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ProductUpdateProductRequest(); // \Swagger\Client\Model\ProductUpdateProductRequest | 

try {
    $result = $api_instance->productAPIUpdateProduct($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIUpdateProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ProductUpdateProductRequest**](../Model/\Swagger\Client\Model\ProductUpdateProductRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductUpdateProductResponse**](../Model/ProductUpdateProductResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productAPIUpdateProduct2**
> \Swagger\Client\Model\ProductUpdateProductResponse productAPIUpdateProduct2($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ProductUpdateProductRequest(); // \Swagger\Client\Model\ProductUpdateProductRequest | 

try {
    $result = $api_instance->productAPIUpdateProduct2($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->productAPIUpdateProduct2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ProductUpdateProductRequest**](../Model/\Swagger\Client\Model\ProductUpdateProductRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ProductUpdateProductResponse**](../Model/ProductUpdateProductResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1ProductCertificateCreatePost**
> v1ProductCertificateCreatePost($client_id, $api_key, $files, $name, $number, $type_code, $issue_date, $accordance_type_code, $expire_date)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ProductAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$files = array("/path/to/file"); // \SplFileObject[] | certificate file, extension: jpg, jpeg, png, pdf
$name = "name_example"; // string | 
$number = "number_example"; // string | 
$type_code = "type_code_example"; // string | 
$issue_date = new \DateTime(); // \DateTime | 
$accordance_type_code = "accordance_type_code_example"; // string | 
$expire_date = new \DateTime(); // \DateTime | Format: '2021-03-29T11:21:23Z' May be empty

try {
    $api_instance->v1ProductCertificateCreatePost($client_id, $api_key, $files, $name, $number, $type_code, $issue_date, $accordance_type_code, $expire_date);
} catch (Exception $e) {
    echo 'Exception when calling ProductAPIApi->v1ProductCertificateCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **files** | [**\SplFileObject[]**](../Model/\SplFileObject.md)| certificate file, extension: jpg, jpeg, png, pdf |
 **name** | **string**|  |
 **number** | **string**|  |
 **type_code** | **string**|  |
 **issue_date** | **\DateTime**|  | [default to 2021-03-29T11:21:23Z]
 **accordance_type_code** | **string**|  | [optional]
 **expire_date** | **\DateTime**| Format: &#39;2021-03-29T11:21:23Z&#39; May be empty | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

