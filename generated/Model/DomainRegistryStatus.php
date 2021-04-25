<?php

namespace DigiComp\OpenproviderApi\Model;

class DomainRegistryStatus
{
    /**
     *
     *
     * @var bool|null
     */
    protected $isChangeable;
    /**
     *
     *
     * @var int|null
     */
    protected $value;
    /**
     *
     *
     * @return bool|null
     */
    public function getIsChangeable(): ?bool
    {
        return $this->isChangeable;
    }
    /**
     *
     *
     * @param bool|null $isChangeable
     *
     * @return self
     */
    public function setIsChangeable(?bool $isChangeable): self
    {
        $this->isChangeable = $isChangeable;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getValue(): ?int
    {
        return $this->value;
    }
    /**
     *
     *
     * @param int|null $value
     *
     * @return self
     */
    public function setValue(?int $value): self
    {
        $this->value = $value;
        return $this;
    }
}
