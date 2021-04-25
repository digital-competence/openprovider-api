<?php

namespace DigiComp\OpenproviderApi\Model;

class OrderSslOrderOptions
{
    /**
     *
     *
     * @var string|null
     */
    protected $features;
    /**
     *
     *
     * @return string|null
     */
    public function getFeatures(): ?string
    {
        return $this->features;
    }
    /**
     *
     *
     * @param string|null $features
     *
     * @return self
     */
    public function setFeatures(?string $features): self
    {
        $this->features = $features;
        return $this;
    }
}
