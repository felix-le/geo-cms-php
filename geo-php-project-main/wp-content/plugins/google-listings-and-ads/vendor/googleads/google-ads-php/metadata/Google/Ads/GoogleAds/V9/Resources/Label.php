<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/resources/label.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Resources;

class Label
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
/google/ads/googleads/v9/common/text_label.protogoogle.ads.googleads.v9.common"i
	TextLabel
background_color (	H �
description (	H�B
_background_colorB
_descriptionB�
"com.google.ads.googleads.v9.commonBTextLabelProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v9/common;common�GAA�Google.Ads.GoogleAds.V9.Common�Google\\Ads\\GoogleAds\\V9\\Common�"Google::Ads::GoogleAds::V9::Commonbproto3
�
0google/ads/googleads/v9/enums/label_status.protogoogle.ads.googleads.v9.enums"X
LabelStatusEnum"E
LabelStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
!com.google.ads.googleads.v9.enumsBLabelStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
-google/ads/googleads/v9/resources/label.proto!google.ads.googleads.v9.resources0google/ads/googleads/v9/enums/label_status.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
Label=
resource_name (	B&�A�A 
googleads.googleapis.com/Label
id (B�AH �
name (	H�O
status (2:.google.ads.googleads.v9.enums.LabelStatusEnum.LabelStatusB�A=

text_label (2).google.ads.googleads.v9.common.TextLabel:N�AK
googleads.googleapis.com/Label)customers/{customer_id}/labels/{label_id}B
_idB
_nameB�
%com.google.ads.googleads.v9.resourcesB
LabelProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v9/resources;resources�GAA�!Google.Ads.GoogleAds.V9.Resources�!Google\\Ads\\GoogleAds\\V9\\Resources�%Google::Ads::GoogleAds::V9::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

