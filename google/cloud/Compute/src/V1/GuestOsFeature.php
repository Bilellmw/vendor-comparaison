<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Guest OS features.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.GuestOsFeature</code>
 */
class GuestOsFeature extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of a supported feature. Read  Enabling guest operating system features to see a list of available options.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.GuestOsFeature.Type type = 3575610;</code>
     */
    private $type = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           The ID of a supported feature. Read  Enabling guest operating system features to see a list of available options.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of a supported feature. Read  Enabling guest operating system features to see a list of available options.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.GuestOsFeature.Type type = 3575610;</code>
     * @return int
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : 0;
    }

    public function hasType()
    {
        return isset($this->type);
    }

    public function clearType()
    {
        unset($this->type);
    }

    /**
     * The ID of a supported feature. Read  Enabling guest operating system features to see a list of available options.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.GuestOsFeature.Type type = 3575610;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\GuestOsFeature\Type::class);
        $this->type = $var;

        return $this;
    }

}
