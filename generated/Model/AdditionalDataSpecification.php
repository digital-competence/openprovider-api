<?php

namespace DigiComp\OpenproviderApi\Model;

class AdditionalDataSpecification
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
    protected $name;
    /**
     *
     *
     * @var AdditionalDataSelectOption[]|null
     */
    protected $options;
    /**
     *
     *
     * @var bool|null
     */
    protected $required;
    /**
     *
     *
     * @var string|null
     */
    protected $type;
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
     * @return AdditionalDataSelectOption[]|null
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }
    /**
     *
     *
     * @param AdditionalDataSelectOption[]|null $options
     *
     * @return self
     */
    public function setOptions(?array $options): self
    {
        $this->options = $options;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getRequired(): ?bool
    {
        return $this->required;
    }
    /**
     *
     *
     * @param bool|null $required
     *
     * @return self
     */
    public function setRequired(?bool $required): self
    {
        $this->required = $required;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     *
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }
}
