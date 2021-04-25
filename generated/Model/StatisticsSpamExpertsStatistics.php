<?php

namespace DigiComp\OpenproviderApi\Model;

class StatisticsSpamExpertsStatistics
{
    /**
     *
     *
     * @var string|null
     */
    protected $activatedAt;
    /**
     *
     *
     * @var string|null
     */
    protected $createdAt;
    /**
     *
     *
     * @var bool|null
     */
    protected $exists;
    /**
     *
     *
     * @var string|null
     */
    protected $expiredAt;
    /**
     *
     *
     * @var int|null
     */
    protected $incomingCount;
    /**
     *
     *
     * @var int|null
     */
    protected $incomingLimit;
    /**
     *
     *
     * @var int|null
     */
    protected $outgoingCount;
    /**
     *
     *
     * @var int|null
     */
    protected $outgoingLimit;
    /**
     *
     *
     * @var string|null
     */
    protected $status;
    /**
     *
     *
     * @var bool|null
     */
    protected $withOutgoingFilter;
    /**
     *
     *
     * @return string|null
     */
    public function getActivatedAt(): ?string
    {
        return $this->activatedAt;
    }
    /**
     *
     *
     * @param string|null $activatedAt
     *
     * @return self
     */
    public function setActivatedAt(?string $activatedAt): self
    {
        $this->activatedAt = $activatedAt;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }
    /**
     *
     *
     * @param string|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?string $createdAt): self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getExists(): ?bool
    {
        return $this->exists;
    }
    /**
     *
     *
     * @param bool|null $exists
     *
     * @return self
     */
    public function setExists(?bool $exists): self
    {
        $this->exists = $exists;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getExpiredAt(): ?string
    {
        return $this->expiredAt;
    }
    /**
     *
     *
     * @param string|null $expiredAt
     *
     * @return self
     */
    public function setExpiredAt(?string $expiredAt): self
    {
        $this->expiredAt = $expiredAt;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getIncomingCount(): ?int
    {
        return $this->incomingCount;
    }
    /**
     *
     *
     * @param int|null $incomingCount
     *
     * @return self
     */
    public function setIncomingCount(?int $incomingCount): self
    {
        $this->incomingCount = $incomingCount;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getIncomingLimit(): ?int
    {
        return $this->incomingLimit;
    }
    /**
     *
     *
     * @param int|null $incomingLimit
     *
     * @return self
     */
    public function setIncomingLimit(?int $incomingLimit): self
    {
        $this->incomingLimit = $incomingLimit;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getOutgoingCount(): ?int
    {
        return $this->outgoingCount;
    }
    /**
     *
     *
     * @param int|null $outgoingCount
     *
     * @return self
     */
    public function setOutgoingCount(?int $outgoingCount): self
    {
        $this->outgoingCount = $outgoingCount;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getOutgoingLimit(): ?int
    {
        return $this->outgoingLimit;
    }
    /**
     *
     *
     * @param int|null $outgoingLimit
     *
     * @return self
     */
    public function setOutgoingLimit(?int $outgoingLimit): self
    {
        $this->outgoingLimit = $outgoingLimit;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     *
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getWithOutgoingFilter(): ?bool
    {
        return $this->withOutgoingFilter;
    }
    /**
     *
     *
     * @param bool|null $withOutgoingFilter
     *
     * @return self
     */
    public function setWithOutgoingFilter(?bool $withOutgoingFilter): self
    {
        $this->withOutgoingFilter = $withOutgoingFilter;
        return $this;
    }
}
