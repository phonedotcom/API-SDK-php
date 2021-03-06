<?php
/**
 * ContactsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Phone.com API
 *
 * This is a Phone.com api Swagger definition
 *
 * OpenAPI spec version: 1.0.0
 * Contact: apisupport@phone.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use \Swagger\Client\ApiClient;
use \Swagger\Client\ApiException;
use \Swagger\Client\Configuration;
use \Swagger\Client\ObjectSerializer;

/**
 * ContactsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContactsApi
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
        if ($apiClient === null) {
            $apiClient = new ApiClient();
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
     * @return ContactsApi
     */
    public function setApiClient(\Swagger\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createAccountExtensionContact
     *
     * Add a new address book contact for an extension.
     *
     * @param int $account_id Account ID (required)
     * @param int $extension_id Extension ID (required)
     * @param \Swagger\Client\Model\CreateContactParams $data Contact data (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ContactFull
     */
    public function createAccountExtensionContact($account_id, $extension_id, $data = null)
    {
        list($response) = $this->createAccountExtensionContactWithHttpInfo($account_id, $extension_id, $data);
        return $response;
    }

    /**
     * Operation createAccountExtensionContactWithHttpInfo
     *
     * Add a new address book contact for an extension.
     *
     * @param int $account_id Account ID (required)
     * @param int $extension_id Extension ID (required)
     * @param \Swagger\Client\Model\CreateContactParams $data Contact data (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ContactFull, HTTP status code, HTTP response headers (array of strings)
     */
    public function createAccountExtensionContactWithHttpInfo($account_id, $extension_id, $data = null)
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling createAccountExtensionContact');
        }
        // verify the required parameter 'extension_id' is set
        if ($extension_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $extension_id when calling createAccountExtensionContact');
        }
        // parse inputs
        $resourcePath = "/accounts/{account_id}/extensions/{extension_id}/contacts";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                "{" . "account_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($account_id),
                $resourcePath
            );
        }
        // path params
        if ($extension_id !== null) {
            $resourcePath = str_replace(
                "{" . "extension_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($extension_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($data)) {
            $_tempBody = $data;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ContactFull',
                '/accounts/{account_id}/extensions/{extension_id}/contacts'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ContactFull', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ContactFull', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation deleteAccountExtensionContact
     *
     * Delete a contact from the address book.
     *
     * @param int $account_id Account ID (required)
     * @param int $extension_id Extension ID (required)
     * @param int $contact_id Contact ID (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\DeleteEntry
     */
    public function deleteAccountExtensionContact($account_id, $extension_id, $contact_id)
    {
        list($response) = $this->deleteAccountExtensionContactWithHttpInfo($account_id, $extension_id, $contact_id);
        return $response;
    }

    /**
     * Operation deleteAccountExtensionContactWithHttpInfo
     *
     * Delete a contact from the address book.
     *
     * @param int $account_id Account ID (required)
     * @param int $extension_id Extension ID (required)
     * @param int $contact_id Contact ID (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\DeleteEntry, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteAccountExtensionContactWithHttpInfo($account_id, $extension_id, $contact_id)
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling deleteAccountExtensionContact');
        }
        // verify the required parameter 'extension_id' is set
        if ($extension_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $extension_id when calling deleteAccountExtensionContact');
        }
        // verify the required parameter 'contact_id' is set
        if ($contact_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $contact_id when calling deleteAccountExtensionContact');
        }
        // parse inputs
        $resourcePath = "/accounts/{account_id}/extensions/{extension_id}/contacts/{contact_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                "{" . "account_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($account_id),
                $resourcePath
            );
        }
        // path params
        if ($extension_id !== null) {
            $resourcePath = str_replace(
                "{" . "extension_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($extension_id),
                $resourcePath
            );
        }
        // path params
        if ($contact_id !== null) {
            $resourcePath = str_replace(
                "{" . "contact_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($contact_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\DeleteEntry',
                '/accounts/{account_id}/extensions/{extension_id}/contacts/{contact_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\DeleteEntry', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\DeleteEntry', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAccountExtensionContact
     *
     * Retrieve the details of an address book contact.
     *
     * @param int $account_id Account ID (required)
     * @param int $extension_id Extension ID (required)
     * @param int $contact_id Contact ID (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ContactFull
     */
    public function getAccountExtensionContact($account_id, $extension_id, $contact_id)
    {
        list($response) = $this->getAccountExtensionContactWithHttpInfo($account_id, $extension_id, $contact_id);
        return $response;
    }

    /**
     * Operation getAccountExtensionContactWithHttpInfo
     *
     * Retrieve the details of an address book contact.
     *
     * @param int $account_id Account ID (required)
     * @param int $extension_id Extension ID (required)
     * @param int $contact_id Contact ID (required)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ContactFull, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAccountExtensionContactWithHttpInfo($account_id, $extension_id, $contact_id)
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling getAccountExtensionContact');
        }
        // verify the required parameter 'extension_id' is set
        if ($extension_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $extension_id when calling getAccountExtensionContact');
        }
        // verify the required parameter 'contact_id' is set
        if ($contact_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $contact_id when calling getAccountExtensionContact');
        }
        // parse inputs
        $resourcePath = "/accounts/{account_id}/extensions/{extension_id}/contacts/{contact_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                "{" . "account_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($account_id),
                $resourcePath
            );
        }
        // path params
        if ($extension_id !== null) {
            $resourcePath = str_replace(
                "{" . "extension_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($extension_id),
                $resourcePath
            );
        }
        // path params
        if ($contact_id !== null) {
            $resourcePath = str_replace(
                "{" . "contact_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($contact_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ContactFull',
                '/accounts/{account_id}/extensions/{extension_id}/contacts/{contact_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ContactFull', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ContactFull', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation listAccountExtensionContacts
     *
     * Show the Caller ID options a given extension can use.
     *
     * @param int $account_id Account ID (required)
     * @param int $extension_id Extension ID (required)
     * @param string[] $filters_id ID filter (optional)
     * @param string[] $filters_group_id Group filter (optional)
     * @param string[] $filters_updated_at Updated At filter (optional)
     * @param string $sort_id ID sorting (optional)
     * @param string $sort_updated_at Updated At sorting (optional)
     * @param int $limit Max results (optional)
     * @param int $offset Results to skip (optional)
     * @param string $fields Field set (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ListContacts
     */
    public function listAccountExtensionContacts($account_id, $extension_id, $filters_id = null, $filters_group_id = null, $filters_updated_at = null, $sort_id = null, $sort_updated_at = null, $limit = null, $offset = null, $fields = null)
    {
        list($response) = $this->listAccountExtensionContactsWithHttpInfo($account_id, $extension_id, $filters_id, $filters_group_id, $filters_updated_at, $sort_id, $sort_updated_at, $limit, $offset, $fields);
        return $response;
    }

    /**
     * Operation listAccountExtensionContactsWithHttpInfo
     *
     * Show the Caller ID options a given extension can use.
     *
     * @param int $account_id Account ID (required)
     * @param int $extension_id Extension ID (required)
     * @param string[] $filters_id ID filter (optional)
     * @param string[] $filters_group_id Group filter (optional)
     * @param string[] $filters_updated_at Updated At filter (optional)
     * @param string $sort_id ID sorting (optional)
     * @param string $sort_updated_at Updated At sorting (optional)
     * @param int $limit Max results (optional)
     * @param int $offset Results to skip (optional)
     * @param string $fields Field set (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ListContacts, HTTP status code, HTTP response headers (array of strings)
     */
    public function listAccountExtensionContactsWithHttpInfo($account_id, $extension_id, $filters_id = null, $filters_group_id = null, $filters_updated_at = null, $sort_id = null, $sort_updated_at = null, $limit = null, $offset = null, $fields = null)
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling listAccountExtensionContacts');
        }
        // verify the required parameter 'extension_id' is set
        if ($extension_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $extension_id when calling listAccountExtensionContacts');
        }
        if (!is_null($sort_id) && !preg_match("/asc|desc/", $sort_id)) {
            throw new \InvalidArgumentException("invalid value for \"sort_id\" when calling ContactsApi.listAccountExtensionContacts, must conform to the pattern /asc|desc/.");
        }

        if (!is_null($sort_updated_at) && !preg_match("/asc|desc/", $sort_updated_at)) {
            throw new \InvalidArgumentException("invalid value for \"sort_updated_at\" when calling ContactsApi.listAccountExtensionContacts, must conform to the pattern /asc|desc/.");
        }

        // parse inputs
        $resourcePath = "/accounts/{account_id}/extensions/{extension_id}/contacts";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if (is_array($filters_id)) {
            $filters_id = $this->apiClient->getSerializer()->serializeCollection($filters_id, 'multi', true);
        }
        if ($filters_id !== null) {
            $queryParams['filters[id]'] = $this->apiClient->getSerializer()->toQueryValue($filters_id);
        }
        // query params
        if (is_array($filters_group_id)) {
            $filters_group_id = $this->apiClient->getSerializer()->serializeCollection($filters_group_id, 'multi', true);
        }
        if ($filters_group_id !== null) {
            $queryParams['filters[group_id]'] = $this->apiClient->getSerializer()->toQueryValue($filters_group_id);
        }
        // query params
        if (is_array($filters_updated_at)) {
            $filters_updated_at = $this->apiClient->getSerializer()->serializeCollection($filters_updated_at, 'multi', true);
        }
        if ($filters_updated_at !== null) {
            $queryParams['filters[updated_at]'] = $this->apiClient->getSerializer()->toQueryValue($filters_updated_at);
        }
        // query params
        if ($sort_id !== null) {
            $queryParams['sort[id]'] = $this->apiClient->getSerializer()->toQueryValue($sort_id);
        }
        // query params
        if ($sort_updated_at !== null) {
            $queryParams['sort[updated_at]'] = $this->apiClient->getSerializer()->toQueryValue($sort_updated_at);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($fields !== null) {
            $queryParams['fields'] = $this->apiClient->getSerializer()->toQueryValue($fields);
        }
        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                "{" . "account_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($account_id),
                $resourcePath
            );
        }
        // path params
        if ($extension_id !== null) {
            $resourcePath = str_replace(
                "{" . "extension_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($extension_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ListContacts',
                '/accounts/{account_id}/extensions/{extension_id}/contacts'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ListContacts', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ListContacts', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation replaceAccountExtensionContact
     *
     * Update the info of a contact in the address book.
     *
     * @param int $account_id Account ID (required)
     * @param int $extension_id Extension ID (required)
     * @param int $contact_id Contact ID (required)
     * @param \Swagger\Client\Model\CreateContactParams $data Contact data (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return \Swagger\Client\Model\ContactFull
     */
    public function replaceAccountExtensionContact($account_id, $extension_id, $contact_id, $data = null)
    {
        list($response) = $this->replaceAccountExtensionContactWithHttpInfo($account_id, $extension_id, $contact_id, $data);
        return $response;
    }

    /**
     * Operation replaceAccountExtensionContactWithHttpInfo
     *
     * Update the info of a contact in the address book.
     *
     * @param int $account_id Account ID (required)
     * @param int $extension_id Extension ID (required)
     * @param int $contact_id Contact ID (required)
     * @param \Swagger\Client\Model\CreateContactParams $data Contact data (optional)
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @return array of \Swagger\Client\Model\ContactFull, HTTP status code, HTTP response headers (array of strings)
     */
    public function replaceAccountExtensionContactWithHttpInfo($account_id, $extension_id, $contact_id, $data = null)
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling replaceAccountExtensionContact');
        }
        // verify the required parameter 'extension_id' is set
        if ($extension_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $extension_id when calling replaceAccountExtensionContact');
        }
        // verify the required parameter 'contact_id' is set
        if ($contact_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $contact_id when calling replaceAccountExtensionContact');
        }
        // parse inputs
        $resourcePath = "/accounts/{account_id}/extensions/{extension_id}/contacts/{contact_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                "{" . "account_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($account_id),
                $resourcePath
            );
        }
        // path params
        if ($extension_id !== null) {
            $resourcePath = str_replace(
                "{" . "extension_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($extension_id),
                $resourcePath
            );
        }
        // path params
        if ($contact_id !== null) {
            $resourcePath = str_replace(
                "{" . "contact_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($contact_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($data)) {
            $_tempBody = $data;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Swagger\Client\Model\ContactFull',
                '/accounts/{account_id}/extensions/{extension_id}/contacts/{contact_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Swagger\Client\Model\ContactFull', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Swagger\Client\Model\ContactFull', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
