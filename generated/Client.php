<?php

namespace DigiComp\OpenproviderApi;

class Client extends \DigiComp\OpenproviderApi\Runtime\Client\Client
{
    /**
     *
     *
     * @param \DigiComp\OpenproviderApi\Model\AuthLoginRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\AuthLoginResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function login(\DigiComp\OpenproviderApi\Model\AuthLoginRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\Login($body), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\ContactListContactsResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listContacts(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\ListContacts($queryParameters), $fetch);
    }
    /**
     *
     *
     * @param \DigiComp\OpenproviderApi\Model\ContactCreateContactRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\ContactCreateContactResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createContact(\DigiComp\OpenproviderApi\Model\ContactCreateContactRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\CreateContact($body), $fetch);
    }
    /**
     *
     *
     * @param int $id Object ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\ContactDeleteContactResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteContact(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\DeleteContact($id), $fetch);
    }
    /**
     *
     *
     * @param int $id Object ID
     * @param array $queryParameters {
     *     @var bool $with_additional_data Retrieves objects with (1) or without (0) additional data.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\ContactGetContactResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getContact(int $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\GetContact($id, $queryParameters), $fetch);
    }
    /**
     *
     *
     * @param int $id Object ID
     * @param \DigiComp\OpenproviderApi\Model\ContactUpdateContactRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\ContactUpdateContactResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateContact(int $id, \DigiComp\OpenproviderApi\Model\ContactUpdateContactRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\UpdateContact($id, $body), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\CustomerListCustomersResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listCustomers(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\ListCustomers($queryParameters), $fetch);
    }
    /**
     *
     *
     * @param \DigiComp\OpenproviderApi\Model\CustomerCreateCustomerRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\CustomerCreateCustomerResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createCustomer(\DigiComp\OpenproviderApi\Model\CustomerCreateCustomerRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\CreateCustomer($body), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\EmailListDomainVerificationsResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listDomainEmailVerifications(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\ListDomainEmailVerifications($queryParameters), $fetch);
    }
    /**
     *
     *
     * @param \DigiComp\OpenproviderApi\Model\EmailRestartEmailVerificationRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\EmailRestartEmailVerificationResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function restartEmailVerification(\DigiComp\OpenproviderApi\Model\EmailRestartEmailVerificationRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\RestartEmailVerification($body), $fetch);
    }
    /**
     *
     *
     * @param \DigiComp\OpenproviderApi\Model\EmailStartEmailVerificationRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\EmailStartEmailVerificationResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function startEmailVerification(\DigiComp\OpenproviderApi\Model\EmailStartEmailVerificationRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\StartEmailVerification($body), $fetch);
    }
    /**
     *
     *
     * @param string $handle Customer unique identifier or handle, which can be created via CreateCustomer API method
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\CustomerDeleteCustomerResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteCustomer(string $handle, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\DeleteCustomer($handle), $fetch);
    }
    /**
     *
     *
     * @param string $handle Customer unique identifier or handle, which can be created via CreateCustomer API method
     * @param array $queryParameters {
     *     @var bool $with_additional_data Retrieves objects with (1) or without (0) additional data.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\CustomerGetCustomerResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getCustomer(string $handle, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\GetCustomer($handle, $queryParameters), $fetch);
    }
    /**
     *
     *
     * @param string $handle Customer unique identifier or handle, which can be created via CreateCustomer API method
     * @param \DigiComp\OpenproviderApi\Model\CustomerUpdateCustomerRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\CustomerUpdateCustomerResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateCustomer(string $handle, \DigiComp\OpenproviderApi\Model\CustomerUpdateCustomerRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\UpdateCustomer($handle, $body), $fetch);
    }
    /**
     *
     *
     * @param \DigiComp\OpenproviderApi\Model\DomainTokenCreateTokenRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\DomainTokenCreateTokenResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createToken(\DigiComp\OpenproviderApi\Model\DomainTokenCreateTokenRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\CreateToken($body), $fetch);
    }
    /**
     *
     *
     * @param array $queryParameters {
     *     @var string $name Nameserver name.
     *     @var string $ip Nameserver IP.
     *     @var string $ip6 Nameserver IPv6.
     *     @var string $pattern Nameserver name search pattern. Wildcatd (*) can be used.
     *     @var int $limit Limits the number of objects in the output.
     *     @var string $offset Used to retrieve all objects from a certain offset up to the limit.
     *     @var string $order Sorting type (asc/desc).
     *     @var string $order_by Field for sorting output. Possible values: id, name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\NameserverListNameserversResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listNameservers(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\ListNameservers($queryParameters), $fetch);
    }
    /**
     *
     *
     * @param \DigiComp\OpenproviderApi\Model\NameserverNameserver $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\NameserverCreateNameserverResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createNameserver(\DigiComp\OpenproviderApi\Model\NameserverNameserver $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\CreateNameserver($body), $fetch);
    }
    /**
     *
     *
     * @param array $queryParameters {
     *     @var int $limit Limits the number of objects in the output.
     *     @var int $offset Used to retrieve all objects from a certain offset up to the limit. (default value: 0).
     *     @var string $order_by.ns_group Sorting type (asc/desc).
     *     @var string $order_by.domain_count Sorting type (asc/desc).
     *     @var string $order_by.ns_count Sorting type (asc/desc).
     *     @var bool $with_domain_count Indicates if number of domains associated with the NS group should be returned.
     *     @var bool $with_ns_count Indicates if number of nameservers associated with the NS group should be returned.
     *     @var string $ns_group_pattern NS group name pattern. Wildcard (*) can be used.
     *     @var string $ns_name_pattern Nameserver name pattern. Wildcard (*) can be used.
     *     @var string $ns_ip_pattern Nameserver IP address pattern. Wildcard (*) can be used.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\NsGroupListGroupsResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listGroups(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\ListGroups($queryParameters), $fetch);
    }
    /**
     *
     *
     * @param \DigiComp\OpenproviderApi\Model\NsGroupCreateGroupRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\NsGroupCreateGroupResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createGroup(\DigiComp\OpenproviderApi\Model\NsGroupCreateGroupRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\CreateGroup($body), $fetch);
    }
    /**
     *
     *
     * @param string $nsGroup Plain text name of the nameserver group, which can consist of several nameservers with attached IPs. Once created in Openprovider reseller account, nameserver group can be reused for operations with domains.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\NsGroupGroupBoolResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteGroup(string $nsGroup, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\DeleteGroup($nsGroup), $fetch);
    }
    /**
     *
     *
     * @param string $nsGroup Plain text name of the nameserver group, which can consist of several nameservers with attached IPs. Once created in Openprovider reseller account, nameserver group can be reused for operations with domains.
     * @param array $queryParameters {
     *     @var int $id Nameserver group ID.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\NsGroupGetGroupResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getGroup(string $nsGroup, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\GetGroup($nsGroup, $queryParameters), $fetch);
    }
    /**
     *
     *
     * @param string $nsGroup Plain text name of the nameserver group, which can consist of several nameservers with attached IPs. Once created in Openprovider reseller account, nameserver group can be reused for operations with domains.
     * @param \DigiComp\OpenproviderApi\Model\NsGroupUpdateGroupRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\NsGroupGroupBoolResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateGroup(string $nsGroup, \DigiComp\OpenproviderApi\Model\NsGroupUpdateGroupRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\UpdateGroup($nsGroup, $body), $fetch);
    }
    /**
     *
     *
     * @param string $name Nameserver name
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\NameserverNameserverBoolResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteNameserver(string $name, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\DeleteNameserver($name), $fetch);
    }
    /**
     *
     *
     * @param string $name Nameserver name
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\NameserverGetNameserverResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getNameserver(string $name, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\GetNameserver($name), $fetch);
    }
    /**
     *
     *
     * @param string $name Nameserver name
     * @param \DigiComp\OpenproviderApi\Model\NameserverNameserver $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\NameserverNameserverBoolResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateNameserver(string $name, \DigiComp\OpenproviderApi\Model\NameserverNameserver $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\UpdateNameserver($name, $body), $fetch);
    }
    /**
     *
     *
     * @param array $queryParameters {
     *     @var int $limit Limits the number of objects in the output.
     *     @var string $offset Used to retrieve all objects from a certain offset up to the limit.
     *     @var string $order Sorting type (asc/desc).
     *     @var string $order_by Field for sorting output. Possible value: name.
     *     @var bool $with_records Indicates if DNS records should be retrieved.
     *     @var string $name_pattern Template name pattern. Wildcard (*)can be used.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\TemplateListTemplatesResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listTemplates(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\ListTemplates($queryParameters), $fetch);
    }
    /**
     *
     *
     * @param \DigiComp\OpenproviderApi\Model\TemplateCreateTemplateRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\TemplateCreateTemplateResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createTemplate(\DigiComp\OpenproviderApi\Model\TemplateCreateTemplateRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\CreateTemplate($body), $fetch);
    }
    /**
     *
     *
     * @param int $id Template ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\TemplateTemplateBoolResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTemplate(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\DeleteTemplate($id), $fetch);
    }
    /**
     *
     *
     * @param int $id Template ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\TemplateGetTemplateResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getTemplate(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\GetTemplate($id), $fetch);
    }
    /**
     *
     *
     * @param array $queryParameters {
     *     @var int $limit Limits the number of objects in the output. (default value: 100, maximum value: 500).
     *     @var int $offset Used to retrieve all objects from a certain offset up to the. (default value: 0).
     *     @var string $order_by.creation_date Sorting type (asc/desc).
     *     @var string $order_by.modification_date Sorting type (asc/desc).
     *     @var string $order_by.name Sorting type (asc/desc).
     *     @var string $type DNS zone type (master or slave).
     *     @var string $name_pattern DNS zone name pattern. Wildcard (*) can be used.
     *     @var bool $with_records Indicates, whether DNS records should be displayed in output.
     *     @var bool $with_history Indicates, whether DNS zone history should be displayed in output.
     *     @var bool $with_dnskey Indicates, whether DNSSEC keys should be displayed in output.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\ZoneListZonesResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listZones(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\ListZones($queryParameters), $fetch);
    }
    /**
     *
     *
     * @param \DigiComp\OpenproviderApi\Model\ZoneCreateZoneRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\ZoneZoneBoolResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createZone(\DigiComp\OpenproviderApi\Model\ZoneCreateZoneRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\CreateZone($body), $fetch);
    }
    /**
     *
     *
     * @param string $name Name of the domain to which DNS zone corresponds
     * @param array $queryParameters {
     *     @var int $id DNS zone ID.
     *     @var string $domain.name Domain name without extension.
     *     @var string $domain.extension Domain extension.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\ZoneZoneBoolResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteZone(string $name, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\DeleteZone($name, $queryParameters), $fetch);
    }
    /**
     *
     *
     * @param string $name Name of the domain to which DNS zone corresponds
     * @param array $queryParameters {
     *     @var string $id DNS zone ID.
     *     @var bool $with_records Indicates, whether DNS records should be displayed in output.
     *     @var bool $with_history Indicates, whether DNS zone history should be displayed in output.
     *     @var bool $with_dnskey Indicates, whether DNSSEC keys should be displayed in output.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\ZoneGetZoneResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getZone(string $name, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\GetZone($name, $queryParameters), $fetch);
    }
    /**
     *
     *
     * @param string $name Name of the domain to which DNS zone corresponds
     * @param \DigiComp\OpenproviderApi\Model\ZoneUpdateZoneRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\ZoneZoneBoolResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateZone(string $name, \DigiComp\OpenproviderApi\Model\ZoneUpdateZoneRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\UpdateZone($name, $body), $fetch);
    }
    /**
     *
     *
     * @param string $name DNS record name
     * @param array $queryParameters {
     *     @var int $zone_id DNS zone ID.
     *     @var int $limit How many records to retrieve (default: 100, max 500).
     *     @var int $offset From which record to retrieve (default: 0).
     *     @var string $order_by.type Sorting type (asc/desc).
     *     @var string $order_by.name Sorting type (asc/desc).
     *     @var string $order_by.value Sorting type (asc/desc).
     *     @var string $order_by.ttl Sorting type (asc/desc).
     *     @var string $order_by.prio Sorting type (asc/desc).
     *     @var string $record_name_pattern DNS record name pattern. Wildcard (*) can be used.
     *     @var string $value_pattern DNS record value pattern. Wildcard (*) can be used.
     *     @var string $type DNS record type.
     *     @var int $prio DNS record priority.
     *     @var int $ttl DNS record TTL.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\RecordListZoneRecordsResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listZoneRecords(string $name, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\ListZoneRecords($name, $queryParameters), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\DomainListDomainsResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listDomains(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\ListDomains($queryParameters), $fetch);
    }
    /**
     *
     *
     * @param \DigiComp\OpenproviderApi\Model\DomainCreateDomainRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\DomainCreateDomainResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createDomain(\DigiComp\OpenproviderApi\Model\DomainCreateDomainRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\CreateDomain($body), $fetch);
    }
    /**
     *
     *
     * @param array $queryParameters {
     *     @var string $domain.name Domain name without extension.
     *     @var string $domain.extension Domain extension.
     *     @var string $operation The operation.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\AdditionalDataGetAdditionalDataResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getAdditionalData(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\GetAdditionalData($queryParameters), $fetch);
    }
    /**
     *
     *
     * @param array $queryParameters {
     *     @var string $domain.name Domain name without extension.
     *     @var string $domain.extension Domain extension.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\CustomerGetDataResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getData(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\GetData($queryParameters), $fetch);
    }
    /**
     *
     *
     * @param \DigiComp\OpenproviderApi\Model\DomainCheckDomainRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\DomainCheckDomainResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function checkDomain(\DigiComp\OpenproviderApi\Model\DomainCheckDomainRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\CheckDomain($body), $fetch);
    }
    /**
    *
    *
    * @param array $queryParameters {
    *     @var string $domain.name Domain name without extension.
    *     @var string $domain.extension Domain extension.
    *     @var string $operation Domain operation.
    *     @var string $additional_data.idn_script The idn script states what language or character set the domain name is in
    Applicable to: .actor, .ae.org, .airforce, .army, .art, .attorney, .auction, .band, .bar, .best, .br.com, .ceo, .cn.com, .college, .com, .com.de, .com.se, .consulting, .dance, .de.com, .degree, .democrat, .dentist, .design, .engineer, .eu.com, .eus, .feedback, .fm, .forsale, .frl, .fun, .futbol, .gal, .gb.net, .gives, .gr.com, .haus, .hiv, .host, .immobilien, .in.net, .info, .ink, .jp.net, .jpn.com, .kaufen, .kyoto, .lawyer, .love, .market, .me, .mex.com, .moda, .mortgage, .navy, .net, .ninja, .nrw, .online, .ooo, .org, .press, .protection, .pub, .pw, .quebec, .radio.am, .radio.fm, .realty, .rehab, .rent, .republican, .rest, .reviews, .rip, .rocks, .ru.com, .sa.com, .scot, .se.net, .security, .site, .social, .software, .space, .store, .tech, .theatre, .tickets, .top, .uk.com, .uk.net, .us.com, .us.org, .vet, .website, .wiki, .xn--4gbrim, .xn--55qx5d, .xn--5tzm5g, .xn--80asehdb, .xn--80aswg, .xn--c1avg, .xn--czru2d, .xn--i1b6b1a6a2e, .xn--io0a7i, .xn--mk1bu44c, .xn--ngbc5azd, .xn--nqv7f, .xn--t60b56a, .xn--tckwe, .xyz, .za.com.
    *     @var int $period Operation period.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\DigiComp\OpenproviderApi\Model\PriceGetPriceResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
    */
    public function getPrice(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\GetPrice($queryParameters), $fetch);
    }
    /**
     *
     *
     * @param \DigiComp\OpenproviderApi\Model\DomainTradeDomainRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\DomainTradeDomainResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function tradeDomain(\DigiComp\OpenproviderApi\Model\DomainTradeDomainRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\TradeDomain($body), $fetch);
    }
    /**
     *
     *
     * @param \DigiComp\OpenproviderApi\Model\DomainTransferDomainRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\DomainTransferDomainResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function transferDomain(\DigiComp\OpenproviderApi\Model\DomainTransferDomainRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\TransferDomain($body), $fetch);
    }
    /**
     *
     *
     * @param int $id Domain id number
     * @param array $queryParameters {
     *     @var string $domain.name Domain name without extension.
     *     @var string $domain.extension Domain extension.
     *     @var string $type Type of deletion request.
     *     @var bool $skip_soft_quarantine Deletes domain, skipping the soft quarantine.
     *     @var bool $force_delete Force delete domain even if it has glue records.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\DomainDeleteDomainResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteDomain(int $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\DeleteDomain($id, $queryParameters), $fetch);
    }
    /**
     *
     *
     * @param int $id Domain id number
     * @param array $queryParameters {
     *     @var string $domain.name Domain name without extension.
     *     @var string $domain.extension Domain extension.
     *     @var bool $with_history Returns domain mutations history.
     *     @var bool $with_api_history Returns domain API calls history.
     *     @var bool $with_additional_data Returns domain additional data.
     *     @var bool $with_verification_email Returns information about domain owner email verification status.
     *     @var bool $with_abuse_details Returns domain abuse details.
     *     @var bool $with_whois_privacy_data Returns WPP data.
     *     @var bool $with_registry_statuses Indicates, if registry EPP statuses should be retrieved.
     *     @var bool $is_deleted Indicates whether object is deleted.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\DomainGetDomainResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getDomain(int $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\GetDomain($id, $queryParameters), $fetch);
    }
    /**
     *
     *
     * @param int $id Domain id number
     * @param \DigiComp\OpenproviderApi\Model\DomainUpdateDomainRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\DomainUpdateDomainResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateDomain(int $id, \DigiComp\OpenproviderApi\Model\DomainUpdateDomainRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\UpdateDomain($id, $body), $fetch);
    }
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
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\AuthcodeGetAuthCodeResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthCode(int $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\GetAuthCode($id, $queryParameters), $fetch);
    }
    /**
     *
     *
     * @param int $id Domain id number
     * @param \DigiComp\OpenproviderApi\Model\AuthcodeResetAuthCodeRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\AuthcodeResetAuthCodeResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function resetAuthCode(int $id, \DigiComp\OpenproviderApi\Model\AuthcodeResetAuthCodeRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\ResetAuthCode($id, $body), $fetch);
    }
    /**
     *
     *
     * @param int $id Domain id number
     * @param \DigiComp\OpenproviderApi\Model\DomainTryAgainLastOperationRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\ResponseBoolResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function tryAgainLastOperation(int $id, \DigiComp\OpenproviderApi\Model\DomainTryAgainLastOperationRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\TryAgainLastOperation($id, $body), $fetch);
    }
    /**
     *
     *
     * @param int $id Domain id number
     * @param \DigiComp\OpenproviderApi\Model\DomainRenewDomainRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\DomainRenewDomainResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function renewDomain(int $id, \DigiComp\OpenproviderApi\Model\DomainRenewDomainRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\RenewDomain($id, $body), $fetch);
    }
    /**
     *
     *
     * @param int $id Domain id number
     * @param \DigiComp\OpenproviderApi\Model\DomainRestoreDomainRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\DomainRestoreDomainResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function restoreDomain(int $id, \DigiComp\OpenproviderApi\Model\DomainRestoreDomainRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\RestoreDomain($id, $body), $fetch);
    }
    /**
     *
     *
     * @param int $id Domain id number
     * @param \DigiComp\OpenproviderApi\Model\DomainApproveTransferRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\ResponseBoolResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function approveTransfer(int $id, \DigiComp\OpenproviderApi\Model\DomainApproveTransferRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\ApproveTransfer($id, $body), $fetch);
    }
    /**
     *
     *
     * @param int $id Domain id number
     * @param \DigiComp\OpenproviderApi\Model\DomainSendFoa1Request $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\ResponseBoolResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function sendFoa1(int $id, \DigiComp\OpenproviderApi\Model\DomainSendFoa1Request $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\SendFoa1($id, $body), $fetch);
    }
    /**
     *
     *
     * @param array $queryParameters {
     *     @var int $id Object ID.
     *     @var string $name Template name.
     *     @var string $group Email template type. There are several types of ICANN emails that can be customized in Openprovider: -errp (Expired Registration Recovery policy emails) -foa (Form of Authorization emails for domain transfers approval rejection) -ive (Information verification emails, such emails used to verify email address of the customer) -tcn (Trademark Claims Notification emails) -wdrp (Whois Data Reminder Policy emails).
     *     @var int $limit Output limit.
     *     @var int $offset Output offset.
     *     @var bool $is_system Is system.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\EmailListEmailsResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listEmails(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\ListEmails($queryParameters), $fetch);
    }
    /**
     *
     *
     * @param \DigiComp\OpenproviderApi\Model\EmailCreateEmailRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\EmailCreateEmailResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createEmail(\DigiComp\OpenproviderApi\Model\EmailCreateEmailRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\CreateEmail($body), $fetch);
    }
    /**
     *
     *
     * @param int $id Object ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\EmailDeleteEmailResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteEmail(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\DeleteEmail($id), $fetch);
    }
    /**
     *
     *
     * @param int $id Object ID
     * @param \DigiComp\OpenproviderApi\Model\EmailUpdateEmailRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\EmailUpdateEmailResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateEmail(int $id, \DigiComp\OpenproviderApi\Model\EmailUpdateEmailRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\UpdateEmail($id, $body), $fetch);
    }
    /**
     *
     *
     * @param array $queryParameters {
     *     @var int $limit The limit.
     *     @var int $offset The offset.
     *     @var string $order The order.
     *     @var string $order_by The order by.
     *     @var string $start_creation_date The start creation date.
     *     @var string $end_creation_date The end creation date.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\InvoiceListInvoicesResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listInvoices(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\ListInvoices($queryParameters), $fetch);
    }
    /**
     *
     *
     * @param array $queryParameters {
     *     @var int $limit Output limit.
     *     @var int $offset Output offset.
     *     @var string $order_by.id Object ID.
     *     @var string $order_by.key_id License key ID.
     *     @var string $order_by.title Custom license title.
     *     @var string $order_by.product Product type (Plesk or Virtuozzo).
     *     @var string $order_by.status License status.
     *     @var string $order_by.key_number License key number.
     *     @var string $order_by.expiration_date License expiration date.
     *     @var string $product Product type (Plesk or Virtuozzo).
     *     @var string $key_number License key number.
     *     @var string $title_pattern Custom title pattern. Wildcard (*) can be sued.
     *     @var string $key_number_pattern License key number pattern. Wildcard (*) can be used.
     *     @var int $parent_key_id Key ID of the partent license.
     *     @var string $status License status.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\LicenseListLicensesWithPriceVersionResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listLicensesWithPriceVersion(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\ListLicensesWithPriceVersion($queryParameters), $fetch);
    }
    /**
     *
     *
     * @param string $product Product type (Plesk or Virtuozzo)
     * @param int $keyId License key ID
     * @param \DigiComp\OpenproviderApi\Model\LicenseResetHwidRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\LicenseResetHwidResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function resetHwid(string $product, int $keyId, \DigiComp\OpenproviderApi\Model\LicenseResetHwidRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\ResetHwid($product, $keyId, $body), $fetch);
    }
    /**
     *
     *
     * @param array $queryParameters {
     *     @var int $limit Output limit.
     *     @var int $offset Output offset.
     *     @var string $order_by.id Object ID.
     *     @var string $order_by.key_id License key ID.
     *     @var string $order_by.title Custom license title.
     *     @var string $order_by.product Product type (Plesk or Virtuozzo).
     *     @var string $order_by.status License status.
     *     @var string $order_by.key_number License key number.
     *     @var string $order_by.expiration_date License expiration date.
     *     @var string $product Product type (Plesk or Virtuozzo).
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\LicenseListItemsResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listItems(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\ListItems($queryParameters), $fetch);
    }
    /**
     *
     *
     * @param array $queryParameters {
     *     @var int $limit Output limit.
     *     @var int $offset Output offset.
     *     @var int $key_id License key ID.
     *     @var string $key_number License key number.
     *     @var string $title_pattern Custom title pattern. Wildcard (*) can be used.
     *     @var string $key_number_pattern License key number pattern. Wildcard (*) can be used.
     *     @var int $parent_key_id Key ID of the partent license.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\LicenseListLicensesResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listPleskLicenses(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\ListPleskLicenses($queryParameters), $fetch);
    }
    /**
     *
     *
     * @param \DigiComp\OpenproviderApi\Model\LicenseCreatePleskLicenseRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\LicenseCreatePleskLicenseResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createPleskLicense(\DigiComp\OpenproviderApi\Model\LicenseCreatePleskLicenseRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\CreatePleskLicense($body), $fetch);
    }
    /**
     *
     *
     * @param int $keyId License key ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\LicenseGetLicenseKeyResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getPleskKey(int $keyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\GetPleskKey($keyId), $fetch);
    }
    /**
     *
     *
     * @param int $keyId License key ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\LicenseDeleteLicenseResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deletePleskLicense(int $keyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\DeletePleskLicense($keyId), $fetch);
    }
    /**
     *
     *
     * @param int $keyId License key ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\LicenseGetLicenseResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getPleskLicense(int $keyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\GetPleskLicense($keyId), $fetch);
    }
    /**
     *
     *
     * @param int $keyId License key ID
     * @param \DigiComp\OpenproviderApi\Model\LicenseUpdatePleskLicenseRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\LicenseUpdateLicenseResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updatePleskLicense(int $keyId, \DigiComp\OpenproviderApi\Model\LicenseUpdatePleskLicenseRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\UpdatePleskLicense($keyId, $body), $fetch);
    }
    /**
     *
     *
     * @param array $queryParameters {
     *     @var int $limit Output limit.
     *     @var int $offset Output offset.
     *     @var int $key_id License key ID.
     *     @var string $key_number License key number.
     *     @var string $title_pattern Custom title pattern. Wildcard (*) can be used.
     *     @var string $key_number_pattern License key number pattern. Wildcard (*) can be used.
     *     @var int $parent_key_id Key ID of the partent license.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\LicenseListLicensesResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listVirtuozzoLicenses(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\ListVirtuozzoLicenses($queryParameters), $fetch);
    }
    /**
     *
     *
     * @param \DigiComp\OpenproviderApi\Model\LicenseCreateVirtuozzoLicenseRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\LicenseCreateVirtuozzoLicenseResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createVirtuozzoLicense(\DigiComp\OpenproviderApi\Model\LicenseCreateVirtuozzoLicenseRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\CreateVirtuozzoLicense($body), $fetch);
    }
    /**
     *
     *
     * @param int $keyId License key ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\LicenseDeleteLicenseResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteVirtuozzoLicense(int $keyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\DeleteVirtuozzoLicense($keyId), $fetch);
    }
    /**
     *
     *
     * @param int $keyId License key ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\LicenseGetLicenseResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getVirtuozzoLicense(int $keyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\GetVirtuozzoLicense($keyId), $fetch);
    }
    /**
     *
     *
     * @param int $keyId License key ID
     * @param \DigiComp\OpenproviderApi\Model\LicenseUpdateVirtuozzoLicenseRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\LicenseUpdateLicenseResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateVirtuozzoLicense(int $keyId, \DigiComp\OpenproviderApi\Model\LicenseUpdateVirtuozzoLicenseRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\UpdateVirtuozzoLicense($keyId, $body), $fetch);
    }
    /**
     *
     *
     * @param int $keyId License key ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\LicenseGetLicenseKeyResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getVirtuozzoKey(int $keyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\GetVirtuozzoKey($keyId), $fetch);
    }
    /**
     *
     *
     * @param array $queryParameters {
     *     @var int $limit The limit.
     *     @var int $offset The offset.
     *     @var string $order The order.
     *     @var string $order_by The order by.
     *     @var string $type The type.
     *     @var string $status The status.
     *     @var string $start_creation_date The start creation date.
     *     @var string $end_creation_date The end creation date.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\PaymentListPaymentsResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listPayments(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\ListPayments($queryParameters), $fetch);
    }
    /**
     *
     *
     * @param array $queryParameters {
     *     @var bool $with_additional_data Retrieves objects with (1) or without (0) additional data.
     *     @var bool $with_statistics Indicates if reseller statistics should be retrieved.
     *     @var bool $with_settings Indicates if reseller settings should be retrieved.
     *     @var bool $with_contacts Indicates if reseller contacts should be retrieved.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\ResellerGetResellerResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getReseller(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\GetReseller($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\SettingsGetSettingsResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getSettings(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\GetSettings(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\StatisticsGetStatisticsResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getStatistics(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\GetStatistics(), $fetch);
    }
    /**
     *
     *
     * @param int $id Object ID
     * @param \DigiComp\OpenproviderApi\Model\ResellerUpdateResellerRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\ResellerUpdateResellerResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateReseller(int $id, \DigiComp\OpenproviderApi\Model\ResellerUpdateResellerRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\UpdateReseller($id, $body), $fetch);
    }
    /**
     *
     *
     * @param \DigiComp\OpenproviderApi\Model\SeDomainCreateDomainRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\ResponseBoolResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createDomainMixin7(\DigiComp\OpenproviderApi\Model\SeDomainCreateDomainRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\CreateDomainMixin7($body), $fetch);
    }
    /**
     *
     *
     * @param string $domainName Domain full name
     * @param array $queryParameters {
     *     @var bool $bundle Indicates if old subscriptions backward compatibility is used.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\ResponseBoolResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteDomainMixin7(string $domainName, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\DeleteDomainMixin7($domainName, $queryParameters), $fetch);
    }
    /**
     *
     *
     * @param string $domainName Domain full name
     * @param array $queryParameters {
     *     @var bool $with_records Indicates, whether records should be displayed in output.
     *     @var bool $bundle Indicates if old subscriptions backward compatibility is used.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\SeDomainGetDomainResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getDomainMixin7(string $domainName, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\GetDomainMixin7($domainName, $queryParameters), $fetch);
    }
    /**
     *
     *
     * @param string $domainName Domain full name
     * @param \DigiComp\OpenproviderApi\Model\SeDomainUpdateDomainRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\ResponseBoolResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateDomainMixin7(string $domainName, \DigiComp\OpenproviderApi\Model\SeDomainUpdateDomainRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\UpdateDomainMixin7($domainName, $body), $fetch);
    }
    /**
     *
     *
     * @param \DigiComp\OpenproviderApi\Model\SpamExpertGenerateLoginURLRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\SpamExpertGenerateLoginURLResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function generateLoginURL(\DigiComp\OpenproviderApi\Model\SpamExpertGenerateLoginURLRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\GenerateLoginURL($body), $fetch);
    }
    /**
     *
     *
     * @param array $queryParameters {
     *     @var int $product_id ID of product order will be created for.
     *     @var string $domain Domain name.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\ApproveremailListApproverEmailsResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listApproverEmails(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\ListApproverEmails($queryParameters), $fetch);
    }
    /**
     *
     *
     * @param \DigiComp\OpenproviderApi\Model\CsrCreateCsrRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\CsrCreateCsrResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createCsr(\DigiComp\OpenproviderApi\Model\CsrCreateCsrRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\CreateCsr($body), $fetch);
    }
    /**
     *
     *
     * @param \DigiComp\OpenproviderApi\Model\CsrDecodeCsrRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\CsrDecodeCsrResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function decodeCsr(\DigiComp\OpenproviderApi\Model\CsrDecodeCsrRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\DecodeCsr($body), $fetch);
    }
    /**
     *
     *
     * @param array $queryParameters {
     *     @var int $limit Search query limit.
     *     @var int $offset Search query offset.
     *     @var string $order_by.common_name desc/asc.
     *     @var string $order_by.order_date desc/asc.
     *     @var string $order_by.active_date desc/asc.
     *     @var string $order_by.expiration_date desc/asc.
     *     @var string $order_by.status desc/asc.
     *     @var string $order_by.product_name desc/asc.
     *     @var string $common_name_pattern Certificate common name pattern. Wildcard (*) can be used.
     *     @var array $status Array of order statuses.
     *     @var string $contact_handle Contact handle.
     *     @var bool $show_expiring Indicates, whether to return only certificates that are expiring within 30 days.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\OrderListOrdersResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listOrders(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\ListOrders($queryParameters), $fetch);
    }
    /**
     *
     *
     * @param \DigiComp\OpenproviderApi\Model\OrderCreateOrderRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\OrderCreateOrderResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createOrder(\DigiComp\OpenproviderApi\Model\OrderCreateOrderRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\CreateOrder($body), $fetch);
    }
    /**
     *
     *
     * @param int $id Object id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\OrderGetOrderResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getOrder(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\GetOrder($id), $fetch);
    }
    /**
     *
     *
     * @param int $id Object id
     * @param \DigiComp\OpenproviderApi\Model\OrderUpdateOrderRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\OrderUpdateOrderResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateOrder(int $id, \DigiComp\OpenproviderApi\Model\OrderUpdateOrderRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\UpdateOrder($id, $body), $fetch);
    }
    /**
     *
     *
     * @param int $id Object id
     * @param \DigiComp\OpenproviderApi\Model\ApproveremailUpdateApproverEmailAddressRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\ApproveremailUpdateApproverEmailAddressResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function updateApproverEmailAddress(int $id, \DigiComp\OpenproviderApi\Model\ApproveremailUpdateApproverEmailAddressRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\UpdateApproverEmailAddress($id, $body), $fetch);
    }
    /**
     *
     *
     * @param int $id Object id
     * @param \DigiComp\OpenproviderApi\Model\ApproveremailResendApproverEmailRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\ApproveremailResendApproverEmailResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function resendApproverEmail(int $id, \DigiComp\OpenproviderApi\Model\ApproveremailResendApproverEmailRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\ResendApproverEmail($id, $body), $fetch);
    }
    /**
     *
     *
     * @param int $id Object id
     * @param \DigiComp\OpenproviderApi\Model\OrderCancelOrderRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\OrderCancelOrderResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function cancelOrder(int $id, \DigiComp\OpenproviderApi\Model\OrderCancelOrderRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\CancelOrder($id, $body), $fetch);
    }
    /**
     *
     *
     * @param int $id Object id
     * @param \DigiComp\OpenproviderApi\Model\OtptokenCreateOtpTokenRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\OtptokenCreateOtpTokenResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createOtpToken(int $id, \DigiComp\OpenproviderApi\Model\OtptokenCreateOtpTokenRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\CreateOtpToken($id, $body), $fetch);
    }
    /**
     *
     *
     * @param int $id Object id
     * @param \DigiComp\OpenproviderApi\Model\OrderReissueOrderRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\OrderReissueOrderResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function reissueOrder(int $id, \DigiComp\OpenproviderApi\Model\OrderReissueOrderRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\ReissueOrder($id, $body), $fetch);
    }
    /**
     *
     *
     * @param int $id Object id
     * @param \DigiComp\OpenproviderApi\Model\OrderRenewOrderRequest $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\OrderRenewOrderResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function renewOrder(int $id, \DigiComp\OpenproviderApi\Model\OrderRenewOrderRequest $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\RenewOrder($id, $body), $fetch);
    }
    /**
     *
     *
     * @param array $queryParameters {
     *     @var int $limit Search query limit.
     *     @var int $offset Search query offset.
     *     @var bool $with_price Returns product price in the response.
     *     @var bool $with_supported_software Returns a list of supported software patforms.
     *     @var bool $with_description Returns a description for each product, if exists.
     *     @var string $order_by.name Sorting type (asc/desc).
     *     @var string $order_by.brand_name Sorting type (asc/desc).
     *     @var string $order_by.category Sorting type (asc/desc).
     *     @var string $order_by.sub_category Sorting type (asc/desc).
     *     @var string $order_by.brand_seqno Sorting type (asc/desc).
     *     @var string $order_by.product_seqno Sorting type (asc/desc).
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\ProductListProductsResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listProducts(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\ListProducts($queryParameters), $fetch);
    }
    /**
     *
     *
     * @param int $id Object id
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\ProductGetProductResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getProduct(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\GetProduct($id), $fetch);
    }
    /**
     *
     *
     * @param array $queryParameters {
     *     @var string $key The key of the tag. Allowed values: 'customer'.
     *     @var string $value The value of the tag. I.e.: VIP customer.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\TagDeleteTagResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteTag(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\DeleteTag($queryParameters), $fetch);
    }
    /**
     *
     *
     * @param array $queryParameters {
     *     @var string $key The key of the tag. Allowed values: 'customer'.
     *     @var string $value The value of the tag. I.e.: VIP customer.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\TagListTagsResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listTags(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\ListTags($queryParameters), $fetch);
    }
    /**
     *
     *
     * @param \DigiComp\OpenproviderApi\Model\HelperstagTag $body
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\TagCreateTagResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function createTag(\DigiComp\OpenproviderApi\Model\HelperstagTag $body, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\CreateTag($body), $fetch);
    }
    /**
     *
     *
     * @param array $queryParameters {
     *     @var int $limit Search query limit.
     *     @var int $offset Search query offset.
     *     @var string $order Sorts output ASC or DESC.
     *     @var string $order_by Sorts output by a field.
     *     @var array $extensions Array of extensions.
     *     @var string $name_pattern Extension name pattern. Wildcard (*) can be used.
     *     @var bool $only_names Returns only extension names in the output.
     *     @var bool $with_description Returns additional extension description.
     *     @var bool $with_restrictions Returns list of extension restrictions.
     *     @var bool $with_usage_count Returns number of domains using specified extension in this account.
     *     @var array $with_application_mode Array of extension application modes.
     *     @var bool $with_price Returns extension prices.
     *     @var bool $with_level_prices Returns extension prices for each Openprovider discount tier.
     *     @var bool $is_active Indicates, if extension is active.
     *     @var bool $is_new_gtld Indicates, if extension is a newGTLD.
     *     @var string $status Extension status.
     *     @var string $application_mode Pre-registration mode.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\TldListTldsResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listTlds(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\ListTlds($queryParameters), $fetch);
    }
    /**
     *
     *
     * @param string $name Extension name
     * @param array $queryParameters {
     *     @var int $limit Search query limit.
     *     @var int $offset Search query offset.
     *     @var bool $with_description Returns additional extension description.
     *     @var bool $with_restrictions Returns list of extension restrictions.
     *     @var bool $with_price Returns extension prices.
     *     @var bool $with_level_prices Returns extension prices for each Openprovider discount tier.
     *     @var bool $with_usage_count Returns number of domains using specified extension in this account.
     *     @var array $status Extension status.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\TldGetTldResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function getTld(string $name, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\GetTld($name, $queryParameters), $fetch);
    }
    /**
     *
     *
     * @param array $queryParameters {
     *     @var int $limit The limit.
     *     @var int $offset The offset.
     *     @var string $order The order.
     *     @var string $order_by The order by.
     *     @var string $start_creation_date The start creation date.
     *     @var string $end_creation_date The end creation date.
     *     @var string $filter_for_subject The filter for subject.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\DigiComp\OpenproviderApi\Model\TransactionListTransactionsResponse|\DigiComp\OpenproviderApi\Model\ErrorError|\Psr\Http\Message\ResponseInterface
     */
    public function listTransactions(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \DigiComp\OpenproviderApi\Endpoint\ListTransactions($queryParameters), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.openprovider.eu');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \DigiComp\OpenproviderApi\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
