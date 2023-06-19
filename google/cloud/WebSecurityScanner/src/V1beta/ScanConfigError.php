<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1beta/scan_config_error.proto

namespace Google\Cloud\WebSecurityScanner\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines a custom error message used by CreateScanConfig and UpdateScanConfig
 * APIs when scan configuration validation fails. It is also reported as part of
 * a ScanRunErrorTrace message if scan validation fails due to a scan
 * configuration error.
 *
 * Generated from protobuf message <code>google.cloud.websecurityscanner.v1beta.ScanConfigError</code>
 */
class ScanConfigError extends \Google\Protobuf\Internal\Message
{
    /**
     * Indicates the reason code for a configuration failure.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanConfigError.Code code = 1;</code>
     */
    private $code = 0;
    /**
     * Indicates the full name of the ScanConfig field that triggers this error,
     * for example "scan_config.max_qps". This field is provided for
     * troubleshooting purposes only and its actual value can change in the
     * future.
     *
     * Generated from protobuf field <code>string field_name = 2;</code>
     */
    private $field_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $code
     *           Indicates the reason code for a configuration failure.
     *     @type string $field_name
     *           Indicates the full name of the ScanConfig field that triggers this error,
     *           for example "scan_config.max_qps". This field is provided for
     *           troubleshooting purposes only and its actual value can change in the
     *           future.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1Beta\ScanConfigError::initOnce();
        parent::__construct($data);
    }

    /**
     * Indicates the reason code for a configuration failure.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanConfigError.Code code = 1;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Indicates the reason code for a configuration failure.
     *
     * Generated from protobuf field <code>.google.cloud.websecurityscanner.v1beta.ScanConfigError.Code code = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\WebSecurityScanner\V1beta\ScanConfigError\Code::class);
        $this->code = $var;

        return $this;
    }

    /**
     * Indicates the full name of the ScanConfig field that triggers this error,
     * for example "scan_config.max_qps". This field is provided for
     * troubleshooting purposes only and its actual value can change in the
     * future.
     *
     * Generated from protobuf field <code>string field_name = 2;</code>
     * @return string
     */
    public function getFieldName()
    {
        return $this->field_name;
    }

    /**
     * Indicates the full name of the ScanConfig field that triggers this error,
     * for example "scan_config.max_qps". This field is provided for
     * troubleshooting purposes only and its actual value can change in the
     * future.
     *
     * Generated from protobuf field <code>string field_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFieldName($var)
    {
        GPBUtil::checkString($var, True);
        $this->field_name = $var;

        return $this;
    }

}
