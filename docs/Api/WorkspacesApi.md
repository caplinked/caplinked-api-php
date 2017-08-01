# Caplinked\WorkspacesApi

All URIs are relative to *https://sandbox.caplinked.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getWorkspaces**](WorkspacesApi.md#getWorkspaces) | **GET** /workspaces | List all workspaces for a team
[**getWorkspacesId**](WorkspacesApi.md#getWorkspacesId) | **GET** /workspaces/{id} | Get workspace information
[**postWorkspaces**](WorkspacesApi.md#postWorkspaces) | **POST** /workspaces | Create workspace
[**putWorkspacesId**](WorkspacesApi.md#putWorkspacesId) | **PUT** /workspaces/{id} | Update workspace


# **getWorkspaces**
> \Caplinked\Model\Workspace getWorkspaces($team_id)

List all workspaces for a team

List all workspaces for a team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\WorkspacesApi();
$team_id = 56; // int | ID of team from which to list workspaces

try {
    $result = $api_instance->getWorkspaces($team_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->getWorkspaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_id** | **int**| ID of team from which to list workspaces |

### Return type

[**\Caplinked\Model\Workspace**](../Model/Workspace.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkspacesId**
> \Caplinked\Model\Workspace getWorkspacesId($id)

Get workspace information

Get workspace information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\WorkspacesApi();
$id = 56; // int | ID of workspace

try {
    $result = $api_instance->getWorkspacesId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->getWorkspacesId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of workspace |

### Return type

[**\Caplinked\Model\Workspace**](../Model/Workspace.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWorkspaces**
> \Caplinked\Model\Workspace postWorkspaces($team_id, $workspace_name)

Create workspace

Create workspace. Workspace creator will be added to Workspace Admins group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\WorkspacesApi();
$team_id = 56; // int | ID of parent team for this workspace
$workspace_name = "workspace_name_example"; // string | Name of workspace to create

try {
    $result = $api_instance->postWorkspaces($team_id, $workspace_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->postWorkspaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_id** | **int**| ID of parent team for this workspace |
 **workspace_name** | **string**| Name of workspace to create |

### Return type

[**\Caplinked\Model\Workspace**](../Model/Workspace.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putWorkspacesId**
> \Caplinked\Model\Workspace putWorkspacesId($id, $workspace_name)

Update workspace

Update workspace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\WorkspacesApi();
$id = 56; // int | ID of workspace to update
$workspace_name = "workspace_name_example"; // string | Name of workspace to update

try {
    $result = $api_instance->putWorkspacesId($id, $workspace_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspacesApi->putWorkspacesId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of workspace to update |
 **workspace_name** | **string**| Name of workspace to update | [optional]

### Return type

[**\Caplinked\Model\Workspace**](../Model/Workspace.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

