<?php

namespace DigiComp\OpenproviderApi\Endpoint;

class UpdateCustomer extends \DigiComp\OpenproviderApi\Runtime\Client\BaseEndpoint implements \DigiComp\OpenproviderApi\Runtime\Client\Endpoint
{
    protected $handle;
    /**
     *
     *
     * @param string $handle Customer unique identifier or handle, which can be created via CreateCustomer API method
     * @param \DigiComp\OpenproviderApi\Model\CustomerUpdateCustomerRequest $body
     */
    public function __construct(string $handle, \DigiComp\OpenproviderApi\Model\CustomerUpdateCustomerRequest $body)
    {
        $this->handle = $handle;
        $this->body = $body;
    }
    use \DigiComp\OpenproviderApi\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{handle}'), array($this->handle), '/v1beta/customers/{handle}');
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
     * @return null|\DigiComp\OpenproviderApi\Model\CustomerUpdateCustomerResponse|\DigiComp\OpenproviderApi\Model\ErrorError
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\CustomerUpdateCustomerResponse', 'json');
        }
        return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array('Bearer');
    }
}
