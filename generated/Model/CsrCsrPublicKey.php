<?php

namespace DigiComp\OpenproviderApi\Model;

class CsrCsrPublicKey
{
    /**
     *
     *
     * @var int|null
     */
    protected $bits;
    /**
     *
     *
     * @var string|null
     */
    protected $key;
    /**
     *
     *
     * @return int|null
     */
    public function getBits(): ?int
    {
        return $this->bits;
    }
    /**
     *
     *
     * @param int|null $bits
     *
     * @return self
     */
    public function setBits(?int $bits): self
    {
        $this->bits = $bits;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->key;
    }
    /**
     *
     *
     * @param string|null $key
     *
     * @return self
     */
    public function setKey(?string $key): self
    {
        $this->key = $key;
        return $this;
    }
}
