<?php

namespace DigiComp\OpenproviderApi\Model;

class StatisticsDomainStatistics
{
    /**
     *
     *
     * @var StatisticsDomainStatisticsByStatus|null
     */
    protected $byStatus;
    /**
     *
     *
     * @var int|null
     */
    protected $total;
    /**
     *
     *
     * @return StatisticsDomainStatisticsByStatus|null
     */
    public function getByStatus(): ?StatisticsDomainStatisticsByStatus
    {
        return $this->byStatus;
    }
    /**
     *
     *
     * @param StatisticsDomainStatisticsByStatus|null $byStatus
     *
     * @return self
     */
    public function setByStatus(?StatisticsDomainStatisticsByStatus $byStatus): self
    {
        $this->byStatus = $byStatus;
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
