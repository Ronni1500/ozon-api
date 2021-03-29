# Swagger\Client\WarehouseAPIApi

All URIs are relative to *https://api-seller.ozon.ru*

Method | HTTP request | Description
------------- | ------------- | -------------
[**warehouseAPIDeliveryMethodList**](WarehouseAPIApi.md#warehouseAPIDeliveryMethodList) | **POST** /v1/delivery-method/list | 
[**warehouseAPIWarehouseList**](WarehouseAPIApi.md#warehouseAPIWarehouseList) | **POST** /v1/warehouse/list | 


# **warehouseAPIDeliveryMethodList**
> \Swagger\Client\Model\WarehouseDeliveryMethodListResponse warehouseAPIDeliveryMethodList($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\WarehouseAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\WarehouseDeliveryMethodListRequest(); // \Swagger\Client\Model\WarehouseDeliveryMethodListRequest | 

try {
    $result = $api_instance->warehouseAPIDeliveryMethodList($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseAPIApi->warehouseAPIDeliveryMethodList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\WarehouseDeliveryMethodListRequest**](../Model/\Swagger\Client\Model\WarehouseDeliveryMethodListRequest.md)|  |

### Return type

[**\Swagger\Client\Model\WarehouseDeliveryMethodListResponse**](../Model/WarehouseDeliveryMethodListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **warehouseAPIWarehouseList**
> \Swagger\Client\Model\WarehouseWarehouseListResponse warehouseAPIWarehouseList($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\WarehouseAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\WarehouseWarehouseListRequest(); // \Swagger\Client\Model\WarehouseWarehouseListRequest | 

try {
    $result = $api_instance->warehouseAPIWarehouseList($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WarehouseAPIApi->warehouseAPIWarehouseList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\WarehouseWarehouseListRequest**](../Model/\Swagger\Client\Model\WarehouseWarehouseListRequest.md)|  |

### Return type

[**\Swagger\Client\Model\WarehouseWarehouseListResponse**](../Model/WarehouseWarehouseListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

