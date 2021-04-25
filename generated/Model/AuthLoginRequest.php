<?php

namespace DigiComp\OpenproviderApi\Model;

class AuthLoginRequest
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
    protected $password;
    /**
     *
     *
     * @var string|null
     */
    protected $username;
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
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     *
     *
     * @param string|null $password
     *
     * @return self
     */
    public function setPassword(?string $password): self
    {
        $this->password = $password;
        return $this;
    }
    /**
     *
     *
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }
    /**
     *
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setUsername(?string $username): self
    {
        $this->username = $username;
        return $this;
    }
}
