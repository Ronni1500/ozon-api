# Swagger\Client\ReportAPIApi

All URIs are relative to *https://api-seller.ozon.ru*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportAPICreateCompanyFinanceReport**](ReportAPIApi.md#reportAPICreateCompanyFinanceReport) | **POST** /v1/report/finance/create | 
[**reportAPICreateCompanyPostingsReport**](ReportAPIApi.md#reportAPICreateCompanyPostingsReport) | **POST** /v1/report/postings/create | 
[**reportAPICreateCompanyProductsPricesReport**](ReportAPIApi.md#reportAPICreateCompanyProductsPricesReport) | **POST** /v1/report/products/prices/create | 
[**reportAPICreateCompanyProductsReport**](ReportAPIApi.md#reportAPICreateCompanyProductsReport) | **POST** /v1/report/products/create | 
[**reportAPICreateCompanyReturnsReport**](ReportAPIApi.md#reportAPICreateCompanyReturnsReport) | **POST** /v1/report/returns/create | 
[**reportAPICreateCompanyStockReport**](ReportAPIApi.md#reportAPICreateCompanyStockReport) | **POST** /v1/report/stock/create | 
[**reportAPICreateCompanyTransactionsReport**](ReportAPIApi.md#reportAPICreateCompanyTransactionsReport) | **POST** /v1/report/transactions/create | 
[**reportAPICreateProductsMovementReport**](ReportAPIApi.md#reportAPICreateProductsMovementReport) | **POST** /v1/report/products/movement/create | 
[**reportAPIReportInfo**](ReportAPIApi.md#reportAPIReportInfo) | **POST** /v1/report/info | 
[**reportAPIReportList**](ReportAPIApi.md#reportAPIReportList) | **POST** /v1/report/list | 


# **reportAPICreateCompanyFinanceReport**
> \Swagger\Client\Model\ReportCreateReportResponse reportAPICreateCompanyFinanceReport($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ReportAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ReportCreateCompanyFinanceReportRequest(); // \Swagger\Client\Model\ReportCreateCompanyFinanceReportRequest | 

try {
    $result = $api_instance->reportAPICreateCompanyFinanceReport($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAPIApi->reportAPICreateCompanyFinanceReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ReportCreateCompanyFinanceReportRequest**](../Model/\Swagger\Client\Model\ReportCreateCompanyFinanceReportRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ReportCreateReportResponse**](../Model/ReportCreateReportResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportAPICreateCompanyPostingsReport**
> \Swagger\Client\Model\ReportCreateReportResponse reportAPICreateCompanyPostingsReport($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ReportAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ReportCreateCompanyPostingsReportRequest(); // \Swagger\Client\Model\ReportCreateCompanyPostingsReportRequest | 

try {
    $result = $api_instance->reportAPICreateCompanyPostingsReport($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAPIApi->reportAPICreateCompanyPostingsReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ReportCreateCompanyPostingsReportRequest**](../Model/\Swagger\Client\Model\ReportCreateCompanyPostingsReportRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ReportCreateReportResponse**](../Model/ReportCreateReportResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportAPICreateCompanyProductsPricesReport**
> \Swagger\Client\Model\ReportCreateReportResponse reportAPICreateCompanyProductsPricesReport($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ReportAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ReportCreateCompanyProductsPricesReportRequest(); // \Swagger\Client\Model\ReportCreateCompanyProductsPricesReportRequest | 

try {
    $result = $api_instance->reportAPICreateCompanyProductsPricesReport($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAPIApi->reportAPICreateCompanyProductsPricesReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ReportCreateCompanyProductsPricesReportRequest**](../Model/\Swagger\Client\Model\ReportCreateCompanyProductsPricesReportRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ReportCreateReportResponse**](../Model/ReportCreateReportResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportAPICreateCompanyProductsReport**
> \Swagger\Client\Model\ReportCreateReportResponse reportAPICreateCompanyProductsReport($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ReportAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ReportCreateCompanyProductsReportRequest(); // \Swagger\Client\Model\ReportCreateCompanyProductsReportRequest | 

try {
    $result = $api_instance->reportAPICreateCompanyProductsReport($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAPIApi->reportAPICreateCompanyProductsReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ReportCreateCompanyProductsReportRequest**](../Model/\Swagger\Client\Model\ReportCreateCompanyProductsReportRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ReportCreateReportResponse**](../Model/ReportCreateReportResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportAPICreateCompanyReturnsReport**
> \Swagger\Client\Model\ReportCreateReportResponse reportAPICreateCompanyReturnsReport($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ReportAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ReportCreateCompanyReturnsReportRequest(); // \Swagger\Client\Model\ReportCreateCompanyReturnsReportRequest | 

try {
    $result = $api_instance->reportAPICreateCompanyReturnsReport($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAPIApi->reportAPICreateCompanyReturnsReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ReportCreateCompanyReturnsReportRequest**](../Model/\Swagger\Client\Model\ReportCreateCompanyReturnsReportRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ReportCreateReportResponse**](../Model/ReportCreateReportResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportAPICreateCompanyStockReport**
> \Swagger\Client\Model\ReportCreateReportResponse reportAPICreateCompanyStockReport($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ReportAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ReportCreateCompanyStockReportRequest(); // \Swagger\Client\Model\ReportCreateCompanyStockReportRequest | 

try {
    $result = $api_instance->reportAPICreateCompanyStockReport($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAPIApi->reportAPICreateCompanyStockReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ReportCreateCompanyStockReportRequest**](../Model/\Swagger\Client\Model\ReportCreateCompanyStockReportRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ReportCreateReportResponse**](../Model/ReportCreateReportResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportAPICreateCompanyTransactionsReport**
> \Swagger\Client\Model\ReportCreateReportResponse reportAPICreateCompanyTransactionsReport($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ReportAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ReportCreateCompanyTransactionsReportRequest(); // \Swagger\Client\Model\ReportCreateCompanyTransactionsReportRequest | 

try {
    $result = $api_instance->reportAPICreateCompanyTransactionsReport($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAPIApi->reportAPICreateCompanyTransactionsReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ReportCreateCompanyTransactionsReportRequest**](../Model/\Swagger\Client\Model\ReportCreateCompanyTransactionsReportRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ReportCreateReportResponse**](../Model/ReportCreateReportResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportAPICreateProductsMovementReport**
> \Swagger\Client\Model\ReportCreateReportResponse reportAPICreateProductsMovementReport($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ReportAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ReportCreateProductsMovementReportRequest(); // \Swagger\Client\Model\ReportCreateProductsMovementReportRequest | 

try {
    $result = $api_instance->reportAPICreateProductsMovementReport($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAPIApi->reportAPICreateProductsMovementReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ReportCreateProductsMovementReportRequest**](../Model/\Swagger\Client\Model\ReportCreateProductsMovementReportRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ReportCreateReportResponse**](../Model/ReportCreateReportResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportAPIReportInfo**
> \Swagger\Client\Model\ReportReportInfoResponse reportAPIReportInfo($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ReportAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ReportReportInfoRequest(); // \Swagger\Client\Model\ReportReportInfoRequest | 

try {
    $result = $api_instance->reportAPIReportInfo($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAPIApi->reportAPIReportInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ReportReportInfoRequest**](../Model/\Swagger\Client\Model\ReportReportInfoRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ReportReportInfoResponse**](../Model/ReportReportInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportAPIReportList**
> \Swagger\Client\Model\ReportReportListResponse reportAPIReportList($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ReportAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ReportReportListRequest(); // \Swagger\Client\Model\ReportReportListRequest | 

try {
    $result = $api_instance->reportAPIReportList($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportAPIApi->reportAPIReportList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ReportReportListRequest**](../Model/\Swagger\Client\Model\ReportReportListRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ReportReportListResponse**](../Model/ReportReportListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

