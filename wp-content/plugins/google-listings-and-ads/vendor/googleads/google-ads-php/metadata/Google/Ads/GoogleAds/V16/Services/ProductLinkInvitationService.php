<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/services/product_link_invitation_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V16\Services;

class ProductLinkInvitationService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
8google/ads/googleads/v16/enums/linked_product_type.protogoogle.ads.googleads.v16.enums"�
LinkedProductTypeEnum"�
LinkedProductType
UNSPECIFIED 
UNKNOWN
DATA_PARTNER

GOOGLE_ADS
HOTEL_CENTER
MERCHANT_CENTER
ADVERTISING_PARTNER	B�
"com.google.ads.googleads.v16.enumsBLinkedProductTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
Cgoogle/ads/googleads/v16/enums/product_link_invitation_status.protogoogle.ads.googleads.v16.enums"�
ProductLinkInvitationStatusEnum"�
ProductLinkInvitationStatus
UNSPECIFIED 
UNKNOWN
ACCEPTED
	REQUESTED
PENDING_APPROVAL
REVOKED
REJECTED
EXPIREDB�
"com.google.ads.googleads.v16.enumsB ProductLinkInvitationStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
@google/ads/googleads/v16/resources/product_link_invitation.proto"google.ads.googleads.v16.resourcesCgoogle/ads/googleads/v16/enums/product_link_invitation_status.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
ProductLinkInvitationM
resource_name (	B6�A�A0
.googleads.googleapis.com/ProductLinkInvitation\'
product_link_invitation_id (B�Ap
status (2[.google.ads.googleads.v16.enums.ProductLinkInvitationStatusEnum.ProductLinkInvitationStatusB�AZ
type (2G.google.ads.googleads.v16.enums.LinkedProductTypeEnum.LinkedProductTypeB�Ad
hotel_center (2G.google.ads.googleads.v16.resources.HotelCenterLinkInvitationIdentifierB�AH j
merchant_center (2J.google.ads.googleads.v16.resources.MerchantCenterLinkInvitationIdentifierB�AH r
advertising_partner (2N.google.ads.googleads.v16.resources.AdvertisingPartnerLinkInvitationIdentifierB�AH :|�Ay
.googleads.googleapis.com/ProductLinkInvitationGcustomers/{customer_id}/productLinkInvitations/{customer_invitation_id}B
invited_account"C
#HotelCenterLinkInvitationIdentifier
hotel_center_id (B�A"I
&MerchantCenterLinkInvitationIdentifier
merchant_center_id (B�A"{
*AdvertisingPartnerLinkInvitationIdentifier@
customer (	B)�A�A#
!googleads.googleapis.com/CustomerH �B
	_customerB�
&com.google.ads.googleads.v16.resourcesBProductLinkInvitationProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v16/resources;resources�GAA�"Google.Ads.GoogleAds.V16.Resources�"Google\\Ads\\GoogleAds\\V16\\Resources�&Google::Ads::GoogleAds::V16::Resourcesbproto3
�
Ggoogle/ads/googleads/v16/services/product_link_invitation_service.proto!google.ads.googleads.v16.services@google/ads/googleads/v16/resources/product_link_invitation.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
"CreateProductLinkInvitationRequest
customer_id (	B�A_
product_link_invitation (29.google.ads.googleads.v16.resources.ProductLinkInvitationB�A"q
#CreateProductLinkInvitationResponseJ
resource_name (	B3�A0
.googleads.googleapis.com/ProductLinkInvitation"�
"UpdateProductLinkInvitationRequest
customer_id (	B�A�
product_link_invitation_status (2[.google.ads.googleads.v16.enums.ProductLinkInvitationStatusEnum.ProductLinkInvitationStatusB�AM
resource_name (	B6�A�A0
.googleads.googleapis.com/ProductLinkInvitation"q
#UpdateProductLinkInvitationResponseJ
resource_name (	B3�A0
.googleads.googleapis.com/ProductLinkInvitation"�
"RemoveProductLinkInvitationRequest
customer_id (	B�AM
resource_name (	B6�A�A0
.googleads.googleapis.com/ProductLinkInvitation"q
#RemoveProductLinkInvitationResponseJ
resource_name (	B3�A0
.googleads.googleapis.com/ProductLinkInvitation2�
ProductLinkInvitationService�
CreateProductLinkInvitationE.google.ads.googleads.v16.services.CreateProductLinkInvitationRequestF.google.ads.googleads.v16.services.CreateProductLinkInvitationResponse"m�A#customer_id,product_link_invitation���A"</v16/customers/{customer_id=*}/productLinkInvitations:create:*�
UpdateProductLinkInvitationE.google.ads.googleads.v16.services.UpdateProductLinkInvitationRequestF.google.ads.googleads.v16.services.UpdateProductLinkInvitationResponse"��A8customer_id,product_link_invitation_status,resource_name���A"</v16/customers/{customer_id=*}/productLinkInvitations:update:*�
RemoveProductLinkInvitationE.google.ads.googleads.v16.services.RemoveProductLinkInvitationRequestF.google.ads.googleads.v16.services.RemoveProductLinkInvitationResponse"c�Acustomer_id,resource_name���A"</v16/customers/{customer_id=*}/productLinkInvitations:remove:*E�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v16.servicesB!ProductLinkInvitationServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v16/services;services�GAA�!Google.Ads.GoogleAds.V16.Services�!Google\\Ads\\GoogleAds\\V16\\Services�%Google::Ads::GoogleAds::V16::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

