<?php

namespace DigiComp\OpenproviderApi\Endpoint;

class ListOrders extends \DigiComp\OpenproviderApi\Runtime\Client\BaseEndpoint implements \DigiComp\OpenproviderApi\Runtime\Client\Endpoint
{
    /**
     *
     *
     * @param array $queryParameters {
     *     @var int $limit Search query limit.
     *     @var int $offset Search query offset.
     *     @var string $order_by.common_name desc/asc.
     *     @var string $order_by.order_date desc/asc.
     *     @var string $order_by.active_date desc/asc.
     *     @var string $order_by.expiration_date desc/asc.
     *     @var string $order_by.status desc/asc.
     *     @var string $order_by.product_name desc/asc.
     *     @var string $common_name_pattern Certificate common name pattern. Wildcard (*) can be used.
     *     @var array $status Array of order statuses.
     *     @var string $contact_handle Contact handle.
     *     @var bool $show_expiring Indicates, whether to return only certificates that are expiring within 30 days.
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
        return '/v1beta/ssl/orders';
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
        $optionsResolver->setDefined(array('limit', 'offset', 'order_by.common_name', 'order_by.order_date', 'order_by.active_date', 'order_by.expiration_date', 'order_by.status', 'order_by.product_name', 'common_name_pattern', 'status', 'contact_handle', 'show_expiring'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('limit' => 100, 'order_by.order_date' => 'desc'));
        $optionsResolver->setAllowedTypes('limit', array('int'));
        $optionsResolver->setAllowedTypes('offset', array('int'));
        $optionsResolver->setAllowedTypes('order_by.common_name', array('string'));
        $optionsResolver->setAllowedTypes('order_by.order_date', array('string'));
        $optionsResolver->setAllowedTypes('order_by.active_date', array('string'));
        $optionsResolver->setAllowedTypes('order_by.expiration_date', array('string'));
        $optionsResolver->setAllowedTypes('order_by.status', array('string'));
        $optionsResolver->setAllowedTypes('order_by.product_name', array('string'));
        $optionsResolver->setAllowedTypes('common_name_pattern', array('string'));
        $optionsResolver->setAllowedTypes('status', array('array'));
        $optionsResolver->setAllowedTypes('contact_handle', array('string'));
        $optionsResolver->setAllowedTypes('show_expiring', array('bool'));
        $optionsResolver->setNormalizer('show_expiring', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\DigiComp\OpenproviderApi\Model\OrderListOrdersResponse|\DigiComp\OpenproviderApi\Model\ErrorError
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\OrderListOrdersResponse', 'json');
        }
        return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array('Bearer');
    }
}
