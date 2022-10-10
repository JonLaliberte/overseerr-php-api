# Swagger\Client\MediaApi

All URIs are relative to *{server}/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mediaGet**](MediaApi.md#mediaget) | **GET** /media | Get media
[**mediaMediaIdDelete**](MediaApi.md#mediamediaiddelete) | **DELETE** /media/{mediaId} | Delete media item
[**mediaMediaIdStatusPost**](MediaApi.md#mediamediaidstatuspost) | **POST** /media/{mediaId}/{status} | Update media status

# **mediaGet**
> \Swagger\Client\Model\InlineResponse20028 mediaGet($take, $skip, $filter, $sort)

Get media

Returns all media (can be filtered and limited) in a JSON object.

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

$apiInstance = new Swagger\Client\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$take = 1.2; // float | 
$skip = 1.2; // float | 
$filter = "filter_example"; // string | 
$sort = "added"; // string | 

try {
    $result = $apiInstance->mediaGet($take, $skip, $filter, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->mediaGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **take** | **float**|  | [optional]
 **skip** | **float**|  | [optional]
 **filter** | **string**|  | [optional]
 **sort** | **string**|  | [optional] [default to added]

### Return type

[**\Swagger\Client\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[apiKey](../../README.md#apiKey), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mediaMediaIdDelete**
> mediaMediaIdDelete($media_id)

Delete media item

Removes a media item. The `MANAGE_REQUESTS` permission is required to perform this action.

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

$apiInstance = new Swagger\Client\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$media_id = "media_id_example"; // string | Media ID

try {
    $apiInstance->mediaMediaIdDelete($media_id);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->mediaMediaIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **media_id** | **string**| Media ID |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mediaMediaIdStatusPost**
> \Swagger\Client\Model\MediaInfo mediaMediaIdStatusPost($media_id, $status, $body)

Update media status

Updates a media item's status and returns the media in JSON format

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

$apiInstance = new Swagger\Client\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$media_id = "media_id_example"; // string | Media ID
$status = "status_example"; // string | New status
$body = new \Swagger\Client\Model\MediaIdStatusBody(); // \Swagger\Client\Model\MediaIdStatusBody | 

try {
    $result = $apiInstance->mediaMediaIdStatusPost($media_id, $status, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->mediaMediaIdStatusPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **media_id** | **string**| Media ID |
 **status** | **string**| New status |
 **body** | [**\Swagger\Client\Model\MediaIdStatusBody**](../Model/MediaIdStatusBody.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\MediaInfo**](../Model/MediaInfo.md)

### Authorization

[apiKey](../../README.md#apiKey), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

