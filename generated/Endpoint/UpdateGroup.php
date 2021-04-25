<?php

namespace DigiComp\OpenproviderApi\Endpoint;

class UpdateGroup extends \DigiComp\OpenproviderApi\Runtime\Client\BaseEndpoint implements \DigiComp\OpenproviderApi\Runtime\Client\Endpoint
{
    protected $ns_group;
    /**
     *
     *
     * @param string $nsGroup Plain text name of the nameserver group, which can consist of several nameservers with attached IPs. Once created in Openprovider reseller account, nameserver group can be reused for operations with domains.
     * @param \DigiComp\OpenproviderApi\Model\NsGroupUpdateGroupRequest $body
     */
    public function __construct(string $nsGroup, \DigiComp\OpenproviderApi\Model\NsGroupUpdateGroupRequest $body)
    {
        $this->ns_group = $nsGroup;
        $this->body = $body;
    }
    use \DigiComp\OpenproviderApi\Runtime\Client\EndpointTrait;

    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{ns_group}'), array($this->ns_group), '/v1beta/dns/nameservers/groups/{ns_group}');
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
     * @return null|\DigiComp\OpenproviderApi\Model\NsGroupGroupBoolResponse|\DigiComp\OpenproviderApi\Model\ErrorError
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\NsGroupGroupBoolResponse', 'json');
        }
        return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array('Bearer');
    }
}
