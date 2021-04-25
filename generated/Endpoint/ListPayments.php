<?php

namespace DigiComp\OpenproviderApi\Endpoint;

class ListPayments extends \DigiComp\OpenproviderApi\Runtime\Client\BaseEndpoint implements \DigiComp\OpenproviderApi\Runtime\Client\Endpoint
{
    /**
     *
     *
     * @param array $queryParameters {
     *     @var int $limit The limit.
     *     @var int $offset The offset.
     *     @var string $order The order.
     *     @var string $order_by The order by.
     *     @var string $type The type.
     *     @var string $status The status.
     *     @var string $start_creation_date The start creation date.
     *     @var string $end_creation_date The end creation date.
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
        return '/v1beta/payments';
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
        $optionsResolver->setDefined(array('limit', 'offset', 'order', 'order_by', 'type', 'status', 'start_creation_date', 'end_creation_date'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('limit', array('int'));
        $optionsResolver->setAllowedTypes('offset', array('int'));
        $optionsResolver->setAllowedTypes('order', array('string'));
        $optionsResolver->setAllowedTypes('order_by', array('string'));
        $optionsResolver->setAllowedTypes('type', array('string'));
        $optionsResolver->setAllowedTypes('status', array('string'));
        $optionsResolver->setAllowedTypes('start_creation_date', array('string'));
        $optionsResolver->setAllowedTypes('end_creation_date', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\DigiComp\OpenproviderApi\Model\PaymentListPaymentsResponse|\DigiComp\OpenproviderApi\Model\ErrorError
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\PaymentListPaymentsResponse', 'json');
        }
        return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array('Bearer');
    }
}
