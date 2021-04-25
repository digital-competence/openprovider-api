<?php

namespace DigiComp\OpenproviderApi\Model;

class SeDomainDestination
{
    /**
     *
     *
     * @var string|null
     */
    protected $hostname;
    /**
     *
     *
     * @var int|null
     */
    protected $port;
    /**
     *
     *
     * @return string|null
     */
    public function getHostname(): ?string
    {
        return $this->hostname;
    }
    /**
     *
     *
     * @param string|null $hostname
     *
     * @return self
     */
    public function setHostname(?string $hostname): self
    {
        $this->hostname = $hostname;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getPort(): ?int
    {
        return $this->port;
    }
    /**
     *
     *
     * @param int|null $port
     *
     * @return self
     */
    public function setPort(?int $port): self
    {
        $this->port = $port;
        return $this;
    }
}
