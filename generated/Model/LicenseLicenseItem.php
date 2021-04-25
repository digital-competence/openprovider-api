<?php

namespace DigiComp\OpenproviderApi\Model;

class LicenseLicenseItem
{
    /**
     *
     *
     * @var string|null
     */
    protected $item;
    /**
     *
     *
     * @var string|null
     */
    protected $product;
    /**
     *
     *
     * @var bool[]|null
     */
    protected $skuValues;
    /**
     *
     *
     * @var string|null
     */
    protected $title;
    /**
     *
     *
     * @return string|null
     */
    public function getItem(): ?string
    {
        return $this->item;
    }
    /**
     *
     *
     * @param string|null $item
     *
     * @return self
     */
    public function setItem(?string $item): self
    {
        $this->item = $item;
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
    /**
     *
     *
     * @return bool[]|null
     */
    public function getSkuValues(): ?iterable
    {
        return $this->skuValues;
    }
    /**
     *
     *
     * @param bool[]|null $skuValues
     *
     * @return self
     */
    public function setSkuValues(?iterable $skuValues): self
    {
        $this->skuValues = $skuValues;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     *
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }
}
