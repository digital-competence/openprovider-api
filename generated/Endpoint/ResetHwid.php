<?php

namespace DigiComp\OpenproviderApi\Endpoint;

class ResetHwid extends \DigiComp\OpenproviderApi\Runtime\Client\BaseEndpoint implements \DigiComp\OpenproviderApi\Runtime\Client\Endpoint
{
    protected $product;
    protected $key_id;
    /**
     *
     *
     * @param string $product Product type (Plesk or Virtuozzo)
     * @param int $keyId License key ID
     * @param \DigiComp\OpenproviderApi\Model\LicenseResetHwidRequest $body
     */
    public function __construct(string $product, int $keyId, \DigiComp\OpenproviderApi\Model\LicenseResetHwidRequest $body)
    {
        $this->product = $product;
        $this->key_id = $keyId;
        $this->body = $body;
    }
    use \DigiComp\OpenproviderApi\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{product}', '{key_id}'), array($this->product, $this->key_id), '/v1beta/licenses/hwids/reset/{product}/{key_id}');
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
     * @return null|\DigiComp\OpenproviderApi\Model\LicenseResetHwidResponse|\DigiComp\OpenproviderApi\Model\ErrorError
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\LicenseResetHwidResponse', 'json');
        }
        return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array('Bearer');
    }
}
