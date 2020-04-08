# Safaricom\Sdp\AuthenticationApi

All URIs are relative to *https://dtsvc.safaricom.com:8480*

Method | HTTP request | Description
------------- | ------------- | -------------
[**login**](AuthenticationApi.md#login) | **POST** /api/auth/login | Login
[**refreshToken**](AuthenticationApi.md#refreshToken) | **GET** /api/auth/RefreshToken | Refresh Token


# **login**
> \Safaricom\Sdp\model\Order login($body, $content_type, $x_requested_with)

Login

API's for Authentication

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Safaricom\Sdp\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Safaricom\Sdp\model\Login(); // \Safaricom\Sdp\model\Login | Login placed for Authenticating in APIGateway
$content_type = "application/json"; // string | application/json
$x_requested_with = "XMLHttpRequest"; // string | XMLHttpRequest

try {
    $result = $apiInstance->login($body, $content_type, $x_requested_with);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->login: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Safaricom\Sdp\model\Login**](../Model/Login.md)| Login placed for Authenticating in APIGateway |
 **content_type** | **string**| application/json | [default to application/json]
 **x_requested_with** | **string**| XMLHttpRequest | [default to XMLHttpRequest]

### Return type

[**\Safaricom\Sdp\model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refreshToken**
> \Safaricom\Sdp\model\Order refreshToken($content_type, $x_requested_with, $x_authorization)

Refresh Token



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Safaricom\Sdp\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$content_type = "application/json"; // string | application/json
$x_requested_with = "XMLHttpRequest"; // string | XMLHttpRequest
$x_authorization = "Bearer"; // string | Bearer Place_Token

try {
    $result = $apiInstance->refreshToken($content_type, $x_requested_with, $x_authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->refreshToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **content_type** | **string**| application/json | [default to application/json]
 **x_requested_with** | **string**| XMLHttpRequest | [default to XMLHttpRequest]
 **x_authorization** | **string**| Bearer Place_Token | [default to Bearer ]

### Return type

[**\Safaricom\Sdp\model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

