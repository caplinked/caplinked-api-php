# Swagger\Client\OrganizationApi

All URIs are relative to *https://sandbox.caplinked.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteOrganizationMemberships**](OrganizationApi.md#deleteOrganizationMemberships) | **DELETE** /organization/memberships | Remove organization admin membership
[**getOrganization**](OrganizationApi.md#getOrganization) | **GET** /organization | Get organization information
[**getOrganizationMemberships**](OrganizationApi.md#getOrganizationMemberships) | **GET** /organization/memberships | Show all organization members
[**postOrganizationMemberships**](OrganizationApi.md#postOrganizationMemberships) | **POST** /organization/memberships | Add organization admin membership
[**putOrganization**](OrganizationApi.md#putOrganization) | **PUT** /organization | Update organization information
[**putOrganizationSupportInformation**](OrganizationApi.md#putOrganizationSupportInformation) | **PUT** /organization/support_information | Update support information of organization


# **deleteOrganizationMemberships**
> deleteOrganizationMemberships($user_id)

Remove organization admin membership

Remove organization admin membership

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganizationApi();
$user_id = 56; // int | ID of user to be removed as an organization admin

try {
    $api_instance->deleteOrganizationMemberships($user_id);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->deleteOrganizationMemberships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| ID of user to be removed as an organization admin |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrganization**
> \Swagger\Client\Model\Organization getOrganization()

Get organization information

Get organization information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganizationApi();

try {
    $result = $api_instance->getOrganization();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->getOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Organization**](../Model/Organization.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrganizationMemberships**
> \Swagger\Client\Model\User getOrganizationMemberships()

Show all organization members

Show all organization members

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganizationApi();

try {
    $result = $api_instance->getOrganizationMemberships();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->getOrganizationMemberships: ', $e->getMessage(), PHP_EOL;
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

# **postOrganizationMemberships**
> \Swagger\Client\Model\OrganizationMembership postOrganizationMemberships($user_id)

Add organization admin membership

Add organization admin membership

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganizationApi();
$user_id = 56; // int | ID of user to be added as an organization admin

try {
    $result = $api_instance->postOrganizationMemberships($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->postOrganizationMemberships: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **int**| ID of user to be added as an organization admin |

### Return type

[**\Swagger\Client\Model\OrganizationMembership**](../Model/OrganizationMembership.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOrganization**
> \Swagger\Client\Model\Organization putOrganization($name, $description, $location, $billing_email, $url)

Update organization information

Update organization information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganizationApi();
$name = "name_example"; // string | Name of the organization to update
$description = "description_example"; // string | Description of the organization to update
$location = "location_example"; // string | Location of the organization to update
$billing_email = "billing_email_example"; // string | Billing email address of the organization to update
$url = "url_example"; // string | Website of the organization to update

try {
    $result = $api_instance->putOrganization($name, $description, $location, $billing_email, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->putOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the organization to update | [optional]
 **description** | **string**| Description of the organization to update | [optional]
 **location** | **string**| Location of the organization to update | [optional]
 **billing_email** | **string**| Billing email address of the organization to update | [optional]
 **url** | **string**| Website of the organization to update | [optional]

### Return type

[**\Swagger\Client\Model\Organization**](../Model/Organization.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putOrganizationSupportInformation**
> \Swagger\Client\Model\SupportInformation putOrganizationSupportInformation($phone_number, $email, $website)

Update support information of organization

Update support information of organization

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\OrganizationApi();
$phone_number = "phone_number_example"; // string | Support phone number of the organization to update
$email = "email_example"; // string | Support email of the organization to update
$website = "website_example"; // string | Support website of the organization to update

try {
    $result = $api_instance->putOrganizationSupportInformation($phone_number, $email, $website);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationApi->putOrganizationSupportInformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **phone_number** | **string**| Support phone number of the organization to update | [optional]
 **email** | **string**| Support email of the organization to update | [optional]
 **website** | **string**| Support website of the organization to update | [optional]

### Return type

[**\Swagger\Client\Model\SupportInformation**](../Model/SupportInformation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

