<?php

namespace DigiComp\OpenproviderApi\Endpoint;

class ListLicensesWithPriceVersion extends \DigiComp\OpenproviderApi\Runtime\Client\BaseEndpoint implements \DigiComp\OpenproviderApi\Runtime\Client\Endpoint
{
    /**
     *
     *
     * @param array $queryParameters {
     *     @var int $limit Output limit.
     *     @var int $offset Output offset.
     *     @var string $order_by.id Object ID.
     *     @var string $order_by.key_id License key ID.
     *     @var string $order_by.title Custom license title.
     *     @var string $order_by.product Product type (Plesk or Virtuozzo).
     *     @var string $order_by.status License status.
     *     @var string $order_by.key_number License key number.
     *     @var string $order_by.expiration_date License expiration date.
     *     @var string $product Product type (Plesk or Virtuozzo).
     *     @var string $key_number License key number.
     *     @var string $title_pattern Custom title pattern. Wildcard (*) can be sued.
     *     @var string $key_number_pattern License key number pattern. Wildcard (*) can be used.
     *     @var int $parent_key_id Key ID of the partent license.
     *     @var string $status License status.
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
        return '/v1beta/licenses';
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
        $optionsResolver->setDefined(array('limit', 'offset', 'order_by.id', 'order_by.key_id', 'order_by.title', 'order_by.product', 'order_by.status', 'order_by.key_number', 'order_by.expiration_date', 'product', 'key_number', 'title_pattern', 'key_number_pattern', 'parent_key_id', 'status'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('limit', array('int'));
        $optionsResolver->setAllowedTypes('offset', array('int'));
        $optionsResolver->setAllowedTypes('order_by.id', array('string'));
        $optionsResolver->setAllowedTypes('order_by.key_id', array('string'));
        $optionsResolver->setAllowedTypes('order_by.title', array('string'));
        $optionsResolver->setAllowedTypes('order_by.product', array('string'));
        $optionsResolver->setAllowedTypes('order_by.status', array('string'));
        $optionsResolver->setAllowedTypes('order_by.key_number', array('string'));
        $optionsResolver->setAllowedTypes('order_by.expiration_date', array('string'));
        $optionsResolver->setAllowedTypes('product', array('string'));
        $optionsResolver->setAllowedTypes('key_number', array('string'));
        $optionsResolver->setAllowedTypes('title_pattern', array('string'));
        $optionsResolver->setAllowedTypes('key_number_pattern', array('string'));
        $optionsResolver->setAllowedTypes('parent_key_id', array('int'));
        $optionsResolver->setAllowedTypes('status', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\DigiComp\OpenproviderApi\Model\LicenseListLicensesWithPriceVersionResponse|\DigiComp\OpenproviderApi\Model\ErrorError
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\LicenseListLicensesWithPriceVersionResponse', 'json');
        }
        return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array('Bearer');
    }
}
