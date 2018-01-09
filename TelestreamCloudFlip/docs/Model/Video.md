# Video

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique identifier of the Video. | [optional] 
**audio_bitrate** | **int** | audio bitrate (in bits/s) | [optional] 
**audio_channels** | **int** | A number of audio channels. | [optional] 
**audio_codec** | **string** | A codec that has been used to encode audio streams. | [optional] 
**audio_sample_rate** | **int** | A number of samples of audio carried per second. | [optional] 
**created_at** | **string** | A date and time when the Video has been created. | [optional] 
**duration** | **int** | A duration of the video in seconds. | [optional] 
**encodings_count** | **int** | A number of related Encoding objects. | [optional] 
**error_class** | **string** | A class of an error that has occurred during the encoding process. It is present only if the encoding status is equal to &#x60;fail&#x60;. | [optional] 
**error_message** | **string** | A message that explains why the encoding process has resulted in an error. It is present only if the encoding status is equal to &#x60;fail&#x60;. | [optional] 
**extname** | **string** | Extension of the source file. | [optional] 
**file_size** | **int** | A size of the source file. | [optional] 
**fps** | **string** | Number of frames per second. | [optional] 
**height** | **string** | Height of the output video. | [optional] 
**width** | **string** | Width of the output video. | [optional] 
**mime_type** | **string** | A mime type of the source file. | [optional] 
**original_filename** | **string** | A name of the source file. | [optional] 
**path** | **string** |  | [optional] 
**payload** | **string** | Payload is an arbitrary text of length 256 or shorter that you can store along the Video. It is typically used to retain an association with one of your own DB record ID. | [optional] 
**source_url** | **string** | An URL pointing to the source file. | [optional] 
**status** | **string** | Determines at what stage of importing process the Video is at the moment. | [optional] 
**updated_at** | **string** | A date and time when a Video has been updated last time. | [optional] 
**video_bitrate** | **string** | video bitrate (in bits/s) | [optional] 
**video_codec** | **string** | A codec that has been used to encode the input file&#39;s video streams. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


