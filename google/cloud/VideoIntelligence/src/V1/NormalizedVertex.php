<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A vertex represents a 2D point in the image.
 * NOTE: the normalized vertex coordinates are relative to the original image
 * and range from 0 to 1.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1.NormalizedVertex</code>
 */
class NormalizedVertex extends \Google\Protobuf\Internal\Message
{
    /**
     * X coordinate.
     *
     * Generated from protobuf field <code>float x = 1;</code>
     */
    private $x = 0.0;
    /**
     * Y coordinate.
     *
     * Generated from protobuf field <code>float y = 2;</code>
     */
    private $y = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $x
     *           X coordinate.
     *     @type float $y
     *           Y coordinate.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Videointelligence\V1\VideoIntelligence::initOnce();
        parent::__construct($data);
    }

    /**
     * X coordinate.
     *
     * Generated from protobuf field <code>float x = 1;</code>
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * X coordinate.
     *
     * Generated from protobuf field <code>float x = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setX($var)
    {
        GPBUtil::checkFloat($var);
        $this->x = $var;

        return $this;
    }

    /**
     * Y coordinate.
     *
     * Generated from protobuf field <code>float y = 2;</code>
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Y coordinate.
     *
     * Generated from protobuf field <code>float y = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setY($var)
    {
        GPBUtil::checkFloat($var);
        $this->y = $var;

        return $this;
    }

}

