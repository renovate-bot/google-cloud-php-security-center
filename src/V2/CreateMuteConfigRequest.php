<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for creating a mute config.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v2.CreateMuteConfigRequest</code>
 */
class CreateMuteConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the new mute configs's parent. Its format is
     * `organizations/[organization_id]/locations/[location_id]`,
     * `folders/[folder_id]/locations/[location_id]`, or
     * `projects/[project_id]/locations/[location_id]`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The mute config being created.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.MuteConfig mute_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $mute_config = null;
    /**
     * Required. Unique identifier provided by the client within the parent scope.
     * It must consist of only lowercase letters, numbers, and hyphens, must start
     * with a letter, must end with either a letter or a number, and must be 63
     * characters or less.
     *
     * Generated from protobuf field <code>string mute_config_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $mute_config_id = '';

    /**
     * @param string                                     $parent       Required. Resource name of the new mute configs's parent. Its format is
     *                                                                 `organizations/[organization_id]/locations/[location_id]`,
     *                                                                 `folders/[folder_id]/locations/[location_id]`, or
     *                                                                 `projects/[project_id]/locations/[location_id]`. Please see
     *                                                                 {@see SecurityCenterClient::organizationLocationName()} for help formatting this field.
     * @param \Google\Cloud\SecurityCenter\V2\MuteConfig $muteConfig   Required. The mute config being created.
     * @param string                                     $muteConfigId Required. Unique identifier provided by the client within the parent scope.
     *                                                                 It must consist of only lowercase letters, numbers, and hyphens, must start
     *                                                                 with a letter, must end with either a letter or a number, and must be 63
     *                                                                 characters or less.
     *
     * @return \Google\Cloud\SecurityCenter\V2\CreateMuteConfigRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\SecurityCenter\V2\MuteConfig $muteConfig, string $muteConfigId): self
    {
        return (new self())
            ->setParent($parent)
            ->setMuteConfig($muteConfig)
            ->setMuteConfigId($muteConfigId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Resource name of the new mute configs's parent. Its format is
     *           `organizations/[organization_id]/locations/[location_id]`,
     *           `folders/[folder_id]/locations/[location_id]`, or
     *           `projects/[project_id]/locations/[location_id]`.
     *     @type \Google\Cloud\SecurityCenter\V2\MuteConfig $mute_config
     *           Required. The mute config being created.
     *     @type string $mute_config_id
     *           Required. Unique identifier provided by the client within the parent scope.
     *           It must consist of only lowercase letters, numbers, and hyphens, must start
     *           with a letter, must end with either a letter or a number, and must be 63
     *           characters or less.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V2\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the new mute configs's parent. Its format is
     * `organizations/[organization_id]/locations/[location_id]`,
     * `folders/[folder_id]/locations/[location_id]`, or
     * `projects/[project_id]/locations/[location_id]`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Resource name of the new mute configs's parent. Its format is
     * `organizations/[organization_id]/locations/[location_id]`,
     * `folders/[folder_id]/locations/[location_id]`, or
     * `projects/[project_id]/locations/[location_id]`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The mute config being created.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.MuteConfig mute_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\SecurityCenter\V2\MuteConfig|null
     */
    public function getMuteConfig()
    {
        return $this->mute_config;
    }

    public function hasMuteConfig()
    {
        return isset($this->mute_config);
    }

    public function clearMuteConfig()
    {
        unset($this->mute_config);
    }

    /**
     * Required. The mute config being created.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.MuteConfig mute_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\SecurityCenter\V2\MuteConfig $var
     * @return $this
     */
    public function setMuteConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenter\V2\MuteConfig::class);
        $this->mute_config = $var;

        return $this;
    }

    /**
     * Required. Unique identifier provided by the client within the parent scope.
     * It must consist of only lowercase letters, numbers, and hyphens, must start
     * with a letter, must end with either a letter or a number, and must be 63
     * characters or less.
     *
     * Generated from protobuf field <code>string mute_config_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getMuteConfigId()
    {
        return $this->mute_config_id;
    }

    /**
     * Required. Unique identifier provided by the client within the parent scope.
     * It must consist of only lowercase letters, numbers, and hyphens, must start
     * with a letter, must end with either a letter or a number, and must be 63
     * characters or less.
     *
     * Generated from protobuf field <code>string mute_config_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setMuteConfigId($var)
    {
        GPBUtil::checkString($var, True);
        $this->mute_config_id = $var;

        return $this;
    }

}

