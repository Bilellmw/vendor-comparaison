<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/policytroubleshooter/v1/checker.proto

namespace Google\Cloud\PolicyTroubleshooter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for [TroubleshootIamPolicy][google.cloud.policytroubleshooter.v1.IamChecker.TroubleshootIamPolicy].
 *
 * Generated from protobuf message <code>google.cloud.policytroubleshooter.v1.TroubleshootIamPolicyRequest</code>
 */
class TroubleshootIamPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The information to use for checking whether a member has a permission for a
     * resource.
     *
     * Generated from protobuf field <code>.google.cloud.policytroubleshooter.v1.AccessTuple access_tuple = 1;</code>
     */
    private $access_tuple = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\PolicyTroubleshooter\V1\AccessTuple $access_tuple
     *           The information to use for checking whether a member has a permission for a
     *           resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Policytroubleshooter\V1\Checker::initOnce();
        parent::__construct($data);
    }

    /**
     * The information to use for checking whether a member has a permission for a
     * resource.
     *
     * Generated from protobuf field <code>.google.cloud.policytroubleshooter.v1.AccessTuple access_tuple = 1;</code>
     * @return \Google\Cloud\PolicyTroubleshooter\V1\AccessTuple|null
     */
    public function getAccessTuple()
    {
        return isset($this->access_tuple) ? $this->access_tuple : null;
    }

    public function hasAccessTuple()
    {
        return isset($this->access_tuple);
    }

    public function clearAccessTuple()
    {
        unset($this->access_tuple);
    }

    /**
     * The information to use for checking whether a member has a permission for a
     * resource.
     *
     * Generated from protobuf field <code>.google.cloud.policytroubleshooter.v1.AccessTuple access_tuple = 1;</code>
     * @param \Google\Cloud\PolicyTroubleshooter\V1\AccessTuple $var
     * @return $this
     */
    public function setAccessTuple($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\PolicyTroubleshooter\V1\AccessTuple::class);
        $this->access_tuple = $var;

        return $this;
    }

}

