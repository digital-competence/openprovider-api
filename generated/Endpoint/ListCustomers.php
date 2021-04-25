<?php

namespace DigiComp\OpenproviderApi\Endpoint;

class ListCustomers extends \DigiComp\OpenproviderApi\Runtime\Client\BaseEndpoint implements \DigiComp\OpenproviderApi\Runtime\Client\Endpoint
{
    /**
     *
     *
     * @param array $queryParameters {
     *     @var int $reseller_id Your reseller id is used by default. Other values not accepted.
     *     @var int $limit Output limit.
     *     @var int $offset Output offset.
     *     @var string $order Output ordering pattern. ASC / DESC.
     *     @var string $order_by Order output by field (i.e. first_name).
     *     @var string $email_pattern Full or partial email address. Wildcard (*) can be used.
     *     @var string $company_name_pattern Full or partial company name. Wildcard (*) can be used.
     *     @var string $last_name_pattern Full or partial last name. Wildcard (*) can be used.
     *     @var string $first_name_pattern Full or partial first name. Wildcard (*) can be used.
     *     @var string $comment_pattern Full or partial comment value. Wildcard (*) can be used.
     *     @var string $handle_pattern Full or partial handle name. Wildcard (*) can be used.
     *     @var string $pattern ull or partial first name or last name or company name or handle. Wildcard (*) can be used.
     *     @var bool $with_additional_data Retrieves objects with (1) or without (0) additional data.
     *     @var string $type Customer type: 'company' or 'individual'. If customer has not empty 'companyName' than type is 'company', otherwise 'individual'.
     *     @var array $columns Сolumns to retrieve. Possible values: 'firstName', 'prefix', 'initials', 'lastName', 'companyName', 'email', 'handle', 'id', 'fullName'.
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
        return '/v1beta/customers';
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
        $optionsResolver->setDefined(array('reseller_id', 'limit', 'offset', 'order', 'order_by', 'email_pattern', 'company_name_pattern', 'last_name_pattern', 'first_name_pattern', 'comment_pattern', 'handle_pattern', 'pattern', 'with_additional_data', 'type', 'columns'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('reseller_id', array('int'));
        $optionsResolver->setAllowedTypes('limit', array('int'));
        $optionsResolver->setAllowedTypes('offset', array('int'));
        $optionsResolver->setAllowedTypes('order', array('string'));
        $optionsResolver->setAllowedTypes('order_by', array('string'));
        $optionsResolver->setAllowedTypes('email_pattern', array('string'));
        $optionsResolver->setAllowedTypes('company_name_pattern', array('string'));
        $optionsResolver->setAllowedTypes('last_name_pattern', array('string'));
        $optionsResolver->setAllowedTypes('first_name_pattern', array('string'));
        $optionsResolver->setAllowedTypes('comment_pattern', array('string'));
        $optionsResolver->setAllowedTypes('handle_pattern', array('string'));
        $optionsResolver->setAllowedTypes('pattern', array('string'));
        $optionsResolver->setAllowedTypes('with_additional_data', array('bool'));
        $optionsResolver->setNormalizer('with_additional_data', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('type', array('string'));
        $optionsResolver->setAllowedTypes('columns', array('array'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\DigiComp\OpenproviderApi\Model\CustomerListCustomersResponse|\DigiComp\OpenproviderApi\Model\ErrorError
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\CustomerListCustomersResponse', 'json');
        }
        return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array('Bearer');
    }
}
