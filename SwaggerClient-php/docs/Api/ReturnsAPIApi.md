# Swagger\Client\ReturnsAPIApi

All URIs are relative to *https://api-seller.ozon.ru*

Method | HTTP request | Description
------------- | ------------- | -------------
[**returnsAPIGetReturnsCompanyFBS**](ReturnsAPIApi.md#returnsAPIGetReturnsCompanyFBS) | **POST** /v2/returns/company/fbs | 
[**returnsAPIGetReturnsCompanyFbo**](ReturnsAPIApi.md#returnsAPIGetReturnsCompanyFbo) | **POST** /v2/returns/company/fbo | 


# **returnsAPIGetReturnsCompanyFBS**
> \Swagger\Client\Model\ReturnsGetReturnsCompanyFBSResponse returnsAPIGetReturnsCompanyFBS($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ReturnsAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ReturnsGetReturnsCompanyFBSRequest(); // \Swagger\Client\Model\ReturnsGetReturnsCompanyFBSRequest | 

try {
    $result = $api_instance->returnsAPIGetReturnsCompanyFBS($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsAPIApi->returnsAPIGetReturnsCompanyFBS: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ReturnsGetReturnsCompanyFBSRequest**](../Model/\Swagger\Client\Model\ReturnsGetReturnsCompanyFBSRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ReturnsGetReturnsCompanyFBSResponse**](../Model/ReturnsGetReturnsCompanyFBSResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **returnsAPIGetReturnsCompanyFbo**
> \Swagger\Client\Model\ReturnsGetReturnsCompanyFboResponse returnsAPIGetReturnsCompanyFbo($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ReturnsAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ReturnsGetReturnsCompanyFboRequest(); // \Swagger\Client\Model\ReturnsGetReturnsCompanyFboRequest | 

try {
    $result = $api_instance->returnsAPIGetReturnsCompanyFbo($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnsAPIApi->returnsAPIGetReturnsCompanyFbo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ReturnsGetReturnsCompanyFboRequest**](../Model/\Swagger\Client\Model\ReturnsGetReturnsCompanyFboRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ReturnsGetReturnsCompanyFboResponse**](../Model/ReturnsGetReturnsCompanyFboResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

