<?php

namespace DigiComp\OpenproviderApi\Model;

class NsGroupGroup
{
    /**
     *
     *
     * @var int|null
     */
    protected $domainCount;
    /**
     *
     *
     * @var int|null
     */
    protected $id;
    /**
     *
     *
     * @var NsGroupNameServersSet[]|null
     */
    protected $nameServers;
    /**
     *
     *
     * @var int|null
     */
    protected $nsCount;
    /**
     *
     *
     * @var string|null
     */
    protected $nsGroup;
    /**
     *
     *
     * @return int|null
     */
    public function getDomainCount(): ?int
    {
        return $this->domainCount;
    }
    /**
     *
     *
     * @param int|null $domainCount
     *
     * @return self
     */
    public function setDomainCount(?int $domainCount): self
    {
        $this->domainCount = $domainCount;
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
     * @return NsGroupNameServersSet[]|null
     */
    public function getNameServers(): ?array
    {
        return $this->nameServers;
    }
    /**
     *
     *
     * @param NsGroupNameServersSet[]|null $nameServers
     *
     * @return self
     */
    public function setNameServers(?array $nameServers): self
    {
        $this->nameServers = $nameServers;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getNsCount(): ?int
    {
        return $this->nsCount;
    }
    /**
     *
     *
     * @param int|null $nsCount
     *
     * @return self
     */
    public function setNsCount(?int $nsCount): self
    {
        $this->nsCount = $nsCount;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getNsGroup(): ?string
    {
        return $this->nsGroup;
    }
    /**
     *
     *
     * @param string|null $nsGroup
     *
     * @return self
     */
    public function setNsGroup(?string $nsGroup): self
    {
        $this->nsGroup = $nsGroup;
        return $this;
    }
}
