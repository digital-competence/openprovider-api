<?php

namespace DigiComp\OpenproviderApi\Endpoint;

class UpdateDomainMixin7 extends \DigiComp\OpenproviderApi\Runtime\Client\BaseEndpoint implements \DigiComp\OpenproviderApi\Runtime\Client\Endpoint
{
    protected $domain_name;
    /**
     *
     *
     * @param string $domainName Domain full name
     * @param \DigiComp\OpenproviderApi\Model\SeDomainUpdateDomainRequest $body
     */
    public function __construct(string $domainName, \DigiComp\OpenproviderApi\Model\SeDomainUpdateDomainRequest $body)
    {
        $this->domain_name = $domainName;
        $this->body = $body;
    }
    use \DigiComp\OpenproviderApi\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{domain_name}'), array($this->domain_name), '/v1beta/spam-expert/domains/{domain_name}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\DigiComp\OpenproviderApi\Model\ResponseBoolResponse|\DigiComp\OpenproviderApi\Model\ErrorError
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\ResponseBoolResponse', 'json');
        }
        return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array('Bearer');
    }
}
