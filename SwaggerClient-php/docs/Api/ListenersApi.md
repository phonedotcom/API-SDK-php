# Swagger\Client\ListenersApi

All URIs are relative to *https://api.phone.com/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAccountListener**](ListenersApi.md#createAccountListener) | **POST** /accounts/{account_id}/listeners | Add a listener object to your account that can be used to subscribe an event.
[**deleteAccountListener**](ListenersApi.md#deleteAccountListener) | **DELETE** /accounts/{account_id}/listeners/{listener_id} | Delete an individual event listener.
[**getAccountListener**](ListenersApi.md#getAccountListener) | **GET** /accounts/{account_id}/listeners/{listener_id} | Show details of an individual listener.
[**listAccountListeners**](ListenersApi.md#listAccountListeners) | **GET** /accounts/{account_id}/listeners | Get a list of listeners for an account.
[**replaceAccountListener**](ListenersApi.md#replaceAccountListener) | **PUT** /accounts/{account_id}/listeners/{listener_id} | Update the settings of an individual event listener.


# **createAccountListener**
> \Swagger\Client\Model\ListenerFull createAccountListener($account_id, $data)

Add a listener object to your account that can be used to subscribe an event.

Add a listener object to your account that can be used to subscribe an event. See Account Listeners for more info on the properties. Note: This API is for users with Account Owner scope access token. Users with Extension User scope token should invoke the Extension level Post Listener API with the following definition: POST https://api.phone.com/v4/accounts/:account_id/extensions/:extension_id/listeners

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\ListenersApi();
$account_id = 56; // int | Account ID
$data = new \Swagger\Client\Model\CreateListenerParams(); // \Swagger\Client\Model\CreateListenerParams | Account Listeners Data

try {
    $result = $api_instance->createAccountListener($account_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListenersApi->createAccountListener: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| Account ID |
 **data** | [**\Swagger\Client\Model\CreateListenerParams**](../Model/CreateListenerParams.md)| Account Listeners Data | [optional]

### Return type

[**\Swagger\Client\Model\ListenerFull**](../Model/ListenerFull.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccountListener**
> \Swagger\Client\Model\DeleteEntry deleteAccountListener($account_id, $listener_id)

Delete an individual event listener.

Delete an individual event listener. See Account Listeners for more info on the properties. Note: This API is for users with Account Owner scope access token. Users with Extension User scope token should invoke the Extension level Delete Listener API with the following definition: DELETE https://api.phone.com/v4/accounts/:account_id/extensions/:extension_id/listeners/:listener_id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\ListenersApi();
$account_id = 56; // int | Account ID
$listener_id = 56; // int | Listener ID

try {
    $result = $api_instance->deleteAccountListener($account_id, $listener_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListenersApi->deleteAccountListener: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| Account ID |
 **listener_id** | **int**| Listener ID |

### Return type

[**\Swagger\Client\Model\DeleteEntry**](../Model/DeleteEntry.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountListener**
> \Swagger\Client\Model\ListenerFull getAccountListener($account_id, $listener_id)

Show details of an individual listener.

Show details of an individual event listener. See Account Listeners for more info on the properties. Note: This API is for users with Account Owner scope access token. Users with Extension User scope token should invoke the Extension level Get Listener API with the following definition: GET https://api.phone.com/v4/accounts/:account_id/extensions/:extension_id/listeners/:listener_id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\ListenersApi();
$account_id = 56; // int | Account ID
$listener_id = 56; // int | Listener ID

try {
    $result = $api_instance->getAccountListener($account_id, $listener_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListenersApi->getAccountListener: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| Account ID |
 **listener_id** | **int**| Listener ID |

### Return type

[**\Swagger\Client\Model\ListenerFull**](../Model/ListenerFull.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAccountListeners**
> \Swagger\Client\Model\ListListeners listAccountListeners($account_id, $filters_id, $sort_id, $limit, $offset, $fields)

Get a list of listeners for an account.

Get a list of listeners for an account. See Account Listeners for more info on the properties. Note: This API is for users with Account Owner scope access token. Users with Extension User scope token should invoke the Extension level List Listeners API with the following definition: GET https://api.phone.com/v4/accounts/:account_id/extensions/:extension_id/listeners

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\ListenersApi();
$account_id = 56; // int | Account ID
$filters_id = array("filters_id_example"); // string[] | ID filter
$sort_id = "sort_id_example"; // string | ID sorting
$limit = 56; // int | Max results
$offset = 56; // int | Results to skip
$fields = "fields_example"; // string | Field set

try {
    $result = $api_instance->listAccountListeners($account_id, $filters_id, $sort_id, $limit, $offset, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListenersApi->listAccountListeners: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ListListeners**](../Model/ListListeners.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceAccountListener**
> \Swagger\Client\Model\ListenerFull replaceAccountListener($account_id, $listener_id, $data)

Update the settings of an individual event listener.

Update the settings of an individual event listener. See Event Listeners for more detail. Note: This API is for users with Account Owner scope access token. Users with Extension User scope token should invoke the Extension level Replace Listener API with the following definition: PUT https://api.phone.com/v4/accounts/:account_id/extensions/:extension_id/listeners/:listener_id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\ListenersApi();
$account_id = 56; // int | Account ID
$listener_id = 56; // int | Listener ID
$data = new \Swagger\Client\Model\CreateListenerParams(); // \Swagger\Client\Model\CreateListenerParams | Account Listeners Data

try {
    $result = $api_instance->replaceAccountListener($account_id, $listener_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListenersApi->replaceAccountListener: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| Account ID |
 **listener_id** | **int**| Listener ID |
 **data** | [**\Swagger\Client\Model\CreateListenerParams**](../Model/CreateListenerParams.md)| Account Listeners Data | [optional]

### Return type

[**\Swagger\Client\Model\ListenerFull**](../Model/ListenerFull.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

