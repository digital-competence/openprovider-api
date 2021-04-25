<?php

namespace DigiComp\OpenproviderApi\Endpoint;

class ListTlds extends \DigiComp\OpenproviderApi\Runtime\Client\BaseEndpoint implements \DigiComp\OpenproviderApi\Runtime\Client\Endpoint
{
    /**
     *
     *
     * @param array $queryParameters {
     *     @var int $limit Search query limit.
     *     @var int $offset Search query offset.
     *     @var string $order Sorts output ASC or DESC.
     *     @var string $order_by Sorts output by a field.
     *     @var array $extensions Array of extensions.
     *     @var string $name_pattern Extension name pattern. Wildcard (*) can be used.
     *     @var bool $only_names Returns only extension names in the output.
     *     @var bool $with_description Returns additional extension description.
     *     @var bool $with_restrictions Returns list of extension restrictions.
     *     @var bool $with_usage_count Returns number of domains using specified extension in this account.
     *     @var array $with_application_mode Array of extension application modes.
     *     @var bool $with_price Returns extension prices.
     *     @var bool $with_level_prices Returns extension prices for each Openprovider discount tier.
     *     @var bool $is_active Indicates, if extension is active.
     *     @var bool $is_new_gtld Indicates, if extension is a newGTLD.
     *     @var string $status Extension status.
     *     @var string $application_mode Pre-registration mode.
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
        return '/v1beta/tlds';
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
        $optionsResolver->setDefined(array('limit', 'offset', 'order', 'order_by', 'extensions', 'name_pattern', 'only_names', 'with_description', 'with_restrictions', 'with_usage_count', 'with_application_mode', 'with_price', 'with_level_prices', 'is_active', 'is_new_gtld', 'status', 'application_mode'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('limit', array('int'));
        $optionsResolver->setAllowedTypes('offset', array('int'));
        $optionsResolver->setAllowedTypes('order', array('string'));
        $optionsResolver->setAllowedTypes('order_by', array('string'));
        $optionsResolver->setAllowedTypes('extensions', array('array'));
        $optionsResolver->setAllowedTypes('name_pattern', array('string'));
        $optionsResolver->setAllowedTypes('only_names', array('bool'));
        $optionsResolver->setNormalizer('only_names', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('with_description', array('bool'));
        $optionsResolver->setNormalizer('with_description', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('with_restrictions', array('bool'));
        $optionsResolver->setNormalizer('with_restrictions', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('with_usage_count', array('bool'));
        $optionsResolver->setNormalizer('with_usage_count', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('with_application_mode', array('array'));
        $optionsResolver->setAllowedTypes('with_price', array('bool'));
        $optionsResolver->setNormalizer('with_price', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('with_level_prices', array('bool'));
        $optionsResolver->setNormalizer('with_level_prices', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('is_active', array('bool'));
        $optionsResolver->setNormalizer('is_active', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('is_new_gtld', array('bool'));
        $optionsResolver->setNormalizer('is_new_gtld', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('status', array('string'));
        $optionsResolver->setAllowedTypes('application_mode', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\DigiComp\OpenproviderApi\Model\TldListTldsResponse|\DigiComp\OpenproviderApi\Model\ErrorError
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\TldListTldsResponse', 'json');
        }
        return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array('Bearer');
    }
}
