<?php

namespace DigiComp\OpenproviderApi\Model;

class TldLevelPrice
{
    /**
     *
     *
     * @var int|null
     */
    protected $level;
    /**
     *
     *
     * @var TldPrice|null
     */
    protected $price;
    /**
     *
     *
     * @return int|null
     */
    public function getLevel(): ?int
    {
        return $this->level;
    }
    /**
     *
     *
     * @param int|null $level
     *
     * @return self
     */
    public function setLevel(?int $level): self
    {
        $this->level = $level;
        return $this;
    }
    /**
     *
     *
     * @return TldPrice|null
     */
    public function getPrice(): ?TldPrice
    {
        return $this->price;
    }
    /**
     *
     *
     * @param TldPrice|null $price
     *
     * @return self
     */
    public function setPrice(?TldPrice $price): self
    {
        $this->price = $price;
        return $this;
    }
}
