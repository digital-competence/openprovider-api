<?php

namespace DigiComp\OpenproviderApi\Model;

class NsGroupListGroupsOrderBy
{
    /**
     *
     *
     * @var string|null
     */
    protected $domainCount;
    /**
     *
     *
     * @var string|null
     */
    protected $nsCount;
    /**
     *
     *
     * @var string|null
     */
    protected $nsGroup = 'asc';
    /**
     *
     *
     * @return string|null
     */
    public function getDomainCount(): ?string
    {
        return $this->domainCount;
    }
    /**
     *
     *
     * @param string|null $domainCount
     *
     * @return self
     */
    public function setDomainCount(?string $domainCount): self
    {
        $this->domainCount = $domainCount;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getNsCount(): ?string
    {
        return $this->nsCount;
    }
    /**
     *
     *
     * @param string|null $nsCount
     *
     * @return self
     */
    public function setNsCount(?string $nsCount): self
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
