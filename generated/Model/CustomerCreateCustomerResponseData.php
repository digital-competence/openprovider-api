<?php

namespace DigiComp\OpenproviderApi\Model;

class CustomerCreateCustomerResponseData
{
    /**
     *
     *
     * @var string|null
     */
    protected $handle;
    /**
     *
     *
     * @return string|null
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }
    /**
     *
     *
     * @param string|null $handle
     *
     * @return self
     */
    public function setHandle(?string $handle): self
    {
        $this->handle = $handle;
        return $this;
    }
}
