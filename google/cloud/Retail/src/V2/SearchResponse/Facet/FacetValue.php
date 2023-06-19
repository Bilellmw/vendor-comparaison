<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/search_service.proto

namespace Google\Cloud\Retail\V2\SearchResponse\Facet;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A facet value which contains value names and their count.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.SearchResponse.Facet.FacetValue</code>
 */
class FacetValue extends \Google\Protobuf\Internal\Message
{
    /**
     * Number of items that have this facet value.
     *
     * Generated from protobuf field <code>int64 count = 3;</code>
     */
    private $count = 0;
    protected $facet_value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $value
     *           Text value of a facet, such as "Black" for facet "colorFamilies".
     *     @type \Google\Cloud\Retail\V2\Interval $interval
     *           Interval value for a facet, such as [10, 20) for facet "price".
     *     @type int|string $count
     *           Number of items that have this facet value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Text value of a facet, such as "Black" for facet "colorFamilies".
     *
     * Generated from protobuf field <code>string value = 1;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->readOneof(1);
    }

    public function hasValue()
    {
        return $this->hasOneof(1);
    }

    /**
     * Text value of a facet, such as "Black" for facet "colorFamilies".
     *
     * Generated from protobuf field <code>string value = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Interval value for a facet, such as [10, 20) for facet "price".
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Interval interval = 2;</code>
     * @return \Google\Cloud\Retail\V2\Interval|null
     */
    public function getInterval()
    {
        return $this->readOneof(2);
    }

    public function hasInterval()
    {
        return $this->hasOneof(2);
    }

    /**
     * Interval value for a facet, such as [10, 20) for facet "price".
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.Interval interval = 2;</code>
     * @param \Google\Cloud\Retail\V2\Interval $var
     * @return $this
     */
    public function setInterval($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\Interval::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Number of items that have this facet value.
     *
     * Generated from protobuf field <code>int64 count = 3;</code>
     * @return int|string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Number of items that have this facet value.
     *
     * Generated from protobuf field <code>int64 count = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->count = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getFacetValue()
    {
        return $this->whichOneof("facet_value");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FacetValue::class, \Google\Cloud\Retail\V2\SearchResponse_Facet_FacetValue::class);

