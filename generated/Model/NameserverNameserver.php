<?php

namespace DigiComp\OpenproviderApi\Model;

class NameserverNameserver
{
    /**
     *
     *
     * @var string|null
     */
    protected $ip;
    /**
     *
     *
     * @var string|null
     */
    protected $ip6;
    /**
     *
     *
     * @var string|null
     */
    protected $name;
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
     * @return string|null
     */
    public function getIp6(): ?string
    {
        return $this->ip6;
    }
    /**
     *
     *
     * @param string|null $ip6
     *
     * @return self
     */
    public function setIp6(?string $ip6): self
    {
        $this->ip6 = $ip6;
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
}
