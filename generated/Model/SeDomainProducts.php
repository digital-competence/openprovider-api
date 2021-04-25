<?php

namespace DigiComp\OpenproviderApi\Model;

class SeDomainProducts
{
    /**
     *
     *
     * @var bool|null
     */
    protected $archiving;
    /**
     *
     *
     * @var bool|null
     */
    protected $incoming;
    /**
     *
     *
     * @var bool|null
     */
    protected $outgoing;
    /**
     *
     *
     * @return bool|null
     */
    public function getArchiving(): ?bool
    {
        return $this->archiving;
    }
    /**
     *
     *
     * @param bool|null $archiving
     *
     * @return self
     */
    public function setArchiving(?bool $archiving): self
    {
        $this->archiving = $archiving;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getIncoming(): ?bool
    {
        return $this->incoming;
    }
    /**
     *
     *
     * @param bool|null $incoming
     *
     * @return self
     */
    public function setIncoming(?bool $incoming): self
    {
        $this->incoming = $incoming;
        return $this;
    }
    /**
     *
     *
     * @return bool|null
     */
    public function getOutgoing(): ?bool
    {
        return $this->outgoing;
    }
    /**
     *
     *
     * @param bool|null $outgoing
     *
     * @return self
     */
    public function setOutgoing(?bool $outgoing): self
    {
        $this->outgoing = $outgoing;
        return $this;
    }
}
