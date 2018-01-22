# TelestreamCloudFlip\FlipApi

All URIs are relative to *https://api.cloud.telestream.net/flip/3.1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelEncoding**](FlipApi.md#cancelEncoding) | **POST** /encodings/{id}/cancel.json | Cancels an Encoding.
[**copyProfile**](FlipApi.md#copyProfile) | **POST** /profiles/{id}/copy.json | Copies a given Profile
[**createEncoding**](FlipApi.md#createEncoding) | **POST** /encodings.json | Creates an Encoding
[**createFactory**](FlipApi.md#createFactory) | **POST** /factories.json | Creates a new factory
[**createProfile**](FlipApi.md#createProfile) | **POST** /profiles.json | Creates a Profile
[**createVideo**](FlipApi.md#createVideo) | **POST** /videos.json | Creates a Video from a provided source_url.
[**createWorkorder**](FlipApi.md#createWorkorder) | **POST** /workorders.json | Creates a Workorder.
[**deleteEncoding**](FlipApi.md#deleteEncoding) | **DELETE** /encodings/{id}.json | Deletes an Encoding from both Telestream Cloud and your storage. Returns an information whether the operation was successful.
[**deleteProfile**](FlipApi.md#deleteProfile) | **DELETE** /profiles/{id}.json | Deletes a given Profile
[**deleteVideo**](FlipApi.md#deleteVideo) | **DELETE** /videos/{id}.json | Deletes a Video object.
[**deleteVideoSource**](FlipApi.md#deleteVideoSource) | **DELETE** /videos/{id}/source.json | Delete a video&#39;s source file.
[**encoding**](FlipApi.md#encoding) | **GET** /encodings/{id}.json | Returns an Encoding object.
[**encodings**](FlipApi.md#encodings) | **GET** /encodings.json | Returns a list of Encoding objects
[**encodingsCount**](FlipApi.md#encodingsCount) | **GET** /encodings/count.json | Returns a number of Encoding objects created using a given factory.
[**factories**](FlipApi.md#factories) | **GET** /factories.json | Returns a collection of Factory objects.
[**factory**](FlipApi.md#factory) | **GET** /factories/{id}.json | Returns a Factory object.
[**notifications**](FlipApi.md#notifications) | **GET** /notifications.json | Returns a Factory&#39;s notification settings.
[**profile**](FlipApi.md#profile) | **GET** /profiles/{id_or_name}.json | Returns a Profile object.
[**profileEncodings**](FlipApi.md#profileEncodings) | **GET** /profiles/{id_or_name}/encodings.json | Returns a list of Encodings that belong to a Profile.
[**profiles**](FlipApi.md#profiles) | **GET** /profiles.json | Returns a collection of Profile objects.
[**queuedVideos**](FlipApi.md#queuedVideos) | **GET** /videos/queued.json | Returns a collection of Video objects queued for encoding.
[**resubmitVideo**](FlipApi.md#resubmitVideo) | **POST** /videos/resubmit.json | Resubmits a video to encode.
[**retryEncoding**](FlipApi.md#retryEncoding) | **POST** /encodings/{id}/retry.json | Retries a failed encoding.
[**signedEncodingUrl**](FlipApi.md#signedEncodingUrl) | **GET** /encodings/{id}/signed-url.json | Returns a signed url pointing to an Encoding.
[**signedEncodingUrls**](FlipApi.md#signedEncodingUrls) | **GET** /encodings/{id}/signed-urls.json | Returns a list of signed urls pointing to an Encoding&#39;s outputs.
[**signedVideoUrl**](FlipApi.md#signedVideoUrl) | **GET** /videos/{id}/signed-url.json | Returns a signed url pointing to a Video.
[**toggleFactorySync**](FlipApi.md#toggleFactorySync) | **POST** /factories/{id}/sync.json | Toggles synchronisation settings.
[**updateEncoding**](FlipApi.md#updateEncoding) | **PUT** /encodings/{id}.json | Updates an Encoding
[**updateFactory**](FlipApi.md#updateFactory) | **PATCH** /factories/{id}.json | Updates a Factory&#39;s settings. Returns a Factory object.
[**updateNotifications**](FlipApi.md#updateNotifications) | **PUT** /notifications.json | Updates a Factory&#39;s notification settings.
[**updateProfile**](FlipApi.md#updateProfile) | **PUT** /profiles/{id}.json | Updates a given Profile
[**uploadVideo**](FlipApi.md#uploadVideo) | **POST** /videos/upload.json | Creates an upload session.
[**video**](FlipApi.md#video) | **GET** /videos/{id}.json | Returns a Video object.
[**videoEncodings**](FlipApi.md#videoEncodings) | **GET** /videos/{id}/encodings.json | Returns a list of Encodings that belong to a Video.
[**videoMetadata**](FlipApi.md#videoMetadata) | **GET** /videos/{id}/metadata.json | Returns a Video&#39;s metadata
[**videos**](FlipApi.md#videos) | **GET** /videos.json | Returns a collection of Video objects.
[**workflows**](FlipApi.md#workflows) | **GET** /workflows.json | Returns a collection of Workflows that belong to a Factory.


# **cancelEncoding**
> \TelestreamCloudFlip\Model\CanceledResponse cancelEncoding($id, $factory_id)

Cancels an Encoding.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of an Encoding.
$factory_id = "factory_id_example"; // string | Id of a Factory.

try {
    $result = $apiInstance->cancelEncoding($id, $factory_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->cancelEncoding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of an Encoding. |
 **factory_id** | **string**| Id of a Factory. |

### Return type

[**\TelestreamCloudFlip\Model\CanceledResponse**](../Model/CanceledResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **copyProfile**
> \TelestreamCloudFlip\Model\Profile copyProfile($id, $factory_id, $copy_profile_body, $expand)

Copies a given Profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of a Profile.
$factory_id = "factory_id_example"; // string | Id of a Factory.
$copy_profile_body = new \TelestreamCloudFlip\Model\CopyProfileBody(); // \TelestreamCloudFlip\Model\CopyProfileBody | 
$expand = true; // bool | If expand option is set Profile objects will contain all command parameters, even if their value is default. By default this is not set.

try {
    $result = $apiInstance->copyProfile($id, $factory_id, $copy_profile_body, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->copyProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of a Profile. |
 **factory_id** | **string**| Id of a Factory. |
 **copy_profile_body** | [**\TelestreamCloudFlip\Model\CopyProfileBody**](../Model/CopyProfileBody.md)|  |
 **expand** | **bool**| If expand option is set Profile objects will contain all command parameters, even if their value is default. By default this is not set. | [optional]

### Return type

[**\TelestreamCloudFlip\Model\Profile**](../Model/Profile.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEncoding**
> \TelestreamCloudFlip\Model\Encoding createEncoding($factory_id, $create_encoding_body, $screenshots, $precise_status)

Creates an Encoding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$factory_id = "factory_id_example"; // string | Id of a Factory.
$create_encoding_body = new \TelestreamCloudFlip\Model\CreateEncodingBody(); // \TelestreamCloudFlip\Model\CreateEncodingBody | 
$screenshots = true; // bool | Determines whether the response will include screenshots. By default this is not set.
$precise_status = true; // bool | Determines whether the response will include a precise status. By default this is not set.

try {
    $result = $apiInstance->createEncoding($factory_id, $create_encoding_body, $screenshots, $precise_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->createEncoding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **factory_id** | **string**| Id of a Factory. |
 **create_encoding_body** | [**\TelestreamCloudFlip\Model\CreateEncodingBody**](../Model/CreateEncodingBody.md)|  |
 **screenshots** | **bool**| Determines whether the response will include screenshots. By default this is not set. | [optional]
 **precise_status** | **bool**| Determines whether the response will include a precise status. By default this is not set. | [optional]

### Return type

[**\TelestreamCloudFlip\Model\Encoding**](../Model/Encoding.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createFactory**
> \TelestreamCloudFlip\Model\Factory createFactory($create_factory_body, $with_storage_provider)

Creates a new factory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_factory_body = new \TelestreamCloudFlip\Model\FactoryBody(); // \TelestreamCloudFlip\Model\FactoryBody | 
$with_storage_provider = true; // bool | if set to `true`, results will include a storage provider's id

try {
    $result = $apiInstance->createFactory($create_factory_body, $with_storage_provider);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->createFactory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_factory_body** | [**\TelestreamCloudFlip\Model\FactoryBody**](../Model/FactoryBody.md)|  |
 **with_storage_provider** | **bool**| if set to &#x60;true&#x60;, results will include a storage provider&#39;s id | [optional]

### Return type

[**\TelestreamCloudFlip\Model\Factory**](../Model/Factory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProfile**
> \TelestreamCloudFlip\Model\Profile createProfile($factory_id, $create_profile_body, $exclude_advanced_services, $expand)

Creates a Profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$factory_id = "factory_id_example"; // string | Id of a Factory.
$create_profile_body = new \TelestreamCloudFlip\Model\ProfileBody(); // \TelestreamCloudFlip\Model\ProfileBody | 
$exclude_advanced_services = true; // bool | 
$expand = true; // bool | If expand option is set Profile objects will contain all command parameters, even if their value is default. By default it is not set.

try {
    $result = $apiInstance->createProfile($factory_id, $create_profile_body, $exclude_advanced_services, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->createProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **factory_id** | **string**| Id of a Factory. |
 **create_profile_body** | [**\TelestreamCloudFlip\Model\ProfileBody**](../Model/ProfileBody.md)|  |
 **exclude_advanced_services** | **bool**|  | [optional]
 **expand** | **bool**| If expand option is set Profile objects will contain all command parameters, even if their value is default. By default it is not set. | [optional]

### Return type

[**\TelestreamCloudFlip\Model\Profile**](../Model/Profile.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createVideo**
> \TelestreamCloudFlip\Model\Video createVideo($factory_id, $create_video_body)

Creates a Video from a provided source_url.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$factory_id = "factory_id_example"; // string | Id of a Factory.
$create_video_body = new \TelestreamCloudFlip\Model\CreateVideoBody(); // \TelestreamCloudFlip\Model\CreateVideoBody | 

try {
    $result = $apiInstance->createVideo($factory_id, $create_video_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->createVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **factory_id** | **string**| Id of a Factory. |
 **create_video_body** | [**\TelestreamCloudFlip\Model\CreateVideoBody**](../Model/CreateVideoBody.md)|  |

### Return type

[**\TelestreamCloudFlip\Model\Video**](../Model/Video.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createWorkorder**
> createWorkorder($factory_id, $profile_id, $file, $source_url)

Creates a Workorder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$factory_id = "factory_id_example"; // string | Id of a Factory.
$profile_id = "profile_id_example"; // string | Id of a Profile.
$file = "/path/to/file.txt"; // \SplFileObject | Input file.
$source_url = "source_url_example"; // string | URL pointing to an input file.

try {
    $apiInstance->createWorkorder($factory_id, $profile_id, $file, $source_url);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->createWorkorder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **factory_id** | **string**| Id of a Factory. |
 **profile_id** | **string**| Id of a Profile. | [optional]
 **file** | **\SplFileObject**| Input file. | [optional]
 **source_url** | **string**| URL pointing to an input file. | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEncoding**
> \TelestreamCloudFlip\Model\DeletedResponse deleteEncoding($id, $factory_id)

Deletes an Encoding from both Telestream Cloud and your storage. Returns an information whether the operation was successful.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of an Encoding.
$factory_id = "factory_id_example"; // string | Id of a Factory.

try {
    $result = $apiInstance->deleteEncoding($id, $factory_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->deleteEncoding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of an Encoding. |
 **factory_id** | **string**| Id of a Factory. |

### Return type

[**\TelestreamCloudFlip\Model\DeletedResponse**](../Model/DeletedResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProfile**
> \TelestreamCloudFlip\Model\DeletedResponse deleteProfile($id, $factory_id)

Deletes a given Profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of a Profile
$factory_id = "factory_id_example"; // string | Id of a Factory.

try {
    $result = $apiInstance->deleteProfile($id, $factory_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->deleteProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of a Profile |
 **factory_id** | **string**| Id of a Factory. |

### Return type

[**\TelestreamCloudFlip\Model\DeletedResponse**](../Model/DeletedResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVideo**
> \TelestreamCloudFlip\Model\DeletedResponse deleteVideo($id, $factory_id)

Deletes a Video object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of a Video.
$factory_id = "factory_id_example"; // string | Id of a Factory.

try {
    $result = $apiInstance->deleteVideo($id, $factory_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->deleteVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of a Video. |
 **factory_id** | **string**| Id of a Factory. |

### Return type

[**\TelestreamCloudFlip\Model\DeletedResponse**](../Model/DeletedResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVideoSource**
> \TelestreamCloudFlip\Model\DeletedResponse deleteVideoSource($id, $factory_id)

Delete a video's source file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of a Video.
$factory_id = "factory_id_example"; // string | Id of a Factory.

try {
    $result = $apiInstance->deleteVideoSource($id, $factory_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->deleteVideoSource: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of a Video. |
 **factory_id** | **string**| Id of a Factory. |

### Return type

[**\TelestreamCloudFlip\Model\DeletedResponse**](../Model/DeletedResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **encoding**
> \TelestreamCloudFlip\Model\Encoding encoding($id, $factory_id, $screenshots, $precise_status)

Returns an Encoding object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of an Encoding.
$factory_id = "factory_id_example"; // string | Id of a Factory.
$screenshots = true; // bool | Determines whether the response will include screenshots. By default this is not set.
$precise_status = true; // bool | Determines whether the response will include a precise status. By default this is not set.

try {
    $result = $apiInstance->encoding($id, $factory_id, $screenshots, $precise_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->encoding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of an Encoding. |
 **factory_id** | **string**| Id of a Factory. |
 **screenshots** | **bool**| Determines whether the response will include screenshots. By default this is not set. | [optional]
 **precise_status** | **bool**| Determines whether the response will include a precise status. By default this is not set. | [optional]

### Return type

[**\TelestreamCloudFlip\Model\Encoding**](../Model/Encoding.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **encodings**
> \TelestreamCloudFlip\Model\PaginatedEncodingsCollection encodings($factory_id, $video_id, $status, $profile_id, $profile_name, $page, $per_page, $screenshots, $precise_status)

Returns a list of Encoding objects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$factory_id = "factory_id_example"; // string | Id of a Factory.
$video_id = "video_id_example"; // string | Id of a Video. When specified, the resulting list will contain videos that belong to the Video.
$status = "status_example"; // string | One of `success`, `fail`, `processing`. When specified, the resulting list will contain ecodings filtered by status.
$profile_id = "profile_id_example"; // string | Filter by profile_id.
$profile_name = "profile_name_example"; // string | Filter by profile_name.
$page = 56; // int | A page to be fetched. Default is `1`.
$per_page = 56; // int | A number of results per page. Default is `100`.
$screenshots = true; // bool | Determines whether the response will include screenshots. By default this is not set.
$precise_status = true; // bool | Determines whether the response will include a precise status. By default this is not set.

try {
    $result = $apiInstance->encodings($factory_id, $video_id, $status, $profile_id, $profile_name, $page, $per_page, $screenshots, $precise_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->encodings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **factory_id** | **string**| Id of a Factory. |
 **video_id** | **string**| Id of a Video. When specified, the resulting list will contain videos that belong to the Video. | [optional]
 **status** | **string**| One of &#x60;success&#x60;, &#x60;fail&#x60;, &#x60;processing&#x60;. When specified, the resulting list will contain ecodings filtered by status. | [optional]
 **profile_id** | **string**| Filter by profile_id. | [optional]
 **profile_name** | **string**| Filter by profile_name. | [optional]
 **page** | **int**| A page to be fetched. Default is &#x60;1&#x60;. | [optional]
 **per_page** | **int**| A number of results per page. Default is &#x60;100&#x60;. | [optional]
 **screenshots** | **bool**| Determines whether the response will include screenshots. By default this is not set. | [optional]
 **precise_status** | **bool**| Determines whether the response will include a precise status. By default this is not set. | [optional]

### Return type

[**\TelestreamCloudFlip\Model\PaginatedEncodingsCollection**](../Model/PaginatedEncodingsCollection.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **encodingsCount**
> \TelestreamCloudFlip\Model\CountResponse encodingsCount($factory_id)

Returns a number of Encoding objects created using a given factory.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$factory_id = "factory_id_example"; // string | Id of a Factory.

try {
    $result = $apiInstance->encodingsCount($factory_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->encodingsCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **factory_id** | **string**| Id of a Factory. |

### Return type

[**\TelestreamCloudFlip\Model\CountResponse**](../Model/CountResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **factories**
> \TelestreamCloudFlip\Model\PaginatedFactoryCollection factories($page, $per_page, $with_storage_provider)

Returns a collection of Factory objects.

Returns a collection of Factory objects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | A page to be fetched. Default is `1`.
$per_page = 56; // int | A number of results per page. Default is `100`.
$with_storage_provider = true; // bool | if set to `true`, results will include a storage provider's id

try {
    $result = $apiInstance->factories($page, $per_page, $with_storage_provider);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->factories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| A page to be fetched. Default is &#x60;1&#x60;. | [optional]
 **per_page** | **int**| A number of results per page. Default is &#x60;100&#x60;. | [optional]
 **with_storage_provider** | **bool**| if set to &#x60;true&#x60;, results will include a storage provider&#39;s id | [optional]

### Return type

[**\TelestreamCloudFlip\Model\PaginatedFactoryCollection**](../Model/PaginatedFactoryCollection.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **factory**
> \TelestreamCloudFlip\Model\Factory factory($id, $with_storage_provider)

Returns a Factory object.

Returns a Factory object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of a factory
$with_storage_provider = true; // bool | if set to `true`, results will include a storage provider's id

try {
    $result = $apiInstance->factory($id, $with_storage_provider);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->factory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of a factory |
 **with_storage_provider** | **bool**| if set to &#x60;true&#x60;, results will include a storage provider&#39;s id | [optional]

### Return type

[**\TelestreamCloudFlip\Model\Factory**](../Model/Factory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **notifications**
> \TelestreamCloudFlip\Model\CloudNotificationSettings notifications($factory_id)

Returns a Factory's notification settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$factory_id = "factory_id_example"; // string | Id of a Factory.

try {
    $result = $apiInstance->notifications($factory_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->notifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **factory_id** | **string**| Id of a Factory. |

### Return type

[**\TelestreamCloudFlip\Model\CloudNotificationSettings**](../Model/CloudNotificationSettings.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profile**
> \TelestreamCloudFlip\Model\Profile profile($id_or_name, $factory_id, $expand)

Returns a Profile object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_or_name = "id_or_name_example"; // string | A name or an id of a Profile.
$factory_id = "factory_id_example"; // string | Id of a Factory.
$expand = true; // bool | If expand option is set Profile objects will contain all command parameters, even if their value is default. By default this is not set.

try {
    $result = $apiInstance->profile($id_or_name, $factory_id, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->profile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_or_name** | **string**| A name or an id of a Profile. |
 **factory_id** | **string**| Id of a Factory. |
 **expand** | **bool**| If expand option is set Profile objects will contain all command parameters, even if their value is default. By default this is not set. | [optional]

### Return type

[**\TelestreamCloudFlip\Model\Profile**](../Model/Profile.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profileEncodings**
> \TelestreamCloudFlip\Model\PaginatedEncodingsCollection profileEncodings($id_or_name, $factory_id)

Returns a list of Encodings that belong to a Profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id_or_name = "id_or_name_example"; // string | Id or name of a Profile.
$factory_id = "factory_id_example"; // string | Id of a Factory.

try {
    $result = $apiInstance->profileEncodings($id_or_name, $factory_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->profileEncodings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_or_name** | **string**| Id or name of a Profile. |
 **factory_id** | **string**| Id of a Factory. |

### Return type

[**\TelestreamCloudFlip\Model\PaginatedEncodingsCollection**](../Model/PaginatedEncodingsCollection.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **profiles**
> \TelestreamCloudFlip\Model\PaginatedProfilesCollection profiles($factory_id, $exclude_advanced_services, $expand, $page, $per_page)

Returns a collection of Profile objects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$factory_id = "factory_id_example"; // string | Id of a Factory.
$exclude_advanced_services = true; // bool | Determine whether exclude Advanced Services profiles from the results. By default this is not set.
$expand = true; // bool | If expand option is set Profile objects will contain all command parameters, even if their value is default. By default this is not set.
$page = 56; // int | A page to be fetched. Default is `1`.
$per_page = 56; // int | A number of results per page. Default is `100`.

try {
    $result = $apiInstance->profiles($factory_id, $exclude_advanced_services, $expand, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->profiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **factory_id** | **string**| Id of a Factory. |
 **exclude_advanced_services** | **bool**| Determine whether exclude Advanced Services profiles from the results. By default this is not set. | [optional]
 **expand** | **bool**| If expand option is set Profile objects will contain all command parameters, even if their value is default. By default this is not set. | [optional]
 **page** | **int**| A page to be fetched. Default is &#x60;1&#x60;. | [optional]
 **per_page** | **int**| A number of results per page. Default is &#x60;100&#x60;. | [optional]

### Return type

[**\TelestreamCloudFlip\Model\PaginatedProfilesCollection**](../Model/PaginatedProfilesCollection.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **queuedVideos**
> \TelestreamCloudFlip\Model\PaginatedVideoCollection queuedVideos($factory_id, $page, $per_page)

Returns a collection of Video objects queued for encoding.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$factory_id = "factory_id_example"; // string | Id of a Factory.
$page = 56; // int | A page to be fetched. Default is `1`.
$per_page = 56; // int | A number of results per page. Default is `100`.

try {
    $result = $apiInstance->queuedVideos($factory_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->queuedVideos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **factory_id** | **string**| Id of a Factory. |
 **page** | **int**| A page to be fetched. Default is &#x60;1&#x60;. | [optional]
 **per_page** | **int**| A number of results per page. Default is &#x60;100&#x60;. | [optional]

### Return type

[**\TelestreamCloudFlip\Model\PaginatedVideoCollection**](../Model/PaginatedVideoCollection.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resubmitVideo**
> resubmitVideo($factory_id, $resubmit_video_body)

Resubmits a video to encode.

Resubmits the video to encode. Please note that this option will work only for videos in `success` status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$factory_id = "factory_id_example"; // string | Id of a Factory.
$resubmit_video_body = new \TelestreamCloudFlip\Model\ResubmitVideoBody(); // \TelestreamCloudFlip\Model\ResubmitVideoBody | 

try {
    $apiInstance->resubmitVideo($factory_id, $resubmit_video_body);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->resubmitVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **factory_id** | **string**| Id of a Factory. |
 **resubmit_video_body** | [**\TelestreamCloudFlip\Model\ResubmitVideoBody**](../Model/ResubmitVideoBody.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retryEncoding**
> \TelestreamCloudFlip\Model\RetriedResponse retryEncoding($id, $factory_id)

Retries a failed encoding.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of an Encoding.
$factory_id = "factory_id_example"; // string | Id of a Factory.

try {
    $result = $apiInstance->retryEncoding($id, $factory_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->retryEncoding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of an Encoding. |
 **factory_id** | **string**| Id of a Factory. |

### Return type

[**\TelestreamCloudFlip\Model\RetriedResponse**](../Model/RetriedResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signedEncodingUrl**
> \TelestreamCloudFlip\Model\EncodingSignedUrl signedEncodingUrl($id, $factory_id)

Returns a signed url pointing to an Encoding.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of an Encoding.
$factory_id = "factory_id_example"; // string | Id of a Factory.

try {
    $result = $apiInstance->signedEncodingUrl($id, $factory_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->signedEncodingUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of an Encoding. |
 **factory_id** | **string**| Id of a Factory. |

### Return type

[**\TelestreamCloudFlip\Model\EncodingSignedUrl**](../Model/EncodingSignedUrl.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signedEncodingUrls**
> \TelestreamCloudFlip\Model\EncodingSignedUrls signedEncodingUrls($id, $factory_id)

Returns a list of signed urls pointing to an Encoding's outputs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of an Encoding.
$factory_id = "factory_id_example"; // string | Id of a Factory.

try {
    $result = $apiInstance->signedEncodingUrls($id, $factory_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->signedEncodingUrls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of an Encoding. |
 **factory_id** | **string**| Id of a Factory. |

### Return type

[**\TelestreamCloudFlip\Model\EncodingSignedUrls**](../Model/EncodingSignedUrls.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signedVideoUrl**
> \TelestreamCloudFlip\Model\SignedVideoUrl signedVideoUrl($id, $factory_id)

Returns a signed url pointing to a Video.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of a Video.
$factory_id = "factory_id_example"; // string | Id of a Factory.

try {
    $result = $apiInstance->signedVideoUrl($id, $factory_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->signedVideoUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of a Video. |
 **factory_id** | **string**| Id of a Factory. |

### Return type

[**\TelestreamCloudFlip\Model\SignedVideoUrl**](../Model/SignedVideoUrl.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **toggleFactorySync**
> \TelestreamCloudFlip\Model\FactorySync toggleFactorySync($id, $factory_sync_body)

Toggles synchronisation settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the factory
$factory_sync_body = new \TelestreamCloudFlip\Model\FactorySyncBody(); // \TelestreamCloudFlip\Model\FactorySyncBody | 

try {
    $result = $apiInstance->toggleFactorySync($id, $factory_sync_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->toggleFactorySync: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the factory |
 **factory_sync_body** | [**\TelestreamCloudFlip\Model\FactorySyncBody**](../Model/FactorySyncBody.md)|  |

### Return type

[**\TelestreamCloudFlip\Model\FactorySync**](../Model/FactorySync.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEncoding**
> \TelestreamCloudFlip\Model\Encoding updateEncoding($id, $factory_id, $update_encoding_body, $screenshots, $precise_status)

Updates an Encoding

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of an Encoding.
$factory_id = "factory_id_example"; // string | Id of a Factory.
$update_encoding_body = new \TelestreamCloudFlip\Model\UpdateEncodingBody(); // \TelestreamCloudFlip\Model\UpdateEncodingBody | 
$screenshots = true; // bool | Determines whether the response will include screenshots. By default this is not set.
$precise_status = true; // bool | Determines whether the response will include a precise status. By default this is not set.

try {
    $result = $apiInstance->updateEncoding($id, $factory_id, $update_encoding_body, $screenshots, $precise_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->updateEncoding: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of an Encoding. |
 **factory_id** | **string**| Id of a Factory. |
 **update_encoding_body** | [**\TelestreamCloudFlip\Model\UpdateEncodingBody**](../Model/UpdateEncodingBody.md)|  |
 **screenshots** | **bool**| Determines whether the response will include screenshots. By default this is not set. | [optional]
 **precise_status** | **bool**| Determines whether the response will include a precise status. By default this is not set. | [optional]

### Return type

[**\TelestreamCloudFlip\Model\Encoding**](../Model/Encoding.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFactory**
> \TelestreamCloudFlip\Model\Factory updateFactory($id, $update_factory_body, $with_storage_provider)

Updates a Factory's settings. Returns a Factory object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | id of the factory
$update_factory_body = new \TelestreamCloudFlip\Model\FactoryBody(); // \TelestreamCloudFlip\Model\FactoryBody | 
$with_storage_provider = true; // bool | if set to `true`, results will include a storage provider's id

try {
    $result = $apiInstance->updateFactory($id, $update_factory_body, $with_storage_provider);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->updateFactory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| id of the factory |
 **update_factory_body** | [**\TelestreamCloudFlip\Model\FactoryBody**](../Model/FactoryBody.md)|  |
 **with_storage_provider** | **bool**| if set to &#x60;true&#x60;, results will include a storage provider&#39;s id | [optional]

### Return type

[**\TelestreamCloudFlip\Model\Factory**](../Model/Factory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateNotifications**
> \TelestreamCloudFlip\Model\CloudNotificationSettings updateNotifications($factory_id, $cloud_notification_settings_body)

Updates a Factory's notification settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$factory_id = "factory_id_example"; // string | Id of a Factory.
$cloud_notification_settings_body = new \TelestreamCloudFlip\Model\CloudNotificationSettings(); // \TelestreamCloudFlip\Model\CloudNotificationSettings | 

try {
    $result = $apiInstance->updateNotifications($factory_id, $cloud_notification_settings_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->updateNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **factory_id** | **string**| Id of a Factory. |
 **cloud_notification_settings_body** | [**\TelestreamCloudFlip\Model\CloudNotificationSettings**](../Model/CloudNotificationSettings.md)|  |

### Return type

[**\TelestreamCloudFlip\Model\CloudNotificationSettings**](../Model/CloudNotificationSettings.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProfile**
> \TelestreamCloudFlip\Model\Profile updateProfile($id, $factory_id, $update_profile_body, $exclude_advanced_services, $expand)

Updates a given Profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$factory_id = "factory_id_example"; // string | Id of a Factory.
$update_profile_body = new \TelestreamCloudFlip\Model\ProfileBody(); // \TelestreamCloudFlip\Model\ProfileBody | 
$exclude_advanced_services = true; // bool | 
$expand = true; // bool | If expand option is set Profile objects will contain all command parameters, even if their value is default. By default this is not set.

try {
    $result = $apiInstance->updateProfile($id, $factory_id, $update_profile_body, $exclude_advanced_services, $expand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->updateProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **factory_id** | **string**| Id of a Factory. |
 **update_profile_body** | [**\TelestreamCloudFlip\Model\ProfileBody**](../Model/ProfileBody.md)|  |
 **exclude_advanced_services** | **bool**|  | [optional]
 **expand** | **bool**| If expand option is set Profile objects will contain all command parameters, even if their value is default. By default this is not set. | [optional]

### Return type

[**\TelestreamCloudFlip\Model\Profile**](../Model/Profile.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadVideo**
> \TelestreamCloudFlip\Model\UploadSession uploadVideo($factory_id, $video_upload_body)

Creates an upload session.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$factory_id = "factory_id_example"; // string | Id of a Factory.
$video_upload_body = new \TelestreamCloudFlip\Model\VideoUploadBody(); // \TelestreamCloudFlip\Model\VideoUploadBody | 

try {
    $result = $apiInstance->uploadVideo($factory_id, $video_upload_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->uploadVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **factory_id** | **string**| Id of a Factory. |
 **video_upload_body** | [**\TelestreamCloudFlip\Model\VideoUploadBody**](../Model/VideoUploadBody.md)|  |

### Return type

[**\TelestreamCloudFlip\Model\UploadSession**](../Model/UploadSession.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **video**
> \TelestreamCloudFlip\Model\Video video($id, $factory_id)

Returns a Video object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of a Video.
$factory_id = "factory_id_example"; // string | Id of a Factory.

try {
    $result = $apiInstance->video($id, $factory_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->video: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of a Video. |
 **factory_id** | **string**| Id of a Factory. |

### Return type

[**\TelestreamCloudFlip\Model\Video**](../Model/Video.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **videoEncodings**
> \TelestreamCloudFlip\Model\PaginatedEncodingsCollection videoEncodings($id, $factory_id, $page, $per_page, $screenshots, $precise_status)

Returns a list of Encodings that belong to a Video.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of a Video.
$factory_id = "factory_id_example"; // string | Id of a Factory.
$page = 56; // int | A page to be fetched. Default is `1`.
$per_page = 56; // int | A number of results per page. Default is `100`.
$screenshots = true; // bool | Determines whether the response will include screenshots. By default this is not set.
$precise_status = true; // bool | Determines whether the response will include a precise status. By default this is not set.

try {
    $result = $apiInstance->videoEncodings($id, $factory_id, $page, $per_page, $screenshots, $precise_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->videoEncodings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of a Video. |
 **factory_id** | **string**| Id of a Factory. |
 **page** | **int**| A page to be fetched. Default is &#x60;1&#x60;. | [optional]
 **per_page** | **int**| A number of results per page. Default is &#x60;100&#x60;. | [optional]
 **screenshots** | **bool**| Determines whether the response will include screenshots. By default this is not set. | [optional]
 **precise_status** | **bool**| Determines whether the response will include a precise status. By default this is not set. | [optional]

### Return type

[**\TelestreamCloudFlip\Model\PaginatedEncodingsCollection**](../Model/PaginatedEncodingsCollection.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **videoMetadata**
> \TelestreamCloudFlip\Model\VideoMetadata videoMetadata($id, $factory_id)

Returns a Video's metadata

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Id of a Video.
$factory_id = "factory_id_example"; // string | Id of a Factory.

try {
    $result = $apiInstance->videoMetadata($id, $factory_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->videoMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of a Video. |
 **factory_id** | **string**| Id of a Factory. |

### Return type

[**\TelestreamCloudFlip\Model\VideoMetadata**](../Model/VideoMetadata.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **videos**
> \TelestreamCloudFlip\Model\PaginatedVideoCollection videos($factory_id, $page, $per_page)

Returns a collection of Video objects.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$factory_id = "factory_id_example"; // string | Id of a Factory.
$page = 56; // int | A page to be fetched. Default is `1`.
$per_page = 56; // int | A number of results per page. Default is `100`.

try {
    $result = $apiInstance->videos($factory_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->videos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **factory_id** | **string**| Id of a Factory. |
 **page** | **int**| A page to be fetched. Default is &#x60;1&#x60;. | [optional]
 **per_page** | **int**| A number of results per page. Default is &#x60;100&#x60;. | [optional]

### Return type

[**\TelestreamCloudFlip\Model\PaginatedVideoCollection**](../Model/PaginatedVideoCollection.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **workflows**
> \TelestreamCloudFlip\Model\PaginatedWorkflowsCollection workflows($factory_id, $page, $per_page)

Returns a collection of Workflows that belong to a Factory.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudFlip\Api\FlipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$factory_id = "factory_id_example"; // string | Id of a Factory.
$page = 56; // int | A page to be fetched. Default is `1`.
$per_page = 56; // int | A number of results per page. Default is `100`.

try {
    $result = $apiInstance->workflows($factory_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlipApi->workflows: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **factory_id** | **string**| Id of a Factory. |
 **page** | **int**| A page to be fetched. Default is &#x60;1&#x60;. | [optional]
 **per_page** | **int**| A number of results per page. Default is &#x60;100&#x60;. | [optional]

### Return type

[**\TelestreamCloudFlip\Model\PaginatedWorkflowsCollection**](../Model/PaginatedWorkflowsCollection.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

