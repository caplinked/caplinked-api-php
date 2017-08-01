# Caplinked\TeamsApi

All URIs are relative to *https://sandbox.caplinked.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteTeamsIdMemberships**](TeamsApi.md#deleteTeamsIdMemberships) | **DELETE** /teams/{id}/memberships | Remove team member
[**getTeams**](TeamsApi.md#getTeams) | **GET** /teams | List all teams in organization
[**getTeamsId**](TeamsApi.md#getTeamsId) | **GET** /teams/{id} | Get team information
[**getTeamsIdMemberships**](TeamsApi.md#getTeamsIdMemberships) | **GET** /teams/{id}/memberships | Get list of team members
[**getTeamsIdWatermarkSettings**](TeamsApi.md#getTeamsIdWatermarkSettings) | **GET** /teams/{id}/watermark_settings | List custom watermarks for a team
[**postTeams**](TeamsApi.md#postTeams) | **POST** /teams | Create team
[**postTeamsIdMemberships**](TeamsApi.md#postTeamsIdMemberships) | **POST** /teams/{id}/memberships | Add team member
[**putTeamsId**](TeamsApi.md#putTeamsId) | **PUT** /teams/{id} | Update team


# **deleteTeamsIdMemberships**
> deleteTeamsIdMemberships($id, $user_id)

Remove team member

Remove team member

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\TeamsApi();
$id = 56; // int | ID of team from which user will be removed
$user_id = 56; // int | ID of user to remove

try {
    $api_instance->deleteTeamsIdMemberships($id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->deleteTeamsIdMemberships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of team from which user will be removed |
 **user_id** | **int**| ID of user to remove |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTeams**
> \Caplinked\Model\Team getTeams()

List all teams in organization

List all teams in organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\TeamsApi();

try {
    $result = $api_instance->getTeams();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getTeams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Caplinked\Model\Team**](../Model/Team.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTeamsId**
> \Caplinked\Model\Team getTeamsId($id)

Get team information

Get team information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\TeamsApi();
$id = 56; // int | ID of the Team

try {
    $result = $api_instance->getTeamsId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getTeamsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the Team |

### Return type

[**\Caplinked\Model\Team**](../Model/Team.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTeamsIdMemberships**
> \Caplinked\Model\Membership[] getTeamsIdMemberships($id)

Get list of team members

Get list of team members

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\TeamsApi();
$id = 56; // int | ID of team for which users will be listed

try {
    $result = $api_instance->getTeamsIdMemberships($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getTeamsIdMemberships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of team for which users will be listed |

### Return type

[**\Caplinked\Model\Membership[]**](../Model/Membership.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTeamsIdWatermarkSettings**
> \Caplinked\Model\CustomWatermarkSetting getTeamsIdWatermarkSettings($id)

List custom watermarks for a team

List custom watermarks for a team

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\TeamsApi();
$id = 56; // int | ID of team

try {
    $result = $api_instance->getTeamsIdWatermarkSettings($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->getTeamsIdWatermarkSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of team |

### Return type

[**\Caplinked\Model\CustomWatermarkSetting**](../Model/CustomWatermarkSetting.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTeams**
> \Caplinked\Model\Team postTeams($team_name, $team_allowed_workspaces, $team_allowed_admins, $team_drm_enabled, $team_watermarking, $team_suppress_emails)

Create team

Create team. Current user will become team owner.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\TeamsApi();
$team_name = "team_name_example"; // string | Name of the team
$team_allowed_workspaces = 1; // int | Maximum workspaces for team
$team_allowed_admins = 10; // int | Maximum number of admins for team
$team_drm_enabled = true; // bool | Toggle DRM (feature availability in workspaces)
$team_watermarking = true; // bool | Toggle watermarking (feature availability in workspaces)
$team_suppress_emails = true; // bool | Toggle email invites

try {
    $result = $api_instance->postTeams($team_name, $team_allowed_workspaces, $team_allowed_admins, $team_drm_enabled, $team_watermarking, $team_suppress_emails);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->postTeams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team_name** | **string**| Name of the team |
 **team_allowed_workspaces** | **int**| Maximum workspaces for team | [optional] [default to 1]
 **team_allowed_admins** | **int**| Maximum number of admins for team | [optional] [default to 10]
 **team_drm_enabled** | **bool**| Toggle DRM (feature availability in workspaces) | [optional]
 **team_watermarking** | **bool**| Toggle watermarking (feature availability in workspaces) | [optional]
 **team_suppress_emails** | **bool**| Toggle email invites | [optional] [default to true]

### Return type

[**\Caplinked\Model\Team**](../Model/Team.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTeamsIdMemberships**
> \Caplinked\Model\Membership postTeamsIdMemberships($id, $user_id)

Add team member

Add team member

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\TeamsApi();
$id = 56; // int | ID of team to which user will be added
$user_id = 56; // int | ID of user to add

try {
    $result = $api_instance->postTeamsIdMemberships($id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->postTeamsIdMemberships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of team to which user will be added |
 **user_id** | **int**| ID of user to add |

### Return type

[**\Caplinked\Model\Membership**](../Model/Membership.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTeamsId**
> \Caplinked\Model\Team putTeamsId($id, $team_name, $team_team_owner_id, $team_allowed_workspaces, $team_allowed_admins, $team_drm_enabled, $team_watermarking, $team_suppress_emails)

Update team

Update team. Includes option to designate a new Team Owner.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Caplinked\Api\TeamsApi();
$id = 56; // int | ID of team to update
$team_name = "team_name_example"; // string | Name of the team
$team_team_owner_id = 56; // int | User ID of the team owner
$team_allowed_workspaces = 56; // int | Maximum workspaces for team
$team_allowed_admins = 56; // int | Maximum number of admins for team
$team_drm_enabled = true; // bool | Toggle DRM (feature availability in workspaces)
$team_watermarking = true; // bool | Toggle watermarking (feature availability in workspaces)
$team_suppress_emails = true; // bool | Toggle email invites

try {
    $result = $api_instance->putTeamsId($id, $team_name, $team_team_owner_id, $team_allowed_workspaces, $team_allowed_admins, $team_drm_enabled, $team_watermarking, $team_suppress_emails);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsApi->putTeamsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of team to update |
 **team_name** | **string**| Name of the team | [optional]
 **team_team_owner_id** | **int**| User ID of the team owner | [optional]
 **team_allowed_workspaces** | **int**| Maximum workspaces for team | [optional]
 **team_allowed_admins** | **int**| Maximum number of admins for team | [optional]
 **team_drm_enabled** | **bool**| Toggle DRM (feature availability in workspaces) | [optional]
 **team_watermarking** | **bool**| Toggle watermarking (feature availability in workspaces) | [optional]
 **team_suppress_emails** | **bool**| Toggle email invites | [optional]

### Return type

[**\Caplinked\Model\Team**](../Model/Team.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

