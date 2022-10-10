# Swagger\Client\IssueApi

All URIs are relative to *{server}/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**issueCommentCommentIdDelete**](IssueApi.md#issuecommentcommentiddelete) | **DELETE** /issueComment/{commentId} | Delete issue comment
[**issueCommentCommentIdGet**](IssueApi.md#issuecommentcommentidget) | **GET** /issueComment/{commentId} | Get issue comment
[**issueCommentCommentIdPut**](IssueApi.md#issuecommentcommentidput) | **PUT** /issueComment/{commentId} | Update issue comment
[**issueGet**](IssueApi.md#issueget) | **GET** /issue | Get all issues
[**issueIssueIdCommentPost**](IssueApi.md#issueissueidcommentpost) | **POST** /issue/{issueId}/comment | Create a comment
[**issueIssueIdDelete**](IssueApi.md#issueissueiddelete) | **DELETE** /issue/{issueId} | Delete issue
[**issueIssueIdGet**](IssueApi.md#issueissueidget) | **GET** /issue/{issueId} | Get issue
[**issueIssueIdStatusPost**](IssueApi.md#issueissueidstatuspost) | **POST** /issue/{issueId}/{status} | Update an issue&#x27;s status
[**issuePost**](IssueApi.md#issuepost) | **POST** /issue | Create new issue

# **issueCommentCommentIdDelete**
> issueCommentCommentIdDelete($comment_id)

Delete issue comment

Deletes an issue comment. Only users with `MANAGE_ISSUES` or the user who created the comment can perform this action.

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

$apiInstance = new Swagger\Client\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$comment_id = "comment_id_example"; // string | Issue Comment ID

try {
    $apiInstance->issueCommentCommentIdDelete($comment_id);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueCommentCommentIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **comment_id** | **string**| Issue Comment ID |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **issueCommentCommentIdGet**
> \Swagger\Client\Model\IssueComment issueCommentCommentIdGet($comment_id)

Get issue comment

Returns a single issue comment in JSON format.

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

$apiInstance = new Swagger\Client\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$comment_id = "comment_id_example"; // string | 

try {
    $result = $apiInstance->issueCommentCommentIdGet($comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueCommentCommentIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **comment_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\IssueComment**](../Model/IssueComment.md)

### Authorization

[apiKey](../../README.md#apiKey), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **issueCommentCommentIdPut**
> \Swagger\Client\Model\IssueComment issueCommentCommentIdPut($body, $comment_id)

Update issue comment

Updates and returns a single issue comment in JSON format.

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

$apiInstance = new Swagger\Client\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\IssueCommentCommentIdBody(); // \Swagger\Client\Model\IssueCommentCommentIdBody | 
$comment_id = "comment_id_example"; // string | 

try {
    $result = $apiInstance->issueCommentCommentIdPut($body, $comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueCommentCommentIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\IssueCommentCommentIdBody**](../Model/IssueCommentCommentIdBody.md)|  |
 **comment_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\IssueComment**](../Model/IssueComment.md)

### Authorization

[apiKey](../../README.md#apiKey), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **issueGet**
> \Swagger\Client\Model\InlineResponse20035 issueGet($take, $skip, $sort, $filter, $requested_by)

Get all issues

Returns a list of issues in JSON format.

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

$apiInstance = new Swagger\Client\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$take = 1.2; // float | 
$skip = 1.2; // float | 
$sort = "added"; // string | 
$filter = "open"; // string | 
$requested_by = 1.2; // float | 

try {
    $result = $apiInstance->issueGet($take, $skip, $sort, $filter, $requested_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **take** | **float**|  | [optional]
 **skip** | **float**|  | [optional]
 **sort** | **string**|  | [optional] [default to added]
 **filter** | **string**|  | [optional] [default to open]
 **requested_by** | **float**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20035**](../Model/InlineResponse20035.md)

### Authorization

[apiKey](../../README.md#apiKey), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **issueIssueIdCommentPost**
> \Swagger\Client\Model\Issue issueIssueIdCommentPost($body, $issue_id)

Create a comment

Creates a comment and returns associated issue in JSON format.

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

$apiInstance = new Swagger\Client\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\IssueIdCommentBody(); // \Swagger\Client\Model\IssueIdCommentBody | 
$issue_id = 1.2; // float | 

try {
    $result = $apiInstance->issueIssueIdCommentPost($body, $issue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueIssueIdCommentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\IssueIdCommentBody**](../Model/IssueIdCommentBody.md)|  |
 **issue_id** | **float**|  |

### Return type

[**\Swagger\Client\Model\Issue**](../Model/Issue.md)

### Authorization

[apiKey](../../README.md#apiKey), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **issueIssueIdDelete**
> issueIssueIdDelete($issue_id)

Delete issue

Removes an issue. If the user has the `MANAGE_ISSUES` permission, any issue can be removed. Otherwise, only a users own issues can be removed.

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

$apiInstance = new Swagger\Client\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id = "issue_id_example"; // string | Issue ID

try {
    $apiInstance->issueIssueIdDelete($issue_id);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueIssueIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **issue_id** | **string**| Issue ID |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **issueIssueIdGet**
> \Swagger\Client\Model\Issue issueIssueIdGet($issue_id)

Get issue

Returns a single issue in JSON format.

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

$apiInstance = new Swagger\Client\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id = 1.2; // float | 

try {
    $result = $apiInstance->issueIssueIdGet($issue_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueIssueIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **issue_id** | **float**|  |

### Return type

[**\Swagger\Client\Model\Issue**](../Model/Issue.md)

### Authorization

[apiKey](../../README.md#apiKey), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **issueIssueIdStatusPost**
> \Swagger\Client\Model\Issue issueIssueIdStatusPost($issue_id, $status)

Update an issue's status

Updates an issue's status to approved or declined. Also returns the issue in a JSON object.  Requires the `MANAGE_ISSUES` permission or `ADMIN`.

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

$apiInstance = new Swagger\Client\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$issue_id = "issue_id_example"; // string | Issue ID
$status = "status_example"; // string | New status

try {
    $result = $apiInstance->issueIssueIdStatusPost($issue_id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issueIssueIdStatusPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **issue_id** | **string**| Issue ID |
 **status** | **string**| New status |

### Return type

[**\Swagger\Client\Model\Issue**](../Model/Issue.md)

### Authorization

[apiKey](../../README.md#apiKey), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **issuePost**
> \Swagger\Client\Model\Issue issuePost($body)

Create new issue

Creates a new issue

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

$apiInstance = new Swagger\Client\Api\IssueApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\IssueBody(); // \Swagger\Client\Model\IssueBody | 

try {
    $result = $apiInstance->issuePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssueApi->issuePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\IssueBody**](../Model/IssueBody.md)|  |

### Return type

[**\Swagger\Client\Model\Issue**](../Model/Issue.md)

### Authorization

[apiKey](../../README.md#apiKey), [cookieAuth](../../README.md#cookieAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

