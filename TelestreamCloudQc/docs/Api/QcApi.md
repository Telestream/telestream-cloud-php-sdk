# TelestreamCloudQc\QcApi

All URIs are relative to *https://api.cloud.telestream.net/qc/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelJob**](QcApi.md#cancelJob) | **PUT** /projects/{project_id}/jobs/{job_id}/cancel.json | 
[**createJob**](QcApi.md#createJob) | **POST** /projects/{project_id}/jobs.json | Create a new job
[**createProject**](QcApi.md#createProject) | **POST** /projects.json | Create a new project
[**getJob**](QcApi.md#getJob) | **GET** /projects/{project_id}/jobs/{job_id}.json | Get QC job
[**getProject**](QcApi.md#getProject) | **GET** /projects/{project_id}.json | Get project by Id
[**listJobs**](QcApi.md#listJobs) | **GET** /projects/{project_id}/jobs.json | Get jobs form projects
[**listProjects**](QcApi.md#listProjects) | **GET** /projects.json | List all projects for an account
[**modifyProject**](QcApi.md#modifyProject) | **PUT** /projects/{project_id}.json | Modify project
[**proxy**](QcApi.md#proxy) | **GET** /projects/{project_id}/jobs/{job_id}/proxy.json | 
[**removeJob**](QcApi.md#removeJob) | **DELETE** /projects/{project_id}/jobs/{job_id}.json | 
[**removeProject**](QcApi.md#removeProject) | **DELETE** /projects/{project_id}.json | 
[**signedUrls**](QcApi.md#signedUrls) | **GET** /projects/{project_id}/jobs/{job_id}/signed-urls.json | 
[**templates**](QcApi.md#templates) | **GET** /templates.json | List all templates
[**uploadVideo**](QcApi.md#uploadVideo) | **POST** /projects/{project_id}/upload.json | Creates an upload session


# **cancelJob**
> cancelJob($project_id, $job_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudQc\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudQc\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudQc\Api\QcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | A unique identifier of a Project.
$job_id = "job_id_example"; // string | A unique identifier of a Job.

try {
    $apiInstance->cancelJob($project_id, $job_id);
} catch (Exception $e) {
    echo 'Exception when calling QcApi->cancelJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| A unique identifier of a Project. |
 **job_id** | **string**| A unique identifier of a Job. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createJob**
> \TelestreamCloudQc\Model\Job createJob($project_id, $data)

Create a new job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudQc\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudQc\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudQc\Api\QcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | A unique identifier of a Project.
$data = new \TelestreamCloudQc\Model\JobData(); // \TelestreamCloudQc\Model\JobData | 

try {
    $result = $apiInstance->createJob($project_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QcApi->createJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| A unique identifier of a Project. |
 **data** | [**\TelestreamCloudQc\Model\JobData**](../Model/JobData.md)|  |

### Return type

[**\TelestreamCloudQc\Model\Job**](../Model/Job.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProject**
> \TelestreamCloudQc\Model\Project createProject($data)

Create a new project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudQc\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudQc\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudQc\Api\QcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \TelestreamCloudQc\Model\Data(); // \TelestreamCloudQc\Model\Data | 

try {
    $result = $apiInstance->createProject($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QcApi->createProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\TelestreamCloudQc\Model\Data**](../Model/Data.md)|  | [optional]

### Return type

[**\TelestreamCloudQc\Model\Project**](../Model/Project.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJob**
> \TelestreamCloudQc\Model\Job getJob($project_id, $job_id)

Get QC job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudQc\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudQc\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudQc\Api\QcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | A unique identifier of a Project.
$job_id = "job_id_example"; // string | A unique identifier of a Job.

try {
    $result = $apiInstance->getJob($project_id, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QcApi->getJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| A unique identifier of a Project. |
 **job_id** | **string**| A unique identifier of a Job. |

### Return type

[**\TelestreamCloudQc\Model\Job**](../Model/Job.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProject**
> \TelestreamCloudQc\Model\Project getProject($project_id)

Get project by Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudQc\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudQc\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudQc\Api\QcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | A unique identifier of a Project.

try {
    $result = $apiInstance->getProject($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QcApi->getProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| A unique identifier of a Project. |

### Return type

[**\TelestreamCloudQc\Model\Project**](../Model/Project.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listJobs**
> \TelestreamCloudQc\Model\JobsCollection listJobs($project_id, $expand, $status, $per_page, $page)

Get jobs form projects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudQc\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudQc\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudQc\Api\QcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | A unique identifier of a Project.
$expand = true; // bool | Expand details of job
$status = "status_example"; // string | Filter jobs by status
$per_page = 30; // int | Limit number of listed jobs
$page = 56; // int | Index of jobs page to be listed

try {
    $result = $apiInstance->listJobs($project_id, $expand, $status, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QcApi->listJobs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| A unique identifier of a Project. |
 **expand** | **bool**| Expand details of job | [optional]
 **status** | **string**| Filter jobs by status | [optional]
 **per_page** | **int**| Limit number of listed jobs | [optional] [default to 30]
 **page** | **int**| Index of jobs page to be listed | [optional]

### Return type

[**\TelestreamCloudQc\Model\JobsCollection**](../Model/JobsCollection.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listProjects**
> \TelestreamCloudQc\Model\Project[] listProjects()

List all projects for an account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudQc\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudQc\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudQc\Api\QcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listProjects();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QcApi->listProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TelestreamCloudQc\Model\Project[]**](../Model/Project.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyProject**
> \TelestreamCloudQc\Model\Project modifyProject($project_id, $data)

Modify project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudQc\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudQc\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudQc\Api\QcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | 
$data = new \TelestreamCloudQc\Model\Data1(); // \TelestreamCloudQc\Model\Data1 | 

try {
    $result = $apiInstance->modifyProject($project_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QcApi->modifyProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |
 **data** | [**\TelestreamCloudQc\Model\Data1**](../Model/Data1.md)|  | [optional]

### Return type

[**\TelestreamCloudQc\Model\Project**](../Model/Project.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxy**
> \TelestreamCloudQc\Model\Proxy proxy($project_id, $job_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudQc\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudQc\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudQc\Api\QcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | A unique identifier of a Project.
$job_id = "job_id_example"; // string | A unique identifier of a Job.

try {
    $result = $apiInstance->proxy($project_id, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QcApi->proxy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| A unique identifier of a Project. |
 **job_id** | **string**| A unique identifier of a Job. |

### Return type

[**\TelestreamCloudQc\Model\Proxy**](../Model/Proxy.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeJob**
> removeJob($project_id, $job_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudQc\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudQc\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudQc\Api\QcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | A unique identifier of a Project.
$job_id = "job_id_example"; // string | A unique identifier of a Job.

try {
    $apiInstance->removeJob($project_id, $job_id);
} catch (Exception $e) {
    echo 'Exception when calling QcApi->removeJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| A unique identifier of a Project. |
 **job_id** | **string**| A unique identifier of a Job. |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeProject**
> removeProject($project_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudQc\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudQc\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudQc\Api\QcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | 

try {
    $apiInstance->removeProject($project_id);
} catch (Exception $e) {
    echo 'Exception when calling QcApi->removeProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signedUrls**
> map[string,string] signedUrls($project_id, $job_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudQc\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudQc\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudQc\Api\QcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | A unique identifier of a Project.
$job_id = "job_id_example"; // string | A unique identifier of a Job.

try {
    $result = $apiInstance->signedUrls($project_id, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QcApi->signedUrls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| A unique identifier of a Project. |
 **job_id** | **string**| A unique identifier of a Job. |

### Return type

**map[string,string]**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **templates**
> \TelestreamCloudQc\Model\Template[] templates()

List all templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudQc\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudQc\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudQc\Api\QcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->templates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QcApi->templates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TelestreamCloudQc\Model\Template[]**](../Model/Template.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadVideo**
> \TelestreamCloudQc\Model\UploadSession uploadVideo($project_id, $video_upload_body)

Creates an upload session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = TelestreamCloudQc\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudQc\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudQc\Api\QcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | A unique identifier of a Project.
$video_upload_body = new \TelestreamCloudQc\Model\VideoUploadBody(); // \TelestreamCloudQc\Model\VideoUploadBody | 

try {
    $result = $apiInstance->uploadVideo($project_id, $video_upload_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QcApi->uploadVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| A unique identifier of a Project. |
 **video_upload_body** | [**\TelestreamCloudQc\Model\VideoUploadBody**](../Model/VideoUploadBody.md)|  |

### Return type

[**\TelestreamCloudQc\Model\UploadSession**](../Model/UploadSession.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

