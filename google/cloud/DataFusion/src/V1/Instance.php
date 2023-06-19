<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datafusion/v1/datafusion.proto

namespace Google\Cloud\DataFusion\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Data Fusion instance.
 *
 * Generated from protobuf message <code>google.cloud.datafusion.v1.Instance</code>
 */
class Instance extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The name of this instance is in the form of
     * projects/{project}/locations/{location}/instances/{instance}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * A description of this instance.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    private $description = '';
    /**
     * Required. Instance type.
     *
     * Generated from protobuf field <code>.google.cloud.datafusion.v1.Instance.Type type = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $type = 0;
    /**
     * Option to enable Stackdriver Logging.
     *
     * Generated from protobuf field <code>bool enable_stackdriver_logging = 4;</code>
     */
    private $enable_stackdriver_logging = false;
    /**
     * Option to enable Stackdriver Monitoring.
     *
     * Generated from protobuf field <code>bool enable_stackdriver_monitoring = 5;</code>
     */
    private $enable_stackdriver_monitoring = false;
    /**
     * Specifies whether the Data Fusion instance should be private. If set to
     * true, all Data Fusion nodes will have private IP addresses and will not be
     * able to access the public internet.
     *
     * Generated from protobuf field <code>bool private_instance = 6;</code>
     */
    private $private_instance = false;
    /**
     * Network configuration options. These are required when a private Data
     * Fusion instance is to be created.
     *
     * Generated from protobuf field <code>.google.cloud.datafusion.v1.NetworkConfig network_config = 7;</code>
     */
    private $network_config = null;
    /**
     * The resource labels for instance to use to annotate any related underlying
     * resources such as Compute Engine VMs. The character '=' is not allowed to
     * be used within the labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8;</code>
     */
    private $labels;
    /**
     * Map of additional options used to configure the behavior of
     * Data Fusion instance.
     *
     * Generated from protobuf field <code>map<string, string> options = 9;</code>
     */
    private $options;
    /**
     * Output only. The time the instance was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The time the instance was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Output only. The current state of this Data Fusion instance.
     *
     * Generated from protobuf field <code>.google.cloud.datafusion.v1.Instance.State state = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Output only. Additional information about the current state of this Data
     * Fusion instance if available.
     *
     * Generated from protobuf field <code>string state_message = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state_message = '';
    /**
     * Output only. Endpoint on which the Data Fusion UI is accessible.
     *
     * Generated from protobuf field <code>string service_endpoint = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $service_endpoint = '';
    /**
     * Name of the zone in which the Data Fusion instance will be created. Only
     * DEVELOPER instances use this field.
     *
     * Generated from protobuf field <code>string zone = 15;</code>
     */
    private $zone = '';
    /**
     * Current version of the Data Fusion. Only specifiable in Update.
     *
     * Generated from protobuf field <code>string version = 16;</code>
     */
    private $version = '';
    /**
     * Output only. Deprecated. Use tenant_project_id instead to extract the
     * tenant project ID.
     *
     * Generated from protobuf field <code>string service_account = 17 [deprecated = true, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @deprecated
     */
    protected $service_account = '';
    /**
     * Display name for an instance.
     *
     * Generated from protobuf field <code>string display_name = 18;</code>
     */
    private $display_name = '';
    /**
     * Available versions that the instance can be upgraded to using
     * UpdateInstanceRequest.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datafusion.v1.Version available_version = 19;</code>
     */
    private $available_version;
    /**
     * Output only. Endpoint on which the REST APIs is accessible.
     *
     * Generated from protobuf field <code>string api_endpoint = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $api_endpoint = '';
    /**
     * Output only. Cloud Storage bucket generated by Data Fusion in the customer
     * project.
     *
     * Generated from protobuf field <code>string gcs_bucket = 21 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $gcs_bucket = '';
    /**
     * List of accelerators enabled for this CDF instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datafusion.v1.Accelerator accelerators = 22;</code>
     */
    private $accelerators;
    /**
     * Output only. P4 service account for the customer project.
     *
     * Generated from protobuf field <code>string p4_service_account = 23 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $p4_service_account = '';
    /**
     * Output only. The name of the tenant project.
     *
     * Generated from protobuf field <code>string tenant_project_id = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $tenant_project_id = '';
    /**
     * User-managed service account to set on Dataproc when Cloud Data Fusion
     * creates Dataproc to run data processing pipelines.
     * This allows users to have fine-grained access control on Dataproc's
     * accesses to cloud resources.
     *
     * Generated from protobuf field <code>string dataproc_service_account = 25;</code>
     */
    private $dataproc_service_account = '';
    /**
     * Option to enable granular role-based access control.
     *
     * Generated from protobuf field <code>bool enable_rbac = 27;</code>
     */
    private $enable_rbac = false;
    /**
     * The crypto key configuration. This field is used by the Customer-Managed
     * Encryption Keys (CMEK) feature.
     *
     * Generated from protobuf field <code>.google.cloud.datafusion.v1.CryptoKeyConfig crypto_key_config = 28;</code>
     */
    private $crypto_key_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The name of this instance is in the form of
     *           projects/{project}/locations/{location}/instances/{instance}.
     *     @type string $description
     *           A description of this instance.
     *     @type int $type
     *           Required. Instance type.
     *     @type bool $enable_stackdriver_logging
     *           Option to enable Stackdriver Logging.
     *     @type bool $enable_stackdriver_monitoring
     *           Option to enable Stackdriver Monitoring.
     *     @type bool $private_instance
     *           Specifies whether the Data Fusion instance should be private. If set to
     *           true, all Data Fusion nodes will have private IP addresses and will not be
     *           able to access the public internet.
     *     @type \Google\Cloud\DataFusion\V1\NetworkConfig $network_config
     *           Network configuration options. These are required when a private Data
     *           Fusion instance is to be created.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           The resource labels for instance to use to annotate any related underlying
     *           resources such as Compute Engine VMs. The character '=' is not allowed to
     *           be used within the labels.
     *     @type array|\Google\Protobuf\Internal\MapField $options
     *           Map of additional options used to configure the behavior of
     *           Data Fusion instance.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time the instance was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time the instance was last updated.
     *     @type int $state
     *           Output only. The current state of this Data Fusion instance.
     *     @type string $state_message
     *           Output only. Additional information about the current state of this Data
     *           Fusion instance if available.
     *     @type string $service_endpoint
     *           Output only. Endpoint on which the Data Fusion UI is accessible.
     *     @type string $zone
     *           Name of the zone in which the Data Fusion instance will be created. Only
     *           DEVELOPER instances use this field.
     *     @type string $version
     *           Current version of the Data Fusion. Only specifiable in Update.
     *     @type string $service_account
     *           Output only. Deprecated. Use tenant_project_id instead to extract the
     *           tenant project ID.
     *     @type string $display_name
     *           Display name for an instance.
     *     @type \Google\Cloud\DataFusion\V1\Version[]|\Google\Protobuf\Internal\RepeatedField $available_version
     *           Available versions that the instance can be upgraded to using
     *           UpdateInstanceRequest.
     *     @type string $api_endpoint
     *           Output only. Endpoint on which the REST APIs is accessible.
     *     @type string $gcs_bucket
     *           Output only. Cloud Storage bucket generated by Data Fusion in the customer
     *           project.
     *     @type \Google\Cloud\DataFusion\V1\Accelerator[]|\Google\Protobuf\Internal\RepeatedField $accelerators
     *           List of accelerators enabled for this CDF instance.
     *     @type string $p4_service_account
     *           Output only. P4 service account for the customer project.
     *     @type string $tenant_project_id
     *           Output only. The name of the tenant project.
     *     @type string $dataproc_service_account
     *           User-managed service account to set on Dataproc when Cloud Data Fusion
     *           creates Dataproc to run data processing pipelines.
     *           This allows users to have fine-grained access control on Dataproc's
     *           accesses to cloud resources.
     *     @type bool $enable_rbac
     *           Option to enable granular role-based access control.
     *     @type \Google\Cloud\DataFusion\V1\CryptoKeyConfig $crypto_key_config
     *           The crypto key configuration. This field is used by the Customer-Managed
     *           Encryption Keys (CMEK) feature.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datafusion\V1\Datafusion::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The name of this instance is in the form of
     * projects/{project}/locations/{location}/instances/{instance}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The name of this instance is in the form of
     * projects/{project}/locations/{location}/instances/{instance}.
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
     * A description of this instance.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * A description of this instance.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Required. Instance type.
     *
     * Generated from protobuf field <code>.google.cloud.datafusion.v1.Instance.Type type = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. Instance type.
     *
     * Generated from protobuf field <code>.google.cloud.datafusion.v1.Instance.Type type = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DataFusion\V1\Instance\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Option to enable Stackdriver Logging.
     *
     * Generated from protobuf field <code>bool enable_stackdriver_logging = 4;</code>
     * @return bool
     */
    public function getEnableStackdriverLogging()
    {
        return $this->enable_stackdriver_logging;
    }

    /**
     * Option to enable Stackdriver Logging.
     *
     * Generated from protobuf field <code>bool enable_stackdriver_logging = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableStackdriverLogging($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_stackdriver_logging = $var;

        return $this;
    }

    /**
     * Option to enable Stackdriver Monitoring.
     *
     * Generated from protobuf field <code>bool enable_stackdriver_monitoring = 5;</code>
     * @return bool
     */
    public function getEnableStackdriverMonitoring()
    {
        return $this->enable_stackdriver_monitoring;
    }

    /**
     * Option to enable Stackdriver Monitoring.
     *
     * Generated from protobuf field <code>bool enable_stackdriver_monitoring = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableStackdriverMonitoring($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_stackdriver_monitoring = $var;

        return $this;
    }

    /**
     * Specifies whether the Data Fusion instance should be private. If set to
     * true, all Data Fusion nodes will have private IP addresses and will not be
     * able to access the public internet.
     *
     * Generated from protobuf field <code>bool private_instance = 6;</code>
     * @return bool
     */
    public function getPrivateInstance()
    {
        return $this->private_instance;
    }

    /**
     * Specifies whether the Data Fusion instance should be private. If set to
     * true, all Data Fusion nodes will have private IP addresses and will not be
     * able to access the public internet.
     *
     * Generated from protobuf field <code>bool private_instance = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setPrivateInstance($var)
    {
        GPBUtil::checkBool($var);
        $this->private_instance = $var;

        return $this;
    }

    /**
     * Network configuration options. These are required when a private Data
     * Fusion instance is to be created.
     *
     * Generated from protobuf field <code>.google.cloud.datafusion.v1.NetworkConfig network_config = 7;</code>
     * @return \Google\Cloud\DataFusion\V1\NetworkConfig|null
     */
    public function getNetworkConfig()
    {
        return isset($this->network_config) ? $this->network_config : null;
    }

    public function hasNetworkConfig()
    {
        return isset($this->network_config);
    }

    public function clearNetworkConfig()
    {
        unset($this->network_config);
    }

    /**
     * Network configuration options. These are required when a private Data
     * Fusion instance is to be created.
     *
     * Generated from protobuf field <code>.google.cloud.datafusion.v1.NetworkConfig network_config = 7;</code>
     * @param \Google\Cloud\DataFusion\V1\NetworkConfig $var
     * @return $this
     */
    public function setNetworkConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataFusion\V1\NetworkConfig::class);
        $this->network_config = $var;

        return $this;
    }

    /**
     * The resource labels for instance to use to annotate any related underlying
     * resources such as Compute Engine VMs. The character '=' is not allowed to
     * be used within the labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * The resource labels for instance to use to annotate any related underlying
     * resources such as Compute Engine VMs. The character '=' is not allowed to
     * be used within the labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Map of additional options used to configure the behavior of
     * Data Fusion instance.
     *
     * Generated from protobuf field <code>map<string, string> options = 9;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Map of additional options used to configure the behavior of
     * Data Fusion instance.
     *
     * Generated from protobuf field <code>map<string, string> options = 9;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setOptions($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->options = $arr;

        return $this;
    }

    /**
     * Output only. The time the instance was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time the instance was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time the instance was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return isset($this->update_time) ? $this->update_time : null;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time the instance was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Output only. The current state of this Data Fusion instance.
     *
     * Generated from protobuf field <code>.google.cloud.datafusion.v1.Instance.State state = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. The current state of this Data Fusion instance.
     *
     * Generated from protobuf field <code>.google.cloud.datafusion.v1.Instance.State state = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DataFusion\V1\Instance\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. Additional information about the current state of this Data
     * Fusion instance if available.
     *
     * Generated from protobuf field <code>string state_message = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getStateMessage()
    {
        return $this->state_message;
    }

    /**
     * Output only. Additional information about the current state of this Data
     * Fusion instance if available.
     *
     * Generated from protobuf field <code>string state_message = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setStateMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->state_message = $var;

        return $this;
    }

    /**
     * Output only. Endpoint on which the Data Fusion UI is accessible.
     *
     * Generated from protobuf field <code>string service_endpoint = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getServiceEndpoint()
    {
        return $this->service_endpoint;
    }

    /**
     * Output only. Endpoint on which the Data Fusion UI is accessible.
     *
     * Generated from protobuf field <code>string service_endpoint = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_endpoint = $var;

        return $this;
    }

    /**
     * Name of the zone in which the Data Fusion instance will be created. Only
     * DEVELOPER instances use this field.
     *
     * Generated from protobuf field <code>string zone = 15;</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Name of the zone in which the Data Fusion instance will be created. Only
     * DEVELOPER instances use this field.
     *
     * Generated from protobuf field <code>string zone = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

    /**
     * Current version of the Data Fusion. Only specifiable in Update.
     *
     * Generated from protobuf field <code>string version = 16;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Current version of the Data Fusion. Only specifiable in Update.
     *
     * Generated from protobuf field <code>string version = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * Output only. Deprecated. Use tenant_project_id instead to extract the
     * tenant project ID.
     *
     * Generated from protobuf field <code>string service_account = 17 [deprecated = true, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     * @deprecated
     */
    public function getServiceAccount()
    {
        @trigger_error('service_account is deprecated.', E_USER_DEPRECATED);
        return $this->service_account;
    }

    /**
     * Output only. Deprecated. Use tenant_project_id instead to extract the
     * tenant project ID.
     *
     * Generated from protobuf field <code>string service_account = 17 [deprecated = true, (.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setServiceAccount($var)
    {
        @trigger_error('service_account is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, True);
        $this->service_account = $var;

        return $this;
    }

    /**
     * Display name for an instance.
     *
     * Generated from protobuf field <code>string display_name = 18;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Display name for an instance.
     *
     * Generated from protobuf field <code>string display_name = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Available versions that the instance can be upgraded to using
     * UpdateInstanceRequest.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datafusion.v1.Version available_version = 19;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAvailableVersion()
    {
        return $this->available_version;
    }

    /**
     * Available versions that the instance can be upgraded to using
     * UpdateInstanceRequest.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datafusion.v1.Version available_version = 19;</code>
     * @param \Google\Cloud\DataFusion\V1\Version[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAvailableVersion($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DataFusion\V1\Version::class);
        $this->available_version = $arr;

        return $this;
    }

    /**
     * Output only. Endpoint on which the REST APIs is accessible.
     *
     * Generated from protobuf field <code>string api_endpoint = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getApiEndpoint()
    {
        return $this->api_endpoint;
    }

    /**
     * Output only. Endpoint on which the REST APIs is accessible.
     *
     * Generated from protobuf field <code>string api_endpoint = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setApiEndpoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->api_endpoint = $var;

        return $this;
    }

    /**
     * Output only. Cloud Storage bucket generated by Data Fusion in the customer
     * project.
     *
     * Generated from protobuf field <code>string gcs_bucket = 21 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getGcsBucket()
    {
        return $this->gcs_bucket;
    }

    /**
     * Output only. Cloud Storage bucket generated by Data Fusion in the customer
     * project.
     *
     * Generated from protobuf field <code>string gcs_bucket = 21 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setGcsBucket($var)
    {
        GPBUtil::checkString($var, True);
        $this->gcs_bucket = $var;

        return $this;
    }

    /**
     * List of accelerators enabled for this CDF instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datafusion.v1.Accelerator accelerators = 22;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAccelerators()
    {
        return $this->accelerators;
    }

    /**
     * List of accelerators enabled for this CDF instance.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datafusion.v1.Accelerator accelerators = 22;</code>
     * @param \Google\Cloud\DataFusion\V1\Accelerator[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAccelerators($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DataFusion\V1\Accelerator::class);
        $this->accelerators = $arr;

        return $this;
    }

    /**
     * Output only. P4 service account for the customer project.
     *
     * Generated from protobuf field <code>string p4_service_account = 23 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getP4ServiceAccount()
    {
        return $this->p4_service_account;
    }

    /**
     * Output only. P4 service account for the customer project.
     *
     * Generated from protobuf field <code>string p4_service_account = 23 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setP4ServiceAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->p4_service_account = $var;

        return $this;
    }

    /**
     * Output only. The name of the tenant project.
     *
     * Generated from protobuf field <code>string tenant_project_id = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getTenantProjectId()
    {
        return $this->tenant_project_id;
    }

    /**
     * Output only. The name of the tenant project.
     *
     * Generated from protobuf field <code>string tenant_project_id = 24 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setTenantProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tenant_project_id = $var;

        return $this;
    }

    /**
     * User-managed service account to set on Dataproc when Cloud Data Fusion
     * creates Dataproc to run data processing pipelines.
     * This allows users to have fine-grained access control on Dataproc's
     * accesses to cloud resources.
     *
     * Generated from protobuf field <code>string dataproc_service_account = 25;</code>
     * @return string
     */
    public function getDataprocServiceAccount()
    {
        return $this->dataproc_service_account;
    }

    /**
     * User-managed service account to set on Dataproc when Cloud Data Fusion
     * creates Dataproc to run data processing pipelines.
     * This allows users to have fine-grained access control on Dataproc's
     * accesses to cloud resources.
     *
     * Generated from protobuf field <code>string dataproc_service_account = 25;</code>
     * @param string $var
     * @return $this
     */
    public function setDataprocServiceAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataproc_service_account = $var;

        return $this;
    }

    /**
     * Option to enable granular role-based access control.
     *
     * Generated from protobuf field <code>bool enable_rbac = 27;</code>
     * @return bool
     */
    public function getEnableRbac()
    {
        return $this->enable_rbac;
    }

    /**
     * Option to enable granular role-based access control.
     *
     * Generated from protobuf field <code>bool enable_rbac = 27;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableRbac($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_rbac = $var;

        return $this;
    }

    /**
     * The crypto key configuration. This field is used by the Customer-Managed
     * Encryption Keys (CMEK) feature.
     *
     * Generated from protobuf field <code>.google.cloud.datafusion.v1.CryptoKeyConfig crypto_key_config = 28;</code>
     * @return \Google\Cloud\DataFusion\V1\CryptoKeyConfig|null
     */
    public function getCryptoKeyConfig()
    {
        return isset($this->crypto_key_config) ? $this->crypto_key_config : null;
    }

    public function hasCryptoKeyConfig()
    {
        return isset($this->crypto_key_config);
    }

    public function clearCryptoKeyConfig()
    {
        unset($this->crypto_key_config);
    }

    /**
     * The crypto key configuration. This field is used by the Customer-Managed
     * Encryption Keys (CMEK) feature.
     *
     * Generated from protobuf field <code>.google.cloud.datafusion.v1.CryptoKeyConfig crypto_key_config = 28;</code>
     * @param \Google\Cloud\DataFusion\V1\CryptoKeyConfig $var
     * @return $this
     */
    public function setCryptoKeyConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataFusion\V1\CryptoKeyConfig::class);
        $this->crypto_key_config = $var;

        return $this;
    }

}
