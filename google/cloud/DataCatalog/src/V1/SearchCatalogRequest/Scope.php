<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1\SearchCatalogRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The criteria that select the subspace used for query matching.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.SearchCatalogRequest.Scope</code>
 */
class Scope extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of organization IDs to search within. To find your organization
     * ID, follow instructions in
     * https://cloud.google.com/resource-manager/docs/creating-managing-organization.
     *
     * Generated from protobuf field <code>repeated string include_org_ids = 2;</code>
     */
    private $include_org_ids;
    /**
     * The list of project IDs to search within. To learn more about the
     * distinction between project names/IDs/numbers, go to
     * https://cloud.google.com/docs/overview/#projects.
     *
     * Generated from protobuf field <code>repeated string include_project_ids = 3;</code>
     */
    private $include_project_ids;
    /**
     * If `true`, include Google Cloud Platform (GCP) public datasets in the
     * search results. Info on GCP public datasets is available at
     * https://cloud.google.com/public-datasets/. By default, GCP public
     * datasets are excluded.
     *
     * Generated from protobuf field <code>bool include_gcp_public_datasets = 7;</code>
     */
    private $include_gcp_public_datasets = false;
    /**
     * Optional. The list of locations to search within.
     * 1. If empty, search will be performed in all locations;
     * 2. If any of the locations are NOT in the valid locations list, error
     * will be returned;
     * 3. Otherwise, search only the given locations for matching results.
     * Typical usage is to leave this field empty. When a location is
     * unreachable as returned in the `SearchCatalogResponse.unreachable` field,
     * users can repeat the search request with this parameter set to get
     * additional information on the error.
     * Valid locations:
     *  * asia-east1
     *  * asia-east2
     *  * asia-northeast1
     *  * asia-northeast2
     *  * asia-northeast3
     *  * asia-south1
     *  * asia-southeast1
     *  * australia-southeast1
     *  * eu
     *  * europe-north1
     *  * europe-west1
     *  * europe-west2
     *  * europe-west3
     *  * europe-west4
     *  * europe-west6
     *  * global
     *  * northamerica-northeast1
     *  * southamerica-east1
     *  * us
     *  * us-central1
     *  * us-east1
     *  * us-east4
     *  * us-west1
     *  * us-west2
     *
     * Generated from protobuf field <code>repeated string restricted_locations = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $restricted_locations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $include_org_ids
     *           The list of organization IDs to search within. To find your organization
     *           ID, follow instructions in
     *           https://cloud.google.com/resource-manager/docs/creating-managing-organization.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $include_project_ids
     *           The list of project IDs to search within. To learn more about the
     *           distinction between project names/IDs/numbers, go to
     *           https://cloud.google.com/docs/overview/#projects.
     *     @type bool $include_gcp_public_datasets
     *           If `true`, include Google Cloud Platform (GCP) public datasets in the
     *           search results. Info on GCP public datasets is available at
     *           https://cloud.google.com/public-datasets/. By default, GCP public
     *           datasets are excluded.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $restricted_locations
     *           Optional. The list of locations to search within.
     *           1. If empty, search will be performed in all locations;
     *           2. If any of the locations are NOT in the valid locations list, error
     *           will be returned;
     *           3. Otherwise, search only the given locations for matching results.
     *           Typical usage is to leave this field empty. When a location is
     *           unreachable as returned in the `SearchCatalogResponse.unreachable` field,
     *           users can repeat the search request with this parameter set to get
     *           additional information on the error.
     *           Valid locations:
     *            * asia-east1
     *            * asia-east2
     *            * asia-northeast1
     *            * asia-northeast2
     *            * asia-northeast3
     *            * asia-south1
     *            * asia-southeast1
     *            * australia-southeast1
     *            * eu
     *            * europe-north1
     *            * europe-west1
     *            * europe-west2
     *            * europe-west3
     *            * europe-west4
     *            * europe-west6
     *            * global
     *            * northamerica-northeast1
     *            * southamerica-east1
     *            * us
     *            * us-central1
     *            * us-east1
     *            * us-east4
     *            * us-west1
     *            * us-west2
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of organization IDs to search within. To find your organization
     * ID, follow instructions in
     * https://cloud.google.com/resource-manager/docs/creating-managing-organization.
     *
     * Generated from protobuf field <code>repeated string include_org_ids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIncludeOrgIds()
    {
        return $this->include_org_ids;
    }

    /**
     * The list of organization IDs to search within. To find your organization
     * ID, follow instructions in
     * https://cloud.google.com/resource-manager/docs/creating-managing-organization.
     *
     * Generated from protobuf field <code>repeated string include_org_ids = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIncludeOrgIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->include_org_ids = $arr;

        return $this;
    }

    /**
     * The list of project IDs to search within. To learn more about the
     * distinction between project names/IDs/numbers, go to
     * https://cloud.google.com/docs/overview/#projects.
     *
     * Generated from protobuf field <code>repeated string include_project_ids = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIncludeProjectIds()
    {
        return $this->include_project_ids;
    }

    /**
     * The list of project IDs to search within. To learn more about the
     * distinction between project names/IDs/numbers, go to
     * https://cloud.google.com/docs/overview/#projects.
     *
     * Generated from protobuf field <code>repeated string include_project_ids = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIncludeProjectIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->include_project_ids = $arr;

        return $this;
    }

    /**
     * If `true`, include Google Cloud Platform (GCP) public datasets in the
     * search results. Info on GCP public datasets is available at
     * https://cloud.google.com/public-datasets/. By default, GCP public
     * datasets are excluded.
     *
     * Generated from protobuf field <code>bool include_gcp_public_datasets = 7;</code>
     * @return bool
     */
    public function getIncludeGcpPublicDatasets()
    {
        return $this->include_gcp_public_datasets;
    }

    /**
     * If `true`, include Google Cloud Platform (GCP) public datasets in the
     * search results. Info on GCP public datasets is available at
     * https://cloud.google.com/public-datasets/. By default, GCP public
     * datasets are excluded.
     *
     * Generated from protobuf field <code>bool include_gcp_public_datasets = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeGcpPublicDatasets($var)
    {
        GPBUtil::checkBool($var);
        $this->include_gcp_public_datasets = $var;

        return $this;
    }

    /**
     * Optional. The list of locations to search within.
     * 1. If empty, search will be performed in all locations;
     * 2. If any of the locations are NOT in the valid locations list, error
     * will be returned;
     * 3. Otherwise, search only the given locations for matching results.
     * Typical usage is to leave this field empty. When a location is
     * unreachable as returned in the `SearchCatalogResponse.unreachable` field,
     * users can repeat the search request with this parameter set to get
     * additional information on the error.
     * Valid locations:
     *  * asia-east1
     *  * asia-east2
     *  * asia-northeast1
     *  * asia-northeast2
     *  * asia-northeast3
     *  * asia-south1
     *  * asia-southeast1
     *  * australia-southeast1
     *  * eu
     *  * europe-north1
     *  * europe-west1
     *  * europe-west2
     *  * europe-west3
     *  * europe-west4
     *  * europe-west6
     *  * global
     *  * northamerica-northeast1
     *  * southamerica-east1
     *  * us
     *  * us-central1
     *  * us-east1
     *  * us-east4
     *  * us-west1
     *  * us-west2
     *
     * Generated from protobuf field <code>repeated string restricted_locations = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRestrictedLocations()
    {
        return $this->restricted_locations;
    }

    /**
     * Optional. The list of locations to search within.
     * 1. If empty, search will be performed in all locations;
     * 2. If any of the locations are NOT in the valid locations list, error
     * will be returned;
     * 3. Otherwise, search only the given locations for matching results.
     * Typical usage is to leave this field empty. When a location is
     * unreachable as returned in the `SearchCatalogResponse.unreachable` field,
     * users can repeat the search request with this parameter set to get
     * additional information on the error.
     * Valid locations:
     *  * asia-east1
     *  * asia-east2
     *  * asia-northeast1
     *  * asia-northeast2
     *  * asia-northeast3
     *  * asia-south1
     *  * asia-southeast1
     *  * australia-southeast1
     *  * eu
     *  * europe-north1
     *  * europe-west1
     *  * europe-west2
     *  * europe-west3
     *  * europe-west4
     *  * europe-west6
     *  * global
     *  * northamerica-northeast1
     *  * southamerica-east1
     *  * us
     *  * us-central1
     *  * us-east1
     *  * us-east4
     *  * us-west1
     *  * us-west2
     *
     * Generated from protobuf field <code>repeated string restricted_locations = 16 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRestrictedLocations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->restricted_locations = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Scope::class, \Google\Cloud\DataCatalog\V1\SearchCatalogRequest_Scope::class);

