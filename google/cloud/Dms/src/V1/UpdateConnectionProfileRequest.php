<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for 'UpdateConnectionProfile' request.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.UpdateConnectionProfileRequest</code>
 */
class UpdateConnectionProfileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Field mask is used to specify the fields to be overwritten in the
     * connection profile resource by the update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;
    /**
     * Required. The connection profile parameters to update.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.ConnectionProfile connection_profile = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $connection_profile = null;
    /**
     * A unique id used to identify the request. If the server receives two
     * requests with the same id, then the second request will be ignored.
     * It is recommended to always set this value to a UUID.
     * The id must contain only letters (a-z, A-Z), numbers (0-9), underscores
     * (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 3;</code>
     */
    private $request_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Field mask is used to specify the fields to be overwritten in the
     *           connection profile resource by the update.
     *     @type \Google\Cloud\CloudDms\V1\ConnectionProfile $connection_profile
     *           Required. The connection profile parameters to update.
     *     @type string $request_id
     *           A unique id used to identify the request. If the server receives two
     *           requests with the same id, then the second request will be ignored.
     *           It is recommended to always set this value to a UUID.
     *           The id must contain only letters (a-z, A-Z), numbers (0-9), underscores
     *           (_), and hyphens (-). The maximum length is 40 characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\Clouddms::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Field mask is used to specify the fields to be overwritten in the
     * connection profile resource by the update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return isset($this->update_mask) ? $this->update_mask : null;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. Field mask is used to specify the fields to be overwritten in the
     * connection profile resource by the update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Required. The connection profile parameters to update.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.ConnectionProfile connection_profile = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\CloudDms\V1\ConnectionProfile|null
     */
    public function getConnectionProfile()
    {
        return isset($this->connection_profile) ? $this->connection_profile : null;
    }

    public function hasConnectionProfile()
    {
        return isset($this->connection_profile);
    }

    public function clearConnectionProfile()
    {
        unset($this->connection_profile);
    }

    /**
     * Required. The connection profile parameters to update.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.ConnectionProfile connection_profile = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\CloudDms\V1\ConnectionProfile $var
     * @return $this
     */
    public function setConnectionProfile($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\CloudDms\V1\ConnectionProfile::class);
        $this->connection_profile = $var;

        return $this;
    }

    /**
     * A unique id used to identify the request. If the server receives two
     * requests with the same id, then the second request will be ignored.
     * It is recommended to always set this value to a UUID.
     * The id must contain only letters (a-z, A-Z), numbers (0-9), underscores
     * (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 3;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * A unique id used to identify the request. If the server receives two
     * requests with the same id, then the second request will be ignored.
     * It is recommended to always set this value to a UUID.
     * The id must contain only letters (a-z, A-Z), numbers (0-9), underscores
     * (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

