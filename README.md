[![Travis Badge](https://travis-ci.org/brokeyourbike/php-http-client.svg?branch=master)](https://travis-ci.org/brokeyourbike/php-http-client)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/brokeyourbike/php-http-client.svg?style=flat-square)](https://packagist.org/packages/brokeyourbike/php-http-client)
[![GitHub contributors](https://img.shields.io/github/contributors/brokeyourbike/php-http-client.svg)](https://github.com/brokeyourbike/php-http-client/graphs/contributors)
[![MIT licensed](https://img.shields.io/badge/license-MIT-blue.svg)](./LICENSE)

**Quickly and easily access any RESTful or RESTful-like API.**

# Announcements

All updates to this library is documented in our [CHANGELOG](https://github.com/brokeyourbike/php-http-client/blob/master/CHANGELOG.md).

# Table of Contents
- [Installation](#installation)
- [Quick Start](#quick-start)
- [Usage](#usage)
- [Roadmap](#roadmap)
- [How to Contribute](#contribute)
- [License](#license)

<a name="installation"></a>
# Installation

## Prerequisites

- PHP version 5.6 or higher

## Install with Composer

Add php-http-client to your `composer.json` file. If you are not using [Composer](http://getcomposer.org), you should be. It's an excellent way to manage dependencies in your PHP application.

```json
{
  "require": {
    "brokeyourbike/php-http-client": "~3.10.0"
  }
}
```

Then at the top of your PHP script require the autoloader:

```php
require __DIR__ . '/vendor/autoload.php';
```

Then from the command line:

```bash
composer install
```

<a name="quick-start"></a>
# Quick Start

Here is a quick example:

`GET /your/api/{param}/call`

```php
// include __DIR__ . '/loader.php';
require 'vendor/autoload.php';
$apiKey = YOUR_SENDGRID_API_KEY;
$authHeaders = [
    'Authorization: Bearer ' . $apiKey
];
$client = new BrokeYourBike\Client('https://api.sendgrid.com', $authHeaders);
$param = 'foo';
$response = $client->your()->api()->_($param)->call()->get();

var_dump(
    $response->statusCode(),
    $response->headers(),
    $response->body()
);
```

`POST /your/api/{param}/call` with headers, query parameters and a request body with versioning.

```php
// include __DIR__ . '/loader.php';
require 'vendor/autoload.php';
$apiKey = YOUR_SENDGRID_API_KEY;
$authHeaders = [
    'Authorization: Bearer ' . $apiKey
];
$client = new BrokeYourBike\Client('https://api.sendgrid.com', $authHeaders);
$queryParams = [
    'hello' => 0, 'world' => 1
];
$requestHeaders = [
    'X-Test' => 'test'
];
$data = [
    'some' => 1, 'awesome' => 2, 'data' => 3
];
$param = 'bar';
$response = $client->your()->api()->_($param)->call()->post($data, $queryParams, $requestHeaders);

var_dump(
    $response->statusCode(),
    $response->headers(),
    $response->body()
);
```

If there is an issues with the request, such as misconfigured CURL SSL options, an `InvalidRequest` will be thrown
with message from CURL on why the request failed. Use the message as a hit to troubleshooting steps of your environment.

<a name="usage"></a>
# Usage

- [Usage Examples](USAGE.md)

<a name="roadmap"></a>
# Roadmap

If you are interested in the future direction of this project, please take a look at our [milestones](https://github.com/brokeyourbike/php-http-client/milestones). We would love to hear your feedback.

<a name="contribute"></a>
# How to Contribute

We encourage contribution to our libraries, please see our [CONTRIBUTING](https://github.com/brokeyourbike/php-http-client/blob/master/CONTRIBUTING.md) guide for details.

Quick links:

- [Feature Request](https://github.com/brokeyourbike/php-http-client/blob/master/CONTRIBUTING.md#feature-request)
- [Bug Reports](https://github.com/brokeyourbike/php-http-client/blob/master/CONTRIBUTING.md#submit-a-bug-report)
- [Sign the CLA to Create a Pull Request](https://github.com/brokeyourbike/php-http-client/blob/master/CONTRIBUTING.md#cla)
- [Improvements to the Codebase](https://github.com/brokeyourbike/php-http-client/blob/master/CONTRIBUTING.md#improvements-to-the-codebase)
- [Review Pull Requests](https://github.com/brokeyourbike/php-http-client/blob/master/CONTRIBUTING.md#code-reviews)

<a name="thanks"></a>
# Thanks

We were inspired by the work done on [birdy](https://github.com/inueni/birdy) and [universalclient](https://github.com/dgreisen/universalclient).

<a name="license"></a>
# License
[The MIT License (MIT)](LICENSE)
