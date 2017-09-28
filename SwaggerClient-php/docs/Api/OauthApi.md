# Swagger\Client\OauthApi

All URIs are relative to *https://api.phone.com/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOauthAccessToken**](OauthApi.md#createOauthAccessToken) | **POST** /oauth/access-token | To create an access token via the /oauth/access-token API, an API user may choose any one of the grant types it supports: Authorization Code Grant, Client Credential Grant, Password Credential Grant or Refresh Token Grant.
[**createOauthAuthorization**](OauthApi.md#createOauthAuthorization) | **GET** /oauth/authorization | Create Authorization Code or Access Token.
[**getOauthAccessToken**](OauthApi.md#getOauthAccessToken) | **GET** /oauth/access-token | Retrieve details of an access token, such as scope, expiration and extension ID.


# **createOauthAccessToken**
> \Swagger\Client\Model\OauthAccessToken createOauthAccessToken($data)

To create an access token via the /oauth/access-token API, an API user may choose any one of the grant types it supports: Authorization Code Grant, Client Credential Grant, Password Credential Grant or Refresh Token Grant.

To create an access token via the /oauth/access-token API, an API user may choose any one of the grant types it supports: Authorization Code Grant, Client Credential Grant, Password Credential Grant or Refresh Token Grant. For Authorization Code Grant, the input parameter 'code' is generated via the Create Authorization API. NOTE: The Create Access Token API now accepts requests in query string format as well as JSON body format. See OAuth for more details on how to obtain client id and client secret to create an access token at real time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\OauthApi();
$data = new \Swagger\Client\Model\CreateOauthParams(); // \Swagger\Client\Model\CreateOauthParams | Oauth data

try {
    $result = $api_instance->createOauthAccessToken($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->createOauthAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\Swagger\Client\Model\CreateOauthParams**](../Model/CreateOauthParams.md)| Oauth data | [optional]

### Return type

[**\Swagger\Client\Model\OauthAccessToken**](../Model/OauthAccessToken.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOauthAuthorization**
> createOauthAuthorization($client_id, $response_type, $scope, $redirect_uri)

Create Authorization Code or Access Token.

Create Authorization Code or Access Token. The /oauth/authorization API supports Authorization Grant and Implicit Grant. In Authorization Grant, this API returns a code (response_type=code) for clients implemented in a browser using a scripting language such as JavaScript. Users may then use the code via the Create Access Token API to create an access token. The Implicit Grant is a simplified authorization code flow. In the implicit flow, instead of issuing the client an authorization code, the client is issued an access token (response_type=token) directly. See OAuth for more details on how to obtain client id and client secret to create authorization code access token at real time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\OauthApi();
$client_id = "client_id_example"; // string | Client ID
$response_type = "response_type_example"; // string | 'token' for Implicit Grant; 'code' for Authorization Code Grant
$scope = "scope_example"; // string | account-owner, extension-user and/or methods:ALL, separated by space (%20)
$redirect_uri = "redirect_uri_example"; // string | The URL where the response data of this API is redirected to

try {
    $api_instance->createOauthAuthorization($client_id, $response_type, $scope, $redirect_uri);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->createOauthAuthorization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Client ID |
 **response_type** | **string**| &#39;token&#39; for Implicit Grant; &#39;code&#39; for Authorization Code Grant |
 **scope** | **string**| account-owner, extension-user and/or methods:ALL, separated by space (%20) |
 **redirect_uri** | **string**| The URL where the response data of this API is redirected to |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOauthAccessToken**
> \Swagger\Client\Model\GetOauthAccessToken getOauthAccessToken()

Retrieve details of an access token, such as scope, expiration and extension ID.

Retrieve details of an access token, such as scope, expiration and extension ID. Voip ID will be returned as well if scope contains account-owner scope.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\OauthApi();

try {
    $result = $api_instance->getOauthAccessToken();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->getOauthAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GetOauthAccessToken**](../Model/GetOauthAccessToken.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

