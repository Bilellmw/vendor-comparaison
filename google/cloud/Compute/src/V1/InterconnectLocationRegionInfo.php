<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about any potential InterconnectAttachments between an Interconnect at a specific InterconnectLocation, and a specific Cloud Region.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InterconnectLocationRegionInfo</code>
 */
class InterconnectLocationRegionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Expected round-trip time in milliseconds, from this InterconnectLocation to a VM in this region.
     *
     * Generated from protobuf field <code>int64 expected_rtt_ms = 422543866;</code>
     */
    private $expected_rtt_ms = null;
    /**
     * Identifies the network presence of this location.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InterconnectLocationRegionInfo.LocationPresence location_presence = 101517893;</code>
     */
    private $location_presence = null;
    /**
     * URL for the region of this location.
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     */
    private $region = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $expected_rtt_ms
     *           Expected round-trip time in milliseconds, from this InterconnectLocation to a VM in this region.
     *     @type int $location_presence
     *           Identifies the network presence of this location.
     *     @type string $region
     *           URL for the region of this location.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Expected round-trip time in milliseconds, from this InterconnectLocation to a VM in this region.
     *
     * Generated from protobuf field <code>int64 expected_rtt_ms = 422543866;</code>
     * @return int|string
     */
    public function getExpectedRttMs()
    {
        return isset($this->expected_rtt_ms) ? $this->expected_rtt_ms : 0;
    }

    public function hasExpectedRttMs()
    {
        return isset($this->expected_rtt_ms);
    }

    public function clearExpectedRttMs()
    {
        unset($this->expected_rtt_ms);
    }

    /**
     * Expected round-trip time in milliseconds, from this InterconnectLocation to a VM in this region.
     *
     * Generated from protobuf field <code>int64 expected_rtt_ms = 422543866;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpectedRttMs($var)
    {
        GPBUtil::checkInt64($var);
        $this->expected_rtt_ms = $var;

        return $this;
    }

    /**
     * Identifies the network presence of this location.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InterconnectLocationRegionInfo.LocationPresence location_presence = 101517893;</code>
     * @return int
     */
    public function getLocationPresence()
    {
        return isset($this->location_presence) ? $this->location_presence : 0;
    }

    public function hasLocationPresence()
    {
        return isset($this->location_presence);
    }

    public function clearLocationPresence()
    {
        unset($this->location_presence);
    }

    /**
     * Identifies the network presence of this location.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.InterconnectLocationRegionInfo.LocationPresence location_presence = 101517893;</code>
     * @param int $var
     * @return $this
     */
    public function setLocationPresence($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\InterconnectLocationRegionInfo\LocationPresence::class);
        $this->location_presence = $var;

        return $this;
    }

    /**
     * URL for the region of this location.
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     * @return string
     */
    public function getRegion()
    {
        return isset($this->region) ? $this->region : '';
    }

    public function hasRegion()
    {
        return isset($this->region);
    }

    public function clearRegion()
    {
        unset($this->region);
    }

    /**
     * URL for the region of this location.
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

}

