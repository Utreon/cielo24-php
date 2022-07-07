# Cielo24\AccountApi

All URIs are relative to https://api.cielo24.com/api.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSettings()**](AccountApi.md#getSettings) | **GET** /account/get_settings | 
[**login()**](AccountApi.md#login) | **POST** /account/login | 
[**logout()**](AccountApi.md#logout) | **POST** /account/logout | 
[**verifyKey()**](AccountApi.md#verifyKey) | **GET** /account/verify_key | 


## `getSettings()`

```php
getSettings($v): object
```



Get Account Settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Cielo24\Configuration::getDefaultConfiguration()->setApiKey('api_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cielo24\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_token', 'Bearer');


$apiInstance = new Cielo24\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v = 1; // int

try {
    $result = $apiInstance->getSettings($v);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **v** | **int**|  | [default to 1]

### Return type

**object**

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `login()`

```php
login($v, $login_body): \Cielo24\Model\LoginResponse
```



Login to the cielo24 API to obtain an API access token for use when calling other methods. Optional arguments may be passed either as HTTP headers or query string parameters. Required arguments must be passed as query string parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Cielo24\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$v = 1; // int
$login_body = new \Cielo24\Model\LoginBody(); // \Cielo24\Model\LoginBody

try {
    $result = $apiInstance->login($v, $login_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->login: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **v** | **int**|  | [default to 1]
 **login_body** | [**\Cielo24\Model\LoginBody**](../Model/LoginBody.md)|  |

### Return type

[**\Cielo24\Model\LoginResponse**](../Model/LoginResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logout()`

```php
logout($v)
```



Logout of the current session, invalidating the API token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Cielo24\Configuration::getDefaultConfiguration()->setApiKey('api_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cielo24\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_token', 'Bearer');


$apiInstance = new Cielo24\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v = 1; // int

try {
    $apiInstance->logout($v);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->logout: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **v** | **int**|  | [default to 1]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyKey()`

```php
verifyKey($v): \Cielo24\Model\VerifyKeyResponse
```



Test Auth

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = Cielo24\Configuration::getDefaultConfiguration()->setApiKey('api_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Cielo24\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api_token', 'Bearer');


$apiInstance = new Cielo24\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$v = 1; // int

try {
    $result = $apiInstance->verifyKey($v);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->verifyKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **v** | **int**|  | [default to 1]

### Return type

[**\Cielo24\Model\VerifyKeyResponse**](../Model/VerifyKeyResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
