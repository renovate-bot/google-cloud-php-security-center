<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/attack_path.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A path that an attacker could take to reach an exposed resource.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.AttackPath</code>
 */
class AttackPath extends \Google\Protobuf\Internal\Message
{
    /**
     * The attack path name, for example,
     *  `organizations/12/simulation/34/valuedResources/56/attackPaths/78`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * A list of nodes that exist in this attack path.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.AttackPath.AttackPathNode path_nodes = 2;</code>
     */
    private $path_nodes;
    /**
     * A list of the edges between nodes in this attack path.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.AttackPath.AttackPathEdge edges = 3;</code>
     */
    private $edges;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The attack path name, for example,
     *            `organizations/12/simulation/34/valuedResources/56/attackPaths/78`
     *     @type array<\Google\Cloud\SecurityCenter\V1\AttackPath\AttackPathNode>|\Google\Protobuf\Internal\RepeatedField $path_nodes
     *           A list of nodes that exist in this attack path.
     *     @type array<\Google\Cloud\SecurityCenter\V1\AttackPath\AttackPathEdge>|\Google\Protobuf\Internal\RepeatedField $edges
     *           A list of the edges between nodes in this attack path.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\AttackPath::initOnce();
        parent::__construct($data);
    }

    /**
     * The attack path name, for example,
     *  `organizations/12/simulation/34/valuedResources/56/attackPaths/78`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The attack path name, for example,
     *  `organizations/12/simulation/34/valuedResources/56/attackPaths/78`
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
     * A list of nodes that exist in this attack path.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.AttackPath.AttackPathNode path_nodes = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPathNodes()
    {
        return $this->path_nodes;
    }

    /**
     * A list of nodes that exist in this attack path.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.AttackPath.AttackPathNode path_nodes = 2;</code>
     * @param array<\Google\Cloud\SecurityCenter\V1\AttackPath\AttackPathNode>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPathNodes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\SecurityCenter\V1\AttackPath\AttackPathNode::class);
        $this->path_nodes = $arr;

        return $this;
    }

    /**
     * A list of the edges between nodes in this attack path.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.AttackPath.AttackPathEdge edges = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEdges()
    {
        return $this->edges;
    }

    /**
     * A list of the edges between nodes in this attack path.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.AttackPath.AttackPathEdge edges = 3;</code>
     * @param array<\Google\Cloud\SecurityCenter\V1\AttackPath\AttackPathEdge>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEdges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\SecurityCenter\V1\AttackPath\AttackPathEdge::class);
        $this->edges = $arr;

        return $this;
    }

}

