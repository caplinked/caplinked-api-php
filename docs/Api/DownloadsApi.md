# Caplinked\DownloadsApi

All URIs are relative to *https://sandbox.caplinked.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteDownloadsId**](DownloadsApi.md#deleteDownloadsId) | **DELETE** /downloads/{id} | Delete download
[**getDownloadsFileFileId**](DownloadsApi.md#getDownloadsFileFileId) | **GET** /downloads/file/{file_id} | Get single file
[**getDownloadsId**](DownloadsApi.md#getDownloadsId) | **GET** /downloads/{id} | Get zip
[**getDownloadsStatusWorkspaceId**](DownloadsApi.md#getDownloadsStatusWorkspaceId) | **GET** /downloads/status/{workspace_id} | Get status of downloads for current user
[**postDownloads**](DownloadsApi.md#postDownloads) | **POST** /downloads | Create zip file


# **deleteDownloadsId**
> \Caplinked\Model\Delete deleteDownloadsId($id, $workspace_id)

Delete download

Delete download

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\DownloadsApi();
$id = 56; // int | ID of download to delete
$workspace_id = 56; // int | ID of Workspace

try {
    $result = $api_instance->deleteDownloadsId($id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadsApi->deleteDownloadsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of download to delete |
 **workspace_id** | **int**| ID of Workspace |

### Return type

[**\Caplinked\Model\Delete**](../Model/Delete.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDownloadsFileFileId**
> \Caplinked\Model\ExpiringUrl getDownloadsFileFileId($file_id, $workspace_id)

Get single file

Download single file without DRM applied

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\DownloadsApi();
$file_id = 56; // int | ID of file to download
$workspace_id = 56; // int | ID of Workspace

try {
    $result = $api_instance->getDownloadsFileFileId($file_id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadsApi->getDownloadsFileFileId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_id** | **int**| ID of file to download |
 **workspace_id** | **int**| ID of Workspace |

### Return type

[**\Caplinked\Model\ExpiringUrl**](../Model/ExpiringUrl.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDownloadsId**
> \Caplinked\Model\ExpiringUrl getDownloadsId($id, $workspace_id)

Get zip

Get a zip file of a previously created download object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\DownloadsApi();
$id = 56; // int | ID of download
$workspace_id = 56; // int | ID of Workspace

try {
    $result = $api_instance->getDownloadsId($id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadsApi->getDownloadsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of download |
 **workspace_id** | **int**| ID of Workspace |

### Return type

[**\Caplinked\Model\ExpiringUrl**](../Model/ExpiringUrl.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDownloadsStatusWorkspaceId**
> \Caplinked\Model\Meta getDownloadsStatusWorkspaceId($workspace_id)

Get status of downloads for current user

Get status of downloads created by current user within a specified workspace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\DownloadsApi();
$workspace_id = 56; // int | ID of Workspace

try {
    $result = $api_instance->getDownloadsStatusWorkspaceId($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadsApi->getDownloadsStatusWorkspaceId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspace_id** | **int**| ID of Workspace |

### Return type

[**\Caplinked\Model\Meta**](../Model/Meta.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postDownloads**
> \Caplinked\Model\Meta postDownloads($workspace_id, $download_folder_ids, $download_file_ids)

Create zip file

Create download object containing folders and/or files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\DownloadsApi();
$workspace_id = 56; // int | ID of Workspace
$download_folder_ids = array(56); // int[] | IDs of folders to include in download
$download_file_ids = array(56); // int[] | IDs of files to include in download

try {
    $result = $api_instance->postDownloads($workspace_id, $download_folder_ids, $download_file_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadsApi->postDownloads: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspace_id** | **int**| ID of Workspace |
 **download_folder_ids** | [**int[]**](../Model/int.md)| IDs of folders to include in download | [optional]
 **download_file_ids** | [**int[]**](../Model/int.md)| IDs of files to include in download | [optional]

### Return type

[**\Caplinked\Model\Meta**](../Model/Meta.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

