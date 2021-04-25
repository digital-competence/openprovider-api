<?php

namespace DigiComp\OpenproviderApi\Endpoint;

class GetCustomer extends \DigiComp\OpenproviderApi\Runtime\Client\BaseEndpoint implements \DigiComp\OpenproviderApi\Runtime\Client\Endpoint
{
    protected $handle;
    /**
     *
     *
     * @param string $handle Customer unique identifier or handle, which can be created via CreateCustomer API method
     * @param array $queryParameters {
     *     @var bool $with_additional_data Retrieves objects with (1) or without (0) additional data.
     * }
     */
    public function __construct(string $handle, array $queryParameters = array())
    {
        $this->handle = $handle;
        $this->queryParameters = $queryParameters;
    }
    use \DigiComp\OpenproviderApi\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{handle}'), array($this->handle), '/v1beta/customers/{handle}');
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
        $optionsResolver->setDefined(array('with_additional_data'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('with_additional_data', array('bool'));
        $optionsResolver->setNormalizer('with_additional_data', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\DigiComp\OpenproviderApi\Model\CustomerGetCustomerResponse|\DigiComp\OpenproviderApi\Model\ErrorError
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\CustomerGetCustomerResponse', 'json');
        }
        return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array('Bearer');
    }
}
