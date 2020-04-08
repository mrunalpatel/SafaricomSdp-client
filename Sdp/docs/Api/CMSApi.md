# Safaricom\Sdp\CMSApi

All URIs are relative to *https://dtsvc.safaricom.com:8480*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkSMS**](CMSApi.md#bulkSMS) | **POST** /api/public/CMS/bulksms | BulkSMS


# **bulkSMS**
> bulkSMS($body)

BulkSMS



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = Safaricom\Sdp\Configuration::getDefaultConfiguration()->setApiKey('X-Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Safaricom\Sdp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Authorization', 'Bearer');

$apiInstance = new Safaricom\Sdp\Api\CMSApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Safaricom\Sdp\model\BulkSMS(); // \Safaricom\Sdp\model\BulkSMS | Bulk SMS object that needs to be added

try {
    $apiInstance->bulkSMS($body);
} catch (Exception $e) {
    echo 'Exception when calling CMSApi->bulkSMS: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Safaricom\Sdp\model\BulkSMS**](../Model/BulkSMS.md)| Bulk SMS object that needs to be added |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

