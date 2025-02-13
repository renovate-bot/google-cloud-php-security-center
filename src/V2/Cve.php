<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v2/vulnerability.proto

namespace Google\Cloud\SecurityCenter\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CVE stands for Common Vulnerabilities and Exposures.
 * Information from the [CVE
 * record](https://www.cve.org/ResourcesSupport/Glossary) that describes this
 * vulnerability.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v2.Cve</code>
 */
class Cve extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique identifier for the vulnerability. e.g. CVE-2021-34527
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Additional information about the CVE.
     * e.g. https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2021-34527
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v2.Reference references = 2;</code>
     */
    private $references;
    /**
     * Describe Common Vulnerability Scoring System specified at
     * https://www.first.org/cvss/v3.1/specification-document
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.Cvssv3 cvssv3 = 3;</code>
     */
    protected $cvssv3 = null;
    /**
     * Whether upstream fix is available for the CVE.
     *
     * Generated from protobuf field <code>bool upstream_fix_available = 4;</code>
     */
    protected $upstream_fix_available = false;
    /**
     * The potential impact of the vulnerability if it was to be exploited.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.Cve.RiskRating impact = 5;</code>
     */
    protected $impact = 0;
    /**
     * The exploitation activity of the vulnerability in the wild.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.Cve.ExploitationActivity exploitation_activity = 6;</code>
     */
    protected $exploitation_activity = 0;
    /**
     * Whether or not the vulnerability has been observed in the wild.
     *
     * Generated from protobuf field <code>bool observed_in_the_wild = 7;</code>
     */
    protected $observed_in_the_wild = false;
    /**
     * Whether or not the vulnerability was zero day when the finding was
     * published.
     *
     * Generated from protobuf field <code>bool zero_day = 8;</code>
     */
    protected $zero_day = false;
    /**
     * Date the first publicly available exploit or PoC was released.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp exploit_release_date = 9;</code>
     */
    protected $exploit_release_date = null;
    /**
     * Date of the earliest known exploitation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp first_exploitation_date = 10;</code>
     */
    protected $first_exploitation_date = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           The unique identifier for the vulnerability. e.g. CVE-2021-34527
     *     @type array<\Google\Cloud\SecurityCenter\V2\Reference>|\Google\Protobuf\Internal\RepeatedField $references
     *           Additional information about the CVE.
     *           e.g. https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2021-34527
     *     @type \Google\Cloud\SecurityCenter\V2\Cvssv3 $cvssv3
     *           Describe Common Vulnerability Scoring System specified at
     *           https://www.first.org/cvss/v3.1/specification-document
     *     @type bool $upstream_fix_available
     *           Whether upstream fix is available for the CVE.
     *     @type int $impact
     *           The potential impact of the vulnerability if it was to be exploited.
     *     @type int $exploitation_activity
     *           The exploitation activity of the vulnerability in the wild.
     *     @type bool $observed_in_the_wild
     *           Whether or not the vulnerability has been observed in the wild.
     *     @type bool $zero_day
     *           Whether or not the vulnerability was zero day when the finding was
     *           published.
     *     @type \Google\Protobuf\Timestamp $exploit_release_date
     *           Date the first publicly available exploit or PoC was released.
     *     @type \Google\Protobuf\Timestamp $first_exploitation_date
     *           Date of the earliest known exploitation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V2\Vulnerability::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique identifier for the vulnerability. e.g. CVE-2021-34527
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The unique identifier for the vulnerability. e.g. CVE-2021-34527
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
     * Additional information about the CVE.
     * e.g. https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2021-34527
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v2.Reference references = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReferences()
    {
        return $this->references;
    }

    /**
     * Additional information about the CVE.
     * e.g. https://cve.mitre.org/cgi-bin/cvename.cgi?name=CVE-2021-34527
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v2.Reference references = 2;</code>
     * @param array<\Google\Cloud\SecurityCenter\V2\Reference>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReferences($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\SecurityCenter\V2\Reference::class);
        $this->references = $arr;

        return $this;
    }

    /**
     * Describe Common Vulnerability Scoring System specified at
     * https://www.first.org/cvss/v3.1/specification-document
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.Cvssv3 cvssv3 = 3;</code>
     * @return \Google\Cloud\SecurityCenter\V2\Cvssv3|null
     */
    public function getCvssv3()
    {
        return $this->cvssv3;
    }

    public function hasCvssv3()
    {
        return isset($this->cvssv3);
    }

    public function clearCvssv3()
    {
        unset($this->cvssv3);
    }

    /**
     * Describe Common Vulnerability Scoring System specified at
     * https://www.first.org/cvss/v3.1/specification-document
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.Cvssv3 cvssv3 = 3;</code>
     * @param \Google\Cloud\SecurityCenter\V2\Cvssv3 $var
     * @return $this
     */
    public function setCvssv3($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecurityCenter\V2\Cvssv3::class);
        $this->cvssv3 = $var;

        return $this;
    }

    /**
     * Whether upstream fix is available for the CVE.
     *
     * Generated from protobuf field <code>bool upstream_fix_available = 4;</code>
     * @return bool
     */
    public function getUpstreamFixAvailable()
    {
        return $this->upstream_fix_available;
    }

    /**
     * Whether upstream fix is available for the CVE.
     *
     * Generated from protobuf field <code>bool upstream_fix_available = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setUpstreamFixAvailable($var)
    {
        GPBUtil::checkBool($var);
        $this->upstream_fix_available = $var;

        return $this;
    }

    /**
     * The potential impact of the vulnerability if it was to be exploited.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.Cve.RiskRating impact = 5;</code>
     * @return int
     */
    public function getImpact()
    {
        return $this->impact;
    }

    /**
     * The potential impact of the vulnerability if it was to be exploited.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.Cve.RiskRating impact = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setImpact($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\SecurityCenter\V2\Cve\RiskRating::class);
        $this->impact = $var;

        return $this;
    }

    /**
     * The exploitation activity of the vulnerability in the wild.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.Cve.ExploitationActivity exploitation_activity = 6;</code>
     * @return int
     */
    public function getExploitationActivity()
    {
        return $this->exploitation_activity;
    }

    /**
     * The exploitation activity of the vulnerability in the wild.
     *
     * Generated from protobuf field <code>.google.cloud.securitycenter.v2.Cve.ExploitationActivity exploitation_activity = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setExploitationActivity($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\SecurityCenter\V2\Cve\ExploitationActivity::class);
        $this->exploitation_activity = $var;

        return $this;
    }

    /**
     * Whether or not the vulnerability has been observed in the wild.
     *
     * Generated from protobuf field <code>bool observed_in_the_wild = 7;</code>
     * @return bool
     */
    public function getObservedInTheWild()
    {
        return $this->observed_in_the_wild;
    }

    /**
     * Whether or not the vulnerability has been observed in the wild.
     *
     * Generated from protobuf field <code>bool observed_in_the_wild = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setObservedInTheWild($var)
    {
        GPBUtil::checkBool($var);
        $this->observed_in_the_wild = $var;

        return $this;
    }

    /**
     * Whether or not the vulnerability was zero day when the finding was
     * published.
     *
     * Generated from protobuf field <code>bool zero_day = 8;</code>
     * @return bool
     */
    public function getZeroDay()
    {
        return $this->zero_day;
    }

    /**
     * Whether or not the vulnerability was zero day when the finding was
     * published.
     *
     * Generated from protobuf field <code>bool zero_day = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setZeroDay($var)
    {
        GPBUtil::checkBool($var);
        $this->zero_day = $var;

        return $this;
    }

    /**
     * Date the first publicly available exploit or PoC was released.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp exploit_release_date = 9;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExploitReleaseDate()
    {
        return $this->exploit_release_date;
    }

    public function hasExploitReleaseDate()
    {
        return isset($this->exploit_release_date);
    }

    public function clearExploitReleaseDate()
    {
        unset($this->exploit_release_date);
    }

    /**
     * Date the first publicly available exploit or PoC was released.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp exploit_release_date = 9;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExploitReleaseDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->exploit_release_date = $var;

        return $this;
    }

    /**
     * Date of the earliest known exploitation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp first_exploitation_date = 10;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getFirstExploitationDate()
    {
        return $this->first_exploitation_date;
    }

    public function hasFirstExploitationDate()
    {
        return isset($this->first_exploitation_date);
    }

    public function clearFirstExploitationDate()
    {
        unset($this->first_exploitation_date);
    }

    /**
     * Date of the earliest known exploitation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp first_exploitation_date = 10;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFirstExploitationDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->first_exploitation_date = $var;

        return $this;
    }

}

