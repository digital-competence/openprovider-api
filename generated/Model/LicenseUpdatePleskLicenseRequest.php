<?php

namespace DigiComp\OpenproviderApi\Model;

class LicenseUpdatePleskLicenseRequest
{
    /**
     *
     *
     * @var string[]|null
     */
    protected $attachedKeys;
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
     * @var int|null
     */
    protected $keyId;
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
     * @var bool|null
     */
    protected $restrictIpBinding;
    /**
     *
     *
     * @var bool|null
     */
    protected $suspended;
    /**
     *
     *
     * @var string|null
     */
    protected $title;
    /**
     *
     *
     * @return string[]|null
     */
    public function getAttachedKeys(): ?array
    {
        return $this->attachedKeys;
    }
    /**
     *
     *
     * @param string[]|null $attachedKeys
     *
     * @return self
     */
    public function setAttachedKeys(?array $attachedKeys): self
    {
        $this->attachedKeys = $attachedKeys;
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
     * @return bool|null
     */
    public function getRestrictIpBinding(): ?bool
    {
        return $this->restrictIpBinding;
    }
    /**
     *
     *
     * @param bool|null $restrictIpBinding
     *
     * @return self
     */
    public function setRestrictIpBinding(?bool $restrictIpBinding): self
    {
        $this->restrictIpBinding = $restrictIpBinding;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getSuspended(): ?bool
    {
        return $this->suspended;
    }
    /**
     *
     *
     * @param bool|null $suspended
     *
     * @return self
     */
    public function setSuspended(?bool $suspended): self
    {
        $this->suspended = $suspended;
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
