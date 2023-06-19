<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for InstanceGroupManagers.Get. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.GetInstanceGroupManagerRequest</code>
 */
class GetInstanceGroupManagerRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the managed instance group.
     *
     * Generated from protobuf field <code>string instance_group_manager = 249363395 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $instance_group_manager = '';
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project = '';
    /**
     * The name of the zone where the managed instance group is located.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $zone = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance_group_manager
     *           The name of the managed instance group.
     *     @type string $project
     *           Project ID for this request.
     *     @type string $zone
     *           The name of the zone where the managed instance group is located.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the managed instance group.
     *
     * Generated from protobuf field <code>string instance_group_manager = 249363395 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getInstanceGroupManager()
    {
        return $this->instance_group_manager;
    }

    /**
     * The name of the managed instance group.
     *
     * Generated from protobuf field <code>string instance_group_manager = 249363395 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceGroupManager($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_group_manager = $var;

        return $this;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * The name of the zone where the managed instance group is located.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * The name of the zone where the managed instance group is located.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

}

