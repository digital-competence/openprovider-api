<?php

namespace DigiComp\OpenproviderApi\Model;

class ZoneUpdateZoneRequest
{
    /**
     *
     *
     * @var ZoneDomain|null
     */
    protected $domain;
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
    protected $masterIp;
    /**
     *
     *
     * @var string|null
     */
    protected $name;
    /**
     *
     *
     * @var ZoneRecordUpdates|null
     */
    protected $records;
    /**
     *
     *
     * @var string|null
     */
    protected $type;
    /**
     *
     *
     * @return ZoneDomain|null
     */
    public function getDomain(): ?ZoneDomain
    {
        return $this->domain;
    }
    /**
     *
     *
     * @param ZoneDomain|null $domain
     *
     * @return self
     */
    public function setDomain(?ZoneDomain $domain): self
    {
        $this->domain = $domain;
        return $this;
    }
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
    public function getMasterIp(): ?string
    {
        return $this->masterIp;
    }
    /**
     *
     *
     * @param string|null $masterIp
     *
     * @return self
     */
    public function setMasterIp(?string $masterIp): self
    {
        $this->masterIp = $masterIp;
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
     * @return ZoneRecordUpdates|null
     */
    public function getRecords(): ?ZoneRecordUpdates
    {
        return $this->records;
    }
    /**
     *
     *
     * @param ZoneRecordUpdates|null $records
     *
     * @return self
     */
    public function setRecords(?ZoneRecordUpdates $records): self
    {
        $this->records = $records;
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
