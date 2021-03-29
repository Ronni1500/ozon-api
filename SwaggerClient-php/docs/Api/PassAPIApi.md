# Swagger\Client\PassAPIApi

All URIs are relative to *https://api-seller.ozon.ru*

Method | HTTP request | Description
------------- | ------------- | -------------
[**passAPIPassCreate**](PassAPIApi.md#passAPIPassCreate) | **POST** /pass/create | 
[**passAPIPassGetLast**](PassAPIApi.md#passAPIPassGetLast) | **POST** /pass/get/last | 
[**passAPIPassUpdate**](PassAPIApi.md#passAPIPassUpdate) | **POST** /pass/update | 


# **passAPIPassCreate**
> \Swagger\Client\Model\PassPassCreateResponse passAPIPassCreate($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PassAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PassPassCreateRequest(); // \Swagger\Client\Model\PassPassCreateRequest | 

try {
    $result = $api_instance->passAPIPassCreate($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PassAPIApi->passAPIPassCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PassPassCreateRequest**](../Model/\Swagger\Client\Model\PassPassCreateRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PassPassCreateResponse**](../Model/PassPassCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **passAPIPassGetLast**
> \Swagger\Client\Model\PassPass passAPIPassGetLast($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PassAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PassPassGetLastRequest(); // \Swagger\Client\Model\PassPassGetLastRequest | 

try {
    $result = $api_instance->passAPIPassGetLast($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PassAPIApi->passAPIPassGetLast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PassPassGetLastRequest**](../Model/\Swagger\Client\Model\PassPassGetLastRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PassPass**](../Model/PassPass.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **passAPIPassUpdate**
> \Swagger\Client\Model\PassResultBoolResponse passAPIPassUpdate($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PassAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PassPassUpdateRequest(); // \Swagger\Client\Model\PassPassUpdateRequest | 

try {
    $result = $api_instance->passAPIPassUpdate($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PassAPIApi->passAPIPassUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PassPassUpdateRequest**](../Model/\Swagger\Client\Model\PassPassUpdateRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PassResultBoolResponse**](../Model/PassResultBoolResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

