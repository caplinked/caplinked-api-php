# Swagger\Client\ActivitiesApi

All URIs are relative to *https://sandbox.caplinked.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getActivitiesWorkspaceWorkspaceId**](ActivitiesApi.md#getActivitiesWorkspaceWorkspaceId) | **GET** /activities/workspace/{workspace_id} | Get workspace activities


# **getActivitiesWorkspaceWorkspaceId**
> \Swagger\Client\Model\Activity getActivitiesWorkspaceWorkspaceId($workspace_id, $page, $per_page, $user_id)

Get workspace activities

Get workspace activities

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ActivitiesApi();
$workspace_id = 56; // int | ID of the workspace
$page = 1; // int | Page number of results
$per_page = 100; // int | Per page number of results. Options: 25, 50, 75, 100
$user_id = 56; // int | ID of the user

try {
    $result = $api_instance->getActivitiesWorkspaceWorkspaceId($workspace_id, $page, $per_page, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->getActivitiesWorkspaceWorkspaceId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspace_id** | **int**| ID of the workspace |
 **page** | **int**| Page number of results | [optional] [default to 1]
 **per_page** | **int**| Per page number of results. Options: 25, 50, 75, 100 | [optional] [default to 100]
 **user_id** | **int**| ID of the user | [optional]

### Return type

[**\Swagger\Client\Model\Activity**](../Model/Activity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

