<?php

namespace DigiComp\OpenproviderApi\Model;

class NsGroupCreateGroupRequest
{
    /**
     *
     *
     * @var NsGroupNameServersSet[]|null
     */
    protected $nameServers;
    /**
     * Plain text name of the nameserver group, which can consist of several nameservers with attached IPs. Once created in Openprovider reseller account, nameserver group can be reused for operations with domains.
     *
     * @var string|null
     */
    protected $nsGroup;
    /**
     *
     *
     * @return NsGroupNameServersSet[]|null
     */
    public function getNameServers(): ?array
    {
        return $this->nameServers;
    }
    /**
     *
     *
     * @param NsGroupNameServersSet[]|null $nameServers
     *
     * @return self
     */
    public function setNameServers(?array $nameServers): self
    {
        $this->nameServers = $nameServers;
        return $this;
    }
    /**
     * Plain text name of the nameserver group, which can consist of several nameservers with attached IPs. Once created in Openprovider reseller account, nameserver group can be reused for operations with domains.
     *
     * @return string|null
     */
    public function getNsGroup(): ?string
    {
        return $this->nsGroup;
    }
    /**
     * Plain text name of the nameserver group, which can consist of several nameservers with attached IPs. Once created in Openprovider reseller account, nameserver group can be reused for operations with domains.
     *
     * @param string|null $nsGroup
     *
     * @return self
     */
    public function setNsGroup(?string $nsGroup): self
    {
        $this->nsGroup = $nsGroup;
        return $this;
    }
}
