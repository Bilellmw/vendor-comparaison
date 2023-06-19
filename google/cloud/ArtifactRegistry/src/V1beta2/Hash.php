<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/artifactregistry/v1beta2/file.proto

namespace Google\Cloud\ArtifactRegistry\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A hash of file content.
 *
 * Generated from protobuf message <code>google.devtools.artifactregistry.v1beta2.Hash</code>
 */
class Hash extends \Google\Protobuf\Internal\Message
{
    /**
     * The algorithm used to compute the hash value.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1beta2.Hash.HashType type = 1;</code>
     */
    private $type = 0;
    /**
     * The hash value.
     *
     * Generated from protobuf field <code>bytes value = 2;</code>
     */
    private $value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           The algorithm used to compute the hash value.
     *     @type string $value
     *           The hash value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Artifactregistry\V1Beta2\File::initOnce();
        parent::__construct($data);
    }

    /**
     * The algorithm used to compute the hash value.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1beta2.Hash.HashType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The algorithm used to compute the hash value.
     *
     * Generated from protobuf field <code>.google.devtools.artifactregistry.v1beta2.Hash.HashType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ArtifactRegistry\V1beta2\Hash\HashType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * The hash value.
     *
     * Generated from protobuf field <code>bytes value = 2;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The hash value.
     *
     * Generated from protobuf field <code>bytes value = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, False);
        $this->value = $var;

        return $this;
    }

}

