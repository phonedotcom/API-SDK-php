# Swagger\Client\OauthclientsApi

All URIs are relative to *https://api.phone.com/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAccountOauthClient**](OauthclientsApi.md#deleteAccountOauthClient) | **DELETE** /accounts/{account_id}/oauth/clients/{client_id} | Delete an individual OAuth client.
[**getAccountOauthClient**](OauthclientsApi.md#getAccountOauthClient) | **GET** /accounts/{account_id}/oauth/clients/{client_id} | Show details of an individual OAuth client.
[**listAccountOauthClients**](OauthclientsApi.md#listAccountOauthClients) | **GET** /accounts/{account_id}/oauth/clients | Get a list of OAuth clients for an account.


# **deleteAccountOauthClient**
> \Swagger\Client\Model\DeleteEntry deleteAccountOauthClient($account_id, $client_id)

Delete an individual OAuth client.

Delete an individual OAuth client. See Account OAuth Clients for more info on the properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\OauthclientsApi();
$account_id = 56; // int | Account ID
$client_id = 56; // int | Client ID

try {
    $result = $api_instance->deleteAccountOauthClient($account_id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthclientsApi->deleteAccountOauthClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| Account ID |
 **client_id** | **int**| Client ID |

### Return type

[**\Swagger\Client\Model\DeleteEntry**](../Model/DeleteEntry.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountOauthClient**
> \Swagger\Client\Model\OauthClientFull getAccountOauthClient($account_id, $client_id)

Show details of an individual OAuth client.

Show details of an individual OAuth client. See Account OAuth Clients for more info on the properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\OauthclientsApi();
$account_id = 56; // int | Account ID
$client_id = 56; // int | Client ID

try {
    $result = $api_instance->getAccountOauthClient($account_id, $client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthclientsApi->getAccountOauthClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| Account ID |
 **client_id** | **int**| Client ID |

### Return type

[**\Swagger\Client\Model\OauthClientFull**](../Model/OauthClientFull.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAccountOauthClients**
> \Swagger\Client\Model\ListOauthClients listAccountOauthClients($account_id, $filters_id, $sort_id, $limit, $offset, $fields)

Get a list of OAuth clients for an account.

Get a list of OAuth clients for an account. See Account OAuth Clients for more info on the properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\OauthclientsApi();
$account_id = 56; // int | Account ID
$filters_id = array("filters_id_example"); // string[] | ID filter
$sort_id = "sort_id_example"; // string | ID sorting
$limit = 56; // int | Max results
$offset = 56; // int | Results to skip
$fields = "fields_example"; // string | Field set

try {
    $result = $api_instance->listAccountOauthClients($account_id, $filters_id, $sort_id, $limit, $offset, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthclientsApi->listAccountOauthClients: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| Account ID |
 **filters_id** | [**string[]**](../Model/string.md)| ID filter | [optional]
 **sort_id** | **string**| ID sorting | [optional]
 **limit** | **int**| Max results | [optional]
 **offset** | **int**| Results to skip | [optional]
 **fields** | **string**| Field set | [optional]

### Return type

[**\Swagger\Client\Model\ListOauthClients**](../Model/ListOauthClients.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

