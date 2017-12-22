# TelestreamCloud\QcApi

All URIs are relative to *https://api.cloud.telestream.net/qc/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelJob**](QcApi.md#cancelJob) | **PUT** /projects/{project}/jobs/{job}/cancel.json | 
[**createJob**](QcApi.md#createJob) | **POST** /projects/{project}/jobs.json | Create a new job
[**createProject**](QcApi.md#createProject) | **POST** /projects.json | Create a new project
[**getJob**](QcApi.md#getJob) | **GET** /projects/{project}/jobs/{job}.json | Get QC job
[**getProject**](QcApi.md#getProject) | **GET** /projects/{project}.json | Get project by Id
[**listJobs**](QcApi.md#listJobs) | **GET** /projects/{project}/jobs.json | Get jobs form projects
[**listProjects**](QcApi.md#listProjects) | **GET** /projects.json | List all projects for an account
[**modifyProject**](QcApi.md#modifyProject) | **PUT** /projects/{project}.json | Modify project
[**proxy**](QcApi.md#proxy) | **GET** /projects/{project}/jobs/{job}/proxy.json | 
[**removeJob**](QcApi.md#removeJob) | **DELETE** /projects/{project}/jobs/{job}.json | 
[**removeProject**](QcApi.md#removeProject) | **DELETE** /projects/{project}.json | 
[**signedUrls**](QcApi.md#signedUrls) | **GET** /projects/{project}/jobs/{job}/signed-urls.json | 
[**uploadVideo**](QcApi.md#uploadVideo) | **POST** /projects/{project}/upload.json | Creates an upload session


# **cancelJob**
> cancelJob($project, $job)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
TelestreamCloud\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// TelestreamCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$api_instance = new TelestreamCloud\Api\QcApi();
$project = "project_example"; // string | A unique identifier of a Project.
$job = "job_example"; // string | A unique identifier of a Job.

try {
    $api_instance->cancelJob($project, $job);
} catch (Exception $e) {
    echo 'Exception when calling QcApi->cancelJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| A unique identifier of a Project. |
 **job** | **string**| A unique identifier of a Job. |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createJob**
> \TelestreamCloud\Qc\Job createJob($project, $data)

Create a new job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
TelestreamCloud\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// TelestreamCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$api_instance = new TelestreamCloud\Api\QcApi();
$project = "project_example"; // string | A unique identifier of a Project.
$data = new \TelestreamCloud\Qc\JobData(); // \TelestreamCloud\Qc\JobData | 

try {
    $result = $api_instance->createJob($project, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QcApi->createJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| A unique identifier of a Project. |
 **data** | [**\TelestreamCloud\Qc\JobData**](../Model/JobData.md)|  |

### Return type

[**\TelestreamCloud\Qc\Job**](../Model/Job.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProject**
> \TelestreamCloud\Qc\Project createProject($data)

Create a new project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
TelestreamCloud\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// TelestreamCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$api_instance = new TelestreamCloud\Api\QcApi();
$data = new \TelestreamCloud\Qc\Data(); // \TelestreamCloud\Qc\Data | 

try {
    $result = $api_instance->createProject($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QcApi->createProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\TelestreamCloud\Qc\Data**](../Model/Data.md)|  | [optional]

### Return type

[**\TelestreamCloud\Qc\Project**](../Model/Project.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJob**
> \TelestreamCloud\Qc\Job getJob($project, $job)

Get QC job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
TelestreamCloud\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// TelestreamCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$api_instance = new TelestreamCloud\Api\QcApi();
$project = "project_example"; // string | A unique identifier of a Project.
$job = "job_example"; // string | A unique identifier of a Job.

try {
    $result = $api_instance->getJob($project, $job);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QcApi->getJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| A unique identifier of a Project. |
 **job** | **string**| A unique identifier of a Job. |

### Return type

[**\TelestreamCloud\Qc\Job**](../Model/Job.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProject**
> \TelestreamCloud\Qc\Project getProject($project)

Get project by Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
TelestreamCloud\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// TelestreamCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$api_instance = new TelestreamCloud\Api\QcApi();
$project = "project_example"; // string | A unique identifier of a Project.

try {
    $result = $api_instance->getProject($project);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QcApi->getProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| A unique identifier of a Project. |

### Return type

[**\TelestreamCloud\Qc\Project**](../Model/Project.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listJobs**
> \TelestreamCloud\Qc\JobsCollection listJobs($project, $expand, $status, $per_page, $page)

Get jobs form projects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
TelestreamCloud\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// TelestreamCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$api_instance = new TelestreamCloud\Api\QcApi();
$project = "project_example"; // string | A unique identifier of a Project.
$expand = true; // bool | Expand details of job
$status = "status_example"; // string | Filter jobs by status
$per_page = 30; // int | Limit number of listed jobs
$page = 56; // int | Index of jobs page to be listed

try {
    $result = $api_instance->listJobs($project, $expand, $status, $per_page, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QcApi->listJobs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| A unique identifier of a Project. |
 **expand** | **bool**| Expand details of job | [optional]
 **status** | **string**| Filter jobs by status | [optional]
 **per_page** | **int**| Limit number of listed jobs | [optional] [default to 30]
 **page** | **int**| Index of jobs page to be listed | [optional]

### Return type

[**\TelestreamCloud\Qc\JobsCollection**](../Model/JobsCollection.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listProjects**
> \TelestreamCloud\Qc\Project[] listProjects()

List all projects for an account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
TelestreamCloud\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// TelestreamCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$api_instance = new TelestreamCloud\Api\QcApi();

try {
    $result = $api_instance->listProjects();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QcApi->listProjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TelestreamCloud\Qc\Project[]**](../Model/Project.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyProject**
> \TelestreamCloud\Qc\Project modifyProject($project, $data)

Modify project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
TelestreamCloud\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// TelestreamCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$api_instance = new TelestreamCloud\Api\QcApi();
$project = "project_example"; // string | 
$data = new \TelestreamCloud\Qc\Data1(); // \TelestreamCloud\Qc\Data1 | 

try {
    $result = $api_instance->modifyProject($project, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QcApi->modifyProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**|  |
 **data** | [**\TelestreamCloud\Qc\Data1**](../Model/Data1.md)|  | [optional]

### Return type

[**\TelestreamCloud\Qc\Project**](../Model/Project.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **proxy**
> \TelestreamCloud\Qc\Proxy proxy($project, $job)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
TelestreamCloud\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// TelestreamCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$api_instance = new TelestreamCloud\Api\QcApi();
$project = "project_example"; // string | A unique identifier of a Project.
$job = "job_example"; // string | A unique identifier of a Job.

try {
    $result = $api_instance->proxy($project, $job);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QcApi->proxy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| A unique identifier of a Project. |
 **job** | **string**| A unique identifier of a Job. |

### Return type

[**\TelestreamCloud\Qc\Proxy**](../Model/Proxy.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeJob**
> removeJob($project, $job)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
TelestreamCloud\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// TelestreamCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$api_instance = new TelestreamCloud\Api\QcApi();
$project = "project_example"; // string | A unique identifier of a Project.
$job = "job_example"; // string | A unique identifier of a Job.

try {
    $api_instance->removeJob($project, $job);
} catch (Exception $e) {
    echo 'Exception when calling QcApi->removeJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| A unique identifier of a Project. |
 **job** | **string**| A unique identifier of a Job. |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeProject**
> removeProject($project)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
TelestreamCloud\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// TelestreamCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$api_instance = new TelestreamCloud\Api\QcApi();
$project = "project_example"; // string | 

try {
    $api_instance->removeProject($project);
} catch (Exception $e) {
    echo 'Exception when calling QcApi->removeProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**|  |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **signedUrls**
> map[string,string] signedUrls($project, $job)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
TelestreamCloud\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// TelestreamCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$api_instance = new TelestreamCloud\Api\QcApi();
$project = "project_example"; // string | A unique identifier of a Project.
$job = "job_example"; // string | A unique identifier of a Job.

try {
    $result = $api_instance->signedUrls($project, $job);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QcApi->signedUrls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| A unique identifier of a Project. |
 **job** | **string**| A unique identifier of a Job. |

### Return type

[**map[string,string]**](../Model/map.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadVideo**
> \TelestreamCloud\Qc\UploadSession uploadVideo($project, $video_upload_body)

Creates an upload session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
TelestreamCloud\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// TelestreamCloud\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$api_instance = new TelestreamCloud\Api\QcApi();
$project = "project_example"; // string | A unique identifier of a Project.
$video_upload_body = new \TelestreamCloud\Qc\VideoUploadBody(); // \TelestreamCloud\Qc\VideoUploadBody | 

try {
    $result = $api_instance->uploadVideo($project, $video_upload_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QcApi->uploadVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| A unique identifier of a Project. |
 **video_upload_body** | [**\TelestreamCloud\Qc\VideoUploadBody**](../Model/VideoUploadBody.md)|  |

### Return type

[**\TelestreamCloud\Qc\UploadSession**](../Model/UploadSession.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

