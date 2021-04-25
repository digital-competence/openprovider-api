<?php

namespace DigiComp\OpenproviderApi\Model;

class DomainOwner
{
    /**
     *
     *
     * @var string|null
     */
    protected $companyName;
    /**
     *
     *
     * @var string|null
     */
    protected $fullName;
    /**
     *
     *
     * @return string|null
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }
    /**
     *
     *
     * @param string|null $companyName
     *
     * @return self
     */
    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getFullName(): ?string
    {
        return $this->fullName;
    }
    /**
     *
     *
     * @param string|null $fullName
     *
     * @return self
     */
    public function setFullName(?string $fullName): self
    {
        $this->fullName = $fullName;
        return $this;
    }
}
