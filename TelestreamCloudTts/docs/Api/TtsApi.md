# TelestreamCloudTts\TtsApi

All URIs are relative to *https://api.cloud.telestream.net/tts/v1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**corpora**](TtsApi.md#corpora) | **GET** /projects/{projectID}/corpora | Returns a collection of Corpora
[**corpus**](TtsApi.md#corpus) | **GET** /projects/{projectID}/corpora/{name} | Returns the Corpus
[**createCorpus**](TtsApi.md#createCorpus) | **POST** /projects/{projectID}/corpora/{name} | Creates a new Corpus
[**createJob**](TtsApi.md#createJob) | **POST** /projects/{projectID}/jobs | Creates a new Job
[**createProject**](TtsApi.md#createProject) | **POST** /projects | Creates a new Project
[**deleteCorpus**](TtsApi.md#deleteCorpus) | **DELETE** /projects/{projectID}/corpora/{name} | Creates a new Corpus
[**deleteJob**](TtsApi.md#deleteJob) | **DELETE** /projects/{projectID}/jobs/{id} | Deletes the Job
[**deleteProject**](TtsApi.md#deleteProject) | **DELETE** /projects/{projectID} | Deletes the Project
[**job**](TtsApi.md#job) | **GET** /projects/{projectID}/jobs/{id} | Returns the Job
[**jobResult**](TtsApi.md#jobResult) | **GET** /projects/{projectID}/jobs/{id}/result | Returns the Job Result
[**jobs**](TtsApi.md#jobs) | **GET** /projects/{projectID}/jobs | Returns a collection of Jobs
[**project**](TtsApi.md#project) | **GET** /projects/{projectID} | Returns the Project
[**projects**](TtsApi.md#projects) | **GET** /projects | Returns a collection of Projects
[**trainProject**](TtsApi.md#trainProject) | **POST** /projects/{projectID}/train | Queues training
[**updateProject**](TtsApi.md#updateProject) | **PUT** /projects/{projectID} | Updates an existing Project
[**uploadVideo**](TtsApi.md#uploadVideo) | **POST** /projects/{projectID}/jobs/upload | Creates an upload session


# **corpora**
> \TelestreamCloudTts\Model\CorporaCollection corpora($project_id)

Returns a collection of Corpora

Returns a collection of Corpora

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudTts\Api\TtsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | ID of the Project

try {
    $result = $apiInstance->corpora($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TtsApi->corpora: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| ID of the Project |

### Return type

[**\TelestreamCloudTts\Model\CorporaCollection**](../Model/CorporaCollection.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **corpus**
> \TelestreamCloudTts\Model\Corpus corpus($project_id, $name)

Returns the Corpus

Returns the Corpus

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudTts\Api\TtsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | ID of the Project
$name = "name_example"; // string | Corpus name

try {
    $result = $apiInstance->corpus($project_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TtsApi->corpus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| ID of the Project |
 **name** | **string**| Corpus name |

### Return type

[**\TelestreamCloudTts\Model\Corpus**](../Model/Corpus.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCorpus**
> createCorpus($project_id, $name, $body)

Creates a new Corpus

Creates a new Corpus

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudTts\Api\TtsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | ID of the Project
$name = "name_example"; // string | Corpus name
$body = "body_example"; // string | 

try {
    $apiInstance->createCorpus($project_id, $name, $body);
} catch (Exception $e) {
    echo 'Exception when calling TtsApi->createCorpus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| ID of the Project |
 **name** | **string**| Corpus name |
 **body** | **string**|  |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createJob**
> \TelestreamCloudTts\Model\Job createJob($project_id, $job)

Creates a new Job

Creates a new Job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudTts\Api\TtsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | ID of the Project
$job = new \TelestreamCloudTts\Model\Job(); // \TelestreamCloudTts\Model\Job | 

try {
    $result = $apiInstance->createJob($project_id, $job);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TtsApi->createJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| ID of the Project |
 **job** | [**\TelestreamCloudTts\Model\Job**](../Model/Job.md)|  |

### Return type

[**\TelestreamCloudTts\Model\Job**](../Model/Job.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProject**
> \TelestreamCloudTts\Model\Project createProject($project)

Creates a new Project

Creates a new Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudTts\Api\TtsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project = new \TelestreamCloudTts\Model\Project(); // \TelestreamCloudTts\Model\Project | 

try {
    $result = $apiInstance->createProject($project);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TtsApi->createProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | [**\TelestreamCloudTts\Model\Project**](../Model/Project.md)|  |

### Return type

[**\TelestreamCloudTts\Model\Project**](../Model/Project.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCorpus**
> deleteCorpus($project_id, $name)

Creates a new Corpus

Creates a new Corpus

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudTts\Api\TtsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | ID of the Project
$name = "name_example"; // string | Corpus name

try {
    $apiInstance->deleteCorpus($project_id, $name);
} catch (Exception $e) {
    echo 'Exception when calling TtsApi->deleteCorpus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| ID of the Project |
 **name** | **string**| Corpus name |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteJob**
> deleteJob($project_id, $job_id)

Deletes the Job

Deletes the Job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudTts\Api\TtsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | ID of the Project
$job_id = "job_id_example"; // string | 

try {
    $apiInstance->deleteJob($project_id, $job_id);
} catch (Exception $e) {
    echo 'Exception when calling TtsApi->deleteJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| ID of the Project |
 **job_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProject**
> deleteProject()

Deletes the Project

Deletes the Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudTts\Api\TtsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->deleteProject();
} catch (Exception $e) {
    echo 'Exception when calling TtsApi->deleteProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **job**
> \TelestreamCloudTts\Model\Job job($project_id, $job_id)

Returns the Job

Returns the Job

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudTts\Api\TtsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | ID of the Project
$job_id = "job_id_example"; // string | 

try {
    $result = $apiInstance->job($project_id, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TtsApi->job: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| ID of the Project |
 **job_id** | **string**|  |

### Return type

[**\TelestreamCloudTts\Model\Job**](../Model/Job.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **jobResult**
> \TelestreamCloudTts\Model\JobResult jobResult($project_id, $job_id)

Returns the Job Result

Returns the Job Result

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudTts\Api\TtsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | ID of the Project
$job_id = "job_id_example"; // string | 

try {
    $result = $apiInstance->jobResult($project_id, $job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TtsApi->jobResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| ID of the Project |
 **job_id** | **string**|  |

### Return type

[**\TelestreamCloudTts\Model\JobResult**](../Model/JobResult.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **jobs**
> \TelestreamCloudTts\Model\JobsCollection jobs($project_id, $page, $per_page)

Returns a collection of Jobs

Returns a collection of Jobs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudTts\Api\TtsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | ID of the Project
$page = 56; // int | page number
$per_page = 56; // int | number of records per page

try {
    $result = $apiInstance->jobs($project_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TtsApi->jobs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| ID of the Project |
 **page** | **int**| page number | [optional]
 **per_page** | **int**| number of records per page | [optional]

### Return type

[**\TelestreamCloudTts\Model\JobsCollection**](../Model/JobsCollection.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **project**
> \TelestreamCloudTts\Model\Project project($project_id)

Returns the Project

Returns the Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudTts\Api\TtsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | ID of the Project

try {
    $result = $apiInstance->project($project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TtsApi->project: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| ID of the Project |

### Return type

[**\TelestreamCloudTts\Model\Project**](../Model/Project.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **projects**
> \TelestreamCloudTts\Model\ProjectsCollection projects()

Returns a collection of Projects

Returns a collection of Projects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudTts\Api\TtsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->projects();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TtsApi->projects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\TelestreamCloudTts\Model\ProjectsCollection**](../Model/ProjectsCollection.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trainProject**
> trainProject($project_id)

Queues training

Queues training

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudTts\Api\TtsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | ID of the Project

try {
    $apiInstance->trainProject($project_id);
} catch (Exception $e) {
    echo 'Exception when calling TtsApi->trainProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| ID of the Project |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProject**
> \TelestreamCloudTts\Model\Project updateProject($project)

Updates an existing Project

Updates an existing Project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudTts\Api\TtsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project = new \TelestreamCloudTts\Model\Project(); // \TelestreamCloudTts\Model\Project | 

try {
    $result = $apiInstance->updateProject($project);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TtsApi->updateProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | [**\TelestreamCloudTts\Model\Project**](../Model/Project.md)|  |

### Return type

[**\TelestreamCloudTts\Model\Project**](../Model/Project.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadVideo**
> \TelestreamCloudTts\Model\UploadSession uploadVideo($project_id, $video_upload_body)

Creates an upload session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: apiKey
$config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TelestreamCloudTts\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');

$apiInstance = new TelestreamCloudTts\Api\TtsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project_id = "project_id_example"; // string | ID of the Project
$video_upload_body = new \TelestreamCloudTts\Model\VideoUploadBody(); // \TelestreamCloudTts\Model\VideoUploadBody | 

try {
    $result = $apiInstance->uploadVideo($project_id, $video_upload_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TtsApi->uploadVideo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| ID of the Project |
 **video_upload_body** | [**\TelestreamCloudTts\Model\VideoUploadBody**](../Model/VideoUploadBody.md)|  |

### Return type

[**\TelestreamCloudTts\Model\UploadSession**](../Model/UploadSession.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

