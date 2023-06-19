<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1p1beta1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1p1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for grouping by assets.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1p1beta1.GroupAssetsResponse</code>
 */
class GroupAssetsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Group results. There exists an element for each existing unique
     * combination of property/values. The element contains a count for the number
     * of times those specific property/values appear.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1p1beta1.GroupResult group_by_results = 1;</code>
     */
    private $group_by_results;
    /**
     * Time used for executing the groupBy request.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 2;</code>
     */
    private $read_time = null;
    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results.
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     */
    private $next_page_token = '';
    /**
     * The total number of results matching the query.
     *
     * Generated from protobuf field <code>int32 total_size = 4;</code>
     */
    private $total_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\SecurityCenter\V1p1beta1\GroupResult[]|\Google\Protobuf\Internal\RepeatedField $group_by_results
     *           Group results. There exists an element for each existing unique
     *           combination of property/values. The element contains a count for the number
     *           of times those specific property/values appear.
     *     @type \Google\Protobuf\Timestamp $read_time
     *           Time used for executing the groupBy request.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no more
     *           results.
     *     @type int $total_size
     *           The total number of results matching the query.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1P1Beta1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Group results. There exists an element for each existing unique
     * combination of property/values. The element contains a count for the number
     * of times those specific property/values appear.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1p1beta1.GroupResult group_by_results = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGroupByResults()
    {
        return $this->group_by_results;
    }

    /**
     * Group results. There exists an element for each existing unique
     * combination of property/values. The element contains a count for the number
     * of times those specific property/values appear.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1p1beta1.GroupResult group_by_results = 1;</code>
     * @param \Google\Cloud\SecurityCenter\V1p1beta1\GroupResult[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGroupByResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\SecurityCenter\V1p1beta1\GroupResult::class);
        $this->group_by_results = $arr;

        return $this;
    }

    /**
     * Time used for executing the groupBy request.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getReadTime()
    {
        return isset($this->read_time) ? $this->read_time : null;
    }

    public function hasReadTime()
    {
        return isset($this->read_time);
    }

    public function clearReadTime()
    {
        unset($this->read_time);
    }

    /**
     * Time used for executing the groupBy request.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setReadTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->read_time = $var;

        return $this;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results.
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results.
     *
     * Generated from protobuf field <code>string next_page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

    /**
     * The total number of results matching the query.
     *
     * Generated from protobuf field <code>int32 total_size = 4;</code>
     * @return int
     */
    public function getTotalSize()
    {
        return $this->total_size;
    }

    /**
     * The total number of results matching the query.
     *
     * Generated from protobuf field <code>int32 total_size = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->total_size = $var;

        return $this;
    }

}

