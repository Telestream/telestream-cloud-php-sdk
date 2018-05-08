# Telestream Cloud Quality Control PHP SDK

This library provides a low-level interface to the REST API of Telestream Cloud, the online video encoding service.

## Requirements

PHP 5.5 and later

## Getting Started

## Documentation for API Endpoints

All URIs are relative to *https://api.cloud.telestream.net/qc/v1.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*QcApi* | [**cancelJob**](docs/Api/QcApi.md#canceljob) | **PUT** /projects/{project_id}/jobs/{job_id}/cancel.json | 
*QcApi* | [**createJob**](docs/Api/QcApi.md#createjob) | **POST** /projects/{project_id}/jobs.json | Create a new job
*QcApi* | [**createProject**](docs/Api/QcApi.md#createproject) | **POST** /projects.json | Create a new project
*QcApi* | [**getJob**](docs/Api/QcApi.md#getjob) | **GET** /projects/{project_id}/jobs/{job_id}.json | Get QC job
*QcApi* | [**getProject**](docs/Api/QcApi.md#getproject) | **GET** /projects/{project_id}.json | Get project by Id
*QcApi* | [**listJobs**](docs/Api/QcApi.md#listjobs) | **GET** /projects/{project_id}/jobs.json | Get jobs form projects
*QcApi* | [**listProjects**](docs/Api/QcApi.md#listprojects) | **GET** /projects.json | List all projects for an account
*QcApi* | [**modifyProject**](docs/Api/QcApi.md#modifyproject) | **PUT** /projects/{project_id}.json | Modify project
*QcApi* | [**proxy**](docs/Api/QcApi.md#proxy) | **GET** /projects/{project_id}/jobs/{job_id}/proxy.json | 
*QcApi* | [**removeJob**](docs/Api/QcApi.md#removejob) | **DELETE** /projects/{project_id}/jobs/{job_id}.json | 
*QcApi* | [**removeProject**](docs/Api/QcApi.md#removeproject) | **DELETE** /projects/{project_id}.json | 
*QcApi* | [**signedUrls**](docs/Api/QcApi.md#signedurls) | **GET** /projects/{project_id}/jobs/{job_id}/signed-urls.json | 
*QcApi* | [**templates**](docs/Api/QcApi.md#templates) | **GET** /templates.json | List all templates
*QcApi* | [**uploadVideo**](docs/Api/QcApi.md#uploadvideo) | **POST** /projects/{project_id}/upload.json | Creates an upload session


## Documentation For Models

 - [Alert](docs/Model/Alert.md)
 - [AudioStream](docs/Model/AudioStream.md)
 - [Container](docs/Model/Container.md)
 - [Data](docs/Model/Data.md)
 - [Data1](docs/Model/Data1.md)
 - [ExtraFile](docs/Model/ExtraFile.md)
 - [Job](docs/Model/Job.md)
 - [JobData](docs/Model/JobData.md)
 - [JobDetails](docs/Model/JobDetails.md)
 - [JobDetailsResult](docs/Model/JobDetailsResult.md)
 - [JobsCollection](docs/Model/JobsCollection.md)
 - [Media](docs/Model/Media.md)
 - [Options](docs/Model/Options.md)
 - [Project](docs/Model/Project.md)
 - [Proxy](docs/Model/Proxy.md)
 - [Template](docs/Model/Template.md)
 - [UploadSession](docs/Model/UploadSession.md)
 - [VideoStream](docs/Model/VideoStream.md)
 - [VideoUploadBody](docs/Model/VideoUploadBody.md)


## Documentation For Authorization


## api_key

- **Type**: API key
- **API key parameter name**: X-Api-Key
- **Location**: HTTP header


## Author

cloudsupport@telestream.net


