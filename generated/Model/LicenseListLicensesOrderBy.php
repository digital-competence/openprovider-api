<?php

namespace DigiComp\OpenproviderApi\Model;

class LicenseListLicensesOrderBy
{
    /**
     *
     *
     * @var string|null
     */
    protected $expirationDate;
    /**
     *
     *
     * @var string|null
     */
    protected $id;
    /**
     *
     *
     * @var string|null
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
    protected $product;
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
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     *
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getKeyId(): ?string
    {
        return $this->keyId;
    }
    /**
     *
     *
     * @param string|null $keyId
     *
     * @return self
     */
    public function setKeyId(?string $keyId): self
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
