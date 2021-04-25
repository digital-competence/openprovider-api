<?php

namespace DigiComp\OpenproviderApi\Model;

class DomainTokenCreateTokenResponseData
{
    /**
     *
     *
     * @var string|null
     */
    protected $token;
    /**
     *
     *
     * @var string|null
     */
    protected $url;
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
    /**
     *
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }
    /**
     *
     *
     * @param string|null $url
     *
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }
}
