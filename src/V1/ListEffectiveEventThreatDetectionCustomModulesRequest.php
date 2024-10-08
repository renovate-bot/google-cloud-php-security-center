<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to list effective Event Threat Detection custom modules.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.ListEffectiveEventThreatDetectionCustomModulesRequest</code>
 */
class ListEffectiveEventThreatDetectionCustomModulesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the parent to list custom modules for.
     * Its format is:
     *   * `organizations/{organization}/eventThreatDetectionSettings`.
     *   * `folders/{folder}/eventThreatDetectionSettings`.
     *   * `projects/{project}/eventThreatDetectionSettings`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * A page token, received from a previous
     * `ListEffectiveEventThreatDetectionCustomModules` call. Provide this to
     * retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * `ListEffectiveEventThreatDetectionCustomModules` must match the call that
     * provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     */
    protected $page_token = '';
    /**
     * The maximum number of modules to return. The service may return fewer than
     * this value.
     * If unspecified, at most 10 configs will be returned.
     * The maximum value is 1000; values above 1000 will be coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    protected $page_size = 0;

    /**
     * @param string $parent Required. Name of the parent to list custom modules for.
     *
     *                       Its format is:
     *
     *                       * `organizations/{organization}/eventThreatDetectionSettings`.
     *                       * `folders/{folder}/eventThreatDetectionSettings`.
     *                       * `projects/{project}/eventThreatDetectionSettings`. Please see
     *                       {@see SecurityCenterClient::eventThreatDetectionSettingsName()} for help formatting this field.
     *
     * @return \Google\Cloud\SecurityCenter\V1\ListEffectiveEventThreatDetectionCustomModulesRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Name of the parent to list custom modules for.
     *           Its format is:
     *             * `organizations/{organization}/eventThreatDetectionSettings`.
     *             * `folders/{folder}/eventThreatDetectionSettings`.
     *             * `projects/{project}/eventThreatDetectionSettings`.
     *     @type string $page_token
     *           A page token, received from a previous
     *           `ListEffectiveEventThreatDetectionCustomModules` call. Provide this to
     *           retrieve the subsequent page.
     *           When paginating, all other parameters provided to
     *           `ListEffectiveEventThreatDetectionCustomModules` must match the call that
     *           provided the page token.
     *     @type int $page_size
     *           The maximum number of modules to return. The service may return fewer than
     *           this value.
     *           If unspecified, at most 10 configs will be returned.
     *           The maximum value is 1000; values above 1000 will be coerced to 1000.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the parent to list custom modules for.
     * Its format is:
     *   * `organizations/{organization}/eventThreatDetectionSettings`.
     *   * `folders/{folder}/eventThreatDetectionSettings`.
     *   * `projects/{project}/eventThreatDetectionSettings`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Name of the parent to list custom modules for.
     * Its format is:
     *   * `organizations/{organization}/eventThreatDetectionSettings`.
     *   * `folders/{folder}/eventThreatDetectionSettings`.
     *   * `projects/{project}/eventThreatDetectionSettings`.
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
     * A page token, received from a previous
     * `ListEffectiveEventThreatDetectionCustomModules` call. Provide this to
     * retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * `ListEffectiveEventThreatDetectionCustomModules` must match the call that
     * provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A page token, received from a previous
     * `ListEffectiveEventThreatDetectionCustomModules` call. Provide this to
     * retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * `ListEffectiveEventThreatDetectionCustomModules` must match the call that
     * provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * The maximum number of modules to return. The service may return fewer than
     * this value.
     * If unspecified, at most 10 configs will be returned.
     * The maximum value is 1000; values above 1000 will be coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of modules to return. The service may return fewer than
     * this value.
     * If unspecified, at most 10 configs will be returned.
     * The maximum value is 1000; values above 1000 will be coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

}

