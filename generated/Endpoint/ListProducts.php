<?php

namespace DigiComp\OpenproviderApi\Endpoint;

class ListProducts extends \DigiComp\OpenproviderApi\Runtime\Client\BaseEndpoint implements \DigiComp\OpenproviderApi\Runtime\Client\Endpoint
{
    /**
     *
     *
     * @param array $queryParameters {
     *     @var int $limit Search query limit.
     *     @var int $offset Search query offset.
     *     @var bool $with_price Returns product price in the response.
     *     @var bool $with_supported_software Returns a list of supported software patforms.
     *     @var bool $with_description Returns a description for each product, if exists.
     *     @var string $order_by.name Sorting type (asc/desc).
     *     @var string $order_by.brand_name Sorting type (asc/desc).
     *     @var string $order_by.category Sorting type (asc/desc).
     *     @var string $order_by.sub_category Sorting type (asc/desc).
     *     @var string $order_by.brand_seqno Sorting type (asc/desc).
     *     @var string $order_by.product_seqno Sorting type (asc/desc).
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
        return '/v1beta/ssl/products';
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
        $optionsResolver->setDefined(array('limit', 'offset', 'with_price', 'with_supported_software', 'with_description', 'order_by.name', 'order_by.brand_name', 'order_by.category', 'order_by.sub_category', 'order_by.brand_seqno', 'order_by.product_seqno'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('with_supported_software' => false));
        $optionsResolver->setAllowedTypes('limit', array('int'));
        $optionsResolver->setAllowedTypes('offset', array('int'));
        $optionsResolver->setAllowedTypes('with_price', array('bool'));
        $optionsResolver->setNormalizer('with_price', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('with_supported_software', array('bool'));
        $optionsResolver->setNormalizer('with_supported_software', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('with_description', array('bool'));
        $optionsResolver->setNormalizer('with_description', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('order_by.name', array('string'));
        $optionsResolver->setAllowedTypes('order_by.brand_name', array('string'));
        $optionsResolver->setAllowedTypes('order_by.category', array('string'));
        $optionsResolver->setAllowedTypes('order_by.sub_category', array('string'));
        $optionsResolver->setAllowedTypes('order_by.brand_seqno', array('string'));
        $optionsResolver->setAllowedTypes('order_by.product_seqno', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\DigiComp\OpenproviderApi\Model\ProductListProductsResponse|\DigiComp\OpenproviderApi\Model\ErrorError
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\ProductListProductsResponse', 'json');
        }
        return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array('Bearer');
    }
}
