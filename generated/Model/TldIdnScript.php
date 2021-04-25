<?php

namespace DigiComp\OpenproviderApi\Model;

class TldIdnScript
{
    /**
     *
     *
     * @var string|null
     */
    protected $description;
    /**
     *
     *
     * @var string|null
     */
    protected $value;
    /**
     *
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     *
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }
    /**
     *
     *
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }
}
