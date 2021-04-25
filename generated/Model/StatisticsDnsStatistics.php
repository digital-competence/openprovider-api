<?php

namespace DigiComp\OpenproviderApi\Model;

class StatisticsDnsStatistics
{
    /**
     *
     *
     * @var int|null
     */
    protected $total;
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
