<?php

namespace DigiComp\OpenproviderApi\Model;

class CustomerExtensionAdditionalData
{
    /**
     *
     *
     * @var CustomerExtensionData|null
     */
    protected $data;
    /**
     *
     *
     * @var string|null
     */
    protected $name;
    /**
     *
     *
     * @return CustomerExtensionData|null
     */
    public function getData(): ?CustomerExtensionData
    {
        return $this->data;
    }
    /**
     *
     *
     * @param CustomerExtensionData|null $data
     *
     * @return self
     */
    public function setData(?CustomerExtensionData $data): self
    {
        $this->data = $data;
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
}
