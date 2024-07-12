<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/resource.proto

namespace Google\Cloud\SecurityCenter\V1\AzureMetadata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an Azure subscription.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.AzureMetadata.AzureSubscription</code>
 */
class AzureSubscription extends \Google\Protobuf\Internal\Message
{
    /**
     * The UUID of the Azure subscription, for example,
     * `291bba3f-e0a5-47bc-a099-3bdcb2a50a05`.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * The display name of the Azure subscription.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    private $display_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           The UUID of the Azure subscription, for example,
     *           `291bba3f-e0a5-47bc-a099-3bdcb2a50a05`.
     *     @type string $display_name
     *           The display name of the Azure subscription.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\Resource::initOnce();
        parent::__construct($data);
    }

    /**
     * The UUID of the Azure subscription, for example,
     * `291bba3f-e0a5-47bc-a099-3bdcb2a50a05`.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The UUID of the Azure subscription, for example,
     * `291bba3f-e0a5-47bc-a099-3bdcb2a50a05`.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * The display name of the Azure subscription.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The display name of the Azure subscription.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AzureSubscription::class, \Google\Cloud\SecurityCenter\V1\AzureMetadata_AzureSubscription::class);

