# Swagger\Client\ServiceApi

All URIs are relative to *{server}/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**serviceRadarrGet**](ServiceApi.md#serviceradarrget) | **GET** /service/radarr | Get non-sensitive Radarr server list
[**serviceRadarrRadarrIdGet**](ServiceApi.md#serviceradarrradarridget) | **GET** /service/radarr/{radarrId} | Get Radarr server quality profiles and root folders
[**serviceSonarrGet**](ServiceApi.md#servicesonarrget) | **GET** /service/sonarr | Get non-sensitive Sonarr server list
[**serviceSonarrLookupTmdbIdGet**](ServiceApi.md#servicesonarrlookuptmdbidget) | **GET** /service/sonarr/lookup/{tmdbId} | Get series from Sonarr
[**serviceSonarrSonarrIdGet**](ServiceApi.md#servicesonarrsonarridget) | **GET** /service/sonarr/{sonarrId} | Get Sonarr server quality profiles and root folders

# **serviceRadarrGet**
> \Swagger\Client\Model\RadarrSettings[] serviceRadarrGet()

Get non-sensitive Radarr server list

Returns a list of Radarr server IDs and names in a JSON object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');// Configure API key authorization: cookieAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('connect.sid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('connect.sid', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->serviceRadarrGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->serviceRadarrGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\RadarrSettings[]**](../Model/RadarrSettings.md)

### Authorization

[apiKey](../../README.md#apiKey), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceRadarrRadarrIdGet**
> \Swagger\Client\Model\InlineResponse20029 serviceRadarrRadarrIdGet($radarr_id)

Get Radarr server quality profiles and root folders

Returns a Radarr server's quality profile and root folder details in a JSON object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');// Configure API key authorization: cookieAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('connect.sid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('connect.sid', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$radarr_id = 1.2; // float | 

try {
    $result = $apiInstance->serviceRadarrRadarrIdGet($radarr_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->serviceRadarrRadarrIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **radarr_id** | **float**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

[apiKey](../../README.md#apiKey), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceSonarrGet**
> \Swagger\Client\Model\SonarrSettings[] serviceSonarrGet()

Get non-sensitive Sonarr server list

Returns a list of Sonarr server IDs and names in a JSON object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');// Configure API key authorization: cookieAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('connect.sid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('connect.sid', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->serviceSonarrGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->serviceSonarrGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\SonarrSettings[]**](../Model/SonarrSettings.md)

### Authorization

[apiKey](../../README.md#apiKey), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceSonarrLookupTmdbIdGet**
> \Swagger\Client\Model\SonarrSeries[] serviceSonarrLookupTmdbIdGet($tmdb_id)

Get series from Sonarr

Returns a list of series returned by searching for the name in Sonarr.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');// Configure API key authorization: cookieAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('connect.sid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('connect.sid', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tmdb_id = 1.2; // float | 

try {
    $result = $apiInstance->serviceSonarrLookupTmdbIdGet($tmdb_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->serviceSonarrLookupTmdbIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tmdb_id** | **float**|  |

### Return type

[**\Swagger\Client\Model\SonarrSeries[]**](../Model/SonarrSeries.md)

### Authorization

[apiKey](../../README.md#apiKey), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **serviceSonarrSonarrIdGet**
> \Swagger\Client\Model\InlineResponse20030 serviceSonarrSonarrIdGet($sonarr_id)

Get Sonarr server quality profiles and root folders

Returns a Sonarr server's quality profile and root folder details in a JSON object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: apiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-Api-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Api-Key', 'Bearer');// Configure API key authorization: cookieAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('connect.sid', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('connect.sid', 'Bearer');

$apiInstance = new Swagger\Client\Api\ServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sonarr_id = 1.2; // float | 

try {
    $result = $apiInstance->serviceSonarrSonarrIdGet($sonarr_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceApi->serviceSonarrSonarrIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sonarr_id** | **float**|  |

### Return type

[**\Swagger\Client\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

[apiKey](../../README.md#apiKey), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

