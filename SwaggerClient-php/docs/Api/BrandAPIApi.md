# Swagger\Client\BrandAPIApi

All URIs are relative to *https://api-seller.ozon.ru*

Method | HTTP request | Description
------------- | ------------- | -------------
[**brandAPIBrandCompanyCertificationList**](BrandAPIApi.md#brandAPIBrandCompanyCertificationList) | **POST** /v1/brand/company-certification/list | 


# **brandAPIBrandCompanyCertificationList**
> \Swagger\Client\Model\BrandBrandCompanyCertificationListResponse brandAPIBrandCompanyCertificationList($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\BrandAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\BrandBrandCompanyCertificationListRequest(); // \Swagger\Client\Model\BrandBrandCompanyCertificationListRequest | 

try {
    $result = $api_instance->brandAPIBrandCompanyCertificationList($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandAPIApi->brandAPIBrandCompanyCertificationList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\BrandBrandCompanyCertificationListRequest**](../Model/\Swagger\Client\Model\BrandBrandCompanyCertificationListRequest.md)|  |

### Return type

[**\Swagger\Client\Model\BrandBrandCompanyCertificationListResponse**](../Model/BrandBrandCompanyCertificationListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

