# Caplinked\GroupsApi

All URIs are relative to *https://sandbox.caplinked.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteGroupsId**](GroupsApi.md#deleteGroupsId) | **DELETE** /groups/{id} | Delete group
[**deleteGroupsIdMemberships**](GroupsApi.md#deleteGroupsIdMemberships) | **DELETE** /groups/{id}/memberships | Remove a user from a group
[**getGroups**](GroupsApi.md#getGroups) | **GET** /groups | List all groups in workspace
[**getGroupsId**](GroupsApi.md#getGroupsId) | **GET** /groups/{id} | Get group information
[**getGroupsIdMemberships**](GroupsApi.md#getGroupsIdMemberships) | **GET** /groups/{id}/memberships | List all memberships for a group
[**postGroups**](GroupsApi.md#postGroups) | **POST** /groups | Create group
[**postGroupsIdMemberships**](GroupsApi.md#postGroupsIdMemberships) | **POST** /groups/{id}/memberships | Add user to group (adds to parent workspace if they are not already a member)
[**putGroupsId**](GroupsApi.md#putGroupsId) | **PUT** /groups/{id} | Update group
[**putGroupsIdDisableDrmExpiration**](GroupsApi.md#putGroupsIdDisableDrmExpiration) | **PUT** /groups/{id}/disable_drm_expiration | Disable DRM expiration for group
[**putGroupsIdDisableExpireAccess**](GroupsApi.md#putGroupsIdDisableExpireAccess) | **PUT** /groups/{id}/disable_expire_access | Disable access expiration for a group
[**putGroupsIdDrm**](GroupsApi.md#putGroupsIdDrm) | **PUT** /groups/{id}/drm | Update DRM for group
[**putGroupsIdEnableExpireAccess**](GroupsApi.md#putGroupsIdEnableExpireAccess) | **PUT** /groups/{id}/enable_expire_access | Enable access expiration for a group
[**putGroupsIdWatermarking**](GroupsApi.md#putGroupsIdWatermarking) | **PUT** /groups/{id}/watermarking | Watermarking for group


# **deleteGroupsId**
> \Caplinked\Model\GroupInfoDeleted deleteGroupsId($id, $workspace_id)

Delete group

Delete group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\GroupsApi();
$id = 56; // int | ID of group to update
$workspace_id = 56; // int | Workspace ID for the group

try {
    $result = $api_instance->deleteGroupsId($id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->deleteGroupsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of group to update |
 **workspace_id** | **int**| Workspace ID for the group |

### Return type

[**\Caplinked\Model\GroupInfoDeleted**](../Model/GroupInfoDeleted.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGroupsIdMemberships**
> deleteGroupsIdMemberships($id, $workspace_id, $user_id)

Remove a user from a group

Remove a user from a group. Members of the Workspace Admin group may only be removed by other Workspace Admins. If Workspace Admin is Team Member, they may only be removed by another Team Member.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\GroupsApi();
$id = 56; // int | ID of the group you wish the user to be removed from
$workspace_id = 56; // int | Workspace ID for the group
$user_id = 56; // int | ID of the user to be removed from this group

try {
    $api_instance->deleteGroupsIdMemberships($id, $workspace_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->deleteGroupsIdMemberships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the group you wish the user to be removed from |
 **workspace_id** | **int**| Workspace ID for the group |
 **user_id** | **int**| ID of the user to be removed from this group |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroups**
> \Caplinked\Model\GroupInfo getGroups($workspace_id)

List all groups in workspace

List all groups in workspace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\GroupsApi();
$workspace_id = 56; // int | ID of workspace from which to list groups

try {
    $result = $api_instance->getGroups($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspace_id** | **int**| ID of workspace from which to list groups |

### Return type

[**\Caplinked\Model\GroupInfo**](../Model/GroupInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupsId**
> \Caplinked\Model\GroupInfo getGroupsId($id, $workspace_id)

Get group information

Get group information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\GroupsApi();
$id = 56; // int | ID of group
$workspace_id = 56; // int | Workspace ID for the group

try {
    $result = $api_instance->getGroupsId($id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroupsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of group |
 **workspace_id** | **int**| Workspace ID for the group |

### Return type

[**\Caplinked\Model\GroupInfo**](../Model/GroupInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroupsIdMemberships**
> \Caplinked\Model\User getGroupsIdMemberships($id, $workspace_id)

List all memberships for a group

List all memberships for a group. Note that Workspace Admins are in two groups: Workspace Admins and Team Admins. The latter contains workspace admins that are also Team Members of the workspace parent team.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\GroupsApi();
$id = 56; // int | ID of the group you want to list the members of
$workspace_id = 56; // int | Workspace ID for the group

try {
    $result = $api_instance->getGroupsIdMemberships($id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroupsIdMemberships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the group you want to list the members of |
 **workspace_id** | **int**| Workspace ID for the group |

### Return type

[**\Caplinked\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postGroups**
> \Caplinked\Model\GroupInfo postGroups($group_name, $group_workspace_id, $group_file_managing_abilities)

Create group

Create group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\GroupsApi();
$group_name = "group_name_example"; // string | Name of group
$group_workspace_id = 56; // int | Workspace ID for the group
$group_file_managing_abilities = true; // bool | Enable file managing abililies for uploading users

try {
    $result = $api_instance->postGroups($group_name, $group_workspace_id, $group_file_managing_abilities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_name** | **string**| Name of group |
 **group_workspace_id** | **int**| Workspace ID for the group |
 **group_file_managing_abilities** | **bool**| Enable file managing abililies for uploading users | [optional]

### Return type

[**\Caplinked\Model\GroupInfo**](../Model/GroupInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postGroupsIdMemberships**
> postGroupsIdMemberships($id, $workspace_id, $user_id, $send_email)

Add user to group (adds to parent workspace if they are not already a member)

Add user to group (adds to parent workspace if they are not already a member)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\GroupsApi();
$id = 56; // int | ID of the group you wish the user to be added to
$workspace_id = 56; // int | Workspace ID for the group
$user_id = 56; // int | ID of the user to be added to this group
$send_email = true; // bool | Send workspace invitation email to this user.  Defaults to true, use false if you do not want the email to be sent

try {
    $api_instance->postGroupsIdMemberships($id, $workspace_id, $user_id, $send_email);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->postGroupsIdMemberships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the group you wish the user to be added to |
 **workspace_id** | **int**| Workspace ID for the group |
 **user_id** | **int**| ID of the user to be added to this group |
 **send_email** | **bool**| Send workspace invitation email to this user.  Defaults to true, use false if you do not want the email to be sent | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putGroupsId**
> \Caplinked\Model\GroupInfo putGroupsId($id, $workspace_id, $group_name, $group_file_managing_abilities)

Update group

Update group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\GroupsApi();
$id = 56; // int | ID of group
$workspace_id = 56; // int | Workspace ID for the group
$group_name = "group_name_example"; // string | Name of group
$group_file_managing_abilities = true; // bool | Ability to delete, rename, and reindex files for uploading users

try {
    $result = $api_instance->putGroupsId($id, $workspace_id, $group_name, $group_file_managing_abilities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->putGroupsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of group |
 **workspace_id** | **int**| Workspace ID for the group |
 **group_name** | **string**| Name of group | [optional]
 **group_file_managing_abilities** | **bool**| Ability to delete, rename, and reindex files for uploading users | [optional]

### Return type

[**\Caplinked\Model\GroupInfo**](../Model/GroupInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putGroupsIdDisableDrmExpiration**
> \Caplinked\Model\GroupInfo putGroupsIdDisableDrmExpiration($id, $workspace_id)

Disable DRM expiration for group

Disable DRM expiration for group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\GroupsApi();
$id = 56; // int | ID of group to update
$workspace_id = 56; // int | Workspace ID for the group

try {
    $result = $api_instance->putGroupsIdDisableDrmExpiration($id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->putGroupsIdDisableDrmExpiration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of group to update |
 **workspace_id** | **int**| Workspace ID for the group |

### Return type

[**\Caplinked\Model\GroupInfo**](../Model/GroupInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putGroupsIdDisableExpireAccess**
> \Caplinked\Model\GroupInfo putGroupsIdDisableExpireAccess($id, $workspace_id)

Disable access expiration for a group

Disable access expiration for a group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\GroupsApi();
$id = 56; // int | ID of group to update
$workspace_id = 56; // int | Workspace ID for the group

try {
    $result = $api_instance->putGroupsIdDisableExpireAccess($id, $workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->putGroupsIdDisableExpireAccess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of group to update |
 **workspace_id** | **int**| Workspace ID for the group |

### Return type

[**\Caplinked\Model\GroupInfo**](../Model/GroupInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putGroupsIdDrm**
> \Caplinked\Model\GroupInfo putGroupsIdDrm($id, $workspace_id, $group_drm_enabled, $group_drm_expires_after)

Update DRM for group

Update DRM for group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\GroupsApi();
$id = 56; // int | ID of group to update
$workspace_id = 56; // int | Workspace ID for the group
$group_drm_enabled = "group_drm_enabled_example"; // string | Enable DRM for group
$group_drm_expires_after = new \DateTime("2013-10-20"); // \DateTime | Expire DRM after this date. Format: yyyy-mm-dd

try {
    $result = $api_instance->putGroupsIdDrm($id, $workspace_id, $group_drm_enabled, $group_drm_expires_after);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->putGroupsIdDrm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of group to update |
 **workspace_id** | **int**| Workspace ID for the group |
 **group_drm_enabled** | **string**| Enable DRM for group |
 **group_drm_expires_after** | **\DateTime**| Expire DRM after this date. Format: yyyy-mm-dd | [optional]

### Return type

[**\Caplinked\Model\GroupInfo**](../Model/GroupInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putGroupsIdEnableExpireAccess**
> \Caplinked\Model\GroupInfo putGroupsIdEnableExpireAccess($id, $workspace_id, $group_expire_workspace_access_at)

Enable access expiration for a group

Enable access expiration for a group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\GroupsApi();
$id = 56; // int | ID of group to update
$workspace_id = 56; // int | Workspace ID for the group
$group_expire_workspace_access_at = new \DateTime("2013-10-20"); // \DateTime | Expire access on the following date. Format: yyyy-mm-dd

try {
    $result = $api_instance->putGroupsIdEnableExpireAccess($id, $workspace_id, $group_expire_workspace_access_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->putGroupsIdEnableExpireAccess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of group to update |
 **workspace_id** | **int**| Workspace ID for the group |
 **group_expire_workspace_access_at** | **\DateTime**| Expire access on the following date. Format: yyyy-mm-dd |

### Return type

[**\Caplinked\Model\GroupInfo**](../Model/GroupInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putGroupsIdWatermarking**
> \Caplinked\Model\GroupInfo putGroupsIdWatermarking($id, $workspace_id, $group_watermarking)

Watermarking for group

Watermarking for group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\GroupsApi();
$id = 56; // int | ID of group to update
$workspace_id = 56; // int | Workspace ID for the group
$group_watermarking = true; // bool | Enable watermarking for group

try {
    $result = $api_instance->putGroupsIdWatermarking($id, $workspace_id, $group_watermarking);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->putGroupsIdWatermarking: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of group to update |
 **workspace_id** | **int**| Workspace ID for the group |
 **group_watermarking** | **bool**| Enable watermarking for group |

### Return type

[**\Caplinked\Model\GroupInfo**](../Model/GroupInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

