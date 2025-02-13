<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/data_retention_deletion_event.proto

namespace Google\Cloud\SecurityCenter\V2\DataRetentionDeletionEvent;

use UnexpectedValueException;

/**
 * Type of the DRD event.
 *
 * Protobuf type <code>google.cloud.securitycenter.v2.DataRetentionDeletionEvent.EventType</code>
 */
class EventType
{
    /**
     * Unspecified event type.
     *
     * Generated from protobuf enum <code>EVENT_TYPE_UNSPECIFIED = 0;</code>
     */
    const EVENT_TYPE_UNSPECIFIED = 0;
    /**
     * The maximum retention time has been exceeded.
     *
     * Generated from protobuf enum <code>EVENT_TYPE_MAX_TTL_EXCEEDED = 1;</code>
     */
    const EVENT_TYPE_MAX_TTL_EXCEEDED = 1;

    private static $valueToName = [
        self::EVENT_TYPE_UNSPECIFIED => 'EVENT_TYPE_UNSPECIFIED',
        self::EVENT_TYPE_MAX_TTL_EXCEEDED => 'EVENT_TYPE_MAX_TTL_EXCEEDED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


