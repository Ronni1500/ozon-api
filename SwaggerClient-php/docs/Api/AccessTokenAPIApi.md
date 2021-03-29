# Swagger\Client\AccessTokenAPIApi

All URIs are relative to *https://api-seller.ozon.ru*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accessTokenAPIGetAccessTokenType**](AccessTokenAPIApi.md#accessTokenAPIGetAccessTokenType) | **POST** /v2/token/type | 


# **accessTokenAPIGetAccessTokenType**
> \Swagger\Client\Model\AccesstokenGetAccessTokenTypeResponse accessTokenAPIGetAccessTokenType($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\AccessTokenAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\AccesstokenGetAccessTokenTypeRequest(); // \Swagger\Client\Model\AccesstokenGetAccessTokenTypeRequest | 

try {
    $result = $api_instance->accessTokenAPIGetAccessTokenType($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessTokenAPIApi->accessTokenAPIGetAccessTokenType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\AccesstokenGetAccessTokenTypeRequest**](../Model/\Swagger\Client\Model\AccesstokenGetAccessTokenTypeRequest.md)|  |

### Return type

[**\Swagger\Client\Model\AccesstokenGetAccessTokenTypeResponse**](../Model/AccesstokenGetAccessTokenTypeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

