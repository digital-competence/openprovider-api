<?php

namespace DigiComp\OpenproviderApi\Endpoint;

class GetDomain extends \DigiComp\OpenproviderApi\Runtime\Client\BaseEndpoint implements \DigiComp\OpenproviderApi\Runtime\Client\Endpoint
{
    protected $id;
    /**
     *
     *
     * @param int $id Domain id number
     * @param array $queryParameters {
     *     @var string $domain.name Domain name without extension.
     *     @var string $domain.extension Domain extension.
     *     @var bool $with_history Returns domain mutations history.
     *     @var bool $with_api_history Returns domain API calls history.
     *     @var bool $with_additional_data Returns domain additional data.
     *     @var bool $with_verification_email Returns information about domain owner email verification status.
     *     @var bool $with_abuse_details Returns domain abuse details.
     *     @var bool $with_whois_privacy_data Returns WPP data.
     *     @var bool $with_registry_statuses Indicates, if registry EPP statuses should be retrieved.
     *     @var bool $is_deleted Indicates whether object is deleted.
     * }
     */
    public function __construct(int $id, array $queryParameters = array())
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
    }
    use \DigiComp\OpenproviderApi\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{id}'), array($this->id), '/v1beta/domains/{id}');
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
        $optionsResolver->setDefined(array('domain.name', 'domain.extension', 'with_history', 'with_api_history', 'with_additional_data', 'with_verification_email', 'with_abuse_details', 'with_whois_privacy_data', 'with_registry_statuses', 'is_deleted'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('domain.name', array('string'));
        $optionsResolver->setAllowedTypes('domain.extension', array('string'));
        $optionsResolver->setAllowedTypes('with_history', array('bool'));
        $optionsResolver->setNormalizer('with_history', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('with_api_history', array('bool'));
        $optionsResolver->setNormalizer('with_api_history', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('with_additional_data', array('bool'));
        $optionsResolver->setNormalizer('with_additional_data', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('with_verification_email', array('bool'));
        $optionsResolver->setNormalizer('with_verification_email', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('with_abuse_details', array('bool'));
        $optionsResolver->setNormalizer('with_abuse_details', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('with_whois_privacy_data', array('bool'));
        $optionsResolver->setNormalizer('with_whois_privacy_data', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('with_registry_statuses', array('bool'));
        $optionsResolver->setNormalizer('with_registry_statuses', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('is_deleted', array('bool'));
        $optionsResolver->setNormalizer('is_deleted', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\DigiComp\OpenproviderApi\Model\DomainGetDomainResponse|\DigiComp\OpenproviderApi\Model\ErrorError
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\DomainGetDomainResponse', 'json');
        }
        return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array('Bearer');
    }
}
