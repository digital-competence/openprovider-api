<?php

namespace DigiComp\OpenproviderApi\Model;

class TldPromoDetails
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
     * @var TldPrice|null
     */
    protected $nonPromoPrice;
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
     * @return TldPrice|null
     */
    public function getNonPromoPrice(): ?TldPrice
    {
        return $this->nonPromoPrice;
    }
    /**
     *
     *
     * @param TldPrice|null $nonPromoPrice
     *
     * @return self
     */
    public function setNonPromoPrice(?TldPrice $nonPromoPrice): self
    {
        $this->nonPromoPrice = $nonPromoPrice;
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
