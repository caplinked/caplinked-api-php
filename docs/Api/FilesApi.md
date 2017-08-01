# Caplinked\FilesApi

All URIs are relative to *https://sandbox.caplinked.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteFilesId**](FilesApi.md#deleteFilesId) | **DELETE** /files/{id} | Delete file
[**getFilesId**](FilesApi.md#getFilesId) | **GET** /files/{id} | Get file information
[**postFilesIdCopy**](FilesApi.md#postFilesIdCopy) | **POST** /files/{id}/copy | Copy file
[**postFilesIdMove**](FilesApi.md#postFilesIdMove) | **POST** /files/{id}/move | Move file
[**putFilesId**](FilesApi.md#putFilesId) | **PUT** /files/{id} | Update file information
[**putFilesUpload**](FilesApi.md#putFilesUpload) | **PUT** /files/upload | Upload file


# **deleteFilesId**
> \Caplinked\Model\FileDelete deleteFilesId($id, $workspace_id)

Delete file

Delete file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\FilesApi();
$id = 56; // int | ID of file to delete
$workspace_id = 56; // int | ID of workspace

try {
    $result = $api_instance->deleteFilesId($id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->deleteFilesId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of file to delete |
 **workspace_id** | **int**| ID of workspace |

### Return type

[**\Caplinked\Model\FileDelete**](../Model/FileDelete.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFilesId**
> \Caplinked\Model\FileInfoMapped getFilesId($id, $workspace_id, $page_number)

Get file information

Get file information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\FilesApi();
$id = 56; // int | ID of file
$workspace_id = 56; // int | ID of workspace
$page_number = 1; // int | Page number of file (for viewer tokens)

try {
    $result = $api_instance->getFilesId($id, $workspace_id, $page_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFilesId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of file |
 **workspace_id** | **int**| ID of workspace |
 **page_number** | **int**| Page number of file (for viewer tokens) | [optional] [default to 1]

### Return type

[**\Caplinked\Model\FileInfoMapped**](../Model/FileInfoMapped.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFilesIdCopy**
> \Caplinked\Model\FileCopyMove postFilesIdCopy($id, $workspace_id, $destination_folder_id)

Copy file

Copy file into another folder (existing file will not be modified)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\FilesApi();
$id = 56; // int | ID of file to copy
$workspace_id = 56; // int | ID of workspace
$destination_folder_id = 56; // int | ID of destination parent folder

try {
    $result = $api_instance->postFilesIdCopy($id, $workspace_id, $destination_folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->postFilesIdCopy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of file to copy |
 **workspace_id** | **int**| ID of workspace |
 **destination_folder_id** | **int**| ID of destination parent folder |

### Return type

[**\Caplinked\Model\FileCopyMove**](../Model/FileCopyMove.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFilesIdMove**
> \Caplinked\Model\FileCopyMove postFilesIdMove($id, $workspace_id, $destination_folder_id)

Move file

Move file into another folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\FilesApi();
$id = 56; // int | ID of file to move
$workspace_id = 56; // int | ID of workspace
$destination_folder_id = 56; // int | ID of destination parent folder

try {
    $result = $api_instance->postFilesIdMove($id, $workspace_id, $destination_folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->postFilesIdMove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of file to move |
 **workspace_id** | **int**| ID of workspace |
 **destination_folder_id** | **int**| ID of destination parent folder |

### Return type

[**\Caplinked\Model\FileCopyMove**](../Model/FileCopyMove.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putFilesId**
> \Caplinked\Model\FileInfoMapped putFilesId($id, $workspace_id, $file_title, $file_index)

Update file information

Update file information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\FilesApi();
$id = 56; // int | ID of file
$workspace_id = 56; // int | ID of workspace
$file_title = "file_title_example"; // string | Title of file
$file_index = 56; // int | Index number of file within current folder scope (integer)

try {
    $result = $api_instance->putFilesId($id, $workspace_id, $file_title, $file_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->putFilesId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of file |
 **workspace_id** | **int**| ID of workspace |
 **file_title** | **string**| Title of file | [optional]
 **file_index** | **int**| Index number of file within current folder scope (integer) | [optional]

### Return type

[**\Caplinked\Model\FileInfoMapped**](../Model/FileInfoMapped.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putFilesUpload**
> \Caplinked\Model\FileInfoCompact putFilesUpload($workspace_id, $folder_id, $file_name)

Upload file

Create or update a file with the same file name. Request body should be the file body itself as binary data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\FilesApi();
$workspace_id = 56; // int | Workspace ID
$folder_id = 56; // int | Folder ID
$file_name = "file_name_example"; // string | File name

try {
    $result = $api_instance->putFilesUpload($workspace_id, $folder_id, $file_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->putFilesUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspace_id** | **int**| Workspace ID |
 **folder_id** | **int**| Folder ID |
 **file_name** | **string**| File name |

### Return type

[**\Caplinked\Model\FileInfoCompact**](../Model/FileInfoCompact.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

