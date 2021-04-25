<?php

namespace DigiComp\OpenproviderApi\Model;

class ProductListProductsRequestOrderBy
{
    /**
     *
     *
     * @var string|null
     */
    protected $brandName;
    /**
     *
     *
     * @var string|null
     */
    protected $brandSeqno;
    /**
     *
     *
     * @var string|null
     */
    protected $category;
    /**
     *
     *
     * @var string|null
     */
    protected $name;
    /**
     *
     *
     * @var string|null
     */
    protected $productSeqno;
    /**
     *
     *
     * @var string|null
     */
    protected $subCategory;
    /**
     *
     *
     * @return string|null
     */
    public function getBrandName(): ?string
    {
        return $this->brandName;
    }
    /**
     *
     *
     * @param string|null $brandName
     *
     * @return self
     */
    public function setBrandName(?string $brandName): self
    {
        $this->brandName = $brandName;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getBrandSeqno(): ?string
    {
        return $this->brandSeqno;
    }
    /**
     *
     *
     * @param string|null $brandSeqno
     *
     * @return self
     */
    public function setBrandSeqno(?string $brandSeqno): self
    {
        $this->brandSeqno = $brandSeqno;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }
    /**
     *
     *
     * @param string|null $category
     *
     * @return self
     */
    public function setCategory(?string $category): self
    {
        $this->category = $category;
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
     * @return string|null
     */
    public function getProductSeqno(): ?string
    {
        return $this->productSeqno;
    }
    /**
     *
     *
     * @param string|null $productSeqno
     *
     * @return self
     */
    public function setProductSeqno(?string $productSeqno): self
    {
        $this->productSeqno = $productSeqno;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getSubCategory(): ?string
    {
        return $this->subCategory;
    }
    /**
     *
     *
     * @param string|null $subCategory
     *
     * @return self
     */
    public function setSubCategory(?string $subCategory): self
    {
        $this->subCategory = $subCategory;
        return $this;
    }
}
