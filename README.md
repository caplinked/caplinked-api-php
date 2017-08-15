# caplinked-api-php
## Overview

PHP SDK for the [Caplinked API](https://developer.caplinked.com/).

Core information security endpoints for managing your virtual data room capabilities around files/folders, users/groups and permissions, uploads/downloads, dynamic watermarking, DRM (digital rights management) and more.

Vist [Caplinked](https://www.caplinked.com/data-protection-api/) for more information.
## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/caplinked-api-php/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

date_default_timezone_set('UTC');

$key = '0c1da72601ca7c39df77a317d93c1caefccxxxxx';
$secret_key = 'cad02b1a2593862c5f151a5b8496f6e60c8581c82697ad706d8930bbd56xxxxx';
$user_resource_key = '1b62543ca4f8311e9bd0e628705d76fb6acxxxxx';

$config = Caplinked\Configuration::getDefaultConfiguration();
$config->setApiKey('cl-api-key', $key);
$config->setApiKey('cl-api-secret-key', $secret_key);
$config->setApiKey('cl-api-user-token', $user_resource_key);
//$config->setDebug(true);
$api_client = new Caplinked\ApiClient($config);

$api_instance = new Caplinked\Api\UsersApi($api_client);

try {
    $result = $api_instance->getUsersMe();
    var_dump($result['first_name']); // string(23) "Arons"
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsersMe: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://sandbox.caplinked.com/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ActivitiesApi* | [**getActivitiesWorkspaceWorkspaceId**](docs/Api/ActivitiesApi.md#getactivitiesworkspaceworkspaceid) | **GET** /activities/workspace/{workspace_id} | Get workspace activities
*DownloadsApi* | [**deleteDownloadsId**](docs/Api/DownloadsApi.md#deletedownloadsid) | **DELETE** /downloads/{id} | Delete download
*DownloadsApi* | [**getDownloadsFileFileId**](docs/Api/DownloadsApi.md#getdownloadsfilefileid) | **GET** /downloads/file/{file_id} | Get single file
*DownloadsApi* | [**getDownloadsId**](docs/Api/DownloadsApi.md#getdownloadsid) | **GET** /downloads/{id} | Get zip
*DownloadsApi* | [**getDownloadsStatusWorkspaceId**](docs/Api/DownloadsApi.md#getdownloadsstatusworkspaceid) | **GET** /downloads/status/{workspace_id} | Get status of downloads for current user
*DownloadsApi* | [**postDownloads**](docs/Api/DownloadsApi.md#postdownloads) | **POST** /downloads | Create zip file
*FilesApi* | [**deleteFilesId**](docs/Api/FilesApi.md#deletefilesid) | **DELETE** /files/{id} | Delete file
*FilesApi* | [**getFilesId**](docs/Api/FilesApi.md#getfilesid) | **GET** /files/{id} | Get file information
*FilesApi* | [**postFilesIdCopy**](docs/Api/FilesApi.md#postfilesidcopy) | **POST** /files/{id}/copy | Copy file
*FilesApi* | [**postFilesIdMove**](docs/Api/FilesApi.md#postfilesidmove) | **POST** /files/{id}/move | Move file
*FilesApi* | [**putFilesId**](docs/Api/FilesApi.md#putfilesid) | **PUT** /files/{id} | Update file information
*FilesApi* | [**putFilesUpload**](docs/Api/FilesApi.md#putfilesupload) | **PUT** /files/upload | Upload file
*FoldersApi* | [**deleteFoldersId**](docs/Api/FoldersApi.md#deletefoldersid) | **DELETE** /folders/{id} | Delete folder
*FoldersApi* | [**getFoldersId**](docs/Api/FoldersApi.md#getfoldersid) | **GET** /folders/{id} | Get folder information
*FoldersApi* | [**postFolders**](docs/Api/FoldersApi.md#postfolders) | **POST** /folders | Create new folder
*FoldersApi* | [**postFoldersIdCopy**](docs/Api/FoldersApi.md#postfoldersidcopy) | **POST** /folders/{id}/copy | Copy folder
*FoldersApi* | [**postFoldersIdMove**](docs/Api/FoldersApi.md#postfoldersidmove) | **POST** /folders/{id}/move | Move folder
*FoldersApi* | [**putFoldersId**](docs/Api/FoldersApi.md#putfoldersid) | **PUT** /folders/{id} | Update folder information
*GroupsApi* | [**deleteGroupsId**](docs/Api/GroupsApi.md#deletegroupsid) | **DELETE** /groups/{id} | Delete group
*GroupsApi* | [**deleteGroupsIdMemberships**](docs/Api/GroupsApi.md#deletegroupsidmemberships) | **DELETE** /groups/{id}/memberships | Remove a user from a group
*GroupsApi* | [**getGroups**](docs/Api/GroupsApi.md#getgroups) | **GET** /groups | List all groups in workspace
*GroupsApi* | [**getGroupsId**](docs/Api/GroupsApi.md#getgroupsid) | **GET** /groups/{id} | Get group information
*GroupsApi* | [**getGroupsIdMemberships**](docs/Api/GroupsApi.md#getgroupsidmemberships) | **GET** /groups/{id}/memberships | List all memberships for a group
*GroupsApi* | [**postGroups**](docs/Api/GroupsApi.md#postgroups) | **POST** /groups | Create group
*GroupsApi* | [**postGroupsIdMemberships**](docs/Api/GroupsApi.md#postgroupsidmemberships) | **POST** /groups/{id}/memberships | Add user to group (adds to parent workspace if they are not already a member)
*GroupsApi* | [**putGroupsId**](docs/Api/GroupsApi.md#putgroupsid) | **PUT** /groups/{id} | Update group
*GroupsApi* | [**putGroupsIdDisableDrmExpiration**](docs/Api/GroupsApi.md#putgroupsiddisabledrmexpiration) | **PUT** /groups/{id}/disable_drm_expiration | Disable DRM expiration for group
*GroupsApi* | [**putGroupsIdDisableExpireAccess**](docs/Api/GroupsApi.md#putgroupsiddisableexpireaccess) | **PUT** /groups/{id}/disable_expire_access | Disable access expiration for a group
*GroupsApi* | [**putGroupsIdDrm**](docs/Api/GroupsApi.md#putgroupsiddrm) | **PUT** /groups/{id}/drm | Update DRM for group
*GroupsApi* | [**putGroupsIdEnableExpireAccess**](docs/Api/GroupsApi.md#putgroupsidenableexpireaccess) | **PUT** /groups/{id}/enable_expire_access | Enable access expiration for a group
*GroupsApi* | [**putGroupsIdWatermarking**](docs/Api/GroupsApi.md#putgroupsidwatermarking) | **PUT** /groups/{id}/watermarking | Watermarking for group
*OrganizationApi* | [**deleteOrganizationMemberships**](docs/Api/OrganizationApi.md#deleteorganizationmemberships) | **DELETE** /organization/memberships | Remove organization admin membership
*OrganizationApi* | [**getOrganization**](docs/Api/OrganizationApi.md#getorganization) | **GET** /organization | Get organization information
*OrganizationApi* | [**getOrganizationMemberships**](docs/Api/OrganizationApi.md#getorganizationmemberships) | **GET** /organization/memberships | Show all organization members
*OrganizationApi* | [**postOrganizationMemberships**](docs/Api/OrganizationApi.md#postorganizationmemberships) | **POST** /organization/memberships | Add organization admin membership
*OrganizationApi* | [**putOrganization**](docs/Api/OrganizationApi.md#putorganization) | **PUT** /organization | Update organization information
*OrganizationApi* | [**putOrganizationSupportInformation**](docs/Api/OrganizationApi.md#putorganizationsupportinformation) | **PUT** /organization/support_information | Update support information of organization
*PermissionsApi* | [**getPermissionsFoldersId**](docs/Api/PermissionsApi.md#getpermissionsfoldersid) | **GET** /permissions/folders/{id} | List subfolder permissions
*PermissionsApi* | [**putPermissionsFoldersId**](docs/Api/PermissionsApi.md#putpermissionsfoldersid) | **PUT** /permissions/folders/{id} | Update folder permissions
*TeamsApi* | [**deleteTeamsIdMemberships**](docs/Api/TeamsApi.md#deleteteamsidmemberships) | **DELETE** /teams/{id}/memberships | Remove team member
*TeamsApi* | [**getTeams**](docs/Api/TeamsApi.md#getteams) | **GET** /teams | List all teams in organization
*TeamsApi* | [**getTeamsId**](docs/Api/TeamsApi.md#getteamsid) | **GET** /teams/{id} | Get team information
*TeamsApi* | [**getTeamsIdMemberships**](docs/Api/TeamsApi.md#getteamsidmemberships) | **GET** /teams/{id}/memberships | Get list of team members
*TeamsApi* | [**getTeamsIdWatermarkSettings**](docs/Api/TeamsApi.md#getteamsidwatermarksettings) | **GET** /teams/{id}/watermark_settings | List custom watermarks for a team
*TeamsApi* | [**postTeams**](docs/Api/TeamsApi.md#postteams) | **POST** /teams | Create team
*TeamsApi* | [**postTeamsIdMemberships**](docs/Api/TeamsApi.md#postteamsidmemberships) | **POST** /teams/{id}/memberships | Add team member
*TeamsApi* | [**putTeamsId**](docs/Api/TeamsApi.md#putteamsid) | **PUT** /teams/{id} | Update team
*UsersApi* | [**deleteUsers**](docs/Api/UsersApi.md#deleteusers) | **DELETE** /users | Delete user
*UsersApi* | [**getUsersMe**](docs/Api/UsersApi.md#getusersme) | **GET** /users/me | Get user information
*UsersApi* | [**postUsers**](docs/Api/UsersApi.md#postusers) | **POST** /users | Create user
*UsersApi* | [**putUsersMe**](docs/Api/UsersApi.md#putusersme) | **PUT** /users/me | Update a user
*WatermarkApi* | [**deleteWatermarkId**](docs/Api/WatermarkApi.md#deletewatermarkid) | **DELETE** /watermark/{id} | Delete custom watermark
*WatermarkApi* | [**getWatermarkId**](docs/Api/WatermarkApi.md#getwatermarkid) | **GET** /watermark/{id} | Get custom watermark setting
*WatermarkApi* | [**postWatermark**](docs/Api/WatermarkApi.md#postwatermark) | **POST** /watermark | Add custom watermark
*WatermarkApi* | [**putWatermarkId**](docs/Api/WatermarkApi.md#putwatermarkid) | **PUT** /watermark/{id} | Update custom watermark
*WorkspacesApi* | [**getWorkspaces**](docs/Api/WorkspacesApi.md#getworkspaces) | **GET** /workspaces | List all workspaces for a team
*WorkspacesApi* | [**getWorkspacesId**](docs/Api/WorkspacesApi.md#getworkspacesid) | **GET** /workspaces/{id} | Get workspace information
*WorkspacesApi* | [**postWorkspaces**](docs/Api/WorkspacesApi.md#postworkspaces) | **POST** /workspaces | Create workspace
*WorkspacesApi* | [**putWorkspacesId**](docs/Api/WorkspacesApi.md#putworkspacesid) | **PUT** /workspaces/{id} | Update workspace


## Documentation For Models

 - [Activity](docs/Model/Activity.md)
 - [CustomWatermarkSetting](docs/Model/CustomWatermarkSetting.md)
 - [Delete](docs/Model/Delete.md)
 - [ExpiringUrl](docs/Model/ExpiringUrl.md)
 - [FileCopyMove](docs/Model/FileCopyMove.md)
 - [FileDelete](docs/Model/FileDelete.md)
 - [FileInfoCompact](docs/Model/FileInfoCompact.md)
 - [FileInfoMapped](docs/Model/FileInfoMapped.md)
 - [FileViewerImage](docs/Model/FileViewerImage.md)
 - [FolderContent](docs/Model/FolderContent.md)
 - [FolderCopyMove](docs/Model/FolderCopyMove.md)
 - [FolderDelete](docs/Model/FolderDelete.md)
 - [FolderList](docs/Model/FolderList.md)
 - [FolderMeta](docs/Model/FolderMeta.md)
 - [FolderUpdate](docs/Model/FolderUpdate.md)
 - [GroupInfo](docs/Model/GroupInfo.md)
 - [GroupInfoDeleted](docs/Model/GroupInfoDeleted.md)
 - [Membership](docs/Model/Membership.md)
 - [Meta](docs/Model/Meta.md)
 - [Organization](docs/Model/Organization.md)
 - [OrganizationMembership](docs/Model/OrganizationMembership.md)
 - [StatusMessage](docs/Model/StatusMessage.md)
 - [SupportInformation](docs/Model/SupportInformation.md)
 - [Team](docs/Model/Team.md)
 - [User](docs/Model/User.md)
 - [Workspace](docs/Model/Workspace.md)


## Documentation For Authorization

See example on [Getting Started](#getting-started)
