<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message to simulate a CustomConfig against a given test resource.
 * Maximum size of the request is 4 MB by default.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.SimulateSecurityHealthAnalyticsCustomModuleRequest</code>
 */
class SimulateSecurityHealthAnalyticsCustomModuleRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The relative resource name of the organization, project, or
     * folder. For more information about relative resource names, see [Relative
     * Resource
     * Name](https://cloud.google.com/apis/design/resource_names#relative_resource_name)
     * Example: `organizations/{organization_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $parent = '';
    /**
     * Required. The custom configuration that you need to test.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.CustomConfig custom_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $custom_config = null;
    /**
     * Required. Resource data to simulate custom module against.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.SimulateSecurityHealthAnalyticsCustomModuleRequest.SimulatedResource resource = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $resource = null;

    /**
     * @param string                                                                                               $parent       Required. The relative resource name of the organization, project, or
     *                                                                                                                           folder. For more information about relative resource names, see [Relative
     *                                                                                                                           Resource
     *                                                                                                                           Name](https://cloud.google.com/apis/design/resource_names#relative_resource_name)
     *                                                                                                                           Example: `organizations/{organization_id}`
     * @param \Google\Cloud\SecurityCenter\V1\CustomConfig                                                         $customConfig Required. The custom configuration that you need to test.
     * @param \Google\Cloud\SecurityCenter\V1\SimulateSecurityHealthAnalyticsCustomModuleRequest\SimulatedResource $resource     Required. Resource data to simulate custom module against.
     *
     * @return \Google\Cloud\SecurityCenter\V1\SimulateSecurityHealthAnalyticsCustomModuleRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\SecurityCenter\V1\CustomConfig $customConfig, \Google\Cloud\SecurityCenter\V1\SimulateSecurityHealthAnalyticsCustomModuleRequest\SimulatedResource $resource): self
    {
        return (new self())
            ->setParent($parent)
            ->setCustomConfig($customConfig)
            ->setResource($resource);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The relative resource name of the organization, project, or
     *           folder. For more information about relative resource names, see [Relative
     *           Resource
     *           Name](https://cloud.google.com/apis/design/resource_names#relative_resource_name)
     *           Example: `organizations/{organization_id}`
     *     @type \Google\Cloud\SecurityCenter\V1\CustomConfig $custom_config
     *           Required. The custom configuration that you need to test.
     *     @type \Google\Cloud\SecurityCenter\V1\SimulateSecurityHealthAnalyticsCustomModuleRequest\SimulatedResource $resource
     *           Required. Resource data to simulate custom module against.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The relative resource name of the organization, project, or
     * folder. For more information about relative resource names, see [Relative
     * Resource
     * Name](https://cloud.google.com/apis/design/resource_names#relative_resource_name)
     * Example: `organizations/{organization_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The relative resource name of the organization, project, or
     * folder. For more information about relative resource names, see [Relative
     * Resource
     * Name](https://cloud.google.com/apis/design/resource_names#relative_resource_name)
     * Example: `organizations/{organization_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The custom configuration that you need to test.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.CustomConfig custom_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\SecurityCenter\V1\CustomConfig|null
     */
    public function getCustomConfig()
    {
        return $this->custom_config;
    }

    public function hasCustomConfig()
    {
        return isset($this->custom_config);
    }

    public function clearCustomConfig()
    {
        unset($this->custom_config);
    }

    /**
     * Required. The custom configuration that you need to test.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.CustomConfig custom_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\SecurityCenter\V1\CustomConfig $var
     * @return $this
     */
    public function setCustomConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenter\V1\CustomConfig::class);
        $this->custom_config = $var;

        return $this;
    }

    /**
     * Required. Resource data to simulate custom module against.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.SimulateSecurityHealthAnalyticsCustomModuleRequest.SimulatedResource resource = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\SecurityCenter\V1\SimulateSecurityHealthAnalyticsCustomModuleRequest\SimulatedResource|null
     */
    public function getResource()
    {
        return $this->resource;
    }

    public function hasResource()
    {
        return isset($this->resource);
    }

    public function clearResource()
    {
        unset($this->resource);
    }

    /**
     * Required. Resource data to simulate custom module against.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.SimulateSecurityHealthAnalyticsCustomModuleRequest.SimulatedResource resource = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\SecurityCenter\V1\SimulateSecurityHealthAnalyticsCustomModuleRequest\SimulatedResource $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenter\V1\SimulateSecurityHealthAnalyticsCustomModuleRequest\SimulatedResource::class);
        $this->resource = $var;

        return $this;
    }

}

