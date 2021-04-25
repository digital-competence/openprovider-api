<?php

namespace DigiComp\OpenproviderApi\Model;

class SeDomainUpdateDomainRequest
{
    /**
     *
     *
     * @var SeDomainAliasUpdates|null
     */
    protected $aliases;
    /**
     *
     *
     * @var bool|null
     */
    protected $bundle;
    /**
     *
     *
     * @var SeDomainDestination[]|null
     */
    protected $destinations;
    /**
     *
     *
     * @var string|null
     */
    protected $domainName;
    /**
     *
     *
     * @var SeDomainProducts|null
     */
    protected $products;
    /**
     *
     *
     * @return SeDomainAliasUpdates|null
     */
    public function getAliases(): ?SeDomainAliasUpdates
    {
        return $this->aliases;
    }
    /**
     *
     *
     * @param SeDomainAliasUpdates|null $aliases
     *
     * @return self
     */
    public function setAliases(?SeDomainAliasUpdates $aliases): self
    {
        $this->aliases = $aliases;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getBundle(): ?bool
    {
        return $this->bundle;
    }
    /**
     *
     *
     * @param bool|null $bundle
     *
     * @return self
     */
    public function setBundle(?bool $bundle): self
    {
        $this->bundle = $bundle;
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
     * @return string|null
     */
    public function getDomainName(): ?string
    {
        return $this->domainName;
    }
    /**
     *
     *
     * @param string|null $domainName
     *
     * @return self
     */
    public function setDomainName(?string $domainName): self
    {
        $this->domainName = $domainName;
        return $this;
    }
    /**
     *
     *
     * @return SeDomainProducts|null
     */
    public function getProducts(): ?SeDomainProducts
    {
        return $this->products;
    }
    /**
     *
     *
     * @param SeDomainProducts|null $products
     *
     * @return self
     */
    public function setProducts(?SeDomainProducts $products): self
    {
        $this->products = $products;
        return $this;
    }
}
