<?php

namespace DigiComp\OpenproviderApi\Model;

class LicenseLicenseKey
{
    /**
     *
     *
     * @var string|null
     */
    protected $key;
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
