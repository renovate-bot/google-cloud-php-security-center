<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/compliance.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains compliance information about a security standard indicating unmet
 * recommendations.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.Compliance</code>
 */
class Compliance extends \Google\Protobuf\Internal\Message
{
    /**
     * Industry-wide compliance standards or benchmarks, such as CIS, PCI, and
     * OWASP.
     *
     * Generated from protobuf field <code>string standard = 1;</code>
     */
    protected $standard = '';
    /**
     * Version of the standard or benchmark, for example, 1.1
     *
     * Generated from protobuf field <code>string version = 2;</code>
     */
    protected $version = '';
    /**
     * Policies within the standard or benchmark, for example, A.12.4.1
     *
     * Generated from protobuf field <code>repeated string ids = 3;</code>
     */
    private $ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $standard
     *           Industry-wide compliance standards or benchmarks, such as CIS, PCI, and
     *           OWASP.
     *     @type string $version
     *           Version of the standard or benchmark, for example, 1.1
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $ids
     *           Policies within the standard or benchmark, for example, A.12.4.1
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\Compliance::initOnce();
        parent::__construct($data);
    }

    /**
     * Industry-wide compliance standards or benchmarks, such as CIS, PCI, and
     * OWASP.
     *
     * Generated from protobuf field <code>string standard = 1;</code>
     * @return string
     */
    public function getStandard()
    {
        return $this->standard;
    }

    /**
     * Industry-wide compliance standards or benchmarks, such as CIS, PCI, and
     * OWASP.
     *
     * Generated from protobuf field <code>string standard = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStandard($var)
    {
        GPBUtil::checkString($var, True);
        $this->standard = $var;

        return $this;
    }

    /**
     * Version of the standard or benchmark, for example, 1.1
     *
     * Generated from protobuf field <code>string version = 2;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Version of the standard or benchmark, for example, 1.1
     *
     * Generated from protobuf field <code>string version = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * Policies within the standard or benchmark, for example, A.12.4.1
     *
     * Generated from protobuf field <code>repeated string ids = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * Policies within the standard or benchmark, for example, A.12.4.1
     *
     * Generated from protobuf field <code>repeated string ids = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ids = $arr;

        return $this;
    }

}

