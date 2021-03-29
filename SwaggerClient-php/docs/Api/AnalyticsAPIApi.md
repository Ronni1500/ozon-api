# Swagger\Client\AnalyticsAPIApi

All URIs are relative to *https://api-seller.ozon.ru*

Method | HTTP request | Description
------------- | ------------- | -------------
[**analyticsAPIAnalyticsGetData**](AnalyticsAPIApi.md#analyticsAPIAnalyticsGetData) | **POST** /v1/analytics/data | 
[**analyticsAPIAnalyticsGetStockOnWarehouses**](AnalyticsAPIApi.md#analyticsAPIAnalyticsGetStockOnWarehouses) | **POST** /v1/analytics/stock_on_warehouses | 


# **analyticsAPIAnalyticsGetData**
> \Swagger\Client\Model\AnalyticsAnalyticsGetDataResponse analyticsAPIAnalyticsGetData($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalyticsAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\AnalyticsAnalyticsGetDataRequest(); // \Swagger\Client\Model\AnalyticsAnalyticsGetDataRequest | 

try {
    $result = $api_instance->analyticsAPIAnalyticsGetData($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsAPIApi->analyticsAPIAnalyticsGetData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\AnalyticsAnalyticsGetDataRequest**](../Model/\Swagger\Client\Model\AnalyticsAnalyticsGetDataRequest.md)|  |

### Return type

[**\Swagger\Client\Model\AnalyticsAnalyticsGetDataResponse**](../Model/AnalyticsAnalyticsGetDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **analyticsAPIAnalyticsGetStockOnWarehouses**
> \Swagger\Client\Model\AnalyticsAnalyticsGetStockOnWarehousesResponse analyticsAPIAnalyticsGetStockOnWarehouses($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AnalyticsAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\AnalyticsAnalyticsGetStockOnWarehousesRequest(); // \Swagger\Client\Model\AnalyticsAnalyticsGetStockOnWarehousesRequest | 

try {
    $result = $api_instance->analyticsAPIAnalyticsGetStockOnWarehouses($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsAPIApi->analyticsAPIAnalyticsGetStockOnWarehouses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\AnalyticsAnalyticsGetStockOnWarehousesRequest**](../Model/\Swagger\Client\Model\AnalyticsAnalyticsGetStockOnWarehousesRequest.md)|  |

### Return type

[**\Swagger\Client\Model\AnalyticsAnalyticsGetStockOnWarehousesResponse**](../Model/AnalyticsAnalyticsGetStockOnWarehousesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

