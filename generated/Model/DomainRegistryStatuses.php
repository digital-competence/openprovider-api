<?php

namespace DigiComp\OpenproviderApi\Model;

class DomainRegistryStatuses
{
    /**
     *
     *
     * @var DomainRegistryStatus|null
     */
    protected $clientHold;
    /**
     *
     *
     * @var DomainRegistryStatus|null
     */
    protected $clientTransferProhibited;
    /**
     *
     *
     * @return DomainRegistryStatus|null
     */
    public function getClientHold(): ?DomainRegistryStatus
    {
        return $this->clientHold;
    }
    /**
     *
     *
     * @param DomainRegistryStatus|null $clientHold
     *
     * @return self
     */
    public function setClientHold(?DomainRegistryStatus $clientHold): self
    {
        $this->clientHold = $clientHold;
        return $this;
    }
    /**
     *
     *
     * @return DomainRegistryStatus|null
     */
    public function getClientTransferProhibited(): ?DomainRegistryStatus
    {
        return $this->clientTransferProhibited;
    }
    /**
     *
     *
     * @param DomainRegistryStatus|null $clientTransferProhibited
     *
     * @return self
     */
    public function setClientTransferProhibited(?DomainRegistryStatus $clientTransferProhibited): self
    {
        $this->clientTransferProhibited = $clientTransferProhibited;
        return $this;
    }
}
