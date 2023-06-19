<?php
/*
 * Copyright 2021 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/google/googleapis/blob/master/google/api/servicecontrol/v1/quota_controller.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\ServiceControl\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;

use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\ServiceControl\V1\AllocateQuotaRequest;
use Google\Cloud\ServiceControl\V1\AllocateQuotaResponse;
use Google\Cloud\ServiceControl\V1\QuotaOperation;

/**
 * Service Description: [Google Quota Control API](https://cloud.google.com/service-control/overview)
 *
 * Allows clients to allocate and release quota against a [managed
 * service](https://cloud.google.com/service-management/reference/rpc/google.api/servicemanagement.v1#google.api.servicemanagement.v1.ManagedService).
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $quotaControllerClient = new QuotaControllerClient();
 * try {
 *     $response = $quotaControllerClient->allocateQuota();
 * } finally {
 *     $quotaControllerClient->close();
 * }
 * ```
 */
class QuotaControllerGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.api.servicecontrol.v1.QuotaController';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'servicecontrol.googleapis.com';

    /**
     * The default port of the service.
     */
    const DEFAULT_SERVICE_PORT = 443;

    /**
     * The name of the code generator, to be included in the agent header.
     */
    const CODEGEN_NAME = 'gapic';

    /**
     * The default scopes required by the service.
     */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/servicecontrol',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/quota_controller_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/quota_controller_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/quota_controller_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/quota_controller_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           **Deprecated**. This option will be removed in a future major release. Please
     *           utilize the `$apiEndpoint` option instead.
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'servicecontrol.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $serviceAddress setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Attempts to allocate quota for the specified consumer. It should be called
     * before the operation is executed.
     *
     * This method requires the `servicemanagement.services.quota`
     * permission on the specified service. For more information, see
     * [Cloud IAM](https://cloud.google.com/iam).
     *
     * **NOTE:** The client **must** fail-open on server errors `INTERNAL`,
     * `UNKNOWN`, `DEADLINE_EXCEEDED`, and `UNAVAILABLE`. To ensure system
     * reliability, the server may inject these errors to prohibit any hard
     * dependency on the quota functionality.
     *
     * Sample code:
     * ```
     * $quotaControllerClient = new QuotaControllerClient();
     * try {
     *     $response = $quotaControllerClient->allocateQuota();
     * } finally {
     *     $quotaControllerClient->close();
     * }
     * ```
     *
     * @param array $optionalArgs {
     *     Optional.
     *
     *     @type string $serviceName
     *           Name of the service as specified in the service configuration. For example,
     *           `"pubsub.googleapis.com"`.
     *
     *           See [google.api.Service][google.api.Service] for the definition of a service name.
     *     @type QuotaOperation $allocateOperation
     *           Operation that describes the quota allocation.
     *     @type string $serviceConfigId
     *           Specifies which version of service configuration should be used to process
     *           the request. If unspecified or no matching version can be found, the latest
     *           one will be used.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\ServiceControl\V1\AllocateQuotaResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function allocateQuota(array $optionalArgs = [])
    {
        $request = new AllocateQuotaRequest();
        $requestParamHeaders = [];
        if (isset($optionalArgs['serviceName'])) {
            $request->setServiceName($optionalArgs['serviceName']);
            $requestParamHeaders['service_name'] = $optionalArgs['serviceName'];
        }

        if (isset($optionalArgs['allocateOperation'])) {
            $request->setAllocateOperation($optionalArgs['allocateOperation']);
        }

        if (isset($optionalArgs['serviceConfigId'])) {
            $request->setServiceConfigId($optionalArgs['serviceConfigId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('AllocateQuota', AllocateQuotaResponse::class, $optionalArgs, $request)->wait();
    }
}