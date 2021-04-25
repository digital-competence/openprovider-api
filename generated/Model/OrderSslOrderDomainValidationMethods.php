<?php

namespace DigiComp\OpenproviderApi\Model;

class OrderSslOrderDomainValidationMethods
{
    /**
     *
     *
     * @var string|null
     */
    protected $hostName;
    /**
     *
     *
     * @var string|null
     */
    protected $method;
    /**
     *
     *
     * @return string|null
     */
    public function getHostName(): ?string
    {
        return $this->hostName;
    }
    /**
     *
     *
     * @param string|null $hostName
     *
     * @return self
     */
    public function setHostName(?string $hostName): self
    {
        $this->hostName = $hostName;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }
    /**
     *
     *
     * @param string|null $method
     *
     * @return self
     */
    public function setMethod(?string $method): self
    {
        $this->method = $method;
        return $this;
    }
}
