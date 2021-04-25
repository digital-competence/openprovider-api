<?php

namespace DigiComp\OpenproviderApi\Model;

class TemplateTemplate
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
     * @var bool|null
     */
    protected $isSpamexpertsEnabled;
    /**
     *
     *
     * @var string|null
     */
    protected $name;
    /**
     *
     *
     * @var TemplateRecord[]|null
     */
    protected $records;
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
     * @return bool|null
     */
    public function getIsSpamexpertsEnabled(): ?bool
    {
        return $this->isSpamexpertsEnabled;
    }
    /**
     *
     *
     * @param bool|null $isSpamexpertsEnabled
     *
     * @return self
     */
    public function setIsSpamexpertsEnabled(?bool $isSpamexpertsEnabled): self
    {
        $this->isSpamexpertsEnabled = $isSpamexpertsEnabled;
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
     * @return TemplateRecord[]|null
     */
    public function getRecords(): ?array
    {
        return $this->records;
    }
    /**
     *
     *
     * @param TemplateRecord[]|null $records
     *
     * @return self
     */
    public function setRecords(?array $records): self
    {
        $this->records = $records;
        return $this;
    }
}
