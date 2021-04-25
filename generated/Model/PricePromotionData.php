<?php

namespace DigiComp\OpenproviderApi\Model;

class PricePromotionData
{
    /**
     *
     *
     * @var string|null
     */
    protected $endDate;
    /**
     *
     *
     * @var string|null
     */
    protected $startDate;
    /**
     *
     *
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     *
     *
     * @param string|null $endDate
     *
     * @return self
     */
    public function setEndDate(?string $endDate): self
    {
        $this->endDate = $endDate;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }
    /**
     *
     *
     * @param string|null $startDate
     *
     * @return self
     */
    public function setStartDate(?string $startDate): self
    {
        $this->startDate = $startDate;
        return $this;
    }
}
