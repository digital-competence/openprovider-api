<?php

namespace DigiComp\OpenproviderApi\Model;

class SeDomainRecords
{
    /**
     *
     *
     * @var string[]|null
     */
    protected $aliases;
    /**
     *
     *
     * @var SeDomainDestination[]|null
     */
    protected $destinations;
    /**
     *
     *
     * @var string[]|null
     */
    protected $outgoingUserIps;
    /**
     *
     *
     * @return string[]|null
     */
    public function getAliases(): ?array
    {
        return $this->aliases;
    }
    /**
     *
     *
     * @param string[]|null $aliases
     *
     * @return self
     */
    public function setAliases(?array $aliases): self
    {
        $this->aliases = $aliases;
        return $this;
    }
    /**
     *
     *
     * @return SeDomainDestination[]|null
     */
    public function getDestinations(): ?array
    {
        return $this->destinations;
    }
    /**
     *
     *
     * @param SeDomainDestination[]|null $destinations
     *
     * @return self
     */
    public function setDestinations(?array $destinations): self
    {
        $this->destinations = $destinations;
        return $this;
    }
    /**
     *
     *
     * @return string[]|null
     */
    public function getOutgoingUserIps(): ?array
    {
        return $this->outgoingUserIps;
    }
    /**
     *
     *
     * @param string[]|null $outgoingUserIps
     *
     * @return self
     */
    public function setOutgoingUserIps(?array $outgoingUserIps): self
    {
        $this->outgoingUserIps = $outgoingUserIps;
        return $this;
    }
}
