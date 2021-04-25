<?php

namespace DigiComp\OpenproviderApi\Model;

class LicenseCreateLicenseResponseData
{
    /**
     *
     *
     * @var int[]|null
     */
    protected $attachedKeys;
    /**
     *
     *
     * @var int|null
     */
    protected $keyId;
    /**
     *
     *
     * @return int[]|null
     */
    public function getAttachedKeys(): ?array
    {
        return $this->attachedKeys;
    }
    /**
     *
     *
     * @param int[]|null $attachedKeys
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
}
