<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/instance.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A configuration object describing how Cloud Bigtable should treat traffic
 * from a particular end user application.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.AppProfile</code>
 */
class AppProfile extends \Google\Protobuf\Internal\Message
{
    /**
     * (`OutputOnly`)
     * The unique name of the app profile. Values are of the form
     * `projects/{project}/instances/{instance}/appProfiles/[_a-zA-Z0-9][-_.a-zA-Z0-9]*`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Strongly validated etag for optimistic concurrency control. Preserve the
     * value returned from `GetAppProfile` when calling `UpdateAppProfile` to
     * fail the request if there has been a modification in the mean time. The
     * `update_mask` of the request need not include `etag` for this protection
     * to apply.
     * See [Wikipedia](https://en.wikipedia.org/wiki/HTTP_ETag) and
     * [RFC 7232](https://tools.ietf.org/html/rfc7232#section-2.3) for more
     * details.
     *
     * Generated from protobuf field <code>string etag = 2;</code>
     */
    private $etag = '';
    /**
     * Optional long form description of the use case for this AppProfile.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';
    protected $routing_policy;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           (`OutputOnly`)
     *           The unique name of the app profile. Values are of the form
     *           `projects/{project}/instances/{instance}/appProfiles/[_a-zA-Z0-9][-_.a-zA-Z0-9]*`.
     *     @type string $etag
     *           Strongly validated etag for optimistic concurrency control. Preserve the
     *           value returned from `GetAppProfile` when calling `UpdateAppProfile` to
     *           fail the request if there has been a modification in the mean time. The
     *           `update_mask` of the request need not include `etag` for this protection
     *           to apply.
     *           See [Wikipedia](https://en.wikipedia.org/wiki/HTTP_ETag) and
     *           [RFC 7232](https://tools.ietf.org/html/rfc7232#section-2.3) for more
     *           details.
     *     @type string $description
     *           Optional long form description of the use case for this AppProfile.
     *     @type \Google\Cloud\Bigtable\Admin\V2\AppProfile\MultiClusterRoutingUseAny $multi_cluster_routing_use_any
     *           Use a multi-cluster routing policy.
     *     @type \Google\Cloud\Bigtable\Admin\V2\AppProfile\SingleClusterRouting $single_cluster_routing
     *           Use a single-cluster routing policy.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\Instance::initOnce();
        parent::__construct($data);
    }

    /**
     * (`OutputOnly`)
     * The unique name of the app profile. Values are of the form
     * `projects/{project}/instances/{instance}/appProfiles/[_a-zA-Z0-9][-_.a-zA-Z0-9]*`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * (`OutputOnly`)
     * The unique name of the app profile. Values are of the form
     * `projects/{project}/instances/{instance}/appProfiles/[_a-zA-Z0-9][-_.a-zA-Z0-9]*`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Strongly validated etag for optimistic concurrency control. Preserve the
     * value returned from `GetAppProfile` when calling `UpdateAppProfile` to
     * fail the request if there has been a modification in the mean time. The
     * `update_mask` of the request need not include `etag` for this protection
     * to apply.
     * See [Wikipedia](https://en.wikipedia.org/wiki/HTTP_ETag) and
     * [RFC 7232](https://tools.ietf.org/html/rfc7232#section-2.3) for more
     * details.
     *
     * Generated from protobuf field <code>string etag = 2;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Strongly validated etag for optimistic concurrency control. Preserve the
     * value returned from `GetAppProfile` when calling `UpdateAppProfile` to
     * fail the request if there has been a modification in the mean time. The
     * `update_mask` of the request need not include `etag` for this protection
     * to apply.
     * See [Wikipedia](https://en.wikipedia.org/wiki/HTTP_ETag) and
     * [RFC 7232](https://tools.ietf.org/html/rfc7232#section-2.3) for more
     * details.
     *
     * Generated from protobuf field <code>string etag = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Optional long form description of the use case for this AppProfile.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional long form description of the use case for this AppProfile.
     *
     * Generated from protobuf field <code>string description = 3;</code>
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
     * Use a multi-cluster routing policy.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.AppProfile.MultiClusterRoutingUseAny multi_cluster_routing_use_any = 5;</code>
     * @return \Google\Cloud\Bigtable\Admin\V2\AppProfile\MultiClusterRoutingUseAny|null
     */
    public function getMultiClusterRoutingUseAny()
    {
        return $this->readOneof(5);
    }

    public function hasMultiClusterRoutingUseAny()
    {
        return $this->hasOneof(5);
    }

    /**
     * Use a multi-cluster routing policy.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.AppProfile.MultiClusterRoutingUseAny multi_cluster_routing_use_any = 5;</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\AppProfile\MultiClusterRoutingUseAny $var
     * @return $this
     */
    public function setMultiClusterRoutingUseAny($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\Admin\V2\AppProfile\MultiClusterRoutingUseAny::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Use a single-cluster routing policy.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.AppProfile.SingleClusterRouting single_cluster_routing = 6;</code>
     * @return \Google\Cloud\Bigtable\Admin\V2\AppProfile\SingleClusterRouting|null
     */
    public function getSingleClusterRouting()
    {
        return $this->readOneof(6);
    }

    public function hasSingleClusterRouting()
    {
        return $this->hasOneof(6);
    }

    /**
     * Use a single-cluster routing policy.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.AppProfile.SingleClusterRouting single_cluster_routing = 6;</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\AppProfile\SingleClusterRouting $var
     * @return $this
     */
    public function setSingleClusterRouting($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\Admin\V2\AppProfile\SingleClusterRouting::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getRoutingPolicy()
    {
        return $this->whichOneof("routing_policy");
    }

}

