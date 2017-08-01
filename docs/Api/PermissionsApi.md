# Caplinked\PermissionsApi

All URIs are relative to *https://sandbox.caplinked.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPermissionsFoldersId**](PermissionsApi.md#getPermissionsFoldersId) | **GET** /permissions/folders/{id} | List subfolder permissions
[**putPermissionsFoldersId**](PermissionsApi.md#putPermissionsFoldersId) | **PUT** /permissions/folders/{id} | Update folder permissions


# **getPermissionsFoldersId**
> \Caplinked\Model\FolderList getPermissionsFoldersId($id, $workspace_id, $group_id)

List subfolder permissions

List subfolder permissions for a group. Will return an array of subfolders under the specified folder, along with their permissions information. For is_mixed_view, is_mixed_download, and is_mixed_upload: if attribute is set to true, it indicates that at least one (but not all) child folder with view, download, or upload attributes set to true, respectively. \"All Folders\" is the parent of all other folders within the workspace; its permissions will be returned if a folder is not specified.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\PermissionsApi();
$id = 56; // int | ID of folder (0 for root)
$workspace_id = 56; // int | ID of workspace
$group_id = 56; // int | ID of group

try {
    $result = $api_instance->getPermissionsFoldersId($id, $workspace_id, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->getPermissionsFoldersId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of folder (0 for root) |
 **workspace_id** | **int**| ID of workspace |
 **group_id** | **int**| ID of group |

### Return type

[**\Caplinked\Model\FolderList**](../Model/FolderList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPermissionsFoldersId**
> \Caplinked\Model\FolderUpdate putPermissionsFoldersId($id, $workspace_id, $group_id, $verb, $folder_action)

Update folder permissions

Update folder permissions for a group. View = TRUE, this means that group members can return the folder/file and its viewer image. Download = TRUE, this means tha that group members can create download containing the folder. Upload = TRUE, this mean that group members can create an upload object with the folder as a parent.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\PermissionsApi();
$id = 56; // int | ID of folder (0 for root)
$workspace_id = 56; // int | ID of workspace
$group_id = 56; // int | ID of group
$verb = "verb_example"; // string | Grant or revoke permission for folder
$folder_action = "folder_action_example"; // string | Permission type for folder

try {
    $result = $api_instance->putPermissionsFoldersId($id, $workspace_id, $group_id, $verb, $folder_action);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->putPermissionsFoldersId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of folder (0 for root) |
 **workspace_id** | **int**| ID of workspace |
 **group_id** | **int**| ID of group |
 **verb** | **string**| Grant or revoke permission for folder |
 **folder_action** | **string**| Permission type for folder |

### Return type

[**\Caplinked\Model\FolderUpdate**](../Model/FolderUpdate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

