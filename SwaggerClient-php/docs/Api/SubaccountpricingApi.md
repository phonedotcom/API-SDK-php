# Swagger\Client\SubaccountpricingApi

All URIs are relative to *https://api.phone.com/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAccountSubaccountPricing**](SubaccountpricingApi.md#createAccountSubaccountPricing) | **POST** /accounts/{account_id}/subaccounts/{subaccount_id}/pricing | Add a pricing plan to a subaccount.
[**deleteAccountSubaccountPricing**](SubaccountpricingApi.md#deleteAccountSubaccountPricing) | **DELETE** /accounts/{account_id}/subaccounts/{subaccount_id}/pricing/{pricing_id} | Delete a pricing plan from a subaccount.
[**getAccountSubaccountPricing**](SubaccountpricingApi.md#getAccountSubaccountPricing) | **GET** /accounts/{account_id}/subaccounts/{subaccount_id}/pricing/{pricing_id} | Get the details of a pricing plan for a subaccount.
[**listAccountSubaccountPricing**](SubaccountpricingApi.md#listAccountSubaccountPricing) | **GET** /accounts/{account_id}/subaccounts/{subaccount_id}/pricing | Get a list of pricing plans for a subaccount.


# **createAccountSubaccountPricing**
> \Swagger\Client\Model\PricingFull createAccountSubaccountPricing($account_id, $subaccount_id, $data)

Add a pricing plan to a subaccount.

Add a pricing plan to a subaccount. See Account Subaccount Pricing for more info on the properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\SubaccountpricingApi();
$account_id = 56; // int | Account ID
$subaccount_id = 56; // int | Subaccount ID
$data = new \Swagger\Client\Model\CreatePricingParams(); // \Swagger\Client\Model\CreatePricingParams | Subaccount pricing data

try {
    $result = $api_instance->createAccountSubaccountPricing($account_id, $subaccount_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountpricingApi->createAccountSubaccountPricing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| Account ID |
 **subaccount_id** | **int**| Subaccount ID |
 **data** | [**\Swagger\Client\Model\CreatePricingParams**](../Model/CreatePricingParams.md)| Subaccount pricing data |

### Return type

[**\Swagger\Client\Model\PricingFull**](../Model/PricingFull.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccountSubaccountPricing**
> \Swagger\Client\Model\DeleteEntry deleteAccountSubaccountPricing($account_id, $subaccount_id, $pricing_id)

Delete a pricing plan from a subaccount.

Delete a pricing plan from a subaccount. See Account Subaccount Pricing for more info on the properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\SubaccountpricingApi();
$account_id = 56; // int | Account ID
$subaccount_id = 56; // int | Subaccount ID
$pricing_id = 56; // int | Pricing Object ID

try {
    $result = $api_instance->deleteAccountSubaccountPricing($account_id, $subaccount_id, $pricing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountpricingApi->deleteAccountSubaccountPricing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| Account ID |
 **subaccount_id** | **int**| Subaccount ID |
 **pricing_id** | **int**| Pricing Object ID |

### Return type

[**\Swagger\Client\Model\DeleteEntry**](../Model/DeleteEntry.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountSubaccountPricing**
> \Swagger\Client\Model\PricingFull getAccountSubaccountPricing($account_id, $subaccount_id, $pricing_id)

Get the details of a pricing plan for a subaccount.

Get the details of a pricing plan for a subaccount. See Account Subaccount Pricing for more info on the properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\SubaccountpricingApi();
$account_id = 56; // int | Account ID
$subaccount_id = 56; // int | Subaccount ID
$pricing_id = 56; // int | Pricing Object ID

try {
    $result = $api_instance->getAccountSubaccountPricing($account_id, $subaccount_id, $pricing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountpricingApi->getAccountSubaccountPricing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| Account ID |
 **subaccount_id** | **int**| Subaccount ID |
 **pricing_id** | **int**| Pricing Object ID |

### Return type

[**\Swagger\Client\Model\PricingFull**](../Model/PricingFull.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAccountSubaccountPricing**
> \Swagger\Client\Model\ListPricings listAccountSubaccountPricing($account_id, $subaccount_id, $filters_id, $sort_id, $limit, $offset, $fields)

Get a list of pricing plans for a subaccount.

Get a list of pricing plans for a subaccount. See Account Subaccount Pricing for more info on the properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\SubaccountpricingApi();
$account_id = 56; // int | Account ID
$subaccount_id = 56; // int | Subaccount ID
$filters_id = array("filters_id_example"); // string[] | ID filter
$sort_id = "sort_id_example"; // string | ID sorting
$limit = 56; // int | Max results
$offset = 56; // int | Results to skip
$fields = "fields_example"; // string | Field set

try {
    $result = $api_instance->listAccountSubaccountPricing($account_id, $subaccount_id, $filters_id, $sort_id, $limit, $offset, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubaccountpricingApi->listAccountSubaccountPricing: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| Account ID |
 **subaccount_id** | **int**| Subaccount ID |
 **filters_id** | [**string[]**](../Model/string.md)| ID filter | [optional]
 **sort_id** | **string**| ID sorting | [optional]
 **limit** | **int**| Max results | [optional]
 **offset** | **int**| Results to skip | [optional]
 **fields** | **string**| Field set | [optional]

### Return type

[**\Swagger\Client\Model\ListPricings**](../Model/ListPricings.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

