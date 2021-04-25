<?php

namespace DigiComp\OpenproviderApi\Model;

class LicenseResetHwidRequest
{
    /**
     *
     *
     * @var int|null
     */
    protected $keyId;
    /**
     *
     *
     * @var string|null
     */
    protected $product;
    /**
     *
     *
     * @return int|null
     */
    public function getKeyId(): ?int
    {
        return $this->keyId;
    }
    /**
     *
     *
     * @param int|null $keyId
     *
     * @return self
     */
    public function setKeyId(?int $keyId): self
    {
        $this->keyId = $keyId;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getProduct(): ?string
    {
        return $this->product;
    }
    /**
     *
     *
     * @param string|null $product
     *
     * @return self
     */
    public function setProduct(?string $product): self
    {
        $this->product = $product;
        return $this;
    }
}
