# Swagger\Client\FinanceAPIApi

All URIs are relative to *https://api-seller.ozon.ru*

Method | HTTP request | Description
------------- | ------------- | -------------
[**financeAPIFinanceTransactionList**](FinanceAPIApi.md#financeAPIFinanceTransactionList) | **POST** /v2/finance/transaction/list | 
[**financeAPIFinanceTransactionTotal**](FinanceAPIApi.md#financeAPIFinanceTransactionTotal) | **POST** /v2/finance/transaction/totals | 


# **financeAPIFinanceTransactionList**
> \Swagger\Client\Model\FinanceFinanceTransactionListResponse financeAPIFinanceTransactionList($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FinanceAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\FinanceFinanceTransactionRequest(); // \Swagger\Client\Model\FinanceFinanceTransactionRequest | 

try {
    $result = $api_instance->financeAPIFinanceTransactionList($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceAPIApi->financeAPIFinanceTransactionList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\FinanceFinanceTransactionRequest**](../Model/\Swagger\Client\Model\FinanceFinanceTransactionRequest.md)|  |

### Return type

[**\Swagger\Client\Model\FinanceFinanceTransactionListResponse**](../Model/FinanceFinanceTransactionListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **financeAPIFinanceTransactionTotal**
> \Swagger\Client\Model\FinanceFinanceTransactionTotalResponse financeAPIFinanceTransactionTotal($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FinanceAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\FinanceFinanceTransactionRequest(); // \Swagger\Client\Model\FinanceFinanceTransactionRequest | 

try {
    $result = $api_instance->financeAPIFinanceTransactionTotal($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinanceAPIApi->financeAPIFinanceTransactionTotal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\FinanceFinanceTransactionRequest**](../Model/\Swagger\Client\Model\FinanceFinanceTransactionRequest.md)|  |

### Return type

[**\Swagger\Client\Model\FinanceFinanceTransactionTotalResponse**](../Model/FinanceFinanceTransactionTotalResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

