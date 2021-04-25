<?php

namespace DigiComp\OpenproviderApi\Model;

class StatisticsSslStatistics
{
    /**
     *
     *
     * @var StatisticsSslStatisticsByStatus|null
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
     * @return StatisticsSslStatisticsByStatus|null
     */
    public function getByStatus(): ?StatisticsSslStatisticsByStatus
    {
        return $this->byStatus;
    }
    /**
     *
     *
     * @param StatisticsSslStatisticsByStatus|null $byStatus
     *
     * @return self
     */
    public function setByStatus(?StatisticsSslStatisticsByStatus $byStatus): self
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
