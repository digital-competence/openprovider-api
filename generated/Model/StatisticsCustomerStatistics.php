<?php

namespace DigiComp\OpenproviderApi\Model;

class StatisticsCustomerStatistics
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
     * @var int|null
     */
    protected $total;
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
    /**
     *
     *
     * @return int|null
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }
    /**
     *
     *
     * @param int|null $total
     *
     * @return self
     */
    public function setTotal(?int $total): self
    {
        $this->total = $total;
        return $this;
    }
}
