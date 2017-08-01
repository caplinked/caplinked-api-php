# Swagger\Client\WatermarkApi

All URIs are relative to *https://sandbox.caplinked.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteWatermarkId**](WatermarkApi.md#deleteWatermarkId) | **DELETE** /watermark/{id} | Delete custom watermark
[**getWatermarkId**](WatermarkApi.md#getWatermarkId) | **GET** /watermark/{id} | Get custom watermark setting
[**postWatermark**](WatermarkApi.md#postWatermark) | **POST** /watermark | Add custom watermark
[**putWatermarkId**](WatermarkApi.md#putWatermarkId) | **PUT** /watermark/{id} | Update custom watermark


# **deleteWatermarkId**
> \Swagger\Client\Model\StatusMessage deleteWatermarkId($id)

Delete custom watermark

Delete custom watermark

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\WatermarkApi();
$id = 56; // int | ID of the watermark setting to delete

try {
    $result = $api_instance->deleteWatermarkId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WatermarkApi->deleteWatermarkId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the watermark setting to delete |

### Return type

[**\Swagger\Client\Model\StatusMessage**](../Model/StatusMessage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWatermarkId**
> \Swagger\Client\Model\CustomWatermarkSetting getWatermarkId($id)

Get custom watermark setting

Get custom watermark setting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\WatermarkApi();
$id = 56; // int | ID of the watermark setting

try {
    $result = $api_instance->getWatermarkId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WatermarkApi->getWatermarkId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the watermark setting |

### Return type

[**\Swagger\Client\Model\CustomWatermarkSetting**](../Model/CustomWatermarkSetting.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWatermark**
> \Swagger\Client\Model\CustomWatermarkSetting postWatermark($team_id, $custom_text, $color, $opacity, $font_size, $rotation, $hposition, $vposition, $display_user_name, $display_user_email, $display_ip_address, $display_time, $display_workspace_name)

Add custom watermark

Add custom watermark

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\WatermarkApi();
$team_id = 56; // int | ID of the team
$custom_text = "custom_text_example"; // string | Custom watermark text
$color = "#333333"; // string | Hexadecimal color value (i.e. #eee, #e1e1e1)
$opacity = 0.5; // float | Opacity 0 to 1.0
$font_size = 18; // int | Font size in pixels
$rotation = 0; // int | Rotation degrees (-90 to 90)
$hposition = "center"; // string | Horizontal position (left, center, right)
$vposition = "center"; // string | Vertical position (top, center, bottom)
$display_user_name = true; // bool | Display user name
$display_user_email = true; // bool | Display user email address
$display_ip_address = true; // bool | Display user IP address
$display_time = true; // bool | Display time
$display_workspace_name = true; // bool | Display workspace name

try {
    $result = $api_instance->postWatermark($team_id, $custom_text, $color, $opacity, $font_size, $rotation, $hposition, $vposition, $display_user_name, $display_user_email, $display_ip_address, $display_time, $display_workspace_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WatermarkApi->postWatermark: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_id** | **int**| ID of the team |
 **custom_text** | **string**| Custom watermark text |
 **color** | **string**| Hexadecimal color value (i.e. #eee, #e1e1e1) | [optional] [default to #333333]
 **opacity** | **float**| Opacity 0 to 1.0 | [optional] [default to 0.5]
 **font_size** | **int**| Font size in pixels | [optional] [default to 18]
 **rotation** | **int**| Rotation degrees (-90 to 90) | [optional] [default to 0]
 **hposition** | **string**| Horizontal position (left, center, right) | [optional] [default to center]
 **vposition** | **string**| Vertical position (top, center, bottom) | [optional] [default to center]
 **display_user_name** | **bool**| Display user name | [optional] [default to true]
 **display_user_email** | **bool**| Display user email address | [optional] [default to true]
 **display_ip_address** | **bool**| Display user IP address | [optional] [default to true]
 **display_time** | **bool**| Display time | [optional] [default to true]
 **display_workspace_name** | **bool**| Display workspace name | [optional]

### Return type

[**\Swagger\Client\Model\CustomWatermarkSetting**](../Model/CustomWatermarkSetting.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putWatermarkId**
> \Swagger\Client\Model\CustomWatermarkSetting putWatermarkId($id, $custom_text, $color, $opacity, $font_size, $rotation, $hposition, $vposition, $display_user_name, $display_user_email, $display_ip_address, $display_time, $display_workspace_name)

Update custom watermark

Update custom watermark

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\WatermarkApi();
$id = 56; // int | ID of the watermark setting to update
$custom_text = "custom_text_example"; // string | Custom watermark text
$color = "color_example"; // string | Hexadecimal color value (i.e. #eee, #e1e1e1)
$opacity = 3.4; // float | Opacity 0 to 1.0
$font_size = 56; // int | Font size in pixels
$rotation = 56; // int | Rotation degrees (-90 to 90)
$hposition = "hposition_example"; // string | Horizontal position (left, center, right)
$vposition = "vposition_example"; // string | Vertical position (top, center, bottom)
$display_user_name = true; // bool | Display user name
$display_user_email = true; // bool | Display user email address
$display_ip_address = true; // bool | Display user IP address
$display_time = true; // bool | Display time
$display_workspace_name = true; // bool | Display workspace name

try {
    $result = $api_instance->putWatermarkId($id, $custom_text, $color, $opacity, $font_size, $rotation, $hposition, $vposition, $display_user_name, $display_user_email, $display_ip_address, $display_time, $display_workspace_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WatermarkApi->putWatermarkId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the watermark setting to update |
 **custom_text** | **string**| Custom watermark text | [optional]
 **color** | **string**| Hexadecimal color value (i.e. #eee, #e1e1e1) | [optional]
 **opacity** | **float**| Opacity 0 to 1.0 | [optional]
 **font_size** | **int**| Font size in pixels | [optional]
 **rotation** | **int**| Rotation degrees (-90 to 90) | [optional]
 **hposition** | **string**| Horizontal position (left, center, right) | [optional]
 **vposition** | **string**| Vertical position (top, center, bottom) | [optional]
 **display_user_name** | **bool**| Display user name | [optional]
 **display_user_email** | **bool**| Display user email address | [optional]
 **display_ip_address** | **bool**| Display user IP address | [optional]
 **display_time** | **bool**| Display time | [optional]
 **display_workspace_name** | **bool**| Display workspace name | [optional]

### Return type

[**\Swagger\Client\Model\CustomWatermarkSetting**](../Model/CustomWatermarkSetting.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

