<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/common/customizer_value.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V16\Common;

class CustomizerValue
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
>google/ads/googleads/v16/enums/customizer_attribute_type.protogoogle.ads.googleads.v16.enums"�
CustomizerAttributeTypeEnum"e
CustomizerAttributeType
UNSPECIFIED 
UNKNOWN
TEXT

NUMBER	
PRICE
PERCENTB�
"com.google.ads.googleads.v16.enumsBCustomizerAttributeTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
6google/ads/googleads/v16/common/customizer_value.protogoogle.ads.googleads.v16.commongoogle/api/field_behavior.proto"�
CustomizerValuef
type (2S.google.ads.googleads.v16.enums.CustomizerAttributeTypeEnum.CustomizerAttributeTypeB�A
string_value (	B�AB�
#com.google.ads.googleads.v16.commonBCustomizerValueProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v16/common;common�GAA�Google.Ads.GoogleAds.V16.Common�Google\\Ads\\GoogleAds\\V16\\Common�#Google::Ads::GoogleAds::V16::Commonbproto3'
        , true);
        static::$is_initialized = true;
    }
}

