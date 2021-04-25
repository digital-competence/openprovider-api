<?php

namespace DigiComp\OpenproviderApi\Model;

class LicenseExtendedLicense
{
    /**
     *
     *
     * @var string|null
     */
    protected $activationCode;
    /**
     *
     *
     * @var string|null
     */
    protected $billingType;
    /**
     *
     *
     * @var string|null
     */
    protected $comment;
    /**
     *
     *
     * @var string|null
     */
    protected $contract;
    /**
     *
     *
     * @var string|null
     */
    protected $expirationDate;
    /**
     *
     *
     * @var LicenseExtendedLicense[]|null
     */
    protected $extensions;
    /**
     *
     *
     * @var LicenseLicenseItem[]|null
     */
    protected $features;
    /**
     *
     *
     * @var string|null
     */
    protected $ipAddressBinding;
    /**
     *
     *
     * @var string[]|null
     */
    protected $items;
    /**
     *
     *
     * @var LicenseKey|null
     */
    protected $key;
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
    protected $keyNumber;
    /**
     *
     *
     * @var string|null
     */
    protected $orderDate;
    /**
     *
     *
     * @var int|null
     */
    protected $parentKeyId;
    /**
     *
     *
     * @var int|null
     */
    protected $period;
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
    protected $status;
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
    public function getActivationCode(): ?string
    {
        return $this->activationCode;
    }
    /**
     *
     *
     * @param string|null $activationCode
     *
     * @return self
     */
    public function setActivationCode(?string $activationCode): self
    {
        $this->activationCode = $activationCode;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getBillingType(): ?string
    {
        return $this->billingType;
    }
    /**
     *
     *
     * @param string|null $billingType
     *
     * @return self
     */
    public function setBillingType(?string $billingType): self
    {
        $this->billingType = $billingType;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }
    /**
     *
     *
     * @param string|null $comment
     *
     * @return self
     */
    public function setComment(?string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getContract(): ?string
    {
        return $this->contract;
    }
    /**
     *
     *
     * @param string|null $contract
     *
     * @return self
     */
    public function setContract(?string $contract): self
    {
        $this->contract = $contract;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getExpirationDate(): ?string
    {
        return $this->expirationDate;
    }
    /**
     *
     *
     * @param string|null $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(?string $expirationDate): self
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }
    /**
     *
     *
     * @return LicenseExtendedLicense[]|null
     */
    public function getExtensions(): ?array
    {
        return $this->extensions;
    }
    /**
     *
     *
     * @param LicenseExtendedLicense[]|null $extensions
     *
     * @return self
     */
    public function setExtensions(?array $extensions): self
    {
        $this->extensions = $extensions;
        return $this;
    }
    /**
     *
     *
     * @return LicenseLicenseItem[]|null
     */
    public function getFeatures(): ?array
    {
        return $this->features;
    }
    /**
     *
     *
     * @param LicenseLicenseItem[]|null $features
     *
     * @return self
     */
    public function setFeatures(?array $features): self
    {
        $this->features = $features;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getIpAddressBinding(): ?string
    {
        return $this->ipAddressBinding;
    }
    /**
     *
     *
     * @param string|null $ipAddressBinding
     *
     * @return self
     */
    public function setIpAddressBinding(?string $ipAddressBinding): self
    {
        $this->ipAddressBinding = $ipAddressBinding;
        return $this;
    }
    /**
     *
     *
     * @return string[]|null
     */
    public function getItems(): ?array
    {
        return $this->items;
    }
    /**
     *
     *
     * @param string[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items): self
    {
        $this->items = $items;
        return $this;
    }
    /**
     *
     *
     * @return LicenseKey|null
     */
    public function getKey(): ?LicenseKey
    {
        return $this->key;
    }
    /**
     *
     *
     * @param LicenseKey|null $key
     *
     * @return self
     */
    public function setKey(?LicenseKey $key): self
    {
        $this->key = $key;
        return $this;
    }
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
    public function getKeyNumber(): ?string
    {
        return $this->keyNumber;
    }
    /**
     *
     *
     * @param string|null $keyNumber
     *
     * @return self
     */
    public function setKeyNumber(?string $keyNumber): self
    {
        $this->keyNumber = $keyNumber;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getOrderDate(): ?string
    {
        return $this->orderDate;
    }
    /**
     *
     *
     * @param string|null $orderDate
     *
     * @return self
     */
    public function setOrderDate(?string $orderDate): self
    {
        $this->orderDate = $orderDate;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getParentKeyId(): ?int
    {
        return $this->parentKeyId;
    }
    /**
     *
     *
     * @param int|null $parentKeyId
     *
     * @return self
     */
    public function setParentKeyId(?int $parentKeyId): self
    {
        $this->parentKeyId = $parentKeyId;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getPeriod(): ?int
    {
        return $this->period;
    }
    /**
     *
     *
     * @param int|null $period
     *
     * @return self
     */
    public function setPeriod(?int $period): self
    {
        $this->period = $period;
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
