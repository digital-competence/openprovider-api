<?php

namespace DigiComp\OpenproviderApi\Endpoint;

class ListNameservers extends \DigiComp\OpenproviderApi\Runtime\Client\BaseEndpoint implements \DigiComp\OpenproviderApi\Runtime\Client\Endpoint
{
    /**
     *
     *
     * @param array $queryParameters {
     *     @var string $name Nameserver name.
     *     @var string $ip Nameserver IP.
     *     @var string $ip6 Nameserver IPv6.
     *     @var string $pattern Nameserver name search pattern. Wildcatd (*) can be used.
     *     @var int $limit Limits the number of objects in the output.
     *     @var string $offset Used to retrieve all objects from a certain offset up to the limit.
     *     @var string $order Sorting type (asc/desc).
     *     @var string $order_by Field for sorting output. Possible values: id, name.
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
        return '/v1beta/dns/nameservers';
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
        $optionsResolver->setDefined(array('name', 'ip', 'ip6', 'pattern', 'limit', 'offset', 'order', 'order_by'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('limit' => 100, 'order' => 'asc', 'order_by' => 'name'));
        $optionsResolver->setAllowedTypes('name', array('string'));
        $optionsResolver->setAllowedTypes('ip', array('string'));
        $optionsResolver->setAllowedTypes('ip6', array('string'));
        $optionsResolver->setAllowedTypes('pattern', array('string'));
        $optionsResolver->setAllowedTypes('limit', array('int'));
        $optionsResolver->setAllowedTypes('offset', array('string'));
        $optionsResolver->setAllowedTypes('order', array('string'));
        $optionsResolver->setAllowedTypes('order_by', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\DigiComp\OpenproviderApi\Model\NameserverListNameserversResponse|\DigiComp\OpenproviderApi\Model\ErrorError
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\NameserverListNameserversResponse', 'json');
        }
        return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array('Bearer');
    }
}
