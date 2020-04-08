# Safaricom\Sdp\SDPApi

All URIs are relative to *https://dtsvc.safaricom.com:8480*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activate**](SDPApi.md#activate) | **POST** /api/public/SDP/activate | SDP Activate
[**deactivate**](SDPApi.md#deactivate) | **POST** /api/public/SDP/deactivate | Deactivate
[**payment**](SDPApi.md#payment) | **POST** /api/public/SDP/paymentRequest | Payment
[**refund**](SDPApi.md#refund) | **POST** /api/public/SDP/refundRequest | Refund
[**sendSMS**](SDPApi.md#sendSMS) | **POST** /api/public/SDP/sendSMSRequest | SendSMS


# **activate**
> activate($body)

SDP Activate



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Safaricom\Sdp\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Safaricom\Sdp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization', 'Bearer');

$apiInstance = new Safaricom\Sdp\Api\SDPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Safaricom\Sdp\model\Activate(); // \Safaricom\Sdp\model\Activate | Activate object that needs to be added

try {
    $apiInstance->activate($body);
} catch (Exception $e) {
    echo 'Exception when calling SDPApi->activate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Safaricom\Sdp\model\Activate**](../Model/Activate.md)| Activate object that needs to be added |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deactivate**
> deactivate($body)

Deactivate



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Safaricom\Sdp\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Safaricom\Sdp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization', 'Bearer');

$apiInstance = new Safaricom\Sdp\Api\SDPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Safaricom\Sdp\model\Deactivate(); // \Safaricom\Sdp\model\Deactivate | Deactivate object that needs to be added

try {
    $apiInstance->deactivate($body);
} catch (Exception $e) {
    echo 'Exception when calling SDPApi->deactivate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Safaricom\Sdp\model\Deactivate**](../Model/Deactivate.md)| Deactivate object that needs to be added |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payment**
> payment($body)

Payment



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Safaricom\Sdp\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Safaricom\Sdp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization', 'Bearer');

$apiInstance = new Safaricom\Sdp\Api\SDPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Safaricom\Sdp\model\Payment(); // \Safaricom\Sdp\model\Payment | Payment object that needs to be added

try {
    $apiInstance->payment($body);
} catch (Exception $e) {
    echo 'Exception when calling SDPApi->payment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Safaricom\Sdp\model\Payment**](../Model/Payment.md)| Payment object that needs to be added |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refund**
> refund($body)

Refund



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Safaricom\Sdp\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Safaricom\Sdp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization', 'Bearer');

$apiInstance = new Safaricom\Sdp\Api\SDPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Safaricom\Sdp\model\RefundRequest(); // \Safaricom\Sdp\model\RefundRequest | Refund object that needs to be added

try {
    $apiInstance->refund($body);
} catch (Exception $e) {
    echo 'Exception when calling SDPApi->refund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Safaricom\Sdp\model\RefundRequest**](../Model/RefundRequest.md)| Refund object that needs to be added |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendSMS**
> sendSMS($body)

SendSMS



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Safaricom\Sdp\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Safaricom\Sdp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization', 'Bearer');

$apiInstance = new Safaricom\Sdp\Api\SDPApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Safaricom\Sdp\model\SendSMSRequest(); // \Safaricom\Sdp\model\SendSMSRequest | SendSMS object that needs to be added

try {
    $apiInstance->sendSMS($body);
} catch (Exception $e) {
    echo 'Exception when calling SDPApi->sendSMS: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Safaricom\Sdp\model\SendSMSRequest**](../Model/SendSMSRequest.md)| SendSMS object that needs to be added |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

