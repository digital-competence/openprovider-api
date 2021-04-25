<?php

namespace DigiComp\OpenproviderApi\Endpoint;

class GetDomainMixin7 extends \DigiComp\OpenproviderApi\Runtime\Client\BaseEndpoint implements \DigiComp\OpenproviderApi\Runtime\Client\Endpoint
{
    protected $domain_name;
    /**
     *
     *
     * @param string $domainName Domain full name
     * @param array $queryParameters {
     *     @var bool $with_records Indicates, whether records should be displayed in output.
     *     @var bool $bundle Indicates if old subscriptions backward compatibility is used.
     * }
     */
    public function __construct(string $domainName, array $queryParameters = array())
    {
        $this->domain_name = $domainName;
        $this->queryParameters = $queryParameters;
    }
    use \DigiComp\OpenproviderApi\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{domain_name}'), array($this->domain_name), '/v1beta/spam-expert/domains/{domain_name}');
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
        $optionsResolver->setDefined(array('with_records', 'bundle'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('with_records' => false));
        $optionsResolver->setAllowedTypes('with_records', array('bool'));
        $optionsResolver->setNormalizer('with_records', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('bundle', array('bool'));
        $optionsResolver->setNormalizer('bundle', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\DigiComp\OpenproviderApi\Model\SeDomainGetDomainResponse|\DigiComp\OpenproviderApi\Model\ErrorError
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\SeDomainGetDomainResponse', 'json');
        }
        return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array('Bearer');
    }
}
