# Swagger\Client\OauthclientsredirecturisApi

All URIs are relative to *https://api.phone.com/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAccountOauthClientsRedirectUri**](OauthclientsredirecturisApi.md#createAccountOauthClientsRedirectUri) | **POST** /accounts/{account_id}/oauth/clients/{client_id}/redirect-uris | Create an OAuth Client Redirect URI record.
[**deleteAccountOauthClientsRedirectUri**](OauthclientsredirecturisApi.md#deleteAccountOauthClientsRedirectUri) | **DELETE** /accounts/{account_id}/oauth/clients/{client_id}/redirect-uris/{uri_id} | Delete an OAuth Client Redirect URI record.
[**getAccountOauthClientsRedirectUri**](OauthclientsredirecturisApi.md#getAccountOauthClientsRedirectUri) | **GET** /accounts/{account_id}/oauth/clients/{client_id}/redirect-uris/{uri_id} | Get details of an OAuth Client Redirect URI record.
[**listAccountOauthClientsRedirectUris**](OauthclientsredirecturisApi.md#listAccountOauthClientsRedirectUris) | **GET** /accounts/{account_id}/oauth/clients/{client_id}/redirect-uris | Get a list of OAuth Client Redirect URIs for an account.


# **createAccountOauthClientsRedirectUri**
> \Swagger\Client\Model\OauthClientRedirectUriFull createAccountOauthClientsRedirectUri($account_id, $client_id, $data)

Create an OAuth Client Redirect URI record.

Create an OAuth Client Redirect URI record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\OauthclientsredirecturisApi();
$account_id = 56; // int | Account ID
$client_id = 56; // int | Client ID
$data = new \Swagger\Client\Model\CreateRedirectUriParams(); // \Swagger\Client\Model\CreateRedirectUriParams | Redirect Uri data

try {
    $result = $api_instance->createAccountOauthClientsRedirectUri($account_id, $client_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthclientsredirecturisApi->createAccountOauthClientsRedirectUri: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| Account ID |
 **client_id** | **int**| Client ID |
 **data** | [**\Swagger\Client\Model\CreateRedirectUriParams**](../Model/CreateRedirectUriParams.md)| Redirect Uri data | [optional]

### Return type

[**\Swagger\Client\Model\OauthClientRedirectUriFull**](../Model/OauthClientRedirectUriFull.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccountOauthClientsRedirectUri**
> \Swagger\Client\Model\DeleteEntry deleteAccountOauthClientsRedirectUri($account_id, $client_id, $uri_id)

Delete an OAuth Client Redirect URI record.

Delete an OAuth Client Redirect URI record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\OauthclientsredirecturisApi();
$account_id = 56; // int | Account ID
$client_id = 56; // int | Client ID
$uri_id = 56; // int | Redirect URI ID

try {
    $result = $api_instance->deleteAccountOauthClientsRedirectUri($account_id, $client_id, $uri_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthclientsredirecturisApi->deleteAccountOauthClientsRedirectUri: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| Account ID |
 **client_id** | **int**| Client ID |
 **uri_id** | **int**| Redirect URI ID |

### Return type

[**\Swagger\Client\Model\DeleteEntry**](../Model/DeleteEntry.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountOauthClientsRedirectUri**
> \Swagger\Client\Model\OauthClientRedirectUriFull getAccountOauthClientsRedirectUri($account_id, $client_id, $uri_id)

Get details of an OAuth Client Redirect URI record.

Get details of an OAuth Client Redirect URI record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\OauthclientsredirecturisApi();
$account_id = 56; // int | Account ID
$client_id = 56; // int | Client ID
$uri_id = 56; // int | Redirect URI ID

try {
    $result = $api_instance->getAccountOauthClientsRedirectUri($account_id, $client_id, $uri_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthclientsredirecturisApi->getAccountOauthClientsRedirectUri: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| Account ID |
 **client_id** | **int**| Client ID |
 **uri_id** | **int**| Redirect URI ID |

### Return type

[**\Swagger\Client\Model\OauthClientRedirectUriFull**](../Model/OauthClientRedirectUriFull.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAccountOauthClientsRedirectUris**
> \Swagger\Client\Model\ListOauthClientsRedirectUris listAccountOauthClientsRedirectUris($account_id, $client_id, $filters_id, $sort_id, $limit, $offset, $fields)

Get a list of OAuth Client Redirect URIs for an account.

Get a list of OAuth Client Redirect URIs for an account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\OauthclientsredirecturisApi();
$account_id = 56; // int | Account ID
$client_id = 56; // int | Client ID
$filters_id = array("filters_id_example"); // string[] | ID filter
$sort_id = "sort_id_example"; // string | ID sorting
$limit = 56; // int | Max results
$offset = 56; // int | Results to skip
$fields = "fields_example"; // string | Field set

try {
    $result = $api_instance->listAccountOauthClientsRedirectUris($account_id, $client_id, $filters_id, $sort_id, $limit, $offset, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthclientsredirecturisApi->listAccountOauthClientsRedirectUris: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| Account ID |
 **client_id** | **int**| Client ID |
 **filters_id** | [**string[]**](../Model/string.md)| ID filter | [optional]
 **sort_id** | **string**| ID sorting | [optional]
 **limit** | **int**| Max results | [optional]
 **offset** | **int**| Results to skip | [optional]
 **fields** | **string**| Field set | [optional]

### Return type

[**\Swagger\Client\Model\ListOauthClientsRedirectUris**](../Model/ListOauthClientsRedirectUris.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

