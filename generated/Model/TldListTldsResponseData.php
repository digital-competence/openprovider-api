<?php

namespace DigiComp\OpenproviderApi\Model;

class TldListTldsResponseData
{
    /**
     *
     *
     * @var TldTld[]|null
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
     * @return TldTld[]|null
     */
    public function getResults(): ?array
    {
        return $this->results;
    }
    /**
     *
     *
     * @param TldTld[]|null $results
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
