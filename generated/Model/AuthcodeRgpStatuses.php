<?php

namespace DigiComp\OpenproviderApi\Model;

class AuthcodeRgpStatuses
{
    /**
     *
     *
     * @var string|null
     */
    protected $addPeriod;
    /**
     *
     *
     * @var string|null
     */
    protected $autoRenewPeriod;
    /**
     *
     *
     * @return string|null
     */
    public function getAddPeriod(): ?string
    {
        return $this->addPeriod;
    }
    /**
     *
     *
     * @param string|null $addPeriod
     *
     * @return self
     */
    public function setAddPeriod(?string $addPeriod): self
    {
        $this->addPeriod = $addPeriod;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getAutoRenewPeriod(): ?string
    {
        return $this->autoRenewPeriod;
    }
    /**
     *
     *
     * @param string|null $autoRenewPeriod
     *
     * @return self
     */
    public function setAutoRenewPeriod(?string $autoRenewPeriod): self
    {
        $this->autoRenewPeriod = $autoRenewPeriod;
        return $this;
    }
}
