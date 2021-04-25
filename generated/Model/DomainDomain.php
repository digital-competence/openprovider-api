<?php

namespace DigiComp\OpenproviderApi\Model;

class DomainDomain
{
    /**
     *
     *
     * @var string|null
     */
    protected $extension;
    /**
     *
     *
     * @var string|null
     */
    protected $name;
    /**
     *
     *
     * @return string|null
     */
    public function getExtension(): ?string
    {
        return $this->extension;
    }
    /**
     *
     *
     * @param string|null $extension
     *
     * @return self
     */
    public function setExtension(?string $extension): self
    {
        $this->extension = $extension;
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
