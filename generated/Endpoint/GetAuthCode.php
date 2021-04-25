<?php

namespace DigiComp\OpenproviderApi\Endpoint;

class GetAuthCode extends \DigiComp\OpenproviderApi\Runtime\Client\BaseEndpoint implements \DigiComp\OpenproviderApi\Runtime\Client\Endpoint
{
    protected $id;
    /**
     *
     *
     * @param int $id Domain id number
     * @param array $queryParameters {
     *     @var string $domain.name Domain name without extension.
     *     @var string $domain.extension Domain extension.
     *     @var string $auth_code_type Type of transfer authorization code. external (default) or internal (for internal transfers between reseller accounts in Openprovider only).
     *     @var string $sending_type Indicates how authcode should be provisioned to domain owner. For ru / xn--p1ai domains only. Possible values: sms, email letter.
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
        return str_replace(array('{id}'), array($this->id), '/v1beta/domains/{id}/authcode');
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
        $optionsResolver->setDefined(array('domain.name', 'domain.extension', 'auth_code_type', 'sending_type'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('domain.name', array('string'));
        $optionsResolver->setAllowedTypes('domain.extension', array('string'));
        $optionsResolver->setAllowedTypes('auth_code_type', array('string'));
        $optionsResolver->setAllowedTypes('sending_type', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\DigiComp\OpenproviderApi\Model\AuthcodeGetAuthCodeResponse|\DigiComp\OpenproviderApi\Model\ErrorError
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\AuthcodeGetAuthCodeResponse', 'json');
        }
        return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array('Bearer');
    }
}
