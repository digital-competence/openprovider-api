<?php

namespace DigiComp\OpenproviderApi\Endpoint;

class ListContacts extends \DigiComp\OpenproviderApi\Runtime\Client\BaseEndpoint implements \DigiComp\OpenproviderApi\Runtime\Client\Endpoint
{
    /**
     *
     *
     * @param array $queryParameters {
     *     @var int $limit Output limit.
     *     @var int $offset Output offset.
     *     @var string $order Output ordering pattern. ASC / DESC.
     *     @var string $order_by Order output by field (i.e. first_name).
     *     @var string $email_pattern Full or partial email address. Wildcard (*) can be used.
     *     @var string $last_name_pattern Full or partial last name. Wildcard (*) can be used.
     *     @var string $company_name_pattern Full or partial company name. Wildcard (*) can be used.
     *     @var string $username_pattern The username pattern.
     *     @var string $role Contact's role.
     *     @var bool $with_additional_data Retrieves objects with (1) or without (0) additional data.
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
        return '/v1beta/contacts';
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
        $optionsResolver->setDefined(array('limit', 'offset', 'order', 'order_by', 'email_pattern', 'last_name_pattern', 'company_name_pattern', 'username_pattern', 'role', 'with_additional_data'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('limit', array('int'));
        $optionsResolver->setAllowedTypes('offset', array('int'));
        $optionsResolver->setAllowedTypes('order', array('string'));
        $optionsResolver->setAllowedTypes('order_by', array('string'));
        $optionsResolver->setAllowedTypes('email_pattern', array('string'));
        $optionsResolver->setAllowedTypes('last_name_pattern', array('string'));
        $optionsResolver->setAllowedTypes('company_name_pattern', array('string'));
        $optionsResolver->setAllowedTypes('username_pattern', array('string'));
        $optionsResolver->setAllowedTypes('role', array('string'));
        $optionsResolver->setAllowedTypes('with_additional_data', array('bool'));
        $optionsResolver->setNormalizer('with_additional_data', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\DigiComp\OpenproviderApi\Model\ContactListContactsResponse|\DigiComp\OpenproviderApi\Model\ErrorError
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\ContactListContactsResponse', 'json');
        }
        return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array('Bearer');
    }
}
