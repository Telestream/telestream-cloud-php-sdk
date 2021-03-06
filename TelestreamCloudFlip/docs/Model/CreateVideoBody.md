# CreateVideoBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**source_url** | **string** | An URL pointing to a source file. | [optional] 
**profiles** | **string** | Comma-separated list of profile names or IDs to be used during encoding. Alternatively, specify none so no encodings are created yet. | [optional] 
**payload** | **string** | Arbitrary string stored along the Video object. | [optional] 
**pipeline** | **string** | String-encoded JSON describing profiles pipeline. | [optional] 
**subtitle_files** | **string[]** | A list of urls pointing to remote subtitle files. | [optional] 
**extra_files** | [**map[string,string[]]**](array.md) |  | [optional] 
**extra_variables** | **map[string,string]** |  | [optional] 
**path_format** | **string** |  | [optional] 
**clip_end** | **string** | Clip ends at a specific time. | [optional] 
**clip_length** | **string** | A clip’s duration. | [optional] 
**clip_offset** | **string** | Clip starts at a specific offset. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


