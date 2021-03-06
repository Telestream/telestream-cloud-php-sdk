# Telestream Cloud Flip PHP SDK

This library provides a low-level interface to the REST API of Telestream Cloud, the online video encoding service.

## Requirements

PHP 5.5 and later

## Getting Started
### Initialize client

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'tcs_xxxxxxxxx');
$api = new TelestreamCloudFlip\Api\FlipApi(new GuzzleHttp\Client(), $config);
$factory = "factory_id";
?>
```

### Create video from source url

```php
<?php
$createVideoBody = new TelestreamCloudFlip\Model\CreateVideoBody();
$createVideoBody->setSourceUrl('http://url/to/video.mp4');

$video = $api->createVideo($factory, $createVideoBody);
print_r($video);
?>
```

### Upload video to flip service
```php
<?php
try {
    $upload = new TelestreamCloudFlip\Uploader($api, array(
        'factory_id' => $factory,
        'file' => '/tmp/video.mp4',
        'extra_files' => array(
            'subtitles' => array('path/to/subtitles.srt')
        ),
    ));

    $video_id = $upload->upload();
    echo $video_id;
} catch(Exception $e) {
    // Handle exception
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.cloud.telestream.net/flip/3.1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*FlipApi* | [**cancelEncoding**](docs/Api/FlipApi.md#cancelencoding) | **POST** /encodings/{id}/cancel.json | Cancels an Encoding.
*FlipApi* | [**copyProfile**](docs/Api/FlipApi.md#copyprofile) | **POST** /profiles/{id}/copy.json | Copies a given Profile
*FlipApi* | [**createEncoding**](docs/Api/FlipApi.md#createencoding) | **POST** /encodings.json | Creates an Encoding
*FlipApi* | [**createFactory**](docs/Api/FlipApi.md#createfactory) | **POST** /factories.json | Creates a new factory
*FlipApi* | [**createProfile**](docs/Api/FlipApi.md#createprofile) | **POST** /profiles.json | Creates a Profile
*FlipApi* | [**createVideo**](docs/Api/FlipApi.md#createvideo) | **POST** /videos.json | Creates a Video from a provided source_url.
*FlipApi* | [**createWorkorder**](docs/Api/FlipApi.md#createworkorder) | **POST** /workorders.json | Creates a Workorder.
*FlipApi* | [**deleteEncoding**](docs/Api/FlipApi.md#deleteencoding) | **DELETE** /encodings/{id}.json | Deletes an Encoding from both Telestream Cloud and your storage. Returns an information whether the operation was successful.
*FlipApi* | [**deleteProfile**](docs/Api/FlipApi.md#deleteprofile) | **DELETE** /profiles/{id}.json | Deletes a given Profile
*FlipApi* | [**deleteVideo**](docs/Api/FlipApi.md#deletevideo) | **DELETE** /videos/{id}.json | Deletes a Video object.
*FlipApi* | [**deleteVideoSource**](docs/Api/FlipApi.md#deletevideosource) | **DELETE** /videos/{id}/source.json | Delete a video&#39;s source file.
*FlipApi* | [**encoding**](docs/Api/FlipApi.md#encoding) | **GET** /encodings/{id}.json | Returns an Encoding object.
*FlipApi* | [**encodings**](docs/Api/FlipApi.md#encodings) | **GET** /encodings.json | Returns a list of Encoding objects
*FlipApi* | [**encodingsCount**](docs/Api/FlipApi.md#encodingscount) | **GET** /encodings/count.json | Returns a number of Encoding objects created using a given factory.
*FlipApi* | [**factories**](docs/Api/FlipApi.md#factories) | **GET** /factories.json | Returns a collection of Factory objects.
*FlipApi* | [**factory**](docs/Api/FlipApi.md#factory) | **GET** /factories/{id}.json | Returns a Factory object.
*FlipApi* | [**notifications**](docs/Api/FlipApi.md#notifications) | **GET** /notifications.json | Returns a Factory&#39;s notification settings.
*FlipApi* | [**profile**](docs/Api/FlipApi.md#profile) | **GET** /profiles/{id_or_name}.json | Returns a Profile object.
*FlipApi* | [**profileEncodings**](docs/Api/FlipApi.md#profileencodings) | **GET** /profiles/{id_or_name}/encodings.json | Returns a list of Encodings that belong to a Profile.
*FlipApi* | [**profiles**](docs/Api/FlipApi.md#profiles) | **GET** /profiles.json | Returns a collection of Profile objects.
*FlipApi* | [**queuedVideos**](docs/Api/FlipApi.md#queuedvideos) | **GET** /videos/queued.json | Returns a collection of Video objects queued for encoding.
*FlipApi* | [**resubmitVideo**](docs/Api/FlipApi.md#resubmitvideo) | **POST** /videos/resubmit.json | Resubmits a video to encode.
*FlipApi* | [**retryEncoding**](docs/Api/FlipApi.md#retryencoding) | **POST** /encodings/{id}/retry.json | Retries a failed encoding.
*FlipApi* | [**signedEncodingUrl**](docs/Api/FlipApi.md#signedencodingurl) | **GET** /encodings/{id}/signed-url.json | Returns a signed url pointing to an Encoding.
*FlipApi* | [**signedEncodingUrls**](docs/Api/FlipApi.md#signedencodingurls) | **GET** /encodings/{id}/signed-urls.json | Returns a list of signed urls pointing to an Encoding&#39;s outputs.
*FlipApi* | [**signedVideoUrl**](docs/Api/FlipApi.md#signedvideourl) | **GET** /videos/{id}/signed-url.json | Returns a signed url pointing to a Video.
*FlipApi* | [**toggleFactorySync**](docs/Api/FlipApi.md#togglefactorysync) | **POST** /factories/{id}/sync.json | Toggles synchronisation settings.
*FlipApi* | [**updateEncoding**](docs/Api/FlipApi.md#updateencoding) | **PUT** /encodings/{id}.json | Updates an Encoding
*FlipApi* | [**updateFactory**](docs/Api/FlipApi.md#updatefactory) | **PATCH** /factories/{id}.json | Updates a Factory&#39;s settings. Returns a Factory object.
*FlipApi* | [**updateNotifications**](docs/Api/FlipApi.md#updatenotifications) | **PUT** /notifications.json | Updates a Factory&#39;s notification settings.
*FlipApi* | [**updateProfile**](docs/Api/FlipApi.md#updateprofile) | **PUT** /profiles/{id}.json | Updates a given Profile
*FlipApi* | [**uploadVideo**](docs/Api/FlipApi.md#uploadvideo) | **POST** /videos/upload.json | Creates an upload session.
*FlipApi* | [**video**](docs/Api/FlipApi.md#video) | **GET** /videos/{id}.json | Returns a Video object.
*FlipApi* | [**videoEncodings**](docs/Api/FlipApi.md#videoencodings) | **GET** /videos/{id}/encodings.json | Returns a list of Encodings that belong to a Video.
*FlipApi* | [**videoMetadata**](docs/Api/FlipApi.md#videometadata) | **GET** /videos/{id}/metadata.json | Returns a Video&#39;s metadata
*FlipApi* | [**videos**](docs/Api/FlipApi.md#videos) | **GET** /videos.json | Returns a collection of Video objects.
*FlipApi* | [**workflows**](docs/Api/FlipApi.md#workflows) | **GET** /workflows.json | Returns a collection of Workflows that belong to a Factory.


## Documentation For Models

 - [CanceledResponse](docs/Model/CanceledResponse.md)
 - [CloudNotificationSettings](docs/Model/CloudNotificationSettings.md)
 - [CloudNotificationSettingsEvents](docs/Model/CloudNotificationSettingsEvents.md)
 - [CopyProfileBody](docs/Model/CopyProfileBody.md)
 - [CountResponse](docs/Model/CountResponse.md)
 - [CreateEncodingBody](docs/Model/CreateEncodingBody.md)
 - [CreateVideoBody](docs/Model/CreateVideoBody.md)
 - [DeletedResponse](docs/Model/DeletedResponse.md)
 - [Encoding](docs/Model/Encoding.md)
 - [EncodingSignedUrl](docs/Model/EncodingSignedUrl.md)
 - [EncodingSignedUrls](docs/Model/EncodingSignedUrls.md)
 - [Error](docs/Model/Error.md)
 - [ExtraFile](docs/Model/ExtraFile.md)
 - [Factory](docs/Model/Factory.md)
 - [FactoryBody](docs/Model/FactoryBody.md)
 - [FactoryBodyStorageCredentialAttributes](docs/Model/FactoryBodyStorageCredentialAttributes.md)
 - [FactorySync](docs/Model/FactorySync.md)
 - [FactorySyncBody](docs/Model/FactorySyncBody.md)
 - [PaginatedEncodingsCollection](docs/Model/PaginatedEncodingsCollection.md)
 - [PaginatedFactoryCollection](docs/Model/PaginatedFactoryCollection.md)
 - [PaginatedProfilesCollection](docs/Model/PaginatedProfilesCollection.md)
 - [PaginatedVideoCollection](docs/Model/PaginatedVideoCollection.md)
 - [PaginatedWorkflowsCollection](docs/Model/PaginatedWorkflowsCollection.md)
 - [Profile](docs/Model/Profile.md)
 - [ProfileBody](docs/Model/ProfileBody.md)
 - [ResubmitVideoBody](docs/Model/ResubmitVideoBody.md)
 - [RetriedResponse](docs/Model/RetriedResponse.md)
 - [SignedVideoUrl](docs/Model/SignedVideoUrl.md)
 - [UpdateEncodingBody](docs/Model/UpdateEncodingBody.md)
 - [UploadSession](docs/Model/UploadSession.md)
 - [Video](docs/Model/Video.md)
 - [VideoMetadata](docs/Model/VideoMetadata.md)
 - [VideoUploadBody](docs/Model/VideoUploadBody.md)


## Documentation For Authorization


## api_key

- **Type**: API key
- **API key parameter name**: X-Api-Key
- **Location**: HTTP header


## Author

cloudsupport@telestream.net


