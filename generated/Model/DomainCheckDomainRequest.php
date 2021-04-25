<?php

namespace DigiComp\OpenproviderApi\Model;

class DomainCheckDomainRequest
{
    /**
     *
     *
     * @var DomainCheckAdditionalData|null
     */
    protected $additionalData;
    /**
     * When new gTLD is started it gets through several phases before it becomes available for registration to everybody (General availability or GA). There are several phases before GA when it is still possible to apply for a domain, but with some restrictions.
     *
     * @var string|null
     */
    protected $applicationMode;
    /**
     *
     *
     * @var DomainDomain[]|null
     */
    protected $domains;
    /**
     *
     *
     * @var bool|null
     */
    protected $withPrice;
    /**
     *
     *
     * @return DomainCheckAdditionalData|null
     */
    public function getAdditionalData(): ?DomainCheckAdditionalData
    {
        return $this->additionalData;
    }
    /**
     *
     *
     * @param DomainCheckAdditionalData|null $additionalData
     *
     * @return self
     */
    public function setAdditionalData(?DomainCheckAdditionalData $additionalData): self
    {
        $this->additionalData = $additionalData;
        return $this;
    }
    /**
     * When new gTLD is started it gets through several phases before it becomes available for registration to everybody (General availability or GA). There are several phases before GA when it is still possible to apply for a domain, but with some restrictions.
     *
     * @return string|null
     */
    public function getApplicationMode(): ?string
    {
        return $this->applicationMode;
    }
    /**
     * When new gTLD is started it gets through several phases before it becomes available for registration to everybody (General availability or GA). There are several phases before GA when it is still possible to apply for a domain, but with some restrictions.
     *
     * @param string|null $applicationMode
     *
     * @return self
     */
    public function setApplicationMode(?string $applicationMode): self
    {
        $this->applicationMode = $applicationMode;
        return $this;
    }
    /**
     *
     *
     * @return DomainDomain[]|null
     */
    public function getDomains(): ?array
    {
        return $this->domains;
    }
    /**
     *
     *
     * @param DomainDomain[]|null $domains
     *
     * @return self
     */
    public function setDomains(?array $domains): self
    {
        $this->domains = $domains;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getWithPrice(): ?bool
    {
        return $this->withPrice;
    }
    /**
     *
     *
     * @param bool|null $withPrice
     *
     * @return self
     */
    public function setWithPrice(?bool $withPrice): self
    {
        $this->withPrice = $withPrice;
        return $this;
    }
}
