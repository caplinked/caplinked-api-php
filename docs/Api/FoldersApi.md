# Swagger\Client\FoldersApi

All URIs are relative to *https://sandbox.caplinked.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteFoldersId**](FoldersApi.md#deleteFoldersId) | **DELETE** /folders/{id} | Delete folder
[**getFoldersId**](FoldersApi.md#getFoldersId) | **GET** /folders/{id} | Get folder information
[**postFolders**](FoldersApi.md#postFolders) | **POST** /folders | Create new folder
[**postFoldersIdCopy**](FoldersApi.md#postFoldersIdCopy) | **POST** /folders/{id}/copy | Copy folder
[**postFoldersIdMove**](FoldersApi.md#postFoldersIdMove) | **POST** /folders/{id}/move | Move folder
[**putFoldersId**](FoldersApi.md#putFoldersId) | **PUT** /folders/{id} | Update folder information


# **deleteFoldersId**
> \Swagger\Client\Model\FolderDelete deleteFoldersId($id, $workspace_id)

Delete folder

Delete folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FoldersApi();
$id = 56; // int | ID of folder to delete
$workspace_id = "workspace_id_example"; // string | ID of workspace

try {
    $result = $api_instance->deleteFoldersId($id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->deleteFoldersId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of folder to delete |
 **workspace_id** | **string**| ID of workspace |

### Return type

[**\Swagger\Client\Model\FolderDelete**](../Model/FolderDelete.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFoldersId**
> \Swagger\Client\Model\FolderContent getFoldersId($id, $workspace_id)

Get folder information

Get folder information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FoldersApi();
$id = 56; // int | ID of folder
$workspace_id = "workspace_id_example"; // string | ID of workspace

try {
    $result = $api_instance->getFoldersId($id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->getFoldersId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of folder |
 **workspace_id** | **string**| ID of workspace |

### Return type

[**\Swagger\Client\Model\FolderContent**](../Model/FolderContent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFolders**
> \Swagger\Client\Model\FolderMeta postFolders($workspace_id, $name, $parent_id)

Create new folder

Create new folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FoldersApi();
$workspace_id = "workspace_id_example"; // string | ID of workspace
$name = "name_example"; // string | Name of new folder
$parent_id = 0; // int | ID of parent folder (defaults to root folder [id=0])

try {
    $result = $api_instance->postFolders($workspace_id, $name, $parent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->postFolders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspace_id** | **string**| ID of workspace |
 **name** | **string**| Name of new folder |
 **parent_id** | **int**| ID of parent folder (defaults to root folder [id&#x3D;0]) | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\FolderMeta**](../Model/FolderMeta.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFoldersIdCopy**
> \Swagger\Client\Model\FolderCopyMove postFoldersIdCopy($id, $workspace_id, $destination_folder_id)

Copy folder

Copy folder into another folder (existing folder will not be modified). The copied folder will inherit group folder permissions from its new parent folder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FoldersApi();
$id = 56; // int | ID of folder to copy
$workspace_id = "workspace_id_example"; // string | ID of workspace
$destination_folder_id = 56; // int | ID of destination parent folder

try {
    $result = $api_instance->postFoldersIdCopy($id, $workspace_id, $destination_folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->postFoldersIdCopy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of folder to copy |
 **workspace_id** | **string**| ID of workspace |
 **destination_folder_id** | **int**| ID of destination parent folder |

### Return type

[**\Swagger\Client\Model\FolderCopyMove**](../Model/FolderCopyMove.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFoldersIdMove**
> \Swagger\Client\Model\FolderCopyMove postFoldersIdMove($id, $workspace_id, $destination_folder_id)

Move folder

Move folder into another folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FoldersApi();
$id = 56; // int | ID of folder to move
$workspace_id = "workspace_id_example"; // string | ID of workspace
$destination_folder_id = 56; // int | ID of destination parent folder

try {
    $result = $api_instance->postFoldersIdMove($id, $workspace_id, $destination_folder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->postFoldersIdMove: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of folder to move |
 **workspace_id** | **string**| ID of workspace |
 **destination_folder_id** | **int**| ID of destination parent folder |

### Return type

[**\Swagger\Client\Model\FolderCopyMove**](../Model/FolderCopyMove.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putFoldersId**
> \Swagger\Client\Model\FolderMeta putFoldersId($id, $workspace_id, $folder_name, $folder_index)

Update folder information

Update folder information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\FoldersApi();
$id = 56; // int | Update folder name and index
$workspace_id = "workspace_id_example"; // string | ID of workspace
$folder_name = "folder_name_example"; // string | Name of folder
$folder_index = 56; // int | Index number of folder within current folder scope (integer)

try {
    $result = $api_instance->putFoldersId($id, $workspace_id, $folder_name, $folder_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->putFoldersId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Update folder name and index |
 **workspace_id** | **string**| ID of workspace |
 **folder_name** | **string**| Name of folder | [optional]
 **folder_index** | **int**| Index number of folder within current folder scope (integer) | [optional]

### Return type

[**\Swagger\Client\Model\FolderMeta**](../Model/FolderMeta.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

