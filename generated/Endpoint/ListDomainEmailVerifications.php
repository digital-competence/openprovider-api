<?php

namespace DigiComp\OpenproviderApi\Endpoint;

class ListDomainEmailVerifications extends \DigiComp\OpenproviderApi\Runtime\Client\BaseEndpoint implements \DigiComp\OpenproviderApi\Runtime\Client\Endpoint
{
    /**
     *
     *
     * @param array $queryParameters {
     *     @var int $domain_id The domain id.
     *     @var string $domain The domain.
     *     @var string $email The email.
     *     @var string $handle The handle.
     *     @var string $status The status.
     *     @var string $description The description.
     *     @var bool $is_suspended Is suspended.
     *     @var string $response.type The type.
     *     @var string $response.to The to.
     *     @var int $limit The limit.
     *     @var int $offset The offset.
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
        return '/v1beta/customers/verifications/emails/domains';
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
        $optionsResolver->setDefined(array('domain_id', 'domain', 'email', 'handle', 'status', 'description', 'is_suspended', 'response.type', 'response.to', 'limit', 'offset'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('domain_id', array('int'));
        $optionsResolver->setAllowedTypes('domain', array('string'));
        $optionsResolver->setAllowedTypes('email', array('string'));
        $optionsResolver->setAllowedTypes('handle', array('string'));
        $optionsResolver->setAllowedTypes('status', array('string'));
        $optionsResolver->setAllowedTypes('description', array('string'));
        $optionsResolver->setAllowedTypes('is_suspended', array('bool'));
        $optionsResolver->setNormalizer('is_suspended', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('response.type', array('string'));
        $optionsResolver->setAllowedTypes('response.to', array('string'));
        $optionsResolver->setAllowedTypes('limit', array('int'));
        $optionsResolver->setAllowedTypes('offset', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\DigiComp\OpenproviderApi\Model\EmailListDomainVerificationsResponse|\DigiComp\OpenproviderApi\Model\ErrorError
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\EmailListDomainVerificationsResponse', 'json');
        }
        return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array('Bearer');
    }
}
