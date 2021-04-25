<?php

namespace DigiComp\OpenproviderApi\Model;

class StatisticsCurrencyStatistics
{
    /**
     *
     *
     * @var string|null
     */
    protected $modified;
    /**
     *
     *
     * @return string|null
     */
    public function getModified(): ?string
    {
        return $this->modified;
    }
    /**
     *
     *
     * @param string|null $modified
     *
     * @return self
     */
    public function setModified(?string $modified): self
    {
        $this->modified = $modified;
        return $this;
    }
}
