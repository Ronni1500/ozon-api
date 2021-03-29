# Swagger\Client\CategoryAPIApi

All URIs are relative to *https://api-seller.ozon.ru*

Method | HTTP request | Description
------------- | ------------- | -------------
[**categoryAPICategoryAttribute**](CategoryAPIApi.md#categoryAPICategoryAttribute) | **POST** /v2/category/attribute | 
[**categoryAPIDictionaryValueBatch**](CategoryAPIApi.md#categoryAPIDictionaryValueBatch) | **POST** /v2/category/attribute/values | 
[**categoryAPIDictionaryValuesByAttributeIDAndRsIDList**](CategoryAPIApi.md#categoryAPIDictionaryValuesByAttributeIDAndRsIDList) | **POST** /v2/category/attribute/value/by-option | 
[**categoryAPIGetCategoryAttributes**](CategoryAPIApi.md#categoryAPIGetCategoryAttributes) | **POST** /v1/category/attribute | 
[**categoryAPIGetCategoryAttributes2**](CategoryAPIApi.md#categoryAPIGetCategoryAttributes2) | **GET** /v1/categories/{category_id}/attributes | 
[**categoryAPIGetCategoryAttributesV3**](CategoryAPIApi.md#categoryAPIGetCategoryAttributesV3) | **POST** /v3/category/attribute | 
[**categoryAPIGetCategoryTree**](CategoryAPIApi.md#categoryAPIGetCategoryTree) | **POST** /v1/category/tree | 
[**categoryAPIGetCategoryTree2**](CategoryAPIApi.md#categoryAPIGetCategoryTree2) | **GET** /v1/categories/tree/{category_id} | 
[**categoryAPIGetCategoryTree3**](CategoryAPIApi.md#categoryAPIGetCategoryTree3) | **GET** /v1/categories/tree | 


# **categoryAPICategoryAttribute**
> \Swagger\Client\Model\Categoryv2CategoryAttributeResponse categoryAPICategoryAttribute($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CategoryAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\Categoryv2CategoryAttributeRequest(); // \Swagger\Client\Model\Categoryv2CategoryAttributeRequest | 

try {
    $result = $api_instance->categoryAPICategoryAttribute($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryAPIApi->categoryAPICategoryAttribute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\Categoryv2CategoryAttributeRequest**](../Model/\Swagger\Client\Model\Categoryv2CategoryAttributeRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Categoryv2CategoryAttributeResponse**](../Model/Categoryv2CategoryAttributeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryAPIDictionaryValueBatch**
> \Swagger\Client\Model\Categoryv2DictionaryValueBatchResponse categoryAPIDictionaryValueBatch($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CategoryAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\Categoryv2DictionaryValueBatchRequest(); // \Swagger\Client\Model\Categoryv2DictionaryValueBatchRequest | 

try {
    $result = $api_instance->categoryAPIDictionaryValueBatch($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryAPIApi->categoryAPIDictionaryValueBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\Categoryv2DictionaryValueBatchRequest**](../Model/\Swagger\Client\Model\Categoryv2DictionaryValueBatchRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Categoryv2DictionaryValueBatchResponse**](../Model/Categoryv2DictionaryValueBatchResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryAPIDictionaryValuesByAttributeIDAndRsIDList**
> \Swagger\Client\Model\Categoryv2DictionaryValuesByAttributeIDAndRsIDListResponse categoryAPIDictionaryValuesByAttributeIDAndRsIDList($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CategoryAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\Categoryv2DictionaryValuesByAttributeIDAndRsIDListRequest(); // \Swagger\Client\Model\Categoryv2DictionaryValuesByAttributeIDAndRsIDListRequest | 

try {
    $result = $api_instance->categoryAPIDictionaryValuesByAttributeIDAndRsIDList($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryAPIApi->categoryAPIDictionaryValuesByAttributeIDAndRsIDList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\Categoryv2DictionaryValuesByAttributeIDAndRsIDListRequest**](../Model/\Swagger\Client\Model\Categoryv2DictionaryValuesByAttributeIDAndRsIDListRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Categoryv2DictionaryValuesByAttributeIDAndRsIDListResponse**](../Model/Categoryv2DictionaryValuesByAttributeIDAndRsIDListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryAPIGetCategoryAttributes**
> \Swagger\Client\Model\CategoryGetCategoryAttributesResponse categoryAPIGetCategoryAttributes($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CategoryAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\CategoryGetCategoryAttributesRequest(); // \Swagger\Client\Model\CategoryGetCategoryAttributesRequest | 

try {
    $result = $api_instance->categoryAPIGetCategoryAttributes($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryAPIApi->categoryAPIGetCategoryAttributes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\CategoryGetCategoryAttributesRequest**](../Model/\Swagger\Client\Model\CategoryGetCategoryAttributesRequest.md)|  |

### Return type

[**\Swagger\Client\Model\CategoryGetCategoryAttributesResponse**](../Model/CategoryGetCategoryAttributesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryAPIGetCategoryAttributes2**
> \Swagger\Client\Model\CategoryGetCategoryAttributesResponse categoryAPIGetCategoryAttributes2($client_id, $api_key, $category_id, $attribute_type, $language)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CategoryAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$category_id = "category_id_example"; // string | 
$attribute_type = "ALL"; // string | 
$language = "DEFAULT"; // string | 

try {
    $result = $api_instance->categoryAPIGetCategoryAttributes2($client_id, $api_key, $category_id, $attribute_type, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryAPIApi->categoryAPIGetCategoryAttributes2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **category_id** | **string**|  |
 **attribute_type** | **string**|  | [optional] [default to ALL]
 **language** | **string**|  | [optional] [default to DEFAULT]

### Return type

[**\Swagger\Client\Model\CategoryGetCategoryAttributesResponse**](../Model/CategoryGetCategoryAttributesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryAPIGetCategoryAttributesV3**
> \Swagger\Client\Model\Categoryv3CategoryAttributesResponse categoryAPIGetCategoryAttributesV3($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CategoryAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\Categoryv3CategoryAttributesRequest(); // \Swagger\Client\Model\Categoryv3CategoryAttributesRequest | 

try {
    $result = $api_instance->categoryAPIGetCategoryAttributesV3($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryAPIApi->categoryAPIGetCategoryAttributesV3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\Categoryv3CategoryAttributesRequest**](../Model/\Swagger\Client\Model\Categoryv3CategoryAttributesRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Categoryv3CategoryAttributesResponse**](../Model/Categoryv3CategoryAttributesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryAPIGetCategoryTree**
> \Swagger\Client\Model\CategoryGetCategoryTreeResponse categoryAPIGetCategoryTree($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CategoryAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\CategoryGetCategoryTreeRequest(); // \Swagger\Client\Model\CategoryGetCategoryTreeRequest | 

try {
    $result = $api_instance->categoryAPIGetCategoryTree($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryAPIApi->categoryAPIGetCategoryTree: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\CategoryGetCategoryTreeRequest**](../Model/\Swagger\Client\Model\CategoryGetCategoryTreeRequest.md)|  |

### Return type

[**\Swagger\Client\Model\CategoryGetCategoryTreeResponse**](../Model/CategoryGetCategoryTreeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryAPIGetCategoryTree2**
> \Swagger\Client\Model\CategoryGetCategoryTreeResponse categoryAPIGetCategoryTree2($client_id, $api_key, $category_id, $language)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CategoryAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$category_id = "category_id_example"; // string | 
$language = "DEFAULT"; // string | 

try {
    $result = $api_instance->categoryAPIGetCategoryTree2($client_id, $api_key, $category_id, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryAPIApi->categoryAPIGetCategoryTree2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **category_id** | **string**|  |
 **language** | **string**|  | [optional] [default to DEFAULT]

### Return type

[**\Swagger\Client\Model\CategoryGetCategoryTreeResponse**](../Model/CategoryGetCategoryTreeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **categoryAPIGetCategoryTree3**
> \Swagger\Client\Model\CategoryGetCategoryTreeResponse categoryAPIGetCategoryTree3($client_id, $api_key, $category_id, $language)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CategoryAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$category_id = "category_id_example"; // string | 
$language = "DEFAULT"; // string | 

try {
    $result = $api_instance->categoryAPIGetCategoryTree3($client_id, $api_key, $category_id, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryAPIApi->categoryAPIGetCategoryTree3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **category_id** | **string**|  | [optional]
 **language** | **string**|  | [optional] [default to DEFAULT]

### Return type

[**\Swagger\Client\Model\CategoryGetCategoryTreeResponse**](../Model/CategoryGetCategoryTreeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

