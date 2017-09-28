# Swagger\Client\PaymentmethodsApi

All URIs are relative to *https://api.phone.com/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAccountPaymentMethod**](PaymentmethodsApi.md#createAccountPaymentMethod) | **POST** /accounts/{account_id}/payment-methods | Create an individual payment method.
[**deleteAccountPaymentMethod**](PaymentmethodsApi.md#deleteAccountPaymentMethod) | **DELETE** /accounts/{account_id}/payment-methods/{pm_id} | Delete an individual payment method.
[**getAccountPaymentMethod**](PaymentmethodsApi.md#getAccountPaymentMethod) | **GET** /accounts/{account_id}/payment-methods/{pm_id} | Show details of an individual payment method.
[**listAccountPaymentMethods**](PaymentmethodsApi.md#listAccountPaymentMethods) | **GET** /accounts/{account_id}/payment-methods | Get a list of payment methods for an account.
[**patchAccountPaymentMethod**](PaymentmethodsApi.md#patchAccountPaymentMethod) | **PATCH** /accounts/{account_id}/payment-methods/{pm_id} | Replace the status of an individual payment method.


# **createAccountPaymentMethod**
> \Swagger\Client\Model\PaymentFull createAccountPaymentMethod($account_id, $data)

Create an individual payment method.

Create an individual payment method. See Account Payment Methods for more info on the properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\PaymentmethodsApi();
$account_id = 56; // int | Account ID
$data = new \Swagger\Client\Model\CreatePaymentParams(); // \Swagger\Client\Model\CreatePaymentParams | Payment data

try {
    $result = $api_instance->createAccountPaymentMethod($account_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentmethodsApi->createAccountPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| Account ID |
 **data** | [**\Swagger\Client\Model\CreatePaymentParams**](../Model/CreatePaymentParams.md)| Payment data |

### Return type

[**\Swagger\Client\Model\PaymentFull**](../Model/PaymentFull.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccountPaymentMethod**
> \Swagger\Client\Model\DeleteEntry deleteAccountPaymentMethod($account_id, $pm_id)

Delete an individual payment method.

Delete an individual payment method. See Account Payment Methods for more info on the properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\PaymentmethodsApi();
$account_id = 56; // int | Account ID
$pm_id = 56; // int | Payment Method ID

try {
    $result = $api_instance->deleteAccountPaymentMethod($account_id, $pm_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentmethodsApi->deleteAccountPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| Account ID |
 **pm_id** | **int**| Payment Method ID |

### Return type

[**\Swagger\Client\Model\DeleteEntry**](../Model/DeleteEntry.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountPaymentMethod**
> \Swagger\Client\Model\PaymentFull getAccountPaymentMethod($account_id, $pm_id)

Show details of an individual payment method.

Show details of an individual payment method. See Account Payment Methods for more info on the properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\PaymentmethodsApi();
$account_id = 56; // int | Account ID
$pm_id = 56; // int | Payment Method ID

try {
    $result = $api_instance->getAccountPaymentMethod($account_id, $pm_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentmethodsApi->getAccountPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| Account ID |
 **pm_id** | **int**| Payment Method ID |

### Return type

[**\Swagger\Client\Model\PaymentFull**](../Model/PaymentFull.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAccountPaymentMethods**
> \Swagger\Client\Model\ListPaymentMethods listAccountPaymentMethods($account_id, $filters_id, $sort_id, $limit, $offset, $fields)

Get a list of payment methods for an account.

Get a list of payment methods for an account. See Account Payment Methods for more info on the properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\PaymentmethodsApi();
$account_id = 56; // int | Account ID
$filters_id = array("filters_id_example"); // string[] | ID filter
$sort_id = "sort_id_example"; // string | ID sorting
$limit = 56; // int | Max results
$offset = 56; // int | Results to skip
$fields = "fields_example"; // string | Field set

try {
    $result = $api_instance->listAccountPaymentMethods($account_id, $filters_id, $sort_id, $limit, $offset, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentmethodsApi->listAccountPaymentMethods: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ListPaymentMethods**](../Model/ListPaymentMethods.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchAccountPaymentMethod**
> \Swagger\Client\Model\PaymentFull patchAccountPaymentMethod($account_id, $pm_id, $data)

Replace the status of an individual payment method.

Replace the status of an individual payment method. See Account Payment Methods for more info on the properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\PaymentmethodsApi();
$account_id = 56; // int | Account ID
$pm_id = 56; // int | Payment Method ID
$data = new \Swagger\Client\Model\PatchPaymentParams(); // \Swagger\Client\Model\PatchPaymentParams | Payment data

try {
    $result = $api_instance->patchAccountPaymentMethod($account_id, $pm_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentmethodsApi->patchAccountPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| Account ID |
 **pm_id** | **int**| Payment Method ID |
 **data** | [**\Swagger\Client\Model\PatchPaymentParams**](../Model/PatchPaymentParams.md)| Payment data | [optional]

### Return type

[**\Swagger\Client\Model\PaymentFull**](../Model/PaymentFull.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

