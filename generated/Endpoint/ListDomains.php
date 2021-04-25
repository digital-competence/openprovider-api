<?php

namespace DigiComp\OpenproviderApi\Endpoint;

class ListDomains extends \DigiComp\OpenproviderApi\Runtime\Client\BaseEndpoint implements \DigiComp\OpenproviderApi\Runtime\Client\Endpoint
{
    /**
     *
     *
     * @param array $queryParameters {
     *     @var string $order_by.id Domain id number.
     *     @var string $order_by.domain_name The domain name.
     *     @var string $order_by.domain_extension Domain extension.
     *     @var string $order_by.order_date The order date.
     *     @var string $order_by.active_date The active date.
     *     @var string $order_by.expiration_date Domain expiration date.
     *     @var string $order_by.renewal_date Date on which domain will be renewed.
     *     @var string $order_by.status Domain status.
     *     @var string $order_by.transfer_date The transfer date.
     *     @var int $limit The limit.
     *     @var int $offset The offset.
     *     @var int $id Domain id number.
     *     @var string $extension Domain extension.
     *     @var string $renewal_date Date on which domain will be renewed.
     *     @var string $full_name Full name of the domain.
     *     @var string $domain_name_pattern The domain name pattern.
     *     @var string $ns_group_pattern Nameserver group name pattern.
     *     @var string $status Domain status.
     *     @var array $status_not_equal Array of domain statuses to exclude.
     *     @var string $queue_status The queue status.
     *     @var string $contact_handle Handle to filter by.
     *     @var string $comment_pattern The comment pattern.
     *     @var bool $with_history With history.
     *     @var bool $with_api_history With api history.
     *     @var bool $with_additional_data With additional data.
     *     @var string $application_mode When new gTLD is started it gets through several phases before it becomes available for registration to everybody (General availability or GA). There are several phases before GA when it is still possible to apply for a domain, but with some restrictions.
     *     @var bool $with_verification_email Returns information about domain owner email verification status.
     *     @var bool $with_registry_statuses Indicates, if registry EPP statuses should be retrieved.
     *     @var string $response.type The type.
     *     @var string $response.to The to.
     *     @var bool $is_deleted Indicates whether object is deleted.
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
        return '/v1beta/domains';
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
        $optionsResolver->setDefined(array('order_by.id', 'order_by.domain_name', 'order_by.domain_extension', 'order_by.order_date', 'order_by.active_date', 'order_by.expiration_date', 'order_by.renewal_date', 'order_by.status', 'order_by.transfer_date', 'limit', 'offset', 'id', 'extension', 'renewal_date', 'full_name', 'domain_name_pattern', 'ns_group_pattern', 'status', 'status_not_equal', 'queue_status', 'contact_handle', 'comment_pattern', 'with_history', 'with_api_history', 'with_additional_data', 'application_mode', 'with_verification_email', 'with_registry_statuses', 'response.type', 'response.to', 'is_deleted'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('order_by.id', array('string'));
        $optionsResolver->setAllowedTypes('order_by.domain_name', array('string'));
        $optionsResolver->setAllowedTypes('order_by.domain_extension', array('string'));
        $optionsResolver->setAllowedTypes('order_by.order_date', array('string'));
        $optionsResolver->setAllowedTypes('order_by.active_date', array('string'));
        $optionsResolver->setAllowedTypes('order_by.expiration_date', array('string'));
        $optionsResolver->setAllowedTypes('order_by.renewal_date', array('string'));
        $optionsResolver->setAllowedTypes('order_by.status', array('string'));
        $optionsResolver->setAllowedTypes('order_by.transfer_date', array('string'));
        $optionsResolver->setAllowedTypes('limit', array('int'));
        $optionsResolver->setAllowedTypes('offset', array('int'));
        $optionsResolver->setAllowedTypes('id', array('int'));
        $optionsResolver->setAllowedTypes('extension', array('string'));
        $optionsResolver->setAllowedTypes('renewal_date', array('string'));
        $optionsResolver->setAllowedTypes('full_name', array('string'));
        $optionsResolver->setAllowedTypes('domain_name_pattern', array('string'));
        $optionsResolver->setAllowedTypes('ns_group_pattern', array('string'));
        $optionsResolver->setAllowedTypes('status', array('string'));
        $optionsResolver->setAllowedTypes('status_not_equal', array('array'));
        $optionsResolver->setAllowedTypes('queue_status', array('string'));
        $optionsResolver->setAllowedTypes('contact_handle', array('string'));
        $optionsResolver->setAllowedTypes('comment_pattern', array('string'));
        $optionsResolver->setAllowedTypes('with_history', array('bool'));
        $optionsResolver->setNormalizer('with_history', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('with_api_history', array('bool'));
        $optionsResolver->setNormalizer('with_api_history', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('with_additional_data', array('bool'));
        $optionsResolver->setNormalizer('with_additional_data', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('application_mode', array('string'));
        $optionsResolver->setAllowedTypes('with_verification_email', array('bool'));
        $optionsResolver->setNormalizer('with_verification_email', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('with_registry_statuses', array('bool'));
        $optionsResolver->setNormalizer('with_registry_statuses', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        $optionsResolver->setAllowedTypes('response.type', array('string'));
        $optionsResolver->setAllowedTypes('response.to', array('string'));
        $optionsResolver->setAllowedTypes('is_deleted', array('bool'));
        $optionsResolver->setNormalizer('is_deleted', \Closure::fromCallable(array(new \DigiComp\OpenproviderApi\Runtime\Client\BoolQueryResolver(), '__invoke')));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\DigiComp\OpenproviderApi\Model\DomainListDomainsResponse|\DigiComp\OpenproviderApi\Model\ErrorError
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\DomainListDomainsResponse', 'json');
        }
        return $serializer->deserialize($body, 'DigiComp\\OpenproviderApi\\Model\\ErrorError', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array('Bearer');
    }
}
