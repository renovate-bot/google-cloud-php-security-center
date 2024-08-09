<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/mute_config.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A mute config is a Cloud SCC resource that contains the configuration
 * to mute create/update events of findings.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.MuteConfig</code>
 */
class MuteConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * This field will be ignored if provided on config creation. Format
     * `organizations/{organization}/muteConfigs/{mute_config}`
     * `folders/{folder}/muteConfigs/{mute_config}`
     * `projects/{project}/muteConfigs/{mute_config}`
     * `organizations/{organization}/locations/global/muteConfigs/{mute_config}`
     * `folders/{folder}/locations/global/muteConfigs/{mute_config}`
     * `projects/{project}/locations/global/muteConfigs/{mute_config}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The human readable name to be displayed for the mute config.
     *
     * Generated from protobuf field <code>string display_name = 2 [deprecated = true];</code>
     * @deprecated
     */
    protected $display_name = '';
    /**
     * A description of the mute config.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';
    /**
     * Required. An expression that defines the filter to apply across
     * create/update events of findings. While creating a filter string, be
     * mindful of the scope in which the mute configuration is being created.
     * E.g., If a filter contains project = X but is created under the project = Y
     * scope, it might not match any findings.
     * The following field and operator combinations are supported:
     * * severity: `=`, `:`
     * * category: `=`, `:`
     * * resource.name: `=`, `:`
     * * resource.project_name: `=`, `:`
     * * resource.project_display_name: `=`, `:`
     * * resource.folders.resource_folder: `=`, `:`
     * * resource.parent_name: `=`, `:`
     * * resource.parent_display_name: `=`, `:`
     * * resource.type: `=`, `:`
     * * finding_class: `=`, `:`
     * * indicator.ip_addresses: `=`, `:`
     * * indicator.domains: `=`, `:`
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $filter = '';
    /**
     * Output only. The time at which the mute config was created.
     * This field is set by the server and will be ignored if provided on config
     * creation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The most recent time at which the mute config was updated.
     * This field is set by the server and will be ignored if provided on config
     * creation or update.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Output only. Email address of the user who last edited the mute config.
     * This field is set by the server and will be ignored if provided on config
     * creation or update.
     *
     * Generated from protobuf field <code>string most_recent_editor = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $most_recent_editor = '';
    /**
     * Optional. The type of the mute config, which determines what type of mute
     * state the config affects. The static mute state takes precedence over the
     * dynamic mute state. Immutable after creation. STATIC by default if not set
     * during creation.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.MuteConfig.MuteConfigType type = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $type = 0;
    /**
     * Optional. The expiry of the mute config. Only applicable for dynamic
     * configs. If the expiry is set, when the config expires, it is removed from
     * all findings.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiry_time = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $expiry_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           This field will be ignored if provided on config creation. Format
     *           `organizations/{organization}/muteConfigs/{mute_config}`
     *           `folders/{folder}/muteConfigs/{mute_config}`
     *           `projects/{project}/muteConfigs/{mute_config}`
     *           `organizations/{organization}/locations/global/muteConfigs/{mute_config}`
     *           `folders/{folder}/locations/global/muteConfigs/{mute_config}`
     *           `projects/{project}/locations/global/muteConfigs/{mute_config}`
     *     @type string $display_name
     *           The human readable name to be displayed for the mute config.
     *     @type string $description
     *           A description of the mute config.
     *     @type string $filter
     *           Required. An expression that defines the filter to apply across
     *           create/update events of findings. While creating a filter string, be
     *           mindful of the scope in which the mute configuration is being created.
     *           E.g., If a filter contains project = X but is created under the project = Y
     *           scope, it might not match any findings.
     *           The following field and operator combinations are supported:
     *           * severity: `=`, `:`
     *           * category: `=`, `:`
     *           * resource.name: `=`, `:`
     *           * resource.project_name: `=`, `:`
     *           * resource.project_display_name: `=`, `:`
     *           * resource.folders.resource_folder: `=`, `:`
     *           * resource.parent_name: `=`, `:`
     *           * resource.parent_display_name: `=`, `:`
     *           * resource.type: `=`, `:`
     *           * finding_class: `=`, `:`
     *           * indicator.ip_addresses: `=`, `:`
     *           * indicator.domains: `=`, `:`
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time at which the mute config was created.
     *           This field is set by the server and will be ignored if provided on config
     *           creation.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The most recent time at which the mute config was updated.
     *           This field is set by the server and will be ignored if provided on config
     *           creation or update.
     *     @type string $most_recent_editor
     *           Output only. Email address of the user who last edited the mute config.
     *           This field is set by the server and will be ignored if provided on config
     *           creation or update.
     *     @type int $type
     *           Optional. The type of the mute config, which determines what type of mute
     *           state the config affects. The static mute state takes precedence over the
     *           dynamic mute state. Immutable after creation. STATIC by default if not set
     *           during creation.
     *     @type \Google\Protobuf\Timestamp $expiry_time
     *           Optional. The expiry of the mute config. Only applicable for dynamic
     *           configs. If the expiry is set, when the config expires, it is removed from
     *           all findings.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\MuteConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * This field will be ignored if provided on config creation. Format
     * `organizations/{organization}/muteConfigs/{mute_config}`
     * `folders/{folder}/muteConfigs/{mute_config}`
     * `projects/{project}/muteConfigs/{mute_config}`
     * `organizations/{organization}/locations/global/muteConfigs/{mute_config}`
     * `folders/{folder}/locations/global/muteConfigs/{mute_config}`
     * `projects/{project}/locations/global/muteConfigs/{mute_config}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * This field will be ignored if provided on config creation. Format
     * `organizations/{organization}/muteConfigs/{mute_config}`
     * `folders/{folder}/muteConfigs/{mute_config}`
     * `projects/{project}/muteConfigs/{mute_config}`
     * `organizations/{organization}/locations/global/muteConfigs/{mute_config}`
     * `folders/{folder}/locations/global/muteConfigs/{mute_config}`
     * `projects/{project}/locations/global/muteConfigs/{mute_config}`
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
     * The human readable name to be displayed for the mute config.
     *
     * Generated from protobuf field <code>string display_name = 2 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getDisplayName()
    {
        @trigger_error('display_name is deprecated.', E_USER_DEPRECATED);
        return $this->display_name;
    }

    /**
     * The human readable name to be displayed for the mute config.
     *
     * Generated from protobuf field <code>string display_name = 2 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setDisplayName($var)
    {
        @trigger_error('display_name is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * A description of the mute config.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A description of the mute config.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Required. An expression that defines the filter to apply across
     * create/update events of findings. While creating a filter string, be
     * mindful of the scope in which the mute configuration is being created.
     * E.g., If a filter contains project = X but is created under the project = Y
     * scope, it might not match any findings.
     * The following field and operator combinations are supported:
     * * severity: `=`, `:`
     * * category: `=`, `:`
     * * resource.name: `=`, `:`
     * * resource.project_name: `=`, `:`
     * * resource.project_display_name: `=`, `:`
     * * resource.folders.resource_folder: `=`, `:`
     * * resource.parent_name: `=`, `:`
     * * resource.parent_display_name: `=`, `:`
     * * resource.type: `=`, `:`
     * * finding_class: `=`, `:`
     * * indicator.ip_addresses: `=`, `:`
     * * indicator.domains: `=`, `:`
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Required. An expression that defines the filter to apply across
     * create/update events of findings. While creating a filter string, be
     * mindful of the scope in which the mute configuration is being created.
     * E.g., If a filter contains project = X but is created under the project = Y
     * scope, it might not match any findings.
     * The following field and operator combinations are supported:
     * * severity: `=`, `:`
     * * category: `=`, `:`
     * * resource.name: `=`, `:`
     * * resource.project_name: `=`, `:`
     * * resource.project_display_name: `=`, `:`
     * * resource.folders.resource_folder: `=`, `:`
     * * resource.parent_name: `=`, `:`
     * * resource.parent_display_name: `=`, `:`
     * * resource.type: `=`, `:`
     * * finding_class: `=`, `:`
     * * indicator.ip_addresses: `=`, `:`
     * * indicator.domains: `=`, `:`
     *
     * Generated from protobuf field <code>string filter = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Output only. The time at which the mute config was created.
     * This field is set by the server and will be ignored if provided on config
     * creation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time at which the mute config was created.
     * This field is set by the server and will be ignored if provided on config
     * creation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The most recent time at which the mute config was updated.
     * This field is set by the server and will be ignored if provided on config
     * creation or update.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The most recent time at which the mute config was updated.
     * This field is set by the server and will be ignored if provided on config
     * creation or update.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. Email address of the user who last edited the mute config.
     * This field is set by the server and will be ignored if provided on config
     * creation or update.
     *
     * Generated from protobuf field <code>string most_recent_editor = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getMostRecentEditor()
    {
        return $this->most_recent_editor;
    }

    /**
     * Output only. Email address of the user who last edited the mute config.
     * This field is set by the server and will be ignored if provided on config
     * creation or update.
     *
     * Generated from protobuf field <code>string most_recent_editor = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setMostRecentEditor($var)
    {
        GPBUtil::checkString($var, True);
        $this->most_recent_editor = $var;

        return $this;
    }

    /**
     * Optional. The type of the mute config, which determines what type of mute
     * state the config affects. The static mute state takes precedence over the
     * dynamic mute state. Immutable after creation. STATIC by default if not set
     * during creation.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.MuteConfig.MuteConfigType type = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Optional. The type of the mute config, which determines what type of mute
     * state the config affects. The static mute state takes precedence over the
     * dynamic mute state. Immutable after creation. STATIC by default if not set
     * during creation.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.MuteConfig.MuteConfigType type = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\SecurityCenter\V1\MuteConfig\MuteConfigType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Optional. The expiry of the mute config. Only applicable for dynamic
     * configs. If the expiry is set, when the config expires, it is removed from
     * all findings.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiry_time = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpiryTime()
    {
        return $this->expiry_time;
    }

    public function hasExpiryTime()
    {
        return isset($this->expiry_time);
    }

    public function clearExpiryTime()
    {
        unset($this->expiry_time);
    }

    /**
     * Optional. The expiry of the mute config. Only applicable for dynamic
     * configs. If the expiry is set, when the config expires, it is removed from
     * all findings.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiry_time = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpiryTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expiry_time = $var;

        return $this;
    }

}

