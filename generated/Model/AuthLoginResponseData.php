<?php

namespace DigiComp\OpenproviderApi\Model;

class AuthLoginResponseData
{
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
    protected $token;
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
    public function getToken(): ?string
    {
        return $this->token;
    }
    /**
     *
     *
     * @param string|null $token
     *
     * @return self
     */
    public function setToken(?string $token): self
    {
        $this->token = $token;
        return $this;
    }
}
