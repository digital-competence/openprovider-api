<?php

namespace DigiComp\OpenproviderApi\Model;

class DomainDeleteDomainResponseData
{
    /**
     *
     *
     * @var string|null
     */
    protected $status;
    /**
     *
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     *
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }
}
