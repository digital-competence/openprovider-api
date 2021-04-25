<?php

namespace DigiComp\OpenproviderApi\Model;

class SpamExpertGenerateLoginURLRequest
{
    /**
     * If you use the new, individually purchased, filters then set this to false. If you use the old bundled variant, then set this to true.
     *
     * @var bool|null
     */
    protected $bundle;
    /**
     *
     *
     * @var string|null
     */
    protected $domainOrEmail;
    /**
     * If you use the new, individually purchased, filters then set this to false. If you use the old bundled variant, then set this to true.
     *
     * @return bool|null
     */
    public function getBundle(): ?bool
    {
        return $this->bundle;
    }
    /**
     * If you use the new, individually purchased, filters then set this to false. If you use the old bundled variant, then set this to true.
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
     * @return string|null
     */
    public function getDomainOrEmail(): ?string
    {
        return $this->domainOrEmail;
    }
    /**
     *
     *
     * @param string|null $domainOrEmail
     *
     * @return self
     */
    public function setDomainOrEmail(?string $domainOrEmail): self
    {
        $this->domainOrEmail = $domainOrEmail;
        return $this;
    }
}
