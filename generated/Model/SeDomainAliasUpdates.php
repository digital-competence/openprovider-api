<?php

namespace DigiComp\OpenproviderApi\Model;

class SeDomainAliasUpdates
{
    /**
     *
     *
     * @var string[]|null
     */
    protected $add;
    /**
     *
     *
     * @var string[]|null
     */
    protected $remove;
    /**
     *
     *
     * @return string[]|null
     */
    public function getAdd(): ?array
    {
        return $this->add;
    }
    /**
     *
     *
     * @param string[]|null $add
     *
     * @return self
     */
    public function setAdd(?array $add): self
    {
        $this->add = $add;
        return $this;
    }
    /**
     *
     *
     * @return string[]|null
     */
    public function getRemove(): ?array
    {
        return $this->remove;
    }
    /**
     *
     *
     * @param string[]|null $remove
     *
     * @return self
     */
    public function setRemove(?array $remove): self
    {
        $this->remove = $remove;
        return $this;
    }
}
