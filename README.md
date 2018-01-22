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
    require_once('/path/to/service/vendor/autoload.php');
```

## Services
Api client is divided into parts corresponding to services provided. Currently supported services include:
- [Flip](TelestreamCloudFlip/README.md) - high-volume media transcoding to multiple formats
- [Timed Text Speech](TelestreamCloudTts/README.md) - automated captions and subtitles creation
- [Quality Control](TelestreamCloudQc/README.md) - automated quality control for file base media
