# Telestream Cloud API client

## Getting Started
### Obtain address for TCS api
In order to use TCS api client first you need to get `ApiKey`. Login to [website](https://cloud.telestream.net/console), go to *Flip* service and open *API Access* tab.
You account will be identified by unique *Api Key*, if it is unavailable click *Reset* button.


### Installation


#### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/telestream/telestream-cloud-php-sdk.git"
    }
  ],
  "require": {
    "telestream/telestream-cloud-php-sdk": "*@dev"
  }
}
```

Then run `composer install`


#### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/TelestreamCloudTts/vendor/autoload.php');
```

### Usage
This example show uploading media file to flip service. If you want to use other service refer to [services](#services).

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = TelestreamCloudFlip\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'tcs_xxxxxxxxx');

$factory = 'tg01xxxxxxxxxxxxxxxxxxxx';

try {
    $api = new TelestreamCloudFlip\Api\FlipApi(new GuzzleHttp\Client(), $config);

    $upload = new TelestreamCloudFlip\Uploader($api, array(
        'factory_id' => $factory,
        'file' => '/tmp/video.mp4',
        'extra_files' => array(),
    ));

    $video_id = $upload->upload();
    echo $video_id;
} catch(Exception $e) {
    // Handle exception
}
?>
```

## Services
Api client is divided into parts corresponding to services provided. Currently supported services include:
- [Flip](TelestreamCloudFlip/README.md) - high-volume media transcoding to multiple formats
- [Timed Text Speech](TelestreamCloudTts/README.md) - automated captions and subtitles creation
- [Quality Control](TelestreamCloudQc/README.md) - automated quality control for file base media
