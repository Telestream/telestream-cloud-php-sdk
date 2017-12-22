# UploadSession

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | An unique identifier of the UploadSession. | 
**location** | **string** | An URL to which chunks of the uploaded file should be sent | 
**parts** | **int** | A number of chunks that are expected by the upstream. | [optional] 
**part_size** | **int** | An expected size of uploaded chunks. | [optional] 
**max_connections** | **int** | A maximum number of concurrent connections. | [optional] 
**extra_files** | **object** | An object containing additional files uploaded using the session. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


