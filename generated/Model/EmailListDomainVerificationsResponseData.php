<?php

namespace DigiComp\OpenproviderApi\Model;

class EmailListDomainVerificationsResponseData
{
    /**
     *
     *
     * @var EmailDomainEmailVerification[]|null
     */
    protected $results;
    /**
     *
     *
     * @var int|null
     */
    protected $total;
    /**
     *
     *
     * @return EmailDomainEmailVerification[]|null
     */
    public function getResults(): ?array
    {
        return $this->results;
    }
    /**
     *
     *
     * @param EmailDomainEmailVerification[]|null $results
     *
     * @return self
     */
    public function setResults(?array $results): self
    {
        $this->results = $results;
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
