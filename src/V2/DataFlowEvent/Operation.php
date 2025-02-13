<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/data_flow_event.proto

namespace Google\Cloud\SecurityCenter\V2\DataFlowEvent;

use UnexpectedValueException;

/**
 * The operation of a data flow event.
 *
 * Protobuf type <code>google.cloud.securitycenter.v2.DataFlowEvent.Operation</code>
 */
class Operation
{
    /**
     * The operation is unspecified.
     *
     * Generated from protobuf enum <code>OPERATION_UNSPECIFIED = 0;</code>
     */
    const OPERATION_UNSPECIFIED = 0;
    /**
     * Represents a read operation.
     *
     * Generated from protobuf enum <code>READ = 1;</code>
     */
    const READ = 1;
    /**
     * Represents a move operation.
     *
     * Generated from protobuf enum <code>MOVE = 2;</code>
     */
    const MOVE = 2;
    /**
     * Represents a copy operation.
     *
     * Generated from protobuf enum <code>COPY = 3;</code>
     */
    const COPY = 3;

    private static $valueToName = [
        self::OPERATION_UNSPECIFIED => 'OPERATION_UNSPECIFIED',
        self::READ => 'READ',
        self::MOVE => 'MOVE',
        self::COPY => 'COPY',
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


