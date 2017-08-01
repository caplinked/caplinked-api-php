# Swagger\Client\UsersApi

All URIs are relative to *https://sandbox.caplinked.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteUsers**](UsersApi.md#deleteUsers) | **DELETE** /users | Delete user
[**getUsersMe**](UsersApi.md#getUsersMe) | **GET** /users/me | Get user information
[**postUsers**](UsersApi.md#postUsers) | **POST** /users | Create user
[**putUsersMe**](UsersApi.md#putUsersMe) | **PUT** /users/me | Update a user


# **deleteUsers**
> \Swagger\Client\Model\StatusMessage deleteUsers($user_id)

Delete user

Delete user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UsersApi();
$user_id = 56; // int | ID of the user you want to delete

try {
    $result = $api_instance->deleteUsers($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->deleteUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| ID of the user you want to delete |

### Return type

[**\Swagger\Client\Model\StatusMessage**](../Model/StatusMessage.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsersMe**
> \Swagger\Client\Model\User getUsersMe()

Get user information

Get user information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UsersApi();

try {
    $result = $api_instance->getUsersMe();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsersMe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUsers**
> \Swagger\Client\Model\User postUsers($user_email, $user_first_name, $user_last_name, $user_time_zone)

Create user

Create user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UsersApi();
$user_email = "user_email_example"; // string | Email of new user
$user_first_name = "user_first_name_example"; // string | First of new user
$user_last_name = "user_last_name_example"; // string | Last name of new user
$user_time_zone = "user_time_zone_example"; // string | Time zone of new user

try {
    $result = $api_instance->postUsers($user_email, $user_first_name, $user_last_name, $user_time_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->postUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_email** | **string**| Email of new user |
 **user_first_name** | **string**| First of new user |
 **user_last_name** | **string**| Last name of new user |
 **user_time_zone** | **string**| Time zone of new user | [optional]

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putUsersMe**
> \Swagger\Client\Model\User putUsersMe($user_email, $user_first_name, $user_last_name, $user_time_zone)

Update a user

Update a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UsersApi();
$user_email = "user_email_example"; // string | Email of user to update
$user_first_name = "user_first_name_example"; // string | First name of user to update
$user_last_name = "user_last_name_example"; // string | Last name of user to update
$user_time_zone = "user_time_zone_example"; // string | Time zone of user to update

try {
    $result = $api_instance->putUsersMe($user_email, $user_first_name, $user_last_name, $user_time_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->putUsersMe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_email** | **string**| Email of user to update | [optional]
 **user_first_name** | **string**| First name of user to update | [optional]
 **user_last_name** | **string**| Last name of user to update | [optional]
 **user_time_zone** | **string**| Time zone of user to update | [optional]

### Return type

[**\Swagger\Client\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

