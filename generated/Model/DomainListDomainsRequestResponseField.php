<?php

namespace DigiComp\OpenproviderApi\Model;

class DomainListDomainsRequestResponseField
{
    /**
     *
     *
     * @var string|null
     */
    protected $to;
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
    public function getTo(): ?string
    {
        return $this->to;
    }
    /**
     *
     *
     * @param string|null $to
     *
     * @return self
     */
    public function setTo(?string $to): self
    {
        $this->to = $to;
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
