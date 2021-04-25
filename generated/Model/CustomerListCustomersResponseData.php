<?php

namespace DigiComp\OpenproviderApi\Model;

class CustomerListCustomersResponseData
{
    /**
     *
     *
     * @var CustomerListCustomersResponseDataResults[]|null
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
     * @return CustomerListCustomersResponseDataResults[]|null
     */
    public function getResults(): ?array
    {
        return $this->results;
    }
    /**
     *
     *
     * @param CustomerListCustomersResponseDataResults[]|null $results
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
