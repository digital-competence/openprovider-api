<?php

namespace DigiComp\OpenproviderApi\Endpoint;

class ListZoneRecords extends \DigiComp\OpenproviderApi\Runtime\Client\BaseEndpoint implements \DigiComp\OpenproviderApi\Runtime\Client\Endpoint
{
    protected $name;
    /**
     *
     *
     * @param string $name DNS record name
     * @param array $queryParameters {
     *     @var int $zone_id DNS zone ID.
     *     @var int $limit How many records to retrieve (default: 100, max 500).
     *     @var int $offset From which record to retrieve (default: 0).
     *     @var string $order_by.type Sorting type (asc/desc).
     *     @var string $order_by.name Sorting type (asc/desc).
     *     @var string $order_by.value Sorting type (asc/desc).
     *     @var string $order_by.ttl Sorting type (asc/desc).
     *     @var string $order_by.prio Sorting type (asc/desc).
     *     @var string $record_name_pattern DNS record name pattern. Wildcard (*) can be used.
     *     @var string $value_pattern DNS record value pattern. Wildcard (*) can be used.
     *     @var string $type DNS record type.
     *     @var int $prio DNS record priority.
     *     @var int $ttl DNS record TTL.
     * }
     */
    public function __construct(string $name, array $queryParameters = array())
    {
        $this->name = $name;
        $this->queryParameters = $queryParameters;
    }
    use \DigiComp\OpenproviderApi\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{name}'), array($this->name), '/v1beta/dns/zones/{name}/records');
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
        $optionsResolver->setDefined(array('zone_id', 'limit', 'offset', 'order_by.type', 'order_by.name', 'order_by.value', 'order_by.ttl', 'order_by.prio', 'record_name_pattern', 'value_pattern', 'type', 'prio', 'ttl'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('limit' => 100, 'order_by.type' => 'asc', 'order_by.name' => 'asc'));
        $optionsResolver->setAllowedTypes('zone_id', array('int'));
        $optionsResolver->setAllowedTypes('limit', array('int'));
        $optionsResolver->setAllowedTypes('offset', array('int'));
        $optionsResolver->setAllowedTypes('order_by.type', array('string'));
        $optionsResolver->setAllowedTypes('order_by.name', array('string'));
        $optionsResolver->setAllowedTypes('order_by.value', array('string'));
        $optionsResolver->setAllowedTypes('order_by.ttl', array('string'));
        $optionsResolver->setAllowedTypes('order_by.prio', array('string'));
        $optionsResolver->setAllowedTypes('record_name_pattern', array('string'));
        $optionsResolver->setAllowedTypes('value_pattern', array('string'));
        $optionsResolver->setAllowedTypes('type', array('string'));
        $optionsResolver->setAllowedTypes('prio', array('int'));
        $optionsResolver->setAllowedTypes('ttl', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\DigiComp\OpenproviderApi\Model\RecordListZoneRecordsResponse|\DigiComp\OpenproviderApi\Model\ErrorError
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\RecordListZoneRecordsResponse', 'json');
        }
        return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array('Bearer');
    }
}
