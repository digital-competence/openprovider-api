<?php

namespace DigiComp\OpenproviderApi\Model;

class ZoneCreateZoneRequest
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
     * @var string|null
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
     * @var ZoneRecord[]|null
     */
    protected $records;
    /**
     *
     *
     * @var bool|null
     */
    protected $secured;
    /**
     *
     *
     * @var string|null
     */
    protected $templateName;
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
     * @return string|null
     */
    public function getIsSpamexpertsEnabled(): ?string
    {
        return $this->isSpamexpertsEnabled;
    }
    /**
     *
     *
     * @param string|null $isSpamexpertsEnabled
     *
     * @return self
     */
    public function setIsSpamexpertsEnabled(?string $isSpamexpertsEnabled): self
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
     * @return ZoneRecord[]|null
     */
    public function getRecords(): ?array
    {
        return $this->records;
    }
    /**
     *
     *
     * @param ZoneRecord[]|null $records
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
     * @return bool|null
     */
    public function getSecured(): ?bool
    {
        return $this->secured;
    }
    /**
     *
     *
     * @param bool|null $secured
     *
     * @return self
     */
    public function setSecured(?bool $secured): self
    {
        $this->secured = $secured;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getTemplateName(): ?string
    {
        return $this->templateName;
    }
    /**
     *
     *
     * @param string|null $templateName
     *
     * @return self
     */
    public function setTemplateName(?string $templateName): self
    {
        $this->templateName = $templateName;
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
