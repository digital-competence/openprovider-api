<?php

namespace DigiComp\OpenproviderApi\Model;

class ZoneZone
{
    /**
     *
     *
     * @var bool|null
     */
    protected $active;
    /**
     *
     *
     * @var string|null
     */
    protected $creationDate;
    /**
     *
     *
     * @var string|null
     */
    protected $dnskey;
    /**
     *
     *
     * @var HistoryZoneHistory[]|null
     */
    protected $history;
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
    protected $ip;
    /**
     *
     *
     * @var bool|null
     */
    protected $isDeleted;
    /**
     *
     *
     * @var bool|null
     */
    protected $isShadow;
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
    protected $modificationDate;
    /**
     *
     *
     * @var string|null
     */
    protected $name;
    /**
     *
     *
     * @var RecordRecordInfo[]|null
     */
    protected $records;
    /**
     *
     *
     * @var int|null
     */
    protected $resellerId;
    /**
     *
     *
     * @var string|null
     */
    protected $type;
    /**
     *
     *
     * @return bool|null
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }
    /**
     *
     *
     * @param bool|null $active
     *
     * @return self
     */
    public function setActive(?bool $active): self
    {
        $this->active = $active;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     *
     *
     * @param string|null $creationDate
     *
     * @return self
     */
    public function setCreationDate(?string $creationDate): self
    {
        $this->creationDate = $creationDate;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getDnskey(): ?string
    {
        return $this->dnskey;
    }
    /**
     *
     *
     * @param string|null $dnskey
     *
     * @return self
     */
    public function setDnskey(?string $dnskey): self
    {
        $this->dnskey = $dnskey;
        return $this;
    }
    /**
     *
     *
     * @return HistoryZoneHistory[]|null
     */
    public function getHistory(): ?array
    {
        return $this->history;
    }
    /**
     *
     *
     * @param HistoryZoneHistory[]|null $history
     *
     * @return self
     */
    public function setHistory(?array $history): self
    {
        $this->history = $history;
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
     * @return string|null
     */
    public function getIp(): ?string
    {
        return $this->ip;
    }
    /**
     *
     *
     * @param string|null $ip
     *
     * @return self
     */
    public function setIp(?string $ip): self
    {
        $this->ip = $ip;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getIsDeleted(): ?bool
    {
        return $this->isDeleted;
    }
    /**
     *
     *
     * @param bool|null $isDeleted
     *
     * @return self
     */
    public function setIsDeleted(?bool $isDeleted): self
    {
        $this->isDeleted = $isDeleted;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getIsShadow(): ?bool
    {
        return $this->isShadow;
    }
    /**
     *
     *
     * @param bool|null $isShadow
     *
     * @return self
     */
    public function setIsShadow(?bool $isShadow): self
    {
        $this->isShadow = $isShadow;
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
    public function getModificationDate(): ?string
    {
        return $this->modificationDate;
    }
    /**
     *
     *
     * @param string|null $modificationDate
     *
     * @return self
     */
    public function setModificationDate(?string $modificationDate): self
    {
        $this->modificationDate = $modificationDate;
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
     * @return RecordRecordInfo[]|null
     */
    public function getRecords(): ?array
    {
        return $this->records;
    }
    /**
     *
     *
     * @param RecordRecordInfo[]|null $records
     *
     * @return self
     */
    public function setRecords(?array $records): self
    {
        $this->records = $records;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getResellerId(): ?int
    {
        return $this->resellerId;
    }
    /**
     *
     *
     * @param int|null $resellerId
     *
     * @return self
     */
    public function setResellerId(?int $resellerId): self
    {
        $this->resellerId = $resellerId;
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
