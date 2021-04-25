<?php

namespace DigiComp\OpenproviderApi\Model;

class TemplateRecord
{
    /**
     *
     *
     * @var int|null
     */
    protected $id;
    /**
     *
     *
     * @var string|null
     */
    protected $name;
    /**
     *
     *
     * @var int|null
     */
    protected $prio;
    /**
     *
     *
     * @var int|null
     */
    protected $ttl;
    /**
     *
     *
     * @var string|null
     */
    protected $type;
    /**
     *
     *
     * @var string|null
     */
    protected $value;
    /**
     *
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     *
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
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
     * @return int|null
     */
    public function getPrio(): ?int
    {
        return $this->prio;
    }
    /**
     *
     *
     * @param int|null $prio
     *
     * @return self
     */
    public function setPrio(?int $prio): self
    {
        $this->prio = $prio;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getTtl(): ?int
    {
        return $this->ttl;
    }
    /**
     *
     *
     * @param int|null $ttl
     *
     * @return self
     */
    public function setTtl(?int $ttl): self
    {
        $this->ttl = $ttl;
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
