<?php

namespace DigiComp\OpenproviderApi\Model;

class DomainUpdateDomainResponseData
{
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
    protected $status;
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
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     *
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }
}
