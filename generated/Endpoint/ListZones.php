<?php

namespace DigiComp\OpenproviderApi\Endpoint;

class ListZones extends \DigiComp\OpenproviderApi\Runtime\Client\BaseEndpoint implements \DigiComp\OpenproviderApi\Runtime\Client\Endpoint
{
    /**
     *
     *
     * @param array $queryParameters {
     *     @var int $limit Limits the number of objects in the output. (default value: 100, maximum value: 500).
     *     @var int $offset Used to retrieve all objects from a certain offset up to the. (default value: 0).
     *     @var string $order_by.creation_date Sorting type (asc/desc).
     *     @var string $order_by.modification_date Sorting type (asc/desc).
     *     @var string $order_by.name Sorting type (asc/desc).
     *     @var string $type DNS zone type (master or slave).
     *     @var string $name_pattern DNS zone name pattern. Wildcard (*) can be used.
     *     @var bool $with_records Indicates, whether DNS records should be displayed in output.
     *     @var bool $with_history Indicates, whether DNS zone history should be displayed in output.
     *     @var bool $with_dnskey Indicates, whether DNSSEC keys should be displayed in output.
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
        return '/v1beta/dns/zones';
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
        $optionsResolver->setDefined(array('limit', 'offset', 'order_by.creation_date', 'order_by.modification_date', 'order_by.name', 'type', 'name_pattern', 'with_records', 'with_history', 'with_dnskey'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('limit' => 100, 'order_by.creation_date' => 'desc'));
        $optionsResolver->setAllowedTypes('limit', array('int'));
        $optionsResolver->setAllowedTypes('offset', array('int'));
        $optionsResolver->setAllowedTypes('order_by.creation_date', array('string'));
        $optionsResolver->setAllowedTypes('order_by.modification_date', array('string'));
        $optionsResolver->setAllowedTypes('order_by.name', array('string'));
        $optionsResolver->setAllowedTypes('type', array('string'));
        $optionsResolver->setAllowedTypes('name_pattern', array('string'));
        $optionsResolver->setAllowedTypes('with_records', array('bool'));
        $optionsResolver->setNormalizer('with_records', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('with_history', array('bool'));
        $optionsResolver->setNormalizer('with_history', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('with_dnskey', array('bool'));
        $optionsResolver->setNormalizer('with_dnskey', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\DigiComp\OpenproviderApi\Model\ZoneListZonesResponse|\DigiComp\OpenproviderApi\Model\ErrorError
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\ZoneListZonesResponse', 'json');
        }
        return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array('Bearer');
    }
}
