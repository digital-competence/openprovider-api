<?php

namespace DigiComp\OpenproviderApi\Model;

class DomainDnssecKey
{
    /**
     *
     *
     * @var int|null
     */
    protected $alg;
    /**
     *
     *
     * @var int|null
     */
    protected $flags;
    /**
     *
     *
     * @var int|null
     */
    protected $protocol;
    /**
     *
     *
     * @var string|null
     */
    protected $pubKey;
    /**
     *
     *
     * @var int|null
     */
    protected $readonly;
    /**
     *
     *
     * @return int|null
     */
    public function getAlg(): ?int
    {
        return $this->alg;
    }
    /**
     *
     *
     * @param int|null $alg
     *
     * @return self
     */
    public function setAlg(?int $alg): self
    {
        $this->alg = $alg;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getFlags(): ?int
    {
        return $this->flags;
    }
    /**
     *
     *
     * @param int|null $flags
     *
     * @return self
     */
    public function setFlags(?int $flags): self
    {
        $this->flags = $flags;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getProtocol(): ?int
    {
        return $this->protocol;
    }
    /**
     *
     *
     * @param int|null $protocol
     *
     * @return self
     */
    public function setProtocol(?int $protocol): self
    {
        $this->protocol = $protocol;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getPubKey(): ?string
    {
        return $this->pubKey;
    }
    /**
     *
     *
     * @param string|null $pubKey
     *
     * @return self
     */
    public function setPubKey(?string $pubKey): self
    {
        $this->pubKey = $pubKey;
        return $this;
    }
    /**
     *
     *
     * @return int|null
     */
    public function getReadonly(): ?int
    {
        return $this->readonly;
    }
    /**
     *
     *
     * @param int|null $readonly
     *
     * @return self
     */
    public function setReadonly(?int $readonly): self
    {
        $this->readonly = $readonly;
        return $this;
    }
}
