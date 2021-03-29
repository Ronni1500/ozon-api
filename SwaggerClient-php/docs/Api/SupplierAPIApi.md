# Swagger\Client\SupplierAPIApi

All URIs are relative to *https://api-seller.ozon.ru*

Method | HTTP request | Description
------------- | ------------- | -------------
[**supplierAPISupplierContractorsWaybillAcceptance**](SupplierAPIApi.md#supplierAPISupplierContractorsWaybillAcceptance) | **GET** /v1/supplier/orders/{orderId}/waybill_acceptance_results | 
[**supplierAPISupplierContractorsWaybillAcceptanceWaybillId**](SupplierAPIApi.md#supplierAPISupplierContractorsWaybillAcceptanceWaybillId) | **GET** /v1/supplier/waybill_acceptance_results/{waybillId} | 


# **supplierAPISupplierContractorsWaybillAcceptance**
> \Swagger\Client\Model\SupplierSupplierContractorsWaybillAcceptanceResult supplierAPISupplierContractorsWaybillAcceptance($client_id, $api_key, $order_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SupplierAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$order_id = "order_id_example"; // string | 

try {
    $result = $api_instance->supplierAPISupplierContractorsWaybillAcceptance($client_id, $api_key, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierAPIApi->supplierAPISupplierContractorsWaybillAcceptance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **order_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\SupplierSupplierContractorsWaybillAcceptanceResult**](../Model/SupplierSupplierContractorsWaybillAcceptanceResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **supplierAPISupplierContractorsWaybillAcceptanceWaybillId**
> \Swagger\Client\Model\SupplierSupplierContractorsWaybillAcceptanceWaybillIdResultResponse supplierAPISupplierContractorsWaybillAcceptanceWaybillId($client_id, $api_key, $waybill_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SupplierAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$waybill_id = "waybill_id_example"; // string | 

try {
    $result = $api_instance->supplierAPISupplierContractorsWaybillAcceptanceWaybillId($client_id, $api_key, $waybill_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SupplierAPIApi->supplierAPISupplierContractorsWaybillAcceptanceWaybillId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **waybill_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\SupplierSupplierContractorsWaybillAcceptanceWaybillIdResultResponse**](../Model/SupplierSupplierContractorsWaybillAcceptanceWaybillIdResultResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

