# Swagger\Client\PostingAPIApi

All URIs are relative to *https://api-seller.ozon.ru*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postingAPIApproveCrossborderPosting**](PostingAPIApi.md#postingAPIApproveCrossborderPosting) | **POST** /v2/posting/crossborder/approve | 
[**postingAPICancelCrossborderPosting**](PostingAPIApi.md#postingAPICancelCrossborderPosting) | **POST** /v2/posting/crossborder/cancel | 
[**postingAPICancelCrossborderPostingProduct**](PostingAPIApi.md#postingAPICancelCrossborderPostingProduct) | **POST** /v2/posting/crossborder/product/cancel | 
[**postingAPICancelFbsPosting**](PostingAPIApi.md#postingAPICancelFbsPosting) | **POST** /v2/posting/fbs/cancel | 
[**postingAPICancelFbsPostingProduct**](PostingAPIApi.md#postingAPICancelFbsPostingProduct) | **POST** /v2/posting/fbs/product/cancel | 
[**postingAPIFbsPostingDelivered**](PostingAPIApi.md#postingAPIFbsPostingDelivered) | **POST** /v2/fbs/posting/delivered | 
[**postingAPIFbsPostingDelivering**](PostingAPIApi.md#postingAPIFbsPostingDelivering) | **POST** /v2/fbs/posting/delivering | 
[**postingAPIFbsPostingLastMile**](PostingAPIApi.md#postingAPIFbsPostingLastMile) | **POST** /v2/fbs/posting/last-mile | 
[**postingAPIFbsPostingTrackingNumberSet**](PostingAPIApi.md#postingAPIFbsPostingTrackingNumberSet) | **POST** /v2/fbs/posting/tracking-number/set | 
[**postingAPIGetCrossborderPosting**](PostingAPIApi.md#postingAPIGetCrossborderPosting) | **POST** /v2/posting/crossborder/get | 
[**postingAPIGetCrossborderPostingList**](PostingAPIApi.md#postingAPIGetCrossborderPostingList) | **POST** /v2/posting/crossborder/list | 
[**postingAPIGetCrossborderShippingProviderList**](PostingAPIApi.md#postingAPIGetCrossborderShippingProviderList) | **POST** /v2/posting/crossborder/shipping-provider/list | 
[**postingAPIGetCrossborderUnfulfilledPostingList**](PostingAPIApi.md#postingAPIGetCrossborderUnfulfilledPostingList) | **POST** /v2/posting/crossborder/unfulfilled/list | 
[**postingAPIGetFboPosting**](PostingAPIApi.md#postingAPIGetFboPosting) | **POST** /v2/posting/fbo/get | 
[**postingAPIGetFboPostingList**](PostingAPIApi.md#postingAPIGetFboPostingList) | **POST** /v2/posting/fbo/list | 
[**postingAPIGetFbsPosting**](PostingAPIApi.md#postingAPIGetFbsPosting) | **POST** /v2/posting/fbs/get | 
[**postingAPIGetFbsPostingByBarcode**](PostingAPIApi.md#postingAPIGetFbsPostingByBarcode) | **POST** /v2/posting/fbs/get-by-barcode | 
[**postingAPIGetFbsPostingList**](PostingAPIApi.md#postingAPIGetFbsPostingList) | **POST** /v2/posting/fbs/list | 
[**postingAPIGetFbsPostingList_0**](PostingAPIApi.md#postingAPIGetFbsPostingList_0) | **POST** /v3/posting/fbs/list | 
[**postingAPIGetFbsPostingUnfulfilledList**](PostingAPIApi.md#postingAPIGetFbsPostingUnfulfilledList) | **POST** /v3/posting/fbs/unfulfilled/list | 
[**postingAPIGetFbsPosting_0**](PostingAPIApi.md#postingAPIGetFbsPosting_0) | **POST** /v3/posting/fbs/get | 
[**postingAPIGetFbsUnfulfilledPostingList**](PostingAPIApi.md#postingAPIGetFbsUnfulfilledPostingList) | **POST** /v2/posting/fbs/unfulfilled/list | 
[**postingAPIGetPostingCrossborderCancelReasonList**](PostingAPIApi.md#postingAPIGetPostingCrossborderCancelReasonList) | **POST** /v2/posting/crossborder/cancel-reason/list | 
[**postingAPIGetPostingFbsCancelReasonList**](PostingAPIApi.md#postingAPIGetPostingFbsCancelReasonList) | **POST** /v2/posting/fbs/cancel-reason/list | 
[**postingAPIMoveFbsPostingToArbitration**](PostingAPIApi.md#postingAPIMoveFbsPostingToArbitration) | **POST** /v2/posting/fbs/arbitration | 
[**postingAPIMoveFbsPostingToAwaitingDelivery**](PostingAPIApi.md#postingAPIMoveFbsPostingToAwaitingDelivery) | **POST** /v2/posting/fbs/awaiting-delivery | 
[**postingAPIPostingFBSActCheckStatus**](PostingAPIApi.md#postingAPIPostingFBSActCheckStatus) | **POST** /v2/posting/fbs/act/check-status | 
[**postingAPIPostingFBSActCreate**](PostingAPIApi.md#postingAPIPostingFBSActCreate) | **POST** /v2/posting/fbs/act/create | 
[**postingAPIPostingFBSActGetContainerLabels**](PostingAPIApi.md#postingAPIPostingFBSActGetContainerLabels) | **POST** /v2/posting/fbs/act/get-container-labels | 
[**postingAPIPostingFBSGetAct**](PostingAPIApi.md#postingAPIPostingFBSGetAct) | **POST** /v2/posting/fbs/act/get-pdf | 
[**postingAPIPostingFBSPackageLabel**](PostingAPIApi.md#postingAPIPostingFBSPackageLabel) | **POST** /v2/posting/fbs/package-label | 
[**postingAPIPostingFBSProductMarkIsRequired**](PostingAPIApi.md#postingAPIPostingFBSProductMarkIsRequired) | **POST** /v2/posting/fbs/product/mandatory-mark/is-required | 
[**postingAPIPostingFBSProductMarkValidate**](PostingAPIApi.md#postingAPIPostingFBSProductMarkValidate) | **POST** /v2/posting/fbs/product/mandatory-mark/validate | 
[**postingAPIShipCrossborderPosting**](PostingAPIApi.md#postingAPIShipCrossborderPosting) | **POST** /v2/posting/crossborder/ship | 
[**postingAPIShipFbsPosting**](PostingAPIApi.md#postingAPIShipFbsPosting) | **POST** /v2/posting/fbs/ship | 


# **postingAPIApproveCrossborderPosting**
> \Swagger\Client\Model\PostingBooleanResponse postingAPIApproveCrossborderPosting($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingApproveCrossborderPostingRequest(); // \Swagger\Client\Model\PostingApproveCrossborderPostingRequest | 

try {
    $result = $api_instance->postingAPIApproveCrossborderPosting($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIApproveCrossborderPosting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingApproveCrossborderPostingRequest**](../Model/\Swagger\Client\Model\PostingApproveCrossborderPostingRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingBooleanResponse**](../Model/PostingBooleanResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPICancelCrossborderPosting**
> \Swagger\Client\Model\PostingBooleanResponse postingAPICancelCrossborderPosting($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingCancelCrossborderPostingRequest(); // \Swagger\Client\Model\PostingCancelCrossborderPostingRequest | 

try {
    $result = $api_instance->postingAPICancelCrossborderPosting($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPICancelCrossborderPosting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingCancelCrossborderPostingRequest**](../Model/\Swagger\Client\Model\PostingCancelCrossborderPostingRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingBooleanResponse**](../Model/PostingBooleanResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPICancelCrossborderPostingProduct**
> \Swagger\Client\Model\PostingPostingProductCancelResponse postingAPICancelCrossborderPostingProduct($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingPostingProductCancelRequest(); // \Swagger\Client\Model\PostingPostingProductCancelRequest | 

try {
    $result = $api_instance->postingAPICancelCrossborderPostingProduct($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPICancelCrossborderPostingProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingPostingProductCancelRequest**](../Model/\Swagger\Client\Model\PostingPostingProductCancelRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingPostingProductCancelResponse**](../Model/PostingPostingProductCancelResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPICancelFbsPosting**
> \Swagger\Client\Model\PostingBooleanResponse postingAPICancelFbsPosting($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingCancelFbsPostingRequest(); // \Swagger\Client\Model\PostingCancelFbsPostingRequest | 

try {
    $result = $api_instance->postingAPICancelFbsPosting($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPICancelFbsPosting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingCancelFbsPostingRequest**](../Model/\Swagger\Client\Model\PostingCancelFbsPostingRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingBooleanResponse**](../Model/PostingBooleanResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPICancelFbsPostingProduct**
> \Swagger\Client\Model\PostingPostingProductCancelResponse postingAPICancelFbsPostingProduct($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingPostingProductCancelRequest(); // \Swagger\Client\Model\PostingPostingProductCancelRequest | 

try {
    $result = $api_instance->postingAPICancelFbsPostingProduct($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPICancelFbsPostingProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingPostingProductCancelRequest**](../Model/\Swagger\Client\Model\PostingPostingProductCancelRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingPostingProductCancelResponse**](../Model/PostingPostingProductCancelResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIFbsPostingDelivered**
> \Swagger\Client\Model\PostingFbsPostingMoveStatusResponse postingAPIFbsPostingDelivered($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingFbsPostingDeliveredRequest(); // \Swagger\Client\Model\PostingFbsPostingDeliveredRequest | 

try {
    $result = $api_instance->postingAPIFbsPostingDelivered($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIFbsPostingDelivered: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingFbsPostingDeliveredRequest**](../Model/\Swagger\Client\Model\PostingFbsPostingDeliveredRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingFbsPostingMoveStatusResponse**](../Model/PostingFbsPostingMoveStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIFbsPostingDelivering**
> \Swagger\Client\Model\PostingFbsPostingMoveStatusResponse postingAPIFbsPostingDelivering($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingFbsPostingDeliveringRequest(); // \Swagger\Client\Model\PostingFbsPostingDeliveringRequest | 

try {
    $result = $api_instance->postingAPIFbsPostingDelivering($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIFbsPostingDelivering: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingFbsPostingDeliveringRequest**](../Model/\Swagger\Client\Model\PostingFbsPostingDeliveringRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingFbsPostingMoveStatusResponse**](../Model/PostingFbsPostingMoveStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIFbsPostingLastMile**
> \Swagger\Client\Model\PostingFbsPostingMoveStatusResponse postingAPIFbsPostingLastMile($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingFbsPostingLastMileRequest(); // \Swagger\Client\Model\PostingFbsPostingLastMileRequest | 

try {
    $result = $api_instance->postingAPIFbsPostingLastMile($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIFbsPostingLastMile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingFbsPostingLastMileRequest**](../Model/\Swagger\Client\Model\PostingFbsPostingLastMileRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingFbsPostingMoveStatusResponse**](../Model/PostingFbsPostingMoveStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIFbsPostingTrackingNumberSet**
> \Swagger\Client\Model\PostingFbsPostingMoveStatusResponse postingAPIFbsPostingTrackingNumberSet($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingFbsPostingTrackingNumberSetRequest(); // \Swagger\Client\Model\PostingFbsPostingTrackingNumberSetRequest | 

try {
    $result = $api_instance->postingAPIFbsPostingTrackingNumberSet($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIFbsPostingTrackingNumberSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingFbsPostingTrackingNumberSetRequest**](../Model/\Swagger\Client\Model\PostingFbsPostingTrackingNumberSetRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingFbsPostingMoveStatusResponse**](../Model/PostingFbsPostingMoveStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIGetCrossborderPosting**
> \Swagger\Client\Model\PostingCrossborderPostingResponse postingAPIGetCrossborderPosting($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingGetPostingRequest(); // \Swagger\Client\Model\PostingGetPostingRequest | 

try {
    $result = $api_instance->postingAPIGetCrossborderPosting($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIGetCrossborderPosting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingGetPostingRequest**](../Model/\Swagger\Client\Model\PostingGetPostingRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingCrossborderPostingResponse**](../Model/PostingCrossborderPostingResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIGetCrossborderPostingList**
> \Swagger\Client\Model\PostingCrossborderPostingListResponse postingAPIGetCrossborderPostingList($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingGetPostingListRequest(); // \Swagger\Client\Model\PostingGetPostingListRequest | 

try {
    $result = $api_instance->postingAPIGetCrossborderPostingList($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIGetCrossborderPostingList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingGetPostingListRequest**](../Model/\Swagger\Client\Model\PostingGetPostingListRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingCrossborderPostingListResponse**](../Model/PostingCrossborderPostingListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIGetCrossborderShippingProviderList**
> \Swagger\Client\Model\PostingShippingProviderListResponse postingAPIGetCrossborderShippingProviderList($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingShippingProviderListRequest(); // \Swagger\Client\Model\PostingShippingProviderListRequest | 

try {
    $result = $api_instance->postingAPIGetCrossborderShippingProviderList($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIGetCrossborderShippingProviderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingShippingProviderListRequest**](../Model/\Swagger\Client\Model\PostingShippingProviderListRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingShippingProviderListResponse**](../Model/PostingShippingProviderListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIGetCrossborderUnfulfilledPostingList**
> \Swagger\Client\Model\PostingCrossborderPostingListResponse postingAPIGetCrossborderUnfulfilledPostingList($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingCrossborderUnfulfilledListRequest(); // \Swagger\Client\Model\PostingCrossborderUnfulfilledListRequest | 

try {
    $result = $api_instance->postingAPIGetCrossborderUnfulfilledPostingList($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIGetCrossborderUnfulfilledPostingList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingCrossborderUnfulfilledListRequest**](../Model/\Swagger\Client\Model\PostingCrossborderUnfulfilledListRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingCrossborderPostingListResponse**](../Model/PostingCrossborderPostingListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIGetFboPosting**
> \Swagger\Client\Model\PostingFboPostingResponse postingAPIGetFboPosting($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingGetFboPostingRequest(); // \Swagger\Client\Model\PostingGetFboPostingRequest | 

try {
    $result = $api_instance->postingAPIGetFboPosting($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIGetFboPosting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingGetFboPostingRequest**](../Model/\Swagger\Client\Model\PostingGetFboPostingRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingFboPostingResponse**](../Model/PostingFboPostingResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIGetFboPostingList**
> \Swagger\Client\Model\PostingFboPostingListResponse postingAPIGetFboPostingList($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingGetFboPostingListRequest(); // \Swagger\Client\Model\PostingGetFboPostingListRequest | 

try {
    $result = $api_instance->postingAPIGetFboPostingList($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIGetFboPostingList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingGetFboPostingListRequest**](../Model/\Swagger\Client\Model\PostingGetFboPostingListRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingFboPostingListResponse**](../Model/PostingFboPostingListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIGetFbsPosting**
> \Swagger\Client\Model\PostingFbsPostingResponse postingAPIGetFbsPosting($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingGetFbsPostingRequest(); // \Swagger\Client\Model\PostingGetFbsPostingRequest | 

try {
    $result = $api_instance->postingAPIGetFbsPosting($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIGetFbsPosting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingGetFbsPostingRequest**](../Model/\Swagger\Client\Model\PostingGetFbsPostingRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingFbsPostingResponse**](../Model/PostingFbsPostingResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIGetFbsPostingByBarcode**
> \Swagger\Client\Model\PostingFbsPostingResponse postingAPIGetFbsPostingByBarcode($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingGetFbsPostingByBarcodeRequest(); // \Swagger\Client\Model\PostingGetFbsPostingByBarcodeRequest | 

try {
    $result = $api_instance->postingAPIGetFbsPostingByBarcode($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIGetFbsPostingByBarcode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingGetFbsPostingByBarcodeRequest**](../Model/\Swagger\Client\Model\PostingGetFbsPostingByBarcodeRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingFbsPostingResponse**](../Model/PostingFbsPostingResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIGetFbsPostingList**
> \Swagger\Client\Model\PostingFbsPostingListResponse postingAPIGetFbsPostingList($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingGetFbsPostingListRequest(); // \Swagger\Client\Model\PostingGetFbsPostingListRequest | 

try {
    $result = $api_instance->postingAPIGetFbsPostingList($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIGetFbsPostingList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingGetFbsPostingListRequest**](../Model/\Swagger\Client\Model\PostingGetFbsPostingListRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingFbsPostingListResponse**](../Model/PostingFbsPostingListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIGetFbsPostingList_0**
> \Swagger\Client\Model\Postingv3GetFbsPostingListResponse postingAPIGetFbsPostingList_0($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\Postingv3GetFbsPostingListRequest(); // \Swagger\Client\Model\Postingv3GetFbsPostingListRequest | 

try {
    $result = $api_instance->postingAPIGetFbsPostingList_0($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIGetFbsPostingList_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\Postingv3GetFbsPostingListRequest**](../Model/\Swagger\Client\Model\Postingv3GetFbsPostingListRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Postingv3GetFbsPostingListResponse**](../Model/Postingv3GetFbsPostingListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIGetFbsPostingUnfulfilledList**
> \Swagger\Client\Model\Postingv3GetFbsPostingUnfulfilledListResponse postingAPIGetFbsPostingUnfulfilledList($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\Postingv3GetFbsPostingUnfulfilledListRequest(); // \Swagger\Client\Model\Postingv3GetFbsPostingUnfulfilledListRequest | 

try {
    $result = $api_instance->postingAPIGetFbsPostingUnfulfilledList($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIGetFbsPostingUnfulfilledList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\Postingv3GetFbsPostingUnfulfilledListRequest**](../Model/\Swagger\Client\Model\Postingv3GetFbsPostingUnfulfilledListRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Postingv3GetFbsPostingUnfulfilledListResponse**](../Model/Postingv3GetFbsPostingUnfulfilledListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIGetFbsPosting_0**
> \Swagger\Client\Model\Postingv3GetFbsPostingResponse postingAPIGetFbsPosting_0($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\Postingv3GetFbsPostingRequest(); // \Swagger\Client\Model\Postingv3GetFbsPostingRequest | 

try {
    $result = $api_instance->postingAPIGetFbsPosting_0($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIGetFbsPosting_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\Postingv3GetFbsPostingRequest**](../Model/\Swagger\Client\Model\Postingv3GetFbsPostingRequest.md)|  |

### Return type

[**\Swagger\Client\Model\Postingv3GetFbsPostingResponse**](../Model/Postingv3GetFbsPostingResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIGetFbsUnfulfilledPostingList**
> \Swagger\Client\Model\PostingFbsPostingListResponse postingAPIGetFbsUnfulfilledPostingList($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingFbsUnfulfilledListRequest(); // \Swagger\Client\Model\PostingFbsUnfulfilledListRequest | 

try {
    $result = $api_instance->postingAPIGetFbsUnfulfilledPostingList($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIGetFbsUnfulfilledPostingList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingFbsUnfulfilledListRequest**](../Model/\Swagger\Client\Model\PostingFbsUnfulfilledListRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingFbsPostingListResponse**](../Model/PostingFbsPostingListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIGetPostingCrossborderCancelReasonList**
> \Swagger\Client\Model\PostingCancelReasonListResponse postingAPIGetPostingCrossborderCancelReasonList($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingCancelReasonListRequest(); // \Swagger\Client\Model\PostingCancelReasonListRequest | 

try {
    $result = $api_instance->postingAPIGetPostingCrossborderCancelReasonList($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIGetPostingCrossborderCancelReasonList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingCancelReasonListRequest**](../Model/\Swagger\Client\Model\PostingCancelReasonListRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingCancelReasonListResponse**](../Model/PostingCancelReasonListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIGetPostingFbsCancelReasonList**
> \Swagger\Client\Model\PostingCancelReasonListResponse postingAPIGetPostingFbsCancelReasonList($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingCancelReasonListRequest(); // \Swagger\Client\Model\PostingCancelReasonListRequest | 

try {
    $result = $api_instance->postingAPIGetPostingFbsCancelReasonList($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIGetPostingFbsCancelReasonList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingCancelReasonListRequest**](../Model/\Swagger\Client\Model\PostingCancelReasonListRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingCancelReasonListResponse**](../Model/PostingCancelReasonListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIMoveFbsPostingToArbitration**
> \Swagger\Client\Model\PostingBooleanResponse postingAPIMoveFbsPostingToArbitration($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingMovePostingRequest(); // \Swagger\Client\Model\PostingMovePostingRequest | 

try {
    $result = $api_instance->postingAPIMoveFbsPostingToArbitration($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIMoveFbsPostingToArbitration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingMovePostingRequest**](../Model/\Swagger\Client\Model\PostingMovePostingRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingBooleanResponse**](../Model/PostingBooleanResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIMoveFbsPostingToAwaitingDelivery**
> \Swagger\Client\Model\PostingBooleanResponse postingAPIMoveFbsPostingToAwaitingDelivery($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingMovePostingRequest(); // \Swagger\Client\Model\PostingMovePostingRequest | 

try {
    $result = $api_instance->postingAPIMoveFbsPostingToAwaitingDelivery($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIMoveFbsPostingToAwaitingDelivery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingMovePostingRequest**](../Model/\Swagger\Client\Model\PostingMovePostingRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingBooleanResponse**](../Model/PostingBooleanResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIPostingFBSActCheckStatus**
> \Swagger\Client\Model\PostingPostingFBSActCheckStatusResponse postingAPIPostingFBSActCheckStatus($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingPostingFBSActCheckStatusRequest(); // \Swagger\Client\Model\PostingPostingFBSActCheckStatusRequest | 

try {
    $result = $api_instance->postingAPIPostingFBSActCheckStatus($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIPostingFBSActCheckStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingPostingFBSActCheckStatusRequest**](../Model/\Swagger\Client\Model\PostingPostingFBSActCheckStatusRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingPostingFBSActCheckStatusResponse**](../Model/PostingPostingFBSActCheckStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIPostingFBSActCreate**
> \Swagger\Client\Model\PostingPostingFBSActCreateResponse postingAPIPostingFBSActCreate($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingPostingFBSActCreateRequest(); // \Swagger\Client\Model\PostingPostingFBSActCreateRequest | 

try {
    $result = $api_instance->postingAPIPostingFBSActCreate($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIPostingFBSActCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingPostingFBSActCreateRequest**](../Model/\Swagger\Client\Model\PostingPostingFBSActCreateRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingPostingFBSActCreateResponse**](../Model/PostingPostingFBSActCreateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIPostingFBSActGetContainerLabels**
> \Swagger\Client\Model\PostingPostingFBSActGetContainerLabelsResponse postingAPIPostingFBSActGetContainerLabels($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingPostingFBSActGetContainerLabelsRequest(); // \Swagger\Client\Model\PostingPostingFBSActGetContainerLabelsRequest | 

try {
    $result = $api_instance->postingAPIPostingFBSActGetContainerLabels($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIPostingFBSActGetContainerLabels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingPostingFBSActGetContainerLabelsRequest**](../Model/\Swagger\Client\Model\PostingPostingFBSActGetContainerLabelsRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingPostingFBSActGetContainerLabelsResponse**](../Model/PostingPostingFBSActGetContainerLabelsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIPostingFBSGetAct**
> \Swagger\Client\Model\PostingPostingFBSGetActResponse postingAPIPostingFBSGetAct($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingPostingFBSGetActRequest(); // \Swagger\Client\Model\PostingPostingFBSGetActRequest | 

try {
    $result = $api_instance->postingAPIPostingFBSGetAct($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIPostingFBSGetAct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingPostingFBSGetActRequest**](../Model/\Swagger\Client\Model\PostingPostingFBSGetActRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingPostingFBSGetActResponse**](../Model/PostingPostingFBSGetActResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIPostingFBSPackageLabel**
> \Swagger\Client\Model\PostingPostingFBSPackageLabelResponse postingAPIPostingFBSPackageLabel($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingPostingFBSPackageLabelRequest(); // \Swagger\Client\Model\PostingPostingFBSPackageLabelRequest | 

try {
    $result = $api_instance->postingAPIPostingFBSPackageLabel($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIPostingFBSPackageLabel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingPostingFBSPackageLabelRequest**](../Model/\Swagger\Client\Model\PostingPostingFBSPackageLabelRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingPostingFBSPackageLabelResponse**](../Model/PostingPostingFBSPackageLabelResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIPostingFBSProductMarkIsRequired**
> \Swagger\Client\Model\PostingPostingFBSProductMarkIsRequiredResponse postingAPIPostingFBSProductMarkIsRequired($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingPostingFBSProductMarkIsRequiredRequest(); // \Swagger\Client\Model\PostingPostingFBSProductMarkIsRequiredRequest | 

try {
    $result = $api_instance->postingAPIPostingFBSProductMarkIsRequired($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIPostingFBSProductMarkIsRequired: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingPostingFBSProductMarkIsRequiredRequest**](../Model/\Swagger\Client\Model\PostingPostingFBSProductMarkIsRequiredRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingPostingFBSProductMarkIsRequiredResponse**](../Model/PostingPostingFBSProductMarkIsRequiredResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIPostingFBSProductMarkValidate**
> \Swagger\Client\Model\PostingPostingFBSProductMarkValidateResponse postingAPIPostingFBSProductMarkValidate($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingPostingFBSProductMarkValidateRequest(); // \Swagger\Client\Model\PostingPostingFBSProductMarkValidateRequest | 

try {
    $result = $api_instance->postingAPIPostingFBSProductMarkValidate($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIPostingFBSProductMarkValidate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingPostingFBSProductMarkValidateRequest**](../Model/\Swagger\Client\Model\PostingPostingFBSProductMarkValidateRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingPostingFBSProductMarkValidateResponse**](../Model/PostingPostingFBSProductMarkValidateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIShipCrossborderPosting**
> \Swagger\Client\Model\PostingShipCrossborderPostingResponse postingAPIShipCrossborderPosting($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingShipCrossborderPostingRequest(); // \Swagger\Client\Model\PostingShipCrossborderPostingRequest | 

try {
    $result = $api_instance->postingAPIShipCrossborderPosting($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIShipCrossborderPosting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingShipCrossborderPostingRequest**](../Model/\Swagger\Client\Model\PostingShipCrossborderPostingRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingShipCrossborderPostingResponse**](../Model/PostingShipCrossborderPostingResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postingAPIShipFbsPosting**
> \Swagger\Client\Model\PostingShipFbsPostingResponse postingAPIShipFbsPosting($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\PostingAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\PostingShipFbsPostingRequest(); // \Swagger\Client\Model\PostingShipFbsPostingRequest | 

try {
    $result = $api_instance->postingAPIShipFbsPosting($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostingAPIApi->postingAPIShipFbsPosting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\PostingShipFbsPostingRequest**](../Model/\Swagger\Client\Model\PostingShipFbsPostingRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PostingShipFbsPostingResponse**](../Model/PostingShipFbsPostingResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

