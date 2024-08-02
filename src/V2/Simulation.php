<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/simulation.proto

namespace Google\Cloud\SecurityCenter\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Attack path simulation
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v2.Simulation</code>
 */
class Simulation extends \Google\Protobuf\Internal\Message
{
    /**
     * Full resource name of the Simulation:
     * `organizations/123/simulations/456`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Output only. Time simulation was created
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Resource value configurations' metadata used in this simulation. Maximum of
     * 100.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v2.ResourceValueConfigMetadata resource_value_configs_metadata = 3;</code>
     */
    private $resource_value_configs_metadata;
    /**
     * Indicates which cloud provider was used in this simulation.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.CloudProvider cloud_provider = 4;</code>
     */
    private $cloud_provider = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Full resource name of the Simulation:
     *           `organizations/123/simulations/456`
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time simulation was created
     *     @type array<\Google\Cloud\SecurityCenter\V2\ResourceValueConfigMetadata>|\Google\Protobuf\Internal\RepeatedField $resource_value_configs_metadata
     *           Resource value configurations' metadata used in this simulation. Maximum of
     *           100.
     *     @type int $cloud_provider
     *           Indicates which cloud provider was used in this simulation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V2\Simulation::initOnce();
        parent::__construct($data);
    }

    /**
     * Full resource name of the Simulation:
     * `organizations/123/simulations/456`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Full resource name of the Simulation:
     * `organizations/123/simulations/456`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. Time simulation was created
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Time simulation was created
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Resource value configurations' metadata used in this simulation. Maximum of
     * 100.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v2.ResourceValueConfigMetadata resource_value_configs_metadata = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResourceValueConfigsMetadata()
    {
        return $this->resource_value_configs_metadata;
    }

    /**
     * Resource value configurations' metadata used in this simulation. Maximum of
     * 100.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v2.ResourceValueConfigMetadata resource_value_configs_metadata = 3;</code>
     * @param array<\Google\Cloud\SecurityCenter\V2\ResourceValueConfigMetadata>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResourceValueConfigsMetadata($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\SecurityCenter\V2\ResourceValueConfigMetadata::class);
        $this->resource_value_configs_metadata = $arr;

        return $this;
    }

    /**
     * Indicates which cloud provider was used in this simulation.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.CloudProvider cloud_provider = 4;</code>
     * @return int
     */
    public function getCloudProvider()
    {
        return $this->cloud_provider;
    }

    /**
     * Indicates which cloud provider was used in this simulation.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.CloudProvider cloud_provider = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setCloudProvider($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\SecurityCenter\V2\CloudProvider::class);
        $this->cloud_provider = $var;

        return $this;
    }

}

