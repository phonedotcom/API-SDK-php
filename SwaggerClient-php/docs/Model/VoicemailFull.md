# VoicemailFull

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique Voicemail ID. Read-only. | [optional] 
**download_url** | **string** | Name. Required. | [optional] 
**extension** | [**\Swagger\Client\Model\ExtensionSummary**](ExtensionSummary.md) | Extension where the voicemail is saved into. | [optional] 
**from** | [**\Swagger\Client\Model\FromObject**](FromObject.md) | The caller&#39;s information | [optional] 
**to** | **string** | The phone number where the caller is calling | [optional] 
**is_new** | **bool** | True when Voicemail is new; False when Voicemail has been listened | [optional] 
**created_at** | **int** | Date string representing the UTC time that the object was created in the Phone.com API system. | [optional] 
**folder** | **string** | Folder name where voicemail is saved | [optional] 
**duration** | **int** | Length of voicemail in seconds | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


