<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/effective_event_threat_detection_custom_module.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V1;

class EffectiveEventThreatDetectionCustomModule
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        $pool->internalAddGeneratedFile(
            '
�	
Sgoogle/cloud/securitycenter/v1/effective_event_threat_detection_custom_module.protogoogle.cloud.securitycenter.v1google/api/resource.protogoogle/protobuf/struct.proto"�
)EffectiveEventThreatDetectionCustomModule
name (	B�A,
config (2.google.protobuf.StructB�Ax
enablement_state (2Y.google.cloud.securitycenter.v1.EffectiveEventThreatDetectionCustomModule.EnablementStateB�A
type (	B�A
display_name (	B�A
description (	B�A"N
EnablementState 
ENABLEMENT_STATE_UNSPECIFIED 
ENABLED
DISABLED:��A�
Gsecuritycenter.googleapis.com/EffectiveEventThreatDetectionCustomModuleYorganizations/{organization}/eventThreatDetectionSettings/effectiveCustomModules/{module}Mfolders/{folder}/eventThreatDetectionSettings/effectiveCustomModules/{module}Oprojects/{project}/eventThreatDetectionSettings/effectiveCustomModules/{module}B�
"com.google.cloud.securitycenter.v1B.EffectiveEventThreatDetectionCustomModuleProtoPZJcloud.google.com/go/securitycenter/apiv1/securitycenterpb;securitycenterpb�Google.Cloud.SecurityCenter.V1�Google\\Cloud\\SecurityCenter\\V1�!Google::Cloud::SecurityCenter::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

