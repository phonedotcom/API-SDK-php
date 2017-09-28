# Swagger\Client\VoicemailApi

All URIs are relative to *https://api.phone.com/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccountVoicemail**](VoicemailApi.md#getAccountVoicemail) | **GET** /accounts/{account_id}/voicemail/{voicemail_id} | This service shows the details of an individual voicemail.
[**listAccountVoicemail**](VoicemailApi.md#listAccountVoicemail) | **GET** /accounts/{account_id}/voicemail | Get a list of voicemail messages for an account.
[**patchAccountVoicemail**](VoicemailApi.md#patchAccountVoicemail) | **PATCH** /accounts/{account_id}/voicemail/{voicemail_id} | Update the is_new parameter in a voicemail record.


# **getAccountVoicemail**
> \Swagger\Client\Model\VoicemailFull getAccountVoicemail($account_id, $voicemail_id)

This service shows the details of an individual voicemail.

This service shows the details of an individual voicemail. See Intro to Voicemail for more info on the properties. Note: This API is for users with Account Owner scope access token. Users with Extension User scope token should invoke the Get Voicemail API with the following definition: GET https://api.phone.com/v4/accounts/:account_id/extensions/:extension_id/voicemail/:voicemail_id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\VoicemailApi();
$account_id = 56; // int | Account ID
$voicemail_id = "voicemail_id_example"; // string | Voicemail ID

try {
    $result = $api_instance->getAccountVoicemail($account_id, $voicemail_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoicemailApi->getAccountVoicemail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| Account ID |
 **voicemail_id** | **string**| Voicemail ID |

### Return type

[**\Swagger\Client\Model\VoicemailFull**](../Model/VoicemailFull.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAccountVoicemail**
> \Swagger\Client\Model\ListVoicemail listAccountVoicemail($account_id, $filters_id, $filters_from, $filters_to, $filters_is_new, $filters_created_at, $filters_extension, $sort_id, $sort_created_at, $limit, $offset, $fields)

Get a list of voicemail messages for an account.

Get a list of voicemail messages for an account. See Intro to Voicemail for more info on the properties. Note: This API is for users with Account Owner scope access token. Users with Extension User scope token should invoke the List Voicemail API with the following definition: GET https://api.phone.com/v4/accounts/:account_id/extensions/:extension_id/voicemail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\VoicemailApi();
$account_id = 56; // int | Account ID
$filters_id = array("filters_id_example"); // string[] | ID filter
$filters_from = "filters_from_example"; // string | Caller ID filter
$filters_to = "filters_to_example"; // string | Callee ID filter, the E.164 phone number to send the SMS TO. Note you must encode the + as %2B
$filters_is_new = true; // bool | 
$filters_created_at = "filters_created_at_example"; // string | Date string representing the UTC time that sms was created
$filters_extension = array("filters_extension_example"); // string[] | Extension filter
$sort_id = "sort_id_example"; // string | ID sorting
$sort_created_at = "sort_created_at_example"; // string | Sort by the UTC time that voicemail was created
$limit = 56; // int | Max results
$offset = 56; // int | Results to skip
$fields = "fields_example"; // string | Field set

try {
    $result = $api_instance->listAccountVoicemail($account_id, $filters_id, $filters_from, $filters_to, $filters_is_new, $filters_created_at, $filters_extension, $sort_id, $sort_created_at, $limit, $offset, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoicemailApi->listAccountVoicemail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| Account ID |
 **filters_id** | [**string[]**](../Model/string.md)| ID filter | [optional]
 **filters_from** | **string**| Caller ID filter | [optional]
 **filters_to** | **string**| Callee ID filter, the E.164 phone number to send the SMS TO. Note you must encode the + as %2B | [optional]
 **filters_is_new** | **bool**|  | [optional]
 **filters_created_at** | **string**| Date string representing the UTC time that sms was created | [optional]
 **filters_extension** | [**string[]**](../Model/string.md)| Extension filter | [optional]
 **sort_id** | **string**| ID sorting | [optional]
 **sort_created_at** | **string**| Sort by the UTC time that voicemail was created | [optional]
 **limit** | **int**| Max results | [optional]
 **offset** | **int**| Results to skip | [optional]
 **fields** | **string**| Field set | [optional]

### Return type

[**\Swagger\Client\Model\ListVoicemail**](../Model/ListVoicemail.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchAccountVoicemail**
> \Swagger\Client\Model\VoicemailFull patchAccountVoicemail($account_id, $voicemail_id, $data)

Update the is_new parameter in a voicemail record.

Update the is_new parameter in a voicemail record. See Account Voicemail for more info on the properties. Note: This API is for users with Account Owner scope access token. Users with Extension User scope token should invoke the Patch Voicemail API with the following definition: PATCH https://api.phone.com/v4/accounts/:account_id/extensions/:extension_id/voicemail/:voicemail_id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$api_instance = new Swagger\Client\Api\VoicemailApi();
$account_id = 56; // int | Account ID
$voicemail_id = "voicemail_id_example"; // string | Voicemail ID
$data = new \Swagger\Client\Model\PatchVoicemailParams(); // \Swagger\Client\Model\PatchVoicemailParams | Payment data

try {
    $result = $api_instance->patchAccountVoicemail($account_id, $voicemail_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoicemailApi->patchAccountVoicemail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| Account ID |
 **voicemail_id** | **string**| Voicemail ID |
 **data** | [**\Swagger\Client\Model\PatchVoicemailParams**](../Model/PatchVoicemailParams.md)| Payment data | [optional]

### Return type

[**\Swagger\Client\Model\VoicemailFull**](../Model/VoicemailFull.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

