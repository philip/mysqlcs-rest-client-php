<?php
/**
 * SSHAccessApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * REST API for MySQL Cloud Service
 *
 * Use the REST API to manage MySQL Cloud Service instances
 *
 * OpenAPI spec version: 2017.01.06
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
 * SSHAccessApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SSHAccessApi
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
            $apiClient->getConfig()->setHost('https://localhost');
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
     * @return SSHAccessApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addSshKey
     *
     * Add a New SSH Public Key
     *
     * @param string $identity_domain_id Name of the identity domain for the MySQL Cloud Service account. (required)
     * @param string $service_id Name of the Oracle MySQL Cloud Service instance. (required)
     * @param string $credential_name Credential name to add the SSH public key to. Currently, the only credential name you can use is &lt;code&gt;vmspublickey&lt;/code&gt;. (required)
     * @param \Swagger\Client\Model\AddsshkeyPostrequest $payload The request body defines the details of the SSH public key name and value. (required)
     * @return \Swagger\Client\Model\AddsshkeyResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function addSshKey($identity_domain_id, $service_id, $credential_name, $payload)
    {
        list($response) = $this->addSshKeyWithHttpInfo($identity_domain_id, $service_id, $credential_name, $payload);
        return $response;
    }

    /**
     * Operation addSshKeyWithHttpInfo
     *
     * Add a New SSH Public Key
     *
     * @param string $identity_domain_id Name of the identity domain for the MySQL Cloud Service account. (required)
     * @param string $service_id Name of the Oracle MySQL Cloud Service instance. (required)
     * @param string $credential_name Credential name to add the SSH public key to. Currently, the only credential name you can use is &lt;code&gt;vmspublickey&lt;/code&gt;. (required)
     * @param \Swagger\Client\Model\AddsshkeyPostrequest $payload The request body defines the details of the SSH public key name and value. (required)
     * @return Array of \Swagger\Client\Model\AddsshkeyResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function addSshKeyWithHttpInfo($identity_domain_id, $service_id, $credential_name, $payload)
    {
        // verify the required parameter 'identity_domain_id' is set
        if ($identity_domain_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $identity_domain_id when calling addSshKey');
        }
        // verify the required parameter 'service_id' is set
        if ($service_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $service_id when calling addSshKey');
        }
        // verify the required parameter 'credential_name' is set
        if ($credential_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $credential_name when calling addSshKey');
        }
        // verify the required parameter 'payload' is set
        if ($payload === null) {
            throw new \InvalidArgumentException('Missing the required parameter $payload when calling addSshKey');
        }
        // parse inputs
        $resourcePath = "/paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/credentials/crednames/{credentialName}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($identity_domain_id !== null) {
            $resourcePath = str_replace(
                "{" . "identityDomainId" . "}",
                $this->apiClient->getSerializer()->toPathValue($identity_domain_id),
                $resourcePath
            );
        }
        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                "{" . "serviceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($service_id),
                $resourcePath
            );
        }
        // path params
        if ($credential_name !== null) {
            $resourcePath = str_replace(
                "{" . "credentialName" . "}",
                $this->apiClient->getSerializer()->toPathValue($credential_name),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($payload)) {
            $_tempBody = $payload;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-ID-TENANT-NAME');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-ID-TENANT-NAME'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\AddsshkeyResponse',
                '/paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/credentials/crednames/{credentialName}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\AddsshkeyResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 202:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\AddsshkeyResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getSshKeyDescription
     *
     * View the SSH Key Description
     *
     * @param string $identity_domain_id Name of the identity domain for the MySQL Cloud Service account. (required)
     * @param string $service_id Name of the Oracle MySQL Cloud Service instance. (required)
     * @param string $credential_name Credential name associated with the SSH key. Currently, the only credential name you can use is &lt;code&gt;vmspublickey&lt;/code&gt;. (required)
     * @return \Swagger\Client\Model\KeyDescItem
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getSshKeyDescription($identity_domain_id, $service_id, $credential_name)
    {
        list($response) = $this->getSshKeyDescriptionWithHttpInfo($identity_domain_id, $service_id, $credential_name);
        return $response;
    }

    /**
     * Operation getSshKeyDescriptionWithHttpInfo
     *
     * View the SSH Key Description
     *
     * @param string $identity_domain_id Name of the identity domain for the MySQL Cloud Service account. (required)
     * @param string $service_id Name of the Oracle MySQL Cloud Service instance. (required)
     * @param string $credential_name Credential name associated with the SSH key. Currently, the only credential name you can use is &lt;code&gt;vmspublickey&lt;/code&gt;. (required)
     * @return Array of \Swagger\Client\Model\KeyDescItem, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getSshKeyDescriptionWithHttpInfo($identity_domain_id, $service_id, $credential_name)
    {
        // verify the required parameter 'identity_domain_id' is set
        if ($identity_domain_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $identity_domain_id when calling getSshKeyDescription');
        }
        // verify the required parameter 'service_id' is set
        if ($service_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $service_id when calling getSshKeyDescription');
        }
        // verify the required parameter 'credential_name' is set
        if ($credential_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $credential_name when calling getSshKeyDescription');
        }
        // parse inputs
        $resourcePath = "/paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/credentials/crednames/{credentialName}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // path params
        if ($identity_domain_id !== null) {
            $resourcePath = str_replace(
                "{" . "identityDomainId" . "}",
                $this->apiClient->getSerializer()->toPathValue($identity_domain_id),
                $resourcePath
            );
        }
        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                "{" . "serviceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($service_id),
                $resourcePath
            );
        }
        // path params
        if ($credential_name !== null) {
            $resourcePath = str_replace(
                "{" . "credentialName" . "}",
                $this->apiClient->getSerializer()->toPathValue($credential_name),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-ID-TENANT-NAME');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-ID-TENANT-NAME'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\KeyDescItem',
                '/paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/credentials/crednames/{credentialName}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\KeyDescItem', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\KeyDescItem', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getSshKeyDescriptions
     *
     * Retrieve the SSH Key Description Using Query Parameters
     *
     * @param string $identity_domain_id Name of the identity domain for the MySQL Cloud Service account. (required)
     * @param string $service_name Name of the Oracle MySQL Cloud Service instance. (required)
     * @param string $credname Unique credential name.&lt;p&gt;&lt;b&gt;Note:&lt;/b&gt; &lt;code&gt;vmspublickey&lt;/code&gt; is the only supported credential name. This is the default if a credential name is not supplied. (optional)
     * @return \Swagger\Client\Model\KeydescqueryResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getSshKeyDescriptions($identity_domain_id, $service_name, $credname = null)
    {
        list($response) = $this->getSshKeyDescriptionsWithHttpInfo($identity_domain_id, $service_name, $credname);
        return $response;
    }

    /**
     * Operation getSshKeyDescriptionsWithHttpInfo
     *
     * Retrieve the SSH Key Description Using Query Parameters
     *
     * @param string $identity_domain_id Name of the identity domain for the MySQL Cloud Service account. (required)
     * @param string $service_name Name of the Oracle MySQL Cloud Service instance. (required)
     * @param string $credname Unique credential name.&lt;p&gt;&lt;b&gt;Note:&lt;/b&gt; &lt;code&gt;vmspublickey&lt;/code&gt; is the only supported credential name. This is the default if a credential name is not supplied. (optional)
     * @return Array of \Swagger\Client\Model\KeydescqueryResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getSshKeyDescriptionsWithHttpInfo($identity_domain_id, $service_name, $credname = null)
    {
        // verify the required parameter 'identity_domain_id' is set
        if ($identity_domain_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $identity_domain_id when calling getSshKeyDescriptions');
        }
        // verify the required parameter 'service_name' is set
        if ($service_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $service_name when calling getSshKeyDescriptions');
        }
        // parse inputs
        $resourcePath = "/paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/credentials/crednames";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($service_name !== null) {
            $queryParams['serviceName'] = $this->apiClient->getSerializer()->toQueryValue($service_name);
        }
        // query params
        if ($credname !== null) {
            $queryParams['credname'] = $this->apiClient->getSerializer()->toQueryValue($credname);
        }
        // path params
        if ($identity_domain_id !== null) {
            $resourcePath = str_replace(
                "{" . "identityDomainId" . "}",
                $this->apiClient->getSerializer()->toPathValue($identity_domain_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-ID-TENANT-NAME');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-ID-TENANT-NAME'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\KeydescqueryResponse',
                '/paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/credentials/crednames'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\KeydescqueryResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\KeydescqueryResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getSshKeyDetails
     *
     * View Details of the SSH Key
     *
     * @param string $identity_domain_id Name of the identity domain for the MySQL Cloud Service account. (required)
     * @param string $service_id Name of the Oracle MySQL Cloud Service instance. (required)
     * @param string $credential_name Credential name associated with the SSH public key. Currently, the only credential name you can use is &lt;code&gt;vmspublickey&lt;/code&gt;. (required)
     * @return \Swagger\Client\Model\SshkeyDetailsResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getSshKeyDetails($identity_domain_id, $service_id, $credential_name)
    {
        list($response) = $this->getSshKeyDetailsWithHttpInfo($identity_domain_id, $service_id, $credential_name);
        return $response;
    }

    /**
     * Operation getSshKeyDetailsWithHttpInfo
     *
     * View Details of the SSH Key
     *
     * @param string $identity_domain_id Name of the identity domain for the MySQL Cloud Service account. (required)
     * @param string $service_id Name of the Oracle MySQL Cloud Service instance. (required)
     * @param string $credential_name Credential name associated with the SSH public key. Currently, the only credential name you can use is &lt;code&gt;vmspublickey&lt;/code&gt;. (required)
     * @return Array of \Swagger\Client\Model\SshkeyDetailsResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getSshKeyDetailsWithHttpInfo($identity_domain_id, $service_id, $credential_name)
    {
        // verify the required parameter 'identity_domain_id' is set
        if ($identity_domain_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $identity_domain_id when calling getSshKeyDetails');
        }
        // verify the required parameter 'service_id' is set
        if ($service_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $service_id when calling getSshKeyDetails');
        }
        // verify the required parameter 'credential_name' is set
        if ($credential_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $credential_name when calling getSshKeyDetails');
        }
        // parse inputs
        $resourcePath = "/paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/credentials/{credentialName}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // path params
        if ($identity_domain_id !== null) {
            $resourcePath = str_replace(
                "{" . "identityDomainId" . "}",
                $this->apiClient->getSerializer()->toPathValue($identity_domain_id),
                $resourcePath
            );
        }
        // path params
        if ($service_id !== null) {
            $resourcePath = str_replace(
                "{" . "serviceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($service_id),
                $resourcePath
            );
        }
        // path params
        if ($credential_name !== null) {
            $resourcePath = str_replace(
                "{" . "credentialName" . "}",
                $this->apiClient->getSerializer()->toPathValue($credential_name),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-ID-TENANT-NAME');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-ID-TENANT-NAME'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\SshkeyDetailsResponse',
                '/paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/instances/{serviceId}/credentials/{credentialName}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\SshkeyDetailsResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\SshkeyDetailsResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getSshKeyValue
     *
     * Retrieve the SSH Key Value Using Query Parameters
     *
     * @param string $identity_domain_id Name of the identity domain for the MySQL Cloud Service account. (required)
     * @param string $service_name Name of the Oracle MySQL Cloud Service instance. (required)
     * @param string $credname Unique credential name.&lt;p&gt;&lt;b&gt;Note:&lt;/b&gt; &lt;code&gt;vmspublickey&lt;/code&gt; is the only supported credential name. This is the default if a credential name is not supplied. (optional)
     * @return \Swagger\Client\Model\KeyvaluequeryResponse
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getSshKeyValue($identity_domain_id, $service_name, $credname = null)
    {
        list($response) = $this->getSshKeyValueWithHttpInfo($identity_domain_id, $service_name, $credname);
        return $response;
    }

    /**
     * Operation getSshKeyValueWithHttpInfo
     *
     * Retrieve the SSH Key Value Using Query Parameters
     *
     * @param string $identity_domain_id Name of the identity domain for the MySQL Cloud Service account. (required)
     * @param string $service_name Name of the Oracle MySQL Cloud Service instance. (required)
     * @param string $credname Unique credential name.&lt;p&gt;&lt;b&gt;Note:&lt;/b&gt; &lt;code&gt;vmspublickey&lt;/code&gt; is the only supported credential name. This is the default if a credential name is not supplied. (optional)
     * @return Array of \Swagger\Client\Model\KeyvaluequeryResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \Swagger\Client\ApiException on non-2xx response
     */
    public function getSshKeyValueWithHttpInfo($identity_domain_id, $service_name, $credname = null)
    {
        // verify the required parameter 'identity_domain_id' is set
        if ($identity_domain_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $identity_domain_id when calling getSshKeyValue');
        }
        // verify the required parameter 'service_name' is set
        if ($service_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $service_name when calling getSshKeyValue');
        }
        // parse inputs
        $resourcePath = "/paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/credentials";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

        // query params
        if ($service_name !== null) {
            $queryParams['serviceName'] = $this->apiClient->getSerializer()->toQueryValue($service_name);
        }
        // query params
        if ($credname !== null) {
            $queryParams['credname'] = $this->apiClient->getSerializer()->toQueryValue($credname);
        }
        // path params
        if ($identity_domain_id !== null) {
            $resourcePath = str_replace(
                "{" . "identityDomainId" . "}",
                $this->apiClient->getSerializer()->toPathValue($identity_domain_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('X-ID-TENANT-NAME');
        if (strlen($apiKey) !== 0) {
            $headerParams['X-ID-TENANT-NAME'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\KeyvaluequeryResponse',
                '/paas/api/v1.1/instancemgmt/{identityDomainId}/services/MySQLCS/credentials'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\KeyvaluequeryResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\KeyvaluequeryResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
