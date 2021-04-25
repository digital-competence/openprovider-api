<?php

namespace DigiComp\OpenproviderApi\Endpoint;

class TransferDomain extends \DigiComp\OpenproviderApi\Runtime\Client\BaseEndpoint implements \DigiComp\OpenproviderApi\Runtime\Client\Endpoint
{
    /**
     *
     *
     * @param \DigiComp\OpenproviderApi\Model\DomainTransferDomainRequest $body
     */
    public function __construct(\DigiComp\OpenproviderApi\Model\DomainTransferDomainRequest $body)
    {
        $this->body = $body;
    }
    use \DigiComp\OpenproviderApi\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/v1beta/domains/transfer';
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
     * @return null|\DigiComp\OpenproviderApi\Model\DomainTransferDomainResponse|\DigiComp\OpenproviderApi\Model\ErrorError
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\DomainTransferDomainResponse', 'json');
        }
        return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array('Bearer');
    }
}
