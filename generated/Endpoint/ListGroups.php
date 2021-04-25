<?php

namespace DigiComp\OpenproviderApi\Endpoint;

class ListGroups extends \DigiComp\OpenproviderApi\Runtime\Client\BaseEndpoint implements \DigiComp\OpenproviderApi\Runtime\Client\Endpoint
{
    /**
     *
     *
     * @param array $queryParameters {
     *     @var int $limit Limits the number of objects in the output.
     *     @var int $offset Used to retrieve all objects from a certain offset up to the limit. (default value: 0).
     *     @var string $order_by.ns_group Sorting type (asc/desc).
     *     @var string $order_by.domain_count Sorting type (asc/desc).
     *     @var string $order_by.ns_count Sorting type (asc/desc).
     *     @var bool $with_domain_count Indicates if number of domains associated with the NS group should be returned.
     *     @var bool $with_ns_count Indicates if number of nameservers associated with the NS group should be returned.
     *     @var string $ns_group_pattern NS group name pattern. Wildcard (*) can be used.
     *     @var string $ns_name_pattern Nameserver name pattern. Wildcard (*) can be used.
     *     @var string $ns_ip_pattern Nameserver IP address pattern. Wildcard (*) can be used.
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \DigiComp\OpenproviderApi\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/v1beta/dns/nameservers/groups';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('limit', 'offset', 'order_by.ns_group', 'order_by.domain_count', 'order_by.ns_count', 'with_domain_count', 'with_ns_count', 'ns_group_pattern', 'ns_name_pattern', 'ns_ip_pattern'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('limit' => 100, 'order_by.ns_group' => 'asc'));
        $optionsResolver->setAllowedTypes('limit', array('int'));
        $optionsResolver->setAllowedTypes('offset', array('int'));
        $optionsResolver->setAllowedTypes('order_by.ns_group', array('string'));
        $optionsResolver->setAllowedTypes('order_by.domain_count', array('string'));
        $optionsResolver->setAllowedTypes('order_by.ns_count', array('string'));
        $optionsResolver->setAllowedTypes('with_domain_count', array('bool'));
        $optionsResolver->setNormalizer('with_domain_count', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('with_ns_count', array('bool'));
        $optionsResolver->setNormalizer('with_ns_count', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('ns_group_pattern', array('string'));
        $optionsResolver->setAllowedTypes('ns_name_pattern', array('string'));
        $optionsResolver->setAllowedTypes('ns_ip_pattern', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\DigiComp\OpenproviderApi\Model\NsGroupListGroupsResponse|\DigiComp\OpenproviderApi\Model\ErrorError
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\NsGroupListGroupsResponse', 'json');
        }
        return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array('Bearer');
    }
}
