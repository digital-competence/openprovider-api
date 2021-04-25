<?php

namespace DigiComp\OpenproviderApi\Model;

class DomainOperationPrice
{
    /**
     *
     *
     * @var float|null
     */
    protected $create;
    /**
     *
     *
     * @return float|null
     */
    public function getCreate(): ?float
    {
        return $this->create;
    }
    /**
     *
     *
     * @param float|null $create
     *
     * @return self
     */
    public function setCreate(?float $create): self
    {
        $this->create = $create;
        return $this;
    }
}
