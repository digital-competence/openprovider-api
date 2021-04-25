<?php

namespace DigiComp\OpenproviderApi\Model;

class ContactClientIpList
{
    /**
     *
     *
     * @var string[]|null
     */
    protected $allow;
    /**
     *
     *
     * @var string[]|null
     */
    protected $deny;
    /**
     *
     *
     * @return string[]|null
     */
    public function getAllow(): ?array
    {
        return $this->allow;
    }
    /**
     *
     *
     * @param string[]|null $allow
     *
     * @return self
     */
    public function setAllow(?array $allow): self
    {
        $this->allow = $allow;
        return $this;
    }
    /**
     *
     *
     * @return string[]|null
     */
    public function getDeny(): ?array
    {
        return $this->deny;
    }
    /**
     *
     *
     * @param string[]|null $deny
     *
     * @return self
     */
    public function setDeny(?array $deny): self
    {
        $this->deny = $deny;
        return $this;
    }
}
