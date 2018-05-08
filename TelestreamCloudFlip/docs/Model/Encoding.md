# Encoding

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | A unique identifier of an Encoding. | [optional] 
**audio_bitrate** | **int** | Audio bitrate (in bits/s). | [optional] 
**audio_channels** | **int** | A number of audio channels. | [optional] 
**audio_codec** | **string** | A codec that is used to encode audio streams. | [optional] 
**audio_sample_rate** | **int** | A number of samples of audio carried per second. | [optional] 
**created_at** | **string** | A date and time when the Encoding has been created. | [optional] 
**duration** | **int** |  | [optional] 
**encoding_progress** | **int** |  | [optional] 
**encoding_time** | **int** |  | [optional] 
**error_class** | **string** | A class of an error that has occurred during the encoding process. It is present only if the encoding status is equal to &#x60;fail&#x60;. | [optional] 
**error_message** | **string** | A message that explains why the encoding process has resulted in an error. It is present only if the encoding status is equal to &#x60;fail&#x60;. | [optional] 
**external_id** | **string** |  | [optional] 
**extname** | **string** | Extension of the output file. | [optional] 
**file_size** | **int** | A size of the output file. | [optional] 
**files** | **string[]** | An array of output file names. | [optional] 
**fps** | **float** | Number of frames per second. | [optional] 
**height** | **int** | Height of the output video. | [optional] 
**width** | **int** | Width of the output video. | [optional] 
**logfile_url** | **string** | An URL pointing to a logfile. | [optional] 
**mime_type** | **string** | A mime type of the encoded file. | [optional] 
**parent_encoding_id** | **string** |  | [optional] 
**path** | **string** |  | [optional] 
**profile_id** | **string** | An id of a related Profile. | [optional] 
**profile_name** | **string** | A name of the used Profile. | [optional] 
**screenshots** | **string[]** |  | [optional] 
**started_encoding_at** | **string** | A date and time when the encoding process has been started | [optional] 
**status** | **string** | Determines at what stage the encoding process is at the moment. | [optional] 
**updated_at** | **string** | A date and time when a Encoding has been updated last time. | [optional] 
**video_bitrate** | **int** | video bitrate (in bits/s) | [optional] 
**video_codec** | **string** | A codec that is used to encode video streams. | [optional] 
**video_id** | **string** | An id of a related Video object | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


