<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/secrets/v1beta1/resources.proto

namespace Google\Cloud\SecretManager\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A [Secret][google.cloud.secrets.v1beta1.Secret] is a logical secret whose value and versions can
 * be accessed.
 * A [Secret][google.cloud.secrets.v1beta1.Secret] is made up of zero or more [SecretVersions][google.cloud.secrets.v1beta1.SecretVersion] that
 * represent the secret data.
 *
 * Generated from protobuf message <code>google.cloud.secrets.v1beta1.Secret</code>
 */
class Secret extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the [Secret][google.cloud.secrets.v1beta1.Secret] in the format `projects/&#42;&#47;secrets/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Required. Immutable. The replication policy of the secret data attached to the [Secret][google.cloud.secrets.v1beta1.Secret].
     * The replication policy cannot be changed after the Secret has been created.
     *
     * Generated from protobuf field <code>.google.cloud.secrets.v1beta1.Replication replication = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED];</code>
     */
    private $replication = null;
    /**
     * Output only. The time at which the [Secret][google.cloud.secrets.v1beta1.Secret] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * The labels assigned to this Secret.
     * Label keys must be between 1 and 63 characters long, have a UTF-8 encoding
     * of maximum 128 bytes, and must conform to the following PCRE regular
     * expression: `[\p{Ll}\p{Lo}][\p{Ll}\p{Lo}\p{N}_-]{0,62}`
     * Label values must be between 0 and 63 characters long, have a UTF-8
     * encoding of maximum 128 bytes, and must conform to the following PCRE
     * regular expression: `[\p{Ll}\p{Lo}\p{N}_-]{0,63}`
     * No more than 64 labels can be assigned to a given resource.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of the [Secret][google.cloud.secrets.v1beta1.Secret] in the format `projects/&#42;&#47;secrets/&#42;`.
     *     @type \Google\Cloud\SecretManager\V1beta1\Replication $replication
     *           Required. Immutable. The replication policy of the secret data attached to the [Secret][google.cloud.secrets.v1beta1.Secret].
     *           The replication policy cannot be changed after the Secret has been created.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time at which the [Secret][google.cloud.secrets.v1beta1.Secret] was created.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           The labels assigned to this Secret.
     *           Label keys must be between 1 and 63 characters long, have a UTF-8 encoding
     *           of maximum 128 bytes, and must conform to the following PCRE regular
     *           expression: `[\p{Ll}\p{Lo}][\p{Ll}\p{Lo}\p{N}_-]{0,62}`
     *           Label values must be between 0 and 63 characters long, have a UTF-8
     *           encoding of maximum 128 bytes, and must conform to the following PCRE
     *           regular expression: `[\p{Ll}\p{Lo}\p{N}_-]{0,63}`
     *           No more than 64 labels can be assigned to a given resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Secrets\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the [Secret][google.cloud.secrets.v1beta1.Secret] in the format `projects/&#42;&#47;secrets/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the [Secret][google.cloud.secrets.v1beta1.Secret] in the format `projects/&#42;&#47;secrets/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Required. Immutable. The replication policy of the secret data attached to the [Secret][google.cloud.secrets.v1beta1.Secret].
     * The replication policy cannot be changed after the Secret has been created.
     *
     * Generated from protobuf field <code>.google.cloud.secrets.v1beta1.Replication replication = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\SecretManager\V1beta1\Replication|null
     */
    public function getReplication()
    {
        return isset($this->replication) ? $this->replication : null;
    }

    public function hasReplication()
    {
        return isset($this->replication);
    }

    public function clearReplication()
    {
        unset($this->replication);
    }

    /**
     * Required. Immutable. The replication policy of the secret data attached to the [Secret][google.cloud.secrets.v1beta1.Secret].
     * The replication policy cannot be changed after the Secret has been created.
     *
     * Generated from protobuf field <code>.google.cloud.secrets.v1beta1.Replication replication = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\SecretManager\V1beta1\Replication $var
     * @return $this
     */
    public function setReplication($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecretManager\V1beta1\Replication::class);
        $this->replication = $var;

        return $this;
    }

    /**
     * Output only. The time at which the [Secret][google.cloud.secrets.v1beta1.Secret] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return isset($this->create_time) ? $this->create_time : null;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time at which the [Secret][google.cloud.secrets.v1beta1.Secret] was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * The labels assigned to this Secret.
     * Label keys must be between 1 and 63 characters long, have a UTF-8 encoding
     * of maximum 128 bytes, and must conform to the following PCRE regular
     * expression: `[\p{Ll}\p{Lo}][\p{Ll}\p{Lo}\p{N}_-]{0,62}`
     * Label values must be between 0 and 63 characters long, have a UTF-8
     * encoding of maximum 128 bytes, and must conform to the following PCRE
     * regular expression: `[\p{Ll}\p{Lo}\p{N}_-]{0,63}`
     * No more than 64 labels can be assigned to a given resource.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * The labels assigned to this Secret.
     * Label keys must be between 1 and 63 characters long, have a UTF-8 encoding
     * of maximum 128 bytes, and must conform to the following PCRE regular
     * expression: `[\p{Ll}\p{Lo}][\p{Ll}\p{Lo}\p{N}_-]{0,62}`
     * Label values must be between 0 and 63 characters long, have a UTF-8
     * encoding of maximum 128 bytes, and must conform to the following PCRE
     * regular expression: `[\p{Ll}\p{Lo}\p{N}_-]{0,63}`
     * No more than 64 labels can be assigned to a given resource.
     *
     * Generated from protobuf field <code>map<string, string> labels = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

