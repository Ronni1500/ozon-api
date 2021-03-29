# Swagger\Client\ChatAPIApi

All URIs are relative to *https://api-seller.ozon.ru*

Method | HTTP request | Description
------------- | ------------- | -------------
[**chatAPIChatHistory**](ChatAPIApi.md#chatAPIChatHistory) | **POST** /v1/chat/history | 
[**chatAPIChatList**](ChatAPIApi.md#chatAPIChatList) | **POST** /v1/chat/list | 
[**chatAPIChatSendFile**](ChatAPIApi.md#chatAPIChatSendFile) | **POST** /v1/chat/send/file | 
[**chatAPIChatSendMessage**](ChatAPIApi.md#chatAPIChatSendMessage) | **POST** /v1/chat/send/message | 
[**chatAPIChatStart**](ChatAPIApi.md#chatAPIChatStart) | **POST** /v1/chat/start | 
[**chatAPIChatUpdates**](ChatAPIApi.md#chatAPIChatUpdates) | **POST** /v1/chat/updates | 


# **chatAPIChatHistory**
> \Swagger\Client\Model\ChatChatHistoryResponse chatAPIChatHistory($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ChatAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ChatChatHistoryRequest(); // \Swagger\Client\Model\ChatChatHistoryRequest | 

try {
    $result = $api_instance->chatAPIChatHistory($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatAPIApi->chatAPIChatHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ChatChatHistoryRequest**](../Model/\Swagger\Client\Model\ChatChatHistoryRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ChatChatHistoryResponse**](../Model/ChatChatHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chatAPIChatList**
> \Swagger\Client\Model\ChatChatListResponse chatAPIChatList($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ChatAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ChatChatListRequest(); // \Swagger\Client\Model\ChatChatListRequest | 

try {
    $result = $api_instance->chatAPIChatList($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatAPIApi->chatAPIChatList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ChatChatListRequest**](../Model/\Swagger\Client\Model\ChatChatListRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ChatChatListResponse**](../Model/ChatChatListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chatAPIChatSendFile**
> \Swagger\Client\Model\ChatChatSendFileResponse chatAPIChatSendFile($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ChatAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ChatChatSendFileRequest(); // \Swagger\Client\Model\ChatChatSendFileRequest | 

try {
    $result = $api_instance->chatAPIChatSendFile($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatAPIApi->chatAPIChatSendFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ChatChatSendFileRequest**](../Model/\Swagger\Client\Model\ChatChatSendFileRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ChatChatSendFileResponse**](../Model/ChatChatSendFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chatAPIChatSendMessage**
> \Swagger\Client\Model\ChatChatSendMessageResponse chatAPIChatSendMessage($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ChatAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ChatChatSendMessageRequest(); // \Swagger\Client\Model\ChatChatSendMessageRequest | 

try {
    $result = $api_instance->chatAPIChatSendMessage($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatAPIApi->chatAPIChatSendMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ChatChatSendMessageRequest**](../Model/\Swagger\Client\Model\ChatChatSendMessageRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ChatChatSendMessageResponse**](../Model/ChatChatSendMessageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chatAPIChatStart**
> \Swagger\Client\Model\ChatChatStartResponse chatAPIChatStart($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ChatAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ChatChatStartRequest(); // \Swagger\Client\Model\ChatChatStartRequest | 

try {
    $result = $api_instance->chatAPIChatStart($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatAPIApi->chatAPIChatStart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ChatChatStartRequest**](../Model/\Swagger\Client\Model\ChatChatStartRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ChatChatStartResponse**](../Model/ChatChatStartResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **chatAPIChatUpdates**
> \Swagger\Client\Model\ChatChatUpdatesResponse chatAPIChatUpdates($client_id, $api_key, $body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ChatAPIApi();
$client_id = 56; // int | Client id
$api_key = "api_key_example"; // string | Api key
$body = new \Swagger\Client\Model\ChatChatUpdatesRequest(); // \Swagger\Client\Model\ChatChatUpdatesRequest | 

try {
    $result = $api_instance->chatAPIChatUpdates($client_id, $api_key, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatAPIApi->chatAPIChatUpdates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **int**| Client id |
 **api_key** | **string**| Api key |
 **body** | [**\Swagger\Client\Model\ChatChatUpdatesRequest**](../Model/\Swagger\Client\Model\ChatChatUpdatesRequest.md)|  |

### Return type

[**\Swagger\Client\Model\ChatChatUpdatesResponse**](../Model/ChatChatUpdatesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

