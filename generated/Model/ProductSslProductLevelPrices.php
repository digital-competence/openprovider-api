<?php

namespace DigiComp\OpenproviderApi\Model;

class ProductSslProductLevelPrices
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
     * @var string|null
     */
    protected $name;
    /**
     *
     *
     * @var ProductSslProductPrices[]|null
     */
    protected $prices;
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
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     *
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     *
     *
     * @return ProductSslProductPrices[]|null
     */
    public function getPrices(): ?array
    {
        return $this->prices;
    }
    /**
     *
     *
     * @param ProductSslProductPrices[]|null $prices
     *
     * @return self
     */
    public function setPrices(?array $prices): self
    {
        $this->prices = $prices;
        return $this;
    }
}
