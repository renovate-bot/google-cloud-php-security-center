<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/kubernetes.proto

namespace Google\Cloud\SecurityCenter\V1\Kubernetes;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Kubernetes Role or ClusterRole.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.Kubernetes.Role</code>
 */
class Role extends \Google\Protobuf\Internal\Message
{
    /**
     * Role type.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.Kubernetes.Role.Kind kind = 1;</code>
     */
    protected $kind = 0;
    /**
     * Role namespace.
     *
     * Generated from protobuf field <code>string ns = 2;</code>
     */
    protected $ns = '';
    /**
     * Role name.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $kind
     *           Role type.
     *     @type string $ns
     *           Role namespace.
     *     @type string $name
     *           Role name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\Kubernetes::initOnce();
        parent::__construct($data);
    }

    /**
     * Role type.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.Kubernetes.Role.Kind kind = 1;</code>
     * @return int
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Role type.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v1.Kubernetes.Role.Kind kind = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\SecurityCenter\V1\Kubernetes\Role\Kind::class);
        $this->kind = $var;

        return $this;
    }

    /**
     * Role namespace.
     *
     * Generated from protobuf field <code>string ns = 2;</code>
     * @return string
     */
    public function getNs()
    {
        return $this->ns;
    }

    /**
     * Role namespace.
     *
     * Generated from protobuf field <code>string ns = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNs($var)
    {
        GPBUtil::checkString($var, True);
        $this->ns = $var;

        return $this;
    }

    /**
     * Role name.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Role name.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}


