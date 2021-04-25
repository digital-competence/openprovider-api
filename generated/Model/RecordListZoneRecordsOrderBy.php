<?php

namespace DigiComp\OpenproviderApi\Model;

class RecordListZoneRecordsOrderBy
{
    /**
     *
     *
     * @var string|null
     */
    protected $name = 'asc';
    /**
     *
     *
     * @var string|null
     */
    protected $prio;
    /**
     *
     *
     * @var string|null
     */
    protected $ttl;
    /**
     *
     *
     * @var string|null
     */
    protected $type = 'asc';
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
     * @return string|null
     */
    public function getPrio(): ?string
    {
        return $this->prio;
    }
    /**
     *
     *
     * @param string|null $prio
     *
     * @return self
     */
    public function setPrio(?string $prio): self
    {
        $this->prio = $prio;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getTtl(): ?string
    {
        return $this->ttl;
    }
    /**
     *
     *
     * @param string|null $ttl
     *
     * @return self
     */
    public function setTtl(?string $ttl): self
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
