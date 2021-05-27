# OpenAPIServer
This API is based on the REST API architecture, allowing the user to easily manage their data with this resource-based approach.

Every API call is established on which specific request type (GET, POST, PUT, DELETE) will be used.

To start using this API, you will need your Access Token (available <a target=\"_blank\" href=\"https://elasticemail.com/account#/settings/new/manage-api\">here</a>). Remember to keep it safe. Required access levels are listed in the given request’s description.

This is the documentation for REST API. If you’d like to read our legacy documentation regarding Web API v2 click <a target=\"_blank\" href=\"https://api.elasticemail.com/public/help\">here</a>.

Downloadable library clients can be found in our Github repository <a target=\"_blank\" href=\"https://github.com/ElasticEmail?tab=repositories&q=%22rest+api%22+in%3Areadme\">here</a>

This [Symfony](https://symfony.com/) bundle is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 4.0.0
- Package version: 4.0.12
- Build package: org.openapitools.codegen.languages.PhpSymfonyServerCodegen

## Requirements

PHP 7.1.3 and later

## Installation & Usage

To install the dependencies via [Composer](http://getcomposer.org/), add the following repository to `composer.json` of your Symfony project:

```json
{
    "repositories": [{
        "type": "path",
        "url": "//Path to your generated openapi bundle"
    }],
}
```

Then run:

```
composer require elasticemail/elasticemail-php-symfony:dev-master
```

to add the generated openapi bundle as a dependency.

## Tests

To run the unit tests for the generated bundle, first navigate to the directory containing the code, then run the following commands:

```
composer install
./vendor/bin/phpunit
```


## Getting Started

Step 1: Please follow the [installation procedure](#installation--usage) first.

Step 2: Enable the bundle in the kernel:

```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new ElasticEmail\OpenAPIServerBundle(),
        // ...
    );
}
```

Step 3: Register the routes:

```yaml
# app/config/routing.yml
open_api_server:
    resource: "@OpenAPIServerBundle/Resources/config/routing.yml"
```

Step 4: Implement the API calls:

```php
<?php
// src/Acme/MyBundle/Api/CampaignsApiInterface.php

namespace Acme\MyBundle\Api;

use ElasticEmail\Api\CampaignsApiInterface;

class CampaignsApi implements CampaignsApiInterface // An interface is autogenerated
{

    /**
     * Configure API key authorization: apikey
     */
    public function setapikey($apiKey)
    {
        // Retrieve logged in user from $apiKey ...
    }
    
    /**
     * Implementation of CampaignsApiInterface#campaignsByNameDelete
     */
    public function campaignsByNameDelete($name)
    {
        // Implement the operation ...
    }

    // Other operation methods ...
}
```

Step 5: Tag your API implementation:

```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.campaigns:
        class: Acme\MyBundle\Api\CampaignsApi
        tags:
            - { name: "open_api_server.api", api: "campaigns" }
    # ...
```

Now you can start using the bundle!


## Documentation for API Endpoints

All URIs are relative to *https://api.elasticemail.com/v4*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CampaignsApiInterface* | [**campaignsByNameDelete**](Resources/docs/Api/CampaignsApiInterface.md#campaignsbynamedelete) | **DELETE** /campaigns/{name} | Delete Campaign
*CampaignsApiInterface* | [**campaignsByNameGet**](Resources/docs/Api/CampaignsApiInterface.md#campaignsbynameget) | **GET** /campaigns/{name} | Load Campaign
*CampaignsApiInterface* | [**campaignsByNamePut**](Resources/docs/Api/CampaignsApiInterface.md#campaignsbynameput) | **PUT** /campaigns/{name} | Update Campaign
*CampaignsApiInterface* | [**campaignsGet**](Resources/docs/Api/CampaignsApiInterface.md#campaignsget) | **GET** /campaigns | Load Campaigns
*CampaignsApiInterface* | [**campaignsPost**](Resources/docs/Api/CampaignsApiInterface.md#campaignspost) | **POST** /campaigns | Add Campaign
*ContactsApiInterface* | [**contactsByEmailDelete**](Resources/docs/Api/ContactsApiInterface.md#contactsbyemaildelete) | **DELETE** /contacts/{email} | Delete Contact
*ContactsApiInterface* | [**contactsByEmailGet**](Resources/docs/Api/ContactsApiInterface.md#contactsbyemailget) | **GET** /contacts/{email} | Load Contact
*ContactsApiInterface* | [**contactsByEmailHistoryGet**](Resources/docs/Api/ContactsApiInterface.md#contactsbyemailhistoryget) | **GET** /contacts/{email}/history | Load History
*ContactsApiInterface* | [**contactsByEmailPut**](Resources/docs/Api/ContactsApiInterface.md#contactsbyemailput) | **PUT** /contacts/{email} | Update Contact
*ContactsApiInterface* | [**contactsDeletePost**](Resources/docs/Api/ContactsApiInterface.md#contactsdeletepost) | **POST** /contacts/delete | Delete Contacts Bulk
*ContactsApiInterface* | [**contactsExportByIdStatusGet**](Resources/docs/Api/ContactsApiInterface.md#contactsexportbyidstatusget) | **GET** /contacts/export/{id}/status | Check Export Status
*ContactsApiInterface* | [**contactsExportPost**](Resources/docs/Api/ContactsApiInterface.md#contactsexportpost) | **POST** /contacts/export | Export Contacts
*ContactsApiInterface* | [**contactsGet**](Resources/docs/Api/ContactsApiInterface.md#contactsget) | **GET** /contacts | Load Contacts
*ContactsApiInterface* | [**contactsImportPost**](Resources/docs/Api/ContactsApiInterface.md#contactsimportpost) | **POST** /contacts/import | Upload Contacts
*ContactsApiInterface* | [**contactsPost**](Resources/docs/Api/ContactsApiInterface.md#contactspost) | **POST** /contacts | Add Contact
*EmailsApiInterface* | [**emailsByMsgidViewGet**](Resources/docs/Api/EmailsApiInterface.md#emailsbymsgidviewget) | **GET** /emails/{msgid}/view | View Email
*EmailsApiInterface* | [**emailsMergefilePost**](Resources/docs/Api/EmailsApiInterface.md#emailsmergefilepost) | **POST** /emails/mergefile | Send Bulk Emails CSV
*EmailsApiInterface* | [**emailsPost**](Resources/docs/Api/EmailsApiInterface.md#emailspost) | **POST** /emails | Send Bulk Emails
*EmailsApiInterface* | [**emailsTransactionalPost**](Resources/docs/Api/EmailsApiInterface.md#emailstransactionalpost) | **POST** /emails/transactional | Send Transactional Email
*EventsApiInterface* | [**eventsByTransactionidGet**](Resources/docs/Api/EventsApiInterface.md#eventsbytransactionidget) | **GET** /events/{transactionid} | Load Email Events
*EventsApiInterface* | [**eventsChannelsByNameExportPost**](Resources/docs/Api/EventsApiInterface.md#eventschannelsbynameexportpost) | **POST** /events/channels/{name}/export | Export Channel Events
*EventsApiInterface* | [**eventsChannelsByNameGet**](Resources/docs/Api/EventsApiInterface.md#eventschannelsbynameget) | **GET** /events/channels/{name} | Load Channel Events
*EventsApiInterface* | [**eventsChannelsExportByIdStatusGet**](Resources/docs/Api/EventsApiInterface.md#eventschannelsexportbyidstatusget) | **GET** /events/channels/export/{id}/status | Check Channel Export Status
*EventsApiInterface* | [**eventsExportByIdStatusGet**](Resources/docs/Api/EventsApiInterface.md#eventsexportbyidstatusget) | **GET** /events/export/{id}/status | Check Export Status
*EventsApiInterface* | [**eventsExportPost**](Resources/docs/Api/EventsApiInterface.md#eventsexportpost) | **POST** /events/export | Export Events
*EventsApiInterface* | [**eventsGet**](Resources/docs/Api/EventsApiInterface.md#eventsget) | **GET** /events | Load Events
*FilesApiInterface* | [**filesByNameDelete**](Resources/docs/Api/FilesApiInterface.md#filesbynamedelete) | **DELETE** /files/{name} | Delete File
*FilesApiInterface* | [**filesByNameGet**](Resources/docs/Api/FilesApiInterface.md#filesbynameget) | **GET** /files/{name} | Download File
*FilesApiInterface* | [**filesByNameInfoGet**](Resources/docs/Api/FilesApiInterface.md#filesbynameinfoget) | **GET** /files/{name}/info | Load File Details
*FilesApiInterface* | [**filesGet**](Resources/docs/Api/FilesApiInterface.md#filesget) | **GET** /files | List Files
*FilesApiInterface* | [**filesPost**](Resources/docs/Api/FilesApiInterface.md#filespost) | **POST** /files | Upload File
*InboundRouteApiInterface* | [**inboundrouteByIdDelete**](Resources/docs/Api/InboundRouteApiInterface.md#inboundroutebyiddelete) | **DELETE** /inboundroute/{id} | Delete Route
*InboundRouteApiInterface* | [**inboundrouteByIdGet**](Resources/docs/Api/InboundRouteApiInterface.md#inboundroutebyidget) | **GET** /inboundroute/{id} | Get Route
*InboundRouteApiInterface* | [**inboundrouteByIdPut**](Resources/docs/Api/InboundRouteApiInterface.md#inboundroutebyidput) | **PUT** /inboundroute/{id} | Update Route
*InboundRouteApiInterface* | [**inboundrouteGet**](Resources/docs/Api/InboundRouteApiInterface.md#inboundrouteget) | **GET** /inboundroute | Get Routes
*InboundRouteApiInterface* | [**inboundrouteOrderPut**](Resources/docs/Api/InboundRouteApiInterface.md#inboundrouteorderput) | **PUT** /inboundroute/order | Update Sorting
*InboundRouteApiInterface* | [**inboundroutePost**](Resources/docs/Api/InboundRouteApiInterface.md#inboundroutepost) | **POST** /inboundroute | Create Route
*ListsApiInterface* | [**listsByNameContactsPost**](Resources/docs/Api/ListsApiInterface.md#listsbynamecontactspost) | **POST** /lists/{name}/contacts | Add Contacts to List
*ListsApiInterface* | [**listsByNameContactsRemovePost**](Resources/docs/Api/ListsApiInterface.md#listsbynamecontactsremovepost) | **POST** /lists/{name}/contacts/remove | Remove Contacts from List
*ListsApiInterface* | [**listsByNameDelete**](Resources/docs/Api/ListsApiInterface.md#listsbynamedelete) | **DELETE** /lists/{name} | Delete List
*ListsApiInterface* | [**listsByNameGet**](Resources/docs/Api/ListsApiInterface.md#listsbynameget) | **GET** /lists/{name} | Load List
*ListsApiInterface* | [**listsByNamePut**](Resources/docs/Api/ListsApiInterface.md#listsbynameput) | **PUT** /lists/{name} | Update List
*ListsApiInterface* | [**listsGet**](Resources/docs/Api/ListsApiInterface.md#listsget) | **GET** /lists | Load Lists
*ListsApiInterface* | [**listsPost**](Resources/docs/Api/ListsApiInterface.md#listspost) | **POST** /lists | Add List
*SecurityApiInterface* | [**securityApikeysByNameDelete**](Resources/docs/Api/SecurityApiInterface.md#securityapikeysbynamedelete) | **DELETE** /security/apikeys/{name} | Delete ApiKey
*SecurityApiInterface* | [**securityApikeysByNameGet**](Resources/docs/Api/SecurityApiInterface.md#securityapikeysbynameget) | **GET** /security/apikeys/{name} | Load ApiKey
*SecurityApiInterface* | [**securityApikeysByNamePut**](Resources/docs/Api/SecurityApiInterface.md#securityapikeysbynameput) | **PUT** /security/apikeys/{name} | Update ApiKey
*SecurityApiInterface* | [**securityApikeysGet**](Resources/docs/Api/SecurityApiInterface.md#securityapikeysget) | **GET** /security/apikeys | List ApiKeys
*SecurityApiInterface* | [**securityApikeysPost**](Resources/docs/Api/SecurityApiInterface.md#securityapikeyspost) | **POST** /security/apikeys | Add ApiKey
*SecurityApiInterface* | [**securitySmtpByNameDelete**](Resources/docs/Api/SecurityApiInterface.md#securitysmtpbynamedelete) | **DELETE** /security/smtp/{name} | Delete SMTP Credential
*SecurityApiInterface* | [**securitySmtpByNameGet**](Resources/docs/Api/SecurityApiInterface.md#securitysmtpbynameget) | **GET** /security/smtp/{name} | Load SMTP Credential
*SecurityApiInterface* | [**securitySmtpByNamePut**](Resources/docs/Api/SecurityApiInterface.md#securitysmtpbynameput) | **PUT** /security/smtp/{name} | Update SMTP Credential
*SecurityApiInterface* | [**securitySmtpGet**](Resources/docs/Api/SecurityApiInterface.md#securitysmtpget) | **GET** /security/smtp | List SMTP Credentials
*SecurityApiInterface* | [**securitySmtpPost**](Resources/docs/Api/SecurityApiInterface.md#securitysmtppost) | **POST** /security/smtp | Add SMTP Credential
*SegmentsApiInterface* | [**segmentsByNameDelete**](Resources/docs/Api/SegmentsApiInterface.md#segmentsbynamedelete) | **DELETE** /segments/{name} | Delete Segment
*SegmentsApiInterface* | [**segmentsByNameGet**](Resources/docs/Api/SegmentsApiInterface.md#segmentsbynameget) | **GET** /segments/{name} | Load Segment
*SegmentsApiInterface* | [**segmentsByNamePut**](Resources/docs/Api/SegmentsApiInterface.md#segmentsbynameput) | **PUT** /segments/{name} | Update Segment
*SegmentsApiInterface* | [**segmentsGet**](Resources/docs/Api/SegmentsApiInterface.md#segmentsget) | **GET** /segments | Load Segments
*SegmentsApiInterface* | [**segmentsPost**](Resources/docs/Api/SegmentsApiInterface.md#segmentspost) | **POST** /segments | Add Segment
*StatisticsApiInterface* | [**statisticsCampaignsByNameGet**](Resources/docs/Api/StatisticsApiInterface.md#statisticscampaignsbynameget) | **GET** /statistics/campaigns/{name} | Load Campaign Stats
*StatisticsApiInterface* | [**statisticsCampaignsGet**](Resources/docs/Api/StatisticsApiInterface.md#statisticscampaignsget) | **GET** /statistics/campaigns | Load Campaigns Stats
*StatisticsApiInterface* | [**statisticsChannelsByNameGet**](Resources/docs/Api/StatisticsApiInterface.md#statisticschannelsbynameget) | **GET** /statistics/channels/{name} | Load Channel Stats
*StatisticsApiInterface* | [**statisticsChannelsGet**](Resources/docs/Api/StatisticsApiInterface.md#statisticschannelsget) | **GET** /statistics/channels | Load Channels Stats
*StatisticsApiInterface* | [**statisticsGet**](Resources/docs/Api/StatisticsApiInterface.md#statisticsget) | **GET** /statistics | Load Statistics
*SubAccountsApiInterface* | [**subaccountsByEmailCreditsPatch**](Resources/docs/Api/SubAccountsApiInterface.md#subaccountsbyemailcreditspatch) | **PATCH** /subaccounts/{email}/credits | Add, Subtract Email Credits
*SubAccountsApiInterface* | [**subaccountsByEmailDelete**](Resources/docs/Api/SubAccountsApiInterface.md#subaccountsbyemaildelete) | **DELETE** /subaccounts/{email} | Delete SubAccount
*SubAccountsApiInterface* | [**subaccountsByEmailGet**](Resources/docs/Api/SubAccountsApiInterface.md#subaccountsbyemailget) | **GET** /subaccounts/{email} | Load SubAccount
*SubAccountsApiInterface* | [**subaccountsByEmailSettingsEmailPut**](Resources/docs/Api/SubAccountsApiInterface.md#subaccountsbyemailsettingsemailput) | **PUT** /subaccounts/{email}/settings/email | Update SubAccount Email Settings
*SubAccountsApiInterface* | [**subaccountsGet**](Resources/docs/Api/SubAccountsApiInterface.md#subaccountsget) | **GET** /subaccounts | Load SubAccounts
*SubAccountsApiInterface* | [**subaccountsPost**](Resources/docs/Api/SubAccountsApiInterface.md#subaccountspost) | **POST** /subaccounts | Add SubAccount
*SuppressionsApiInterface* | [**suppressionsBouncesGet**](Resources/docs/Api/SuppressionsApiInterface.md#suppressionsbouncesget) | **GET** /suppressions/bounces | Get Bounce List
*SuppressionsApiInterface* | [**suppressionsBouncesImportPost**](Resources/docs/Api/SuppressionsApiInterface.md#suppressionsbouncesimportpost) | **POST** /suppressions/bounces/import | Add Bounces Async
*SuppressionsApiInterface* | [**suppressionsBouncesPost**](Resources/docs/Api/SuppressionsApiInterface.md#suppressionsbouncespost) | **POST** /suppressions/bounces | Add Bounces
*SuppressionsApiInterface* | [**suppressionsByEmailDelete**](Resources/docs/Api/SuppressionsApiInterface.md#suppressionsbyemaildelete) | **DELETE** /suppressions/{email} | Delete Suppression
*SuppressionsApiInterface* | [**suppressionsByEmailGet**](Resources/docs/Api/SuppressionsApiInterface.md#suppressionsbyemailget) | **GET** /suppressions/{email} | Get Suppression
*SuppressionsApiInterface* | [**suppressionsComplaintsGet**](Resources/docs/Api/SuppressionsApiInterface.md#suppressionscomplaintsget) | **GET** /suppressions/complaints | Get Complaints List
*SuppressionsApiInterface* | [**suppressionsComplaintsImportPost**](Resources/docs/Api/SuppressionsApiInterface.md#suppressionscomplaintsimportpost) | **POST** /suppressions/complaints/import | Add Complaints Async
*SuppressionsApiInterface* | [**suppressionsComplaintsPost**](Resources/docs/Api/SuppressionsApiInterface.md#suppressionscomplaintspost) | **POST** /suppressions/complaints | Add Complaints
*SuppressionsApiInterface* | [**suppressionsGet**](Resources/docs/Api/SuppressionsApiInterface.md#suppressionsget) | **GET** /suppressions | Get Suppressions
*SuppressionsApiInterface* | [**suppressionsUnsubscribesGet**](Resources/docs/Api/SuppressionsApiInterface.md#suppressionsunsubscribesget) | **GET** /suppressions/unsubscribes | Get Unsubscribes List
*SuppressionsApiInterface* | [**suppressionsUnsubscribesImportPost**](Resources/docs/Api/SuppressionsApiInterface.md#suppressionsunsubscribesimportpost) | **POST** /suppressions/unsubscribes/import | Add Unsubscribes Async
*SuppressionsApiInterface* | [**suppressionsUnsubscribesPost**](Resources/docs/Api/SuppressionsApiInterface.md#suppressionsunsubscribespost) | **POST** /suppressions/unsubscribes | Add Unsubscribes
*TemplatesApiInterface* | [**templatesByNameDelete**](Resources/docs/Api/TemplatesApiInterface.md#templatesbynamedelete) | **DELETE** /templates/{name} | Delete Template
*TemplatesApiInterface* | [**templatesByNameGet**](Resources/docs/Api/TemplatesApiInterface.md#templatesbynameget) | **GET** /templates/{name} | Load Template
*TemplatesApiInterface* | [**templatesByNamePut**](Resources/docs/Api/TemplatesApiInterface.md#templatesbynameput) | **PUT** /templates/{name} | Update Template
*TemplatesApiInterface* | [**templatesGet**](Resources/docs/Api/TemplatesApiInterface.md#templatesget) | **GET** /templates | Load Templates
*TemplatesApiInterface* | [**templatesPost**](Resources/docs/Api/TemplatesApiInterface.md#templatespost) | **POST** /templates | Add Template
*VerificationsApiInterface* | [**verificationsByEmailDelete**](Resources/docs/Api/VerificationsApiInterface.md#verificationsbyemaildelete) | **DELETE** /verifications/{email} | Delete Email Verification Result
*VerificationsApiInterface* | [**verificationsByEmailGet**](Resources/docs/Api/VerificationsApiInterface.md#verificationsbyemailget) | **GET** /verifications/{email} | Get Email Verification Result
*VerificationsApiInterface* | [**verificationsByEmailPost**](Resources/docs/Api/VerificationsApiInterface.md#verificationsbyemailpost) | **POST** /verifications/{email} | Verify Email
*VerificationsApiInterface* | [**verificationsFilesByIdDelete**](Resources/docs/Api/VerificationsApiInterface.md#verificationsfilesbyiddelete) | **DELETE** /verifications/files/{id} | Delete File Verification Result
*VerificationsApiInterface* | [**verificationsFilesByIdResultDownloadGet**](Resources/docs/Api/VerificationsApiInterface.md#verificationsfilesbyidresultdownloadget) | **GET** /verifications/files/{id}/result/download | Download File Verification Result
*VerificationsApiInterface* | [**verificationsFilesByIdResultGet**](Resources/docs/Api/VerificationsApiInterface.md#verificationsfilesbyidresultget) | **GET** /verifications/files/{id}/result | Get Detailed File Verification Result
*VerificationsApiInterface* | [**verificationsFilesByIdVerificationPost**](Resources/docs/Api/VerificationsApiInterface.md#verificationsfilesbyidverificationpost) | **POST** /verifications/files/{id}/verification | Start verification
*VerificationsApiInterface* | [**verificationsFilesPost**](Resources/docs/Api/VerificationsApiInterface.md#verificationsfilespost) | **POST** /verifications/files | Upload File with Emails
*VerificationsApiInterface* | [**verificationsFilesResultGet**](Resources/docs/Api/VerificationsApiInterface.md#verificationsfilesresultget) | **GET** /verifications/files/result | Get Files Verification Results
*VerificationsApiInterface* | [**verificationsGet**](Resources/docs/Api/VerificationsApiInterface.md#verificationsget) | **GET** /verifications | Get Emails Verification Results


## Documentation For Models

 - [AccessLevel](Resources/docs/Model/AccessLevel.md)
 - [AccountStatusEnum](Resources/docs/Model/AccountStatusEnum.md)
 - [ApiKey](Resources/docs/Model/ApiKey.md)
 - [ApiKeyPayload](Resources/docs/Model/ApiKeyPayload.md)
 - [BodyContentType](Resources/docs/Model/BodyContentType.md)
 - [BodyPart](Resources/docs/Model/BodyPart.md)
 - [Campaign](Resources/docs/Model/Campaign.md)
 - [CampaignOptions](Resources/docs/Model/CampaignOptions.md)
 - [CampaignRecipient](Resources/docs/Model/CampaignRecipient.md)
 - [CampaignStatus](Resources/docs/Model/CampaignStatus.md)
 - [CampaignTemplate](Resources/docs/Model/CampaignTemplate.md)
 - [ChannelLogStatusSummary](Resources/docs/Model/ChannelLogStatusSummary.md)
 - [CompressionFormat](Resources/docs/Model/CompressionFormat.md)
 - [ConsentData](Resources/docs/Model/ConsentData.md)
 - [ConsentTracking](Resources/docs/Model/ConsentTracking.md)
 - [Contact](Resources/docs/Model/Contact.md)
 - [ContactActivity](Resources/docs/Model/ContactActivity.md)
 - [ContactHistEventType](Resources/docs/Model/ContactHistEventType.md)
 - [ContactHistory](Resources/docs/Model/ContactHistory.md)
 - [ContactPayload](Resources/docs/Model/ContactPayload.md)
 - [ContactSource](Resources/docs/Model/ContactSource.md)
 - [ContactStatus](Resources/docs/Model/ContactStatus.md)
 - [ContactUpdatePayload](Resources/docs/Model/ContactUpdatePayload.md)
 - [ContactsList](Resources/docs/Model/ContactsList.md)
 - [DeliveryOptimizationType](Resources/docs/Model/DeliveryOptimizationType.md)
 - [EmailContent](Resources/docs/Model/EmailContent.md)
 - [EmailData](Resources/docs/Model/EmailData.md)
 - [EmailMessageData](Resources/docs/Model/EmailMessageData.md)
 - [EmailRecipient](Resources/docs/Model/EmailRecipient.md)
 - [EmailSend](Resources/docs/Model/EmailSend.md)
 - [EmailStatus](Resources/docs/Model/EmailStatus.md)
 - [EmailTransactionalMessageData](Resources/docs/Model/EmailTransactionalMessageData.md)
 - [EmailValidationResult](Resources/docs/Model/EmailValidationResult.md)
 - [EmailValidationStatus](Resources/docs/Model/EmailValidationStatus.md)
 - [EmailView](Resources/docs/Model/EmailView.md)
 - [EmailsPayload](Resources/docs/Model/EmailsPayload.md)
 - [EncodingType](Resources/docs/Model/EncodingType.md)
 - [EventType](Resources/docs/Model/EventType.md)
 - [EventsOrderBy](Resources/docs/Model/EventsOrderBy.md)
 - [ExportFileFormats](Resources/docs/Model/ExportFileFormats.md)
 - [ExportLink](Resources/docs/Model/ExportLink.md)
 - [ExportStatus](Resources/docs/Model/ExportStatus.md)
 - [FileInfo](Resources/docs/Model/FileInfo.md)
 - [FilePayload](Resources/docs/Model/FilePayload.md)
 - [FileUploadResult](Resources/docs/Model/FileUploadResult.md)
 - [InboundPayload](Resources/docs/Model/InboundPayload.md)
 - [InboundRoute](Resources/docs/Model/InboundRoute.md)
 - [InboundRouteActionType](Resources/docs/Model/InboundRouteActionType.md)
 - [InboundRouteFilterType](Resources/docs/Model/InboundRouteFilterType.md)
 - [ListPayload](Resources/docs/Model/ListPayload.md)
 - [ListUpdatePayload](Resources/docs/Model/ListUpdatePayload.md)
 - [LogJobStatus](Resources/docs/Model/LogJobStatus.md)
 - [LogStatusSummary](Resources/docs/Model/LogStatusSummary.md)
 - [MergeEmailPayload](Resources/docs/Model/MergeEmailPayload.md)
 - [MessageAttachment](Resources/docs/Model/MessageAttachment.md)
 - [MessageCategory](Resources/docs/Model/MessageCategory.md)
 - [NewApiKey](Resources/docs/Model/NewApiKey.md)
 - [NewSmtpCredentials](Resources/docs/Model/NewSmtpCredentials.md)
 - [Options](Resources/docs/Model/Options.md)
 - [RecipientEvent](Resources/docs/Model/RecipientEvent.md)
 - [Segment](Resources/docs/Model/Segment.md)
 - [SegmentPayload](Resources/docs/Model/SegmentPayload.md)
 - [SmtpCredentials](Resources/docs/Model/SmtpCredentials.md)
 - [SmtpCredentialsPayload](Resources/docs/Model/SmtpCredentialsPayload.md)
 - [SortOrderItem](Resources/docs/Model/SortOrderItem.md)
 - [SplitOptimizationType](Resources/docs/Model/SplitOptimizationType.md)
 - [SplitOptions](Resources/docs/Model/SplitOptions.md)
 - [SubAccountInfo](Resources/docs/Model/SubAccountInfo.md)
 - [SubaccountEmailCreditsPayload](Resources/docs/Model/SubaccountEmailCreditsPayload.md)
 - [SubaccountEmailSettings](Resources/docs/Model/SubaccountEmailSettings.md)
 - [SubaccountEmailSettingsPayload](Resources/docs/Model/SubaccountEmailSettingsPayload.md)
 - [SubaccountPayload](Resources/docs/Model/SubaccountPayload.md)
 - [SubaccountSettingsInfo](Resources/docs/Model/SubaccountSettingsInfo.md)
 - [SubaccountSettingsInfoPayload](Resources/docs/Model/SubaccountSettingsInfoPayload.md)
 - [Suppression](Resources/docs/Model/Suppression.md)
 - [Template](Resources/docs/Model/Template.md)
 - [TemplatePayload](Resources/docs/Model/TemplatePayload.md)
 - [TemplateScope](Resources/docs/Model/TemplateScope.md)
 - [TemplateType](Resources/docs/Model/TemplateType.md)
 - [TransactionalRecipient](Resources/docs/Model/TransactionalRecipient.md)
 - [Utm](Resources/docs/Model/Utm.md)
 - [VerificationFileResult](Resources/docs/Model/VerificationFileResult.md)
 - [VerificationFileResultDetails](Resources/docs/Model/VerificationFileResultDetails.md)
 - [VerificationStatus](Resources/docs/Model/VerificationStatus.md)


## Documentation For Authorization


## apikey

- **Type**: API key
- **API key parameter name**: X-ElasticEmail-ApiKey
- **Location**: HTTP header


## Author

support@elasticemail.com


