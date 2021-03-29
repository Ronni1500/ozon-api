<?php
/**
 * WarehouseAPIApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * apiv1/warehouse.proto
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: release-sapi-516
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\Configuration;
use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\ObjectSerializer;

/**
 * WarehouseAPIApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WarehouseAPIApi
{

    /**
     * API Client
     *
     * @var \Swagger\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Swagger\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Swagger\Client\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api-seller.ozon.ru');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Swagger\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Swagger\Client\ApiClient $apiClient set the API client
     *
     * @return WarehouseAPIApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation warehouseAPIDeliveryMethodList
     *
     * 
     *
     * @param int $client_id Client id (required)
     * @param string $api_key Api key (required)
     * @param \Swagger\Client\Model\WarehouseDeliveryMethodListRequest $body  (required)
     * @return \Swagger\Client\Model\WarehouseDeliveryMethodListResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function warehouseAPIDeliveryMethodList($client_id, $api_key, $body)
    {
        list($response) = $this->warehouseAPIDeliveryMethodListWithHttpInfo($client_id, $api_key, $body);
        return $response;
    }

    /**
     * Operation warehouseAPIDeliveryMethodListWithHttpInfo
     *
     * 
     *
     * @param int $client_id Client id (required)
     * @param string $api_key Api key (required)
     * @param \Swagger\Client\Model\WarehouseDeliveryMethodListRequest $body  (required)
     * @return Array of \Swagger\Client\Model\WarehouseDeliveryMethodListResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function warehouseAPIDeliveryMethodListWithHttpInfo($client_id, $api_key, $body)
    {
        // verify the required parameter 'client_id' is set
        if ($client_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $client_id when calling warehouseAPIDeliveryMethodList');
        }
        // verify the required parameter 'api_key' is set
        if ($api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_key when calling warehouseAPIDeliveryMethodList');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling warehouseAPIDeliveryMethodList');
        }
        // parse inputs
        $resourcePath = "/v1/delivery-method/list";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // header params
        if ($client_id !== null) {
            $headerParams['Client-Id'] = $this->apiClient->getSerializer()->toHeaderValue($client_id);
        }
        // header params
        if ($api_key !== null) {
            $headerParams['Api-Key'] = $this->apiClient->getSerializer()->toHeaderValue($api_key);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\WarehouseDeliveryMethodListResponse',
                '/v1/delivery-method/list'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\WarehouseDeliveryMethodListResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\WarehouseDeliveryMethodListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation warehouseAPIWarehouseList
     *
     * 
     *
     * @param int $client_id Client id (required)
     * @param string $api_key Api key (required)
     * @param \Swagger\Client\Model\WarehouseWarehouseListRequest $body  (required)
     * @return \Swagger\Client\Model\WarehouseWarehouseListResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function warehouseAPIWarehouseList($client_id, $api_key, $body)
    {
        list($response) = $this->warehouseAPIWarehouseListWithHttpInfo($client_id, $api_key, $body);
        return $response;
    }

    /**
     * Operation warehouseAPIWarehouseListWithHttpInfo
     *
     * 
     *
     * @param int $client_id Client id (required)
     * @param string $api_key Api key (required)
     * @param \Swagger\Client\Model\WarehouseWarehouseListRequest $body  (required)
     * @return Array of \Swagger\Client\Model\WarehouseWarehouseListResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function warehouseAPIWarehouseListWithHttpInfo($client_id, $api_key, $body)
    {
        // verify the required parameter 'client_id' is set
        if ($client_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $client_id when calling warehouseAPIWarehouseList');
        }
        // verify the required parameter 'api_key' is set
        if ($api_key === null) {
            throw new \InvalidArgumentException('Missing the required parameter $api_key when calling warehouseAPIWarehouseList');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling warehouseAPIWarehouseList');
        }
        // parse inputs
        $resourcePath = "/v1/warehouse/list";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // header params
        if ($client_id !== null) {
            $headerParams['Client-Id'] = $this->apiClient->getSerializer()->toHeaderValue($client_id);
        }
        // header params
        if ($api_key !== null) {
            $headerParams['Api-Key'] = $this->apiClient->getSerializer()->toHeaderValue($api_key);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\WarehouseWarehouseListResponse',
                '/v1/warehouse/list'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\WarehouseWarehouseListResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\WarehouseWarehouseListResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ErrorResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
