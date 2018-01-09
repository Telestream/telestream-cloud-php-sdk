# VideoUploadBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**file_size** | **int** | Size of the file that will be uploaded in &#x60;bytes&#x60;. | 
**file_name** | **string** | Name of the file that will be uploaded. | 
**extra_files** | [**\TelestreamCloudFlip\Model\ExtraFile[]**](ExtraFile.md) | A list of names of additional files that will be uploaded. | [optional] 
**profiles** | **string** | A comma-separated list of profile names or IDs to be used during encoding. Alternatively, specify none so no encodings will created right away. | [optional] 
**path_format** | **string** |  | [optional] 
**payload** | **string** | Payload is an arbitrary text of length 256 or shorter that you can store along the Video. It is typically used to retain an association with one of your own DB record ID. | [optional] 
**extra_variables** | **map[string,string]** |  | [optional] 
**watermark_url** | **string** | URL pointing to an image that will be used asa watermark. | [optional] 
**watermark_left** | **string** | Determines distance between the left edge of a video and the left edge of a watermark image. Can be specified in pixels or percents. This parameter can be set only if watermark_right is not. | [optional] 
**watermark_top** | **string** | Determines distance between the top edge of a video and the top edge of a watermark image. Can be specified in pixels or percents. This parameter can be set only if watermark_bottom is not. | [optional] 
**watermark_right** | **string** | Determines distance between the right edge of a video and the right edge of a watermark image. Can be specified in pixels or percents. This parameter can be set only if watermark_left is not. | [optional] 
**watermark_bottom** | **string** | Determines distance between the bottom edge of a video and the bottom edge of a watermark image. Can be specified in pixels or percents. This parameter can be set only if watermark_top is not. | [optional] 
**watermark_width** | **string** | Determines width of the watermark image. Should be specified in pixels. | [optional] 
**watermark_height** | **string** | Determines width of the watermark image. Should be specified in pixels. | [optional] 
**clip_length** | **string** | Length of the uploaded video. Should be formatted as follows: HH:MM:SS | [optional] 
**clip_offset** | **string** | Clip starts at a specific offset. | [optional] 
**multi_chunk** | **bool** |  | [optional] [default to true]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


